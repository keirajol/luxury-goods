<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Routing\Controller;
use App\Models\Categories;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

require_once('QueryController.php');

class QueryController extends Controller
{
    private $categories;
    private $total;
    private $cart;

    public function __construct()
    {
        $this->categories = Categories::all();
    }

    public function getCategory()
    {
        return view('Header/header', ['categories' => $this->categories]);
    }

    public function cartQuery()
    {
        $productIds = request('prod_id');
        Session::push('cart', $productIds);

        return view('cartItems', [
            'categories' => $this->result,
            'total' => $this->total,
            'cart' => $this->cart
            ]);
    }
}
?>
