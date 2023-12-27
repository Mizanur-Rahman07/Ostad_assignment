<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add_product');
    }

    public function saveProduct(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quentity = $request->product_quentity;
        $product->save();
        return redirect('/manage_product')->with('message', 'Product Add Successfully');
    }

    public function manageProduct()
    {
        return view('admin.product.manage_product', [
            'products' => Product::all()
        ]);
    }

    public function editProduct($id)
    {
        return view('admin.product.edit_product', [
            'product' => Product::find($id)
        ]);
    }

    public function updateProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quentity = $request->product_quentity;
        $product->save();
        return redirect('/manage_product')->with('message', 'Product Add Successfully');
    }

    public function deleteProduct(Request $request){
        $product = Product::find($request->id);
        $product->delete();
        return back()->with('message', 'Delete Success');
    }
}
