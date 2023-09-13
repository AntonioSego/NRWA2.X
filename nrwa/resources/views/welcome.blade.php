<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventroy managment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-secondary-subtle">
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-md-6 text-center bg-light p-5">
                <h3>Inventory managment</h3>
                <p>Dobro dosli na stranicu za upravljanje skladistem.</p>
                <p>Prijelaz na:</p>
                <div class="mt-3">
                    <a href="{{route('brand.index')}}" class="btn btn-secondary">Brend</a>
                    <a href="{{route('category.index')}}" class="btn btn-secondary">Kategorija</a>
                    <a href="{{route('product.index')}}" class="btn btn-secondary">Proizvod</a>
                    <a href="{{route('order.index')}}" class="btn btn-secondary">Narudba</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>