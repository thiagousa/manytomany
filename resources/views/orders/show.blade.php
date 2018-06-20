@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead  class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th >Price Buy</th>
                        <th >Price Sale</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->productsId}}</td>
                            <td>{{ $order->description }}</td>
                            <td>{{$order->pivot->o_quantity}}</td>
                            <td>{{$order->pivot->o_priceBegin}}</td>
                            <td>{{$order->pivot->o_priceEnd}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
@endsection