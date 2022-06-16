@extends("layout.layout")


@section('content')
    <div class="flex min-h-screen justify-center items-center flex-col">


    <div class="text-6xl mb-10 px-3 py2">Choose Your <span class="underline decoration-4 decoration-blue-600 underline-offset-8">Pizza</span></div>

    <form action="/pizza" method="POST" class="flex flex-col">
        @csrf
        <label for="pizza_name" >Pizza Name</label>
        <input type="text" name="pizza_name" id="pizza_name" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400 mb-1">
        <label for="pizza_base" >Pizza Base</label>
        <input type="text" name="pizza_base" id="pizza_base" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400 mb-1">
        <label for="pizza_quantity" >Quantity</label>
        <input type="number" min="0" max="10" name="pizza_quantity" id="pizza_quantity" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400  mb-1">
        <button class="rounded-lg bg-green-400 my-2 px-0 py-2 text-2xl">Add</button>
    </form>

        <a href="{{url("/")}}" class="rounded-lg my-2 px-5 py-2 text-2xl bg-blue-400">Home</a>
    </div>
@endsection
