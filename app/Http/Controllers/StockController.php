<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Requests\StockRequest;

class StockController extends Controller
{
    function __construct()

    {

        $this->middleware('permission:stock-list|stock-create|stock-edit|stock-delete', ['only' => ['index','store']]);

        $this->middleware('permission:stock-create', ['only' => ['create','store']]);

        $this->middleware('permission:stock-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:stock-delete', ['only' => ['destroy']]);

   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $stocks = stock::all();

        $products = product::all();


        return view ('stock.index', compact('stocks', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $products = Product::all();
        $stocks = stock::all();
        return view('stock.create',compact('products','stocks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockRequest $request)

    {
        stock::create($request->all());
        return view('stock.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
