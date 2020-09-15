<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
  </head>

  <body>
    <div class="container">
        <div class="col-5 mx-auto">
            <div class="card mt-5">
                <div class="card-header bg-primary text-white text-center text-bold">
                  UTS UMAR FAKHRY
                </div>
                <div class="card-body">
                  <img class="mx-auto d-block " src="https://rumusbilangan.com/wp-content/uploads/2018/12/Gambar-Tabung.jpg" alt="">
                  <blockquote class="blockquote text-center">
                    <p class="mb-0">V = Luas Alas x T</p>
                    <footer class="blockquote-footer"><cite title="Source Title">Rumus volume Tabung</cite></footer>
                  </blockquote>
                </div>
                <div class="card-body">
                  <form action="tabunghasil" method="post">
                    @csrf
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Jari Jari</span>
                    </div>
                    <input type="text" name="angka1" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Tinggi</span>
                    </div>
                    <input type="text" name="angka2" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                  </div>
                </div>
                <div class="card-footer">
                  <a class="btn btn-danger" href="{{url('/')}}">Kembali</a>
                  <input type="submit" value="Submit" class="btn btn-success float-right">
                </div>
              </form>
              </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>