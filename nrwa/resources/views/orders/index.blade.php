<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-dark-subtle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="card">
                    <div class="card-header">
                        <h4>Ispis svih narudzbi</h4>
                        <div class="mt-1">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Prijelaz
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('order.create')}}" class="dropdown-item">Unesi narudbu</a></li>
                                  <li><a class="dropdown-item" href="{{route('brand.index')}}">Brendovi</a></li>
                                  <li><a class="dropdown-item" href="{{route('product.index')}}">Proizvodi</a></li>
                                  <li><a class="dropdown-item" href="{{route('category.index')}}">Kategorije</a></li>
                                </ul>
                              </div>
                        </div>
                        <br>
                    </div>
                    <div class="card-body">
                    <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Datum narudzbe</th>
                                <th>Naziv klijenta</th>
                                <th>Kontakt</th>
                                <th>Naziv proizvoda</th>
                                <th>noOfProducts</th>
                                <th>Sub_total</th>
                                <th>PDV</th>
                                <th>Popust</th>
                                <th>Ukupan iznos</th>
                                <th>Plaćanje</th>
                                <th>DUE</th>
                                <th>Tip plaćanja</th>
                                <th>Status plaćanja</th>
                                <th>ID proizvoda</th>
                                <th>ID korisnika</th>
                                <th>Uredi</th>
                                <th>Obrisi</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->client_name}}</td>
                                    <td>{{$order->client_contact}}</td>
                                    <td>{{$order->product_name}}</td>
                                    <td>{{$order->noOfProducts}}</td>
                                    <td>{{$order->sub_total}}</td>
                                    <td>{{$order->vat}}</td>
                                    <td>{{$order->discount}}</td>
                                    <td>{{$order->total_amount}}</td>
                                    <td>{{$order->paid}}</td>
                                    <td>{{$order->due}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>{{$order->product_id}}</td>
                                    <td>{{$order->user_id}}</td>
                                    <td><a href="{{route('order.edit',['order' =>$order])}}" class="btn btn-warning">Uredi</a></td>
                                    <td><a href="{{route('order.delete',['order' =>$order])}}" class="btn btn-danger">Obrisi</a></td>
                                   {{-- <td>
                                    <form action ="{{route('order.destroy',['order' => $order ])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Izbrisi</button>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>