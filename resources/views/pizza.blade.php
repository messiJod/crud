@extends("layout.layout")


@section('content')

    <h1 class="text-center text-6xl mb-10">Order List</h1>
    <div class="flex justify-center items-center">
        <table class="table-auto w-1/2 border-2 border-black">
        <thead>
        <tr class="border-b-4 border-black">
            <th>Sr no.</th>
            <th>Name of Pizza</th>
            <th>Base of Pizza</th>
            <th>Quantity of Pizzas</th>
        </tr>
        </thead>
        <tbody class="text-center border border-black">

        @php
            $number=0;
        @endphp
        @foreach($pizza as $piz)
            <tr>
                <td class="border-b border-dashed border-black border-r">{{$number}}</td>
                <td class="border-b border-dashed border-black border-r">{{$piz->pizza_name}}</td>
                <td class="border-b border-dashed border-black border-r">{{$piz->pizza_base}}</td>
                <td class="border-b border-dashed border-black border-r">{{$piz->pizza_quantity}}</td>
            </tr>
            <?php
            $number++;
            ?>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
