<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        $balance = request('balance');
        return view('checkout', [
            'categories' => $this->result,
            'balance' => $balance
            ]);
    }
}
