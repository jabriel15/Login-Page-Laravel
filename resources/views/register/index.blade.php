<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latian Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- my style --}}
    <link rel="stylesheet" href="/css/style.css">
 </head>
  <body>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Daftar Akun</h1>
                <form>
              
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Nama panjang">
                    <label for="name">Nama</label>
                  </div>
                  <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="usernamae" placeholder="username">
                    <label for="usernamae">Username</label>
                  </div>
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com">
                    <label for="email">Email</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="make password">
                    <label for="password">Make password</label>
                  </div>

                  <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-2">Sudah punya akun? <a href="/">Login</a></small>
              </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>