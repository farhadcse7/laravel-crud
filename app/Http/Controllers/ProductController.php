<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product, $products, $image, $directory, $imageName, $imageUrl;

    public function index()
    {
        $this->products = Product::all();

        return view('product.index', ['products' => $this->products]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'upload/product-images/';
        $this->image->move($this->directory, $this->imageName);
        $this->imageUrl = $this->directory . $this->imageName;

        $this->product = new Product();
        $this->product->name = $request->name;
        $this->product->price = $request->price;
        $this->product->description = $request->description;
        $this->product->image = $this->imageUrl;
        $this->product->save();

        return back()->with('message', 'Data store successfully.');
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit', ['product' => $this->product]);
    }

    public function update(Request $request, $id)
    {
        $this->product = Product::find($id);
        if ($request->file('image')) {
            $this->image = $request->file('image');
            $this->imageName = $this->image->getClientOriginalName();
            $this->directory = 'upload/product-images/';
            $this->image->move($this->directory, $this->imageName);
            $this->imageUrl = $this->directory . $this->imageName;
        } else {
            $this->imageUrl = $this->product->image;
        }
        $this->product->name = $request->name;
        $this->product->price = $request->price;
        $this->product->description = $request->description;
        $this->product->image = $this->imageUrl;
        $this->product->save();

        return redirect('/product/all')->with('message', 'product info update successfully');
    }

    public function destroy($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/product/all')->with('message', 'product info delete successfully');
    }
}
