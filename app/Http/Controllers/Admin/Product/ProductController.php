<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->join("categories", "products.categories_id", "=", "categories.id")
            ->select(
                "products.id",
                "image",
                "code",
                "products.name as products_name",
                "price",
                "state",
                "categories.name as categories_name",
            )
            ->orderBy("products.id" , "DESC")
            ->get()
            ->all();        
        return view("backend/products/listproduct", ["products"=>$products]);
    }
    public function create()
    {
        return view("backend/products/addproduct");
    }
    public function store()
    {
        return view("backend/products/addtproduct");
    }
    public function edit()
    {
        return view("backend/products/editproduct");
    }
    public function update()
    {
        return view("backend/products/editproduct");
    }
    public function delete()
    {
        return "delete";
    }
}
