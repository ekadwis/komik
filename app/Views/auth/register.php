<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="css/login.css">
    <title><?= $title; ?></title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <div class="row d-flex login justify-content-center mt-5">
            <div class="col-6 right-side">
                <h1 class="fw-bold">Daftar</h1>

                <div class="login-form mt-4-5">
                    <form action="/tambahakun" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username">
                        </div>

                        <div class="mb-3">
                            <label for="passowrd" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
                        </div>
                        <div class="mb-3">
                            <a href="/login"><small>Sudah punya akun?</small></a>
                        </div>
                        <button type="submit" class="btn btn-purple mt-5">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>