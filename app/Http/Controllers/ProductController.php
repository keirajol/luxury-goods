<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private $result;
    private $products;

    public function __construct()
    {
        $this->result = Categories::all();
        $this->products = Products::with(['category', 'brand', 'type'])->get();
    }

    public function index()
    {
        $id = request('prod_id');
        $products = $this->products->where('id', '=', $id);
        return view('product', [
            'categories' => $this->result,
            'id' => $id,
            'product' => $products
            ]);
    }
}
