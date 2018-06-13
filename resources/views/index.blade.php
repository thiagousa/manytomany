
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
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
                        <th scope="col">Name</th>
                        <th scope="col">Final Value</th>
                        <th scope="col" >Status</th>
                        <th scope="col" >Date</th>
                        <th scope="col" >View</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($orders as $order)
                            <tr>
                            <th scope="row">{{ $order->ordersId }}</th>
                            <th scope="row" >{{ $order->promoters->name  }}</th>
                            <th scope="row" >{{ $order->finalValue }}</th>
                            <th scope="row" >{{ $order->status}}</th>
                            <th scope="row">{{ $order->updated_at->format('m/d/Y')}}</th>
                            <th scope="row">
                             <a href="{{ $order->ordersId}}"> Open</a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </body>
</html>
