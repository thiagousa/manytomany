
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
             <table class="table table-striped ">
                        <thead  class="thead-dark ">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Final Value</th>
                            <th >Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->ordersId }}</td>
                                <td >{{ $order->promoters->name  }}</td>
                                <td >{{ $order->finalValue }}</td>
                                <td >{{ $order->status}}</td>
                                <td>{{ $order->updated_at->format('m/d/Y')}}</td>
                                <td>
                                    <a href="{{ route('orders.show', [ 'id' => $order->ordersId ])}}">View Details</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


        </div>
    </div>
@endsection
