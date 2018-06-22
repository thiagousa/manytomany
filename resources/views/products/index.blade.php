
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped ">
                    <thead  class="thead-dark ">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th >Final Price </th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->productsId }}</td>
                            <td >{{ $product->description  }}</td>
                            <td >{{ $product->quantity }}</td>
                            <td >{{ $product ->salePrice}}</td>
                            <td>{{ $product->created_at->format('m/d/Y')}}</td>
                            <td>
                                <a href="{{ route('products.show', [ 'id' => $product->productsID ])}}">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
@endsection
