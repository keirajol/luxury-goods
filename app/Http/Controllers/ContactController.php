<?php

namespace App\Http\Controllers;
use App\Models\Categories;

class ContactController extends Controller
{
    private $result;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        return view('contact', ['categories' => $this->result]);
    }
}
