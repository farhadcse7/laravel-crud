<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public $products, $product, $fullName,$result;

    public function index()
    {
        $this->products = Product::getProduct();
        return view('home', ['products' => $this->products]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function password()
    {
        return view('password');
    }

    public function detail($id)
    {
        $this->product = Product::getProductById($id);
        return view('detail', ['product' => $this->product]);
    }

    public function makeFullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;
        return back()->with('result', $this->fullName);
    }
    public function calculator(Request $request)
    {
        if($request->chose == "+")
        {
            $this->result = $request->first_number + $request->last_number;
        }
        elseif($request->chose == "-")
        {
            $this->result = $request->first_number - $request->last_number;
        }
        elseif($request->chose == "*")
        {
            $this->result = $request->first_number * $request->last_number;
        }
        elseif($request->chose == "/")
        {
            $this->result = $request->first_number / $request->last_number;
        }
        return redirect("/contact")->with('message', $this->result);
    }

    public function passwordGenerator(Request $request)
    {
        $data=['!','@','A','$','a','b','%','m',1,3,6];
        $this->result = '';
        for ($this->i=1;$this->i <= $request->password_length;$this->i++)
        {
            $arrayMaxNumber = count($data)-1;
            $index = rand(0,$arrayMaxNumber);
            $passwordKey = $data[$index];
            $this->result .= $passwordKey;
        }
        return back()->with('message',$this->result);
    }
}
