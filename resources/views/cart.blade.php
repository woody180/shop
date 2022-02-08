@extends('templates.main_layout')


@section('content')

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>კალათა (2 პროდუქტი)</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($cartItems as $item)
        <tr>
            <td><a href="{{ url('products/'.$item->product->id) }}">{{ $item->product->title }} ({{ $item->quantity }})</a></td>
            <td>{{ $item->quantity * $item->product->price }} $</td>
            <td><a href="#">ყიდვა</a></td>
        </tr>
        @endforeach
        
    </tbody>
</table>


@endsection