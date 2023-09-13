<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Narudzba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-secondary text-light p-5">
                <h4>Unos narudzbe</h4>
                <form action="{{route('order.store')}}"  method ="POST">
                    @csrf
                    @method('post')
                 <div class="mt-3">
                    <label for="order_date" class="form-label">Datum narudzbe </label>
                    <input type="date" name="order_date" class="form-control">
                 </div>
                <div class="mt-3">
                    <label for="client_name" class="form-label">Naziv klijenta </label>
                    <input type="text" name="client_name" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="client_contact" class="form-label">Kontakt</label>
                    <input type="text" name="client_contact" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="product_name" class="form-label">Naziv proizvoda</label>
                    <select id="cars" name="product_name" class="form-control">
                        @foreach ($products as $product )
                        <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="noOfProducts" class="form-label">Broj proizvoda</label>
                    <input type="text" name="noOfProducts" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="sub_total" class="form-label">Sub_total</label>
                    <input type="text" name="sub_total" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="vat" class="form-label">PDV</label>
                    <input type="text" name="vat" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="discount" class="form-label">Popust</label>
                    <input type="text" name="discount" class="form-control">
                </div>
                <div class="mt-3" class="form-label">
                    <label for="total_amount">Ukupan iznos</label>
                    <input type="text" name="total_amount" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="paid" class="form-label">Plaćanje</label>
                    <input type="text" name="paid" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="due" class="form-label">DUE</label>
                    <input type="text" name="due" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="payment_type" class="form-label">Tip placanja</label>
                    <input type="text" name="payment_type" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="payment_status" class="form-label">Status placanja</label>
                    <input type="text" name="payment_status" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="product_id" class="form-label">ID proizvoda</label>
                    <select id="cars" name="product_id" class="form-control">
                        @foreach ($products as $product )
                        <option value="{{$product->id}}">{{$product->id}} {{$product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="user_id" class="form-label">ID korisnika</label>
                    <select id="cars" name="user_id" class="form-control">
                        @foreach ($users as $user )
                        <option value="{{$user->id}}">{{$user->id}} {{$user->username}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mt-3">
                    <input type="submit" name="submit" class="btn btn-primary form-control" value="Unesi">
                </div>
                    


            </form>

            </div>
        </div>
    </div>

    
                      
                   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>