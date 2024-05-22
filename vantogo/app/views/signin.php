<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href ="signin.css" rel="stylesheet">
</head>
  <body>

  <div class="services-container">
                <div class="box">
                <img src="img/logo.png" alt="">
                </div>
  </div>



<form method="POST">
<div class="container-fluid">
<form class="mx-auto">
    <h4 class="text-center">Log In</h4>
    <div class="mb-3 mt-5">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" value="<?= get_var('email') ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div id="emailHelp" class="form-text mt-3">Forget Password?</div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="Login_btn d-grid gap-2 btn btn-primary" type="button" >Login</button><br>
    <a href="<?= ROOT ?>/users/create">
      <label for="">Create new account</label>
    </a>
</form>
</div>
</form>
<!----------Link For Js------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>