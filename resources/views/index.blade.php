<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">  
    </head>
    <body>
        <div class="container">
            <table class="table table-striped">
                <thead  class="thead-dark">
                <tr>
                    <th>Id</th>
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
                            <a href="{{ $order->ordersId}}">View details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
