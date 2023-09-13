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
                <h4>Brisanje brenda</h4>
                <form action="{{ route('brand.destroy', ['brand' => $brand])}}"  method="POST">
                    @csrf
                    @method('delete')
                    <div class="mt-3">
                        <label for="brand_name">Ime brenda</label>
                        <input type="text" name="brand_name" class="form-controll" value="{{$brand->brand_name}}">
                    </div>
                    <div class="mt-3">
                        <label for="brand_active">Brend aktivan</label>
                        <input type="text" name="brand_active" class="form-controll" value="{{$brand->brand_active}}">
                    </div>
                    <div class="mt-3">
                        <label for="brand_status">Brend status</label>
                        <input type="text" name="brand_status" class="form-controll" value="{{$brand->brand_status}}">
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