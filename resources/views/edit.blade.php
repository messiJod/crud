@extends('layout.layout')

@section('content')
    <div class="flex justify-center items-center flex-col">
        <div class="text-6xl my-5">Edit for <span class="underline decoration-4 decoration-blue-600 underline-offset-8">{{$pizza->id}}</span> </div>
    <form action="{{route('pizza.update',$pizza->id)}}"  class="flex flex-col" method="POST">
        @csrf
        @method('PUT')
        <label for="pizza_name" >Pizza Name</label>
        <select name="pizza_name" id="pizza_name" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400 mb-1">
{{--            <option value="" selected>{{$pizza->pizza_name}}</option>--}}
            <option value="Onion" @if($pizza->pizza_name=='Onion')selected @endif >Onion</option>
            <option value="Paneer" @if($pizza->pizza_name=='Paneer')selected @endif >Paneer</option>
            <option value="Capsicum" @if($pizza->pizza_name=='Capsicum')selected @endif >Capsicum</option>
        </select>

        <label for="pizza_base" >Pizza Base</label>
        <select name="pizza_base" id="pizza_base" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400 mb-1">
            <option value="Fresh Pan" @if($pizza->pizza_base == 'Fresh Pan')selected @endif>Fresh Pan</option>
            <option value="Thin Crust" @if($pizza->pizza_base == 'Thin Crust')selected @endif>Thin Crust</option>
            <option value="Cheese Crust" @if($pizza->pizza_base == 'Cheese Crust')selected @endif>Cheese Crust</option>
        </select>

        <label for="pizza_quantity" >Quantity</label>
        <select name="pizza_quantity" id="pizza_quantity" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400  mb-1">
            <option value="1" @if($pizza->pizza_quantity ==1)selected @endif>1</option>
            <option value="2" @if($pizza->pizza_quantity ==2)selected @endif>2</option>
            <option value="3" @if($pizza->pizza_quantity ==3)selected @endif>3</option>
            <option value="4" @if($pizza->pizza_quantity ==4)selected @endif>4</option>
            <option value="5" @if($pizza->pizza_quantity ==5)selected @endif>5</option>
            <option value="6" @if($pizza->pizza_quantity ==6)selected @endif>6</option>
            <option value="7" @if($pizza->pizza_quantity ==7)selected @endif>7</option>
            <option value="8" @if($pizza->pizza_quantity ==8)selected @endif>8</option>
            <option value="9" @if($pizza->pizza_quantity ==9)selected @endif>9</option>
            <option value="10" @if($pizza->pizza_quantity ==10)selected @endif>10</option>
        </select>
        <button type="submit" class="rounded-lg bg-green-400 my-2 px-0 py-2 text-2xl">Update</button>
    </form>
    </div>
@endsection
