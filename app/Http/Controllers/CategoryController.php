<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;

class CategoryController extends Controller
{
    private $result;
    private $products;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        $id = request('cat_id');
        $products = Products::all()->where('category_id', $id);
        return view('category', [
            'categories' => $this->result,
            'products' => $products
            ]);
    }
}
