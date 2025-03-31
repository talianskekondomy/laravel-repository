@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Košík</h1>
        @if(session('cart'))
            <table class="table">
                <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Cena</th>
                        <th>Množství</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>${{ $item['price'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Košík je prázdný.</p>
        @endif
    </div>
@endsection
