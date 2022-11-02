<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private $result;

    private $cart;

    private $total;

    public function __construct()
    {
        $this->result = Categories::all();
        $this->cart = Session::get('cart');
    }

    public function index()
    {
        $productIds = request('prod_id');
        Session::push('cart', $productIds);

        return view('cart', [
            'categories' => $this->result,
            'total' => $this->total
            ]);
    }
}
