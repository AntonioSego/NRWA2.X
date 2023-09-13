<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body class="bg-dark-subtle">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ispis svih brendova</h4>
                        <div class="mt-1">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Prijelaz
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('brand.create')}}" class="dropdown-item">Unesi brend</a></li>
                                  <li><a class="dropdown-item" href="{{route('product.index')}}">Proizvod</a></li>
                                  <li><a class="dropdown-item" href="{{route('category.index')}}">Kategorije</a></li>
                                  <li><a class="dropdown-item" href="{{route('order.index')}}">Narudbe</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="search" name="search" placeholder="Pretrazi nesto..">
                        </div>
                    <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Ime brenda</th>
                                <th>Brend aktivan</th>
                                <th>Brend status</th>
                                <th>Uredi</th>
                                <th>Obrisi</th>
                            </thead>
                            <tbody class="alldata">
                                @foreach ($brands as $brand)
                                <tr>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    @if($brand->brand_active == 1)
                                    <td class="bg-success text-light text-center">{{$brand->brand_active}}</td>
                                    @else
                                    <td class="bg-danger text-light text-center">{{$brand->brand_active}}</td>
                                    @endif
                                    @if($brand->brand_status == 1)
                                    <td class="bg-success text-light text-center">{{$brand->brand_status}}</td>
                                    @else
                                    <td class="bg-danger text-light text-center">{{$brand->brand_status}}</td>
                                    @endif
                                    <td><a href="{{route('brand.edit',['brand' =>$brand])}}" class="btn btn-warning">Uredi</a></td>
                                   <td>
                                    {{-- <form action ="{{route('brand.destroy',$brand)}}" method="POST">
                                        <a href="{{route('brand.edit',['brand' =>$brand])}}" class="btn btn-warning">Uredi</a>
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Izbrisi"> --}}
                                    <a href="{{route('brand.delete',['brand' =>$brand])}}" class="btn btn-danger">Izbrisi</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody id="Content" class="searchdata">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value = $(this).val();
            if($value){
                $('.alldata').hide();
                $('.showdata').show();
            }else{
                $('.alldata').show();
                $('.showdata').hide();
            }
            $.ajax({
                type:'get',
                url:'{{URL::to('search')}}',
                data:{'search':$value},

                success:function(data){
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>