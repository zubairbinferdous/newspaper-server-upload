<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Image;
use Toastr;

class brandController extends Controller
{
    // brand
    public function addBrand()
    {
        return view('admin.brand.add_brand');
    }

    public function allBrand()
    {
        $brands = Brand::latest()->get();
        return view('admin.brand.all_brand', compact('brands'));
    }

    public function storeBrand(Request $request)
    {
        if ($img = $request->file('brand_img')) {
            $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)
                ->resize(300, 300)
                ->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            Brand::insert([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
                'brand_img' => $save_url,
            ]);
            Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);

            return redirect()->route('all_brand');
        } else {
            Brand::insert([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            ]);
            Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);

            return redirect()->route('all_brand');
        }
        // $img = $request->file('brand_img');
        // $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        // Image::make($img)
        //     ->resize(300, 300)
        //     ->save('upload/brand/' . $name_gen);
        // $save_url = 'upload/brand/' . $name_gen;

        // Brand::insert([
        //     'brand_name' => $request->brand_name,
        //     'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
        //     'brand_img' => $save_url,
        // ]);

    }

    public function brandEdit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brand.editBrand', compact('brand'));
    }

    public function updateBrand(Request $request)
    {
        $brand_id = $request->id;
        $old_img = $request->brand_images;

        if ($request->file('brand_img')) {
            $img = $request->file('brand_img');
            $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)
                ->resize(300, 300)
                ->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
                'brand_img' => $save_url,
            ]);

            Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);

            return redirect()->route('all_brand');
        } else {
            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            ]);

            Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);

            return redirect()->route('all_brand');
        }
    }

    public function deleteBrand($id)
    {
        Brand::findOrFail($id)->delete();
        Toastr::info('Messages in here', 'Title', ['positionClass' => 'toast-top-right']);
        return redirect()->route('all_brand');
    }


    // add user 

    public function addUser()
    {
        return view('admin.user.add_user');
    }

    public function storeUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('addUser');
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('allUser');
    }

    public function allUser()
    {
        $user = User::latest()->where('username', 'editor')->get();
        return view('admin.user.all_user', compact('user'));
    }


    public function userData()
    {
        $id =  Auth::user()->id;
        $user = User::findOrFail($id);
        return view('admin.user.userProfile', compact('user'));
    }
    public function userDataInfo($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.updateUser', compact('user'));
    }

    public function updateDataInfo(Request $request)
    {
        $user_id = $request->id;
        if ($user_id) {
            User::findOrFail($user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return redirect()->route('userData');
        } else {
            return 'hello error';
        }
    }
    public function updateDataInfoPass(Request $request)
    {
        $user_id = $request->id;
        if ($user_id) {
            User::findOrFail($user_id)->update([
                'password' => $request->password,
            ]);
            return redirect()->route('userData');
        } else {
            return 'hello error';
        }
    }

    public function userPassword()
    {
        $id =  Auth::user()->id;
        $user = User::findOrFail($id);
        return view('admin.user.password', compact('user'));
    }
}
