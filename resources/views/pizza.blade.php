@extends("layout.layout")


@section('content')

    <h1 class="text-center text-6xl mb-10 text-amber-600">Order List</h1>
    <div class="flex justify-center items-center">
        <table class="table-auto w-1/2 border-2 border-black">
        <thead>
        <tr class="border-b-4 border-black text-yellow-400">
            <th>Sr no.</th>
            <th>Name of Pizza</th>
            <th>Base of Pizza</th>
            <th>Quantity of Pizzas</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody class="text-center border border-black">
        @php
            $number=1;
        @endphp
        @foreach($pizza as $piz)
            <tr>
                <td class="border-b border-dashed border-black border-r font-bold">{{$number}}</td>
                <td class="border-b border-dashed border-black border-r">{{$piz->pizza_name}}</td>
                <td class="border-b border-dashed border-black border-r">{{$piz->pizza_base}}</td>
                <td class="border-b border-dashed border-black border-r">{{$piz->pizza_quantity}}</td>
                <td class="border-b border-dashed border-black border-r flex justify-center items-center gap-2"><a href="{{route('pizza.edit',$piz->id)}}" class="bg-blue-400 px-3 rounded-2xl text-white">EDIT</a>
                        <form action="{{route('pizza.destroy',$piz->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 px-3  rounded-2xl text-white">Delete</button>
                        </form>
                    </td>
            </tr>
            @php
            $number++;
            @endphp
        @endforeach
        </tbody>
    </table>
        <br>
    </div>
    <div class="text-center my-5">
        <a href="{{route('pizza.create')}}" class="bg-blue-800 text-white px-3 py-2 rounded mt-10 ">Create Order</a>
    </div>

    @if(session()->has('status'))
        <div class="bg-green-400 text-center rounded-2xl flex justify-center items-center mx-auto w-1/4">
           <span class="">
               {{ session()->get('status') }}
           </span>
        </div>
    @endif
@endsection
