<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;

class HomeController extends Controller
{
    private $result;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        return view('welcome', ['categories' => $this->result]);
    }
}
