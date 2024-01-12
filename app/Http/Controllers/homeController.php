<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\Order;
use App\Models\subCategory;
use App\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class homeController extends Controller
{
    public function home()
    {
        return view('fontend.index');
    }
    public function product()
    {
        return view('fontend.product');
    }

    public function catWiseProduct(Request $request, $id)
    {
        $productWise = product::where('status', 1)
            ->where('category_id', $id)
            ->orderBy('id', 'DESC')
            ->get();
        return view('fontend.cateWise', compact('productWise'));
    }

    // public function singlePost($id)
    // {
    //     $product = product::findOrFail($id);
    //     return view('fontend.product', compact('product'));
    // }
    public function singlePost()
    {
        return view('fontend.single');
    }
}
