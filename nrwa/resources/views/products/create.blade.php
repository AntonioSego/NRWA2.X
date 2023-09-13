<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row justify-content-center bg-secondary-subtle">
            <div class="col-md-4 bg-secondary text-light p-5">
                <h4>Unos proizvoda</h4>
                <form action="{{route('product.store')}}"  method ="POST" class="">
                    @csrf
                    @method('post')
                 <div class="mt-3">
                    <label for="product_name" class="form-label">Naziv proizvoda </label>
                    <input type="text" name="product_name" class="form-control">
                 </div>
                <div class="mt-3">
                    <label for="quantitiy" class="form-label">Količina </label>
                    <input type="text" name="quantity" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="rate" class="form-label">Cijena proizvoda </label>
                    <input type="text" name="rate" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="active" class="form-label">Aktivnost proizvoda </label>
                    <select id="cars" name="active" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                      </select>
                </div>
                <div class="mt-3">
                    <label for="status" class="form-label">Status proizvoda </label>
                    <select id="cars" name="status" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                      </select>
                </div>
                <div class="mt-3">
                    <label for="brand_id" class="form-label">ID brenda </label>
                    <select id="cars" name="brand_id" class="form-control">
                    @foreach ($brands as $brand )
                    <option value="{{$brand->id}}">{{$brand->id}} {{$brand->brand_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="category_id" class="form-label">ID kategorije </label>
                    <select id="cars" name="category_id" class="form-control">
                        @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->id}} {{$category->category_name}}</option>
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