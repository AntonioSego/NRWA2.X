<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Brisanje proizvoda</h4>
                <form action="{{ route('product.destroy', ['product' => $product])}}"  method="POST">
                    @csrf
                    @method('delete')
                    <div class="mt-3">
                      <label for="product_name" class="form-label">Naziv proizvoda </label>
                      <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                   </div>
                  <div class="mt-3">
                      <label for="quantitiy" class="form-label">Količina </label>
                      <input type="text" name="quantity" class="form-control" value="{{$product->quantity}}">
                  </div>
                  <div class="mt-3">
                      <label for="rate" class="form-label">Cijena proizvoda </label>
                      <input type="text" name="rate" class="form-control" value="{{$product->rate}}">
                  </div>
                  <div class="mt-3">
                      <label for="active" class="form-label">Aktivnost proizvoda </label>
                      <select id="cars" name="category_active" class="form-control">
                          <option value="{{$product->active}}">{{$product->active}}</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                        </select>
                  </div>
                  <div class="mt-3">
                      <label for="status" class="form-label">Status proizvoda </label>
                      <select id="cars" name="category_active" class="form-control">
                          <option value="{{$product->status}}">{{$product->status}}</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                        </select>
                  </div>
                  <div class="mt-3">
                      <label for="brand_id" class="form-label">ID brenda </label>
                      <input type="text" name="brand_id" class="form-control" value="{{$product->brand_id}}">
                  </div>
                  <div class="mt-3">
                      <label for="category_id" class="form-label">ID kategorije </label>
                      <input type="text" name="category_id" class="form-control" value="{{$product->category_id}}">
                  </div>
                    <div class="mt-3">
                        <input type="submit" name="submit" class="btn btn-danger" value="Obrisi">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>