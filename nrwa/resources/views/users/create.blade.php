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
                <h4>Unos korisnika</h4>
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    @method('post')
                 <div class="mt-3">
                    <label for="username">Korisničko ime</label>
                    <input type="text" name="username" class="form-control">
                 </div>
                <div class="mt-3">
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mt-3">
                    <input type="submit" name="submit" class="btn btn-primary" value="Unesi">
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
