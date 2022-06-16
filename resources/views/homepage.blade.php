@extends("layout.layout")

@section('content')
    <div class="flex justify-center items-center flex-col">
        <div class="text-4xl">Welcome to Pizza Ordering Portal</div>
        <a href="{{url("/pizza/create")}}" class="bg-orange-400 px-3 py-2 rounded mt-10">Create order</a>
    </div>
@endsection
