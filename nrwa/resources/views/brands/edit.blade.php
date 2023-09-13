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
        <div class="row justify-content-center">
            <div class="col-md-4 bg-secondary text-light p-5">
                <h4>Uredjivanje brenda</h4>
                <form action="{{route('brand.update',['brand'=>$brand])}}"  method ="POST">
                    @csrf
                    @method('put')
                 <div class="mt-3">
                    <label for="brand_name" class="form-label">Ime brenda </label>
                    <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}">
                 </div>
                <div class="mt-3">
                    <label for="brand_active" class="form-label">Aktivan brend </label>
                    <select id="cars" name="brand_active" class="form-control">
                        <option value="{{$brand->brand_active}}">{{$brand->brand_active}}</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                      </select>
                </div>
                <div class="mt-3">
                    <label for="brand_status">Status brenda </label>
                    <select id="cars" name="brand_status" class="form-control">
                        <option value="{{$brand->brand_status}}">{{$brand->brand_status}}</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
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