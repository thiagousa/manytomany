
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>
      
    </head>
    <body>
            <table class="table">
                    <thead  class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col" >Price Buy</th>
                        <th scope="col" >Price Sale</th>
                        <link rel="stylesheet"  />
                      
                    </tr>
                    </thead>
                    <tbody>
                           
                        @foreach($orders as $order)
                            <th scope="row">{{ $order->productsId}}</th>
                            <th scope="row" >{{ $order->description }}</th>
                            <th scope="row" >{{$order->pivot->o_quantity}}</th>
                            <th scope="row" >{{$order->pivot->o_priceBegin}}</th>
                            <th scope="row" >{{$order->pivot->o_priceEnd}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </body>
</html>
