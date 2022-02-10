@extends('templates.main_layout')


@section('content')

@if (request()->session()->get('message'))
<div class="uk-alert-primary" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ request()->session()->get('message') }}</p>
</div>
@endif

<table class="uk-table uk-table-striped uk-table-middle">
    <thead>
        <tr>
            <th class="uk-width-medium">კალათა ({{ $cartItems->count() }} პროდუქტი)</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    
    <tbody>
        
        @foreach ($cartItems as $item)
        <tr>
            <td><a href="{{ url('products/'.$item->product->id) }}">{{ $item->product->title }} ({{ $item->quantity }})</a></td>
            <td>{{ $item->quantity * $item->product->price }} $</td>
            <td>
                <form class="uk-margin-remove uk-padding-remove uk-flex uk-flex-right" method="POST" action="{{ url('checkout/' . $item->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="checkedout" value="1" />
                    
                    <button class="uk-button uk-button-primary uk-button-small uk-margin-remove">ყიდვა</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>


@endsection