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
                <h4>Brisanje kategorije</h4>
                <form action="{{ route('category.destroy', ['category' => $category])}}"  method="POST">
                    @csrf
                    @method('delete')
                    <div class="mt-3">
                        <label for="category_name" class="form-label">Naziv kategorije </label>
                        <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}">
                     </div>
                     <div class="mt-3">
                        <label for="category_active" class="form-label">Aktivan kategorija</label>
                        <select id="cars" name="category_active" class="form-control">
                            <option value="{{$category->category_active}}">{{$category->category_active}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                          </select>
                    </div>
                    <div class="mt-3">
                        <label for="category_status">Status kategorije </label>
                        <select id="cars" name="category_status" class="form-control">
                            <option value="{{$category->category_status}}">{{$category->category_status}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                          </select>
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