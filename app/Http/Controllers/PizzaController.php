<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizza = Pizza::all();
        return view("pizza",['pizza'=>$pizza]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pizza_name'=>'required',
            'pizza_base'=>'required',
            'pizza_quantity'=>'required'
        ]);

        $pizza = new Pizza();
        $pizza->pizza_name = $request->pizza_name;
        $pizza->pizza_base = $request->pizza_base;
        $pizza->pizza_quantity = $request->pizza_quantity;
        $pizza->save();
        return redirect('pizza')->with('status', 'Order taken Successfully');
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
        $pizza = Pizza::find($id);
        return view('edit',['pizza'=>$pizza]);
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
        $pizza = Pizza::findOrFail($id);
        $pizza->pizza_name = $request->pizza_name;
        $pizza->pizza_base = $request->pizza_base;
        $pizza->pizza_quantity = $request->pizza_quantity;
        $pizza->update();
        return redirect('pizza')->with('status','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza =Pizza::find($id);
        $pizza->delete();
        return redirect('pizza')->with('status','Deleted Successfully');
    }
}
