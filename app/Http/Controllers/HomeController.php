<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all()->count();
        $clients = Client::all()->count();
        $suppliers = Supplier::all()->count();
        $roles = Role::all()->count();
        $products = Product::all()->count();
        $stocks = Stock::all()->count();
        $expired = Stock::all()->where(now(), '<', 'expired_at')->count();
        return view('example', compact('users', 'clients', 'suppliers', 'roles', 'products', 'stocks', 'expired'));
    }
}
