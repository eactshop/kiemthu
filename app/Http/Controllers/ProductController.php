<?php
use App\Models\Products;
namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {}
    public function index(){
        $products = Products::select('id', 'name', 'price', 'img', 'category', 'don_vi', 'kich_thuoc', 'mau_sac', 'ghichu')->get();
        return view('products', compact('products'));
    }
    public function getProduct($id){
        $product = Products::find($id);
        $other_product = Products::orderBy('id', 'desc')->take(6)->get();
        return view('full-product', compact('product', 'other_product'));
    }
    public function updateProduct(){}
}
