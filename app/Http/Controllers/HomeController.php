<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index(Request $request)
    {
        $search = $request->input('search');

        $banners = Banner::all();
        $categories = Category::all();
        if ($search) {
            $products = Product::where('name', 'like', "%{$search}%")->get();
        } else{
        $products = Product::with('images')->get();
        }
        return view('user.home',compact('products','categories','banners'));
    }


}
