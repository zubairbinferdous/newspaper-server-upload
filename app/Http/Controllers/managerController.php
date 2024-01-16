<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\control;
use App\Models\footer;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Image;
use Toastr;

use Illuminate\Http\Request;

class managerController extends Controller
{
    public function homeLogo()
    {
        $home = control::latest()->get();
        $footer = footer::latest()->get();
        return view('admin.home.homeManager', compact('home', 'footer'));
    }

    public function header(Request  $request)
    {
        if ($img = $request->header_img) {
            $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)
                ->resize(300, 300)
                ->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            control::insert([
                'header_photo' => $save_url,
            ]);

            return redirect()->back();
        }
    }
    public function footer(Request  $request)
    {
        if ($img = $request->footer_img) {
            $name_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)
                ->resize(300, 300)
                ->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            footer::insert([
                'footer_photo' => $save_url,
            ]);

            return redirect()->back();
        } else {
            return 'error';
        }
    }
}
