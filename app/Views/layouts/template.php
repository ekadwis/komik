<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Komik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body class="bg-dark">
  <div class="container">
    <?= $this->include('layouts/navbar'); ?>

    <div class="container mt-4 mb-2">
      <div class="row">
        <div class="col-6">
          <form action="" method="GET">
            <div class="input-group mb-3 col-md-6">
              <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
              <button class="btn btn-outline-search" type="submit" name="Submit"><i class='bx bx-search'></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <?= $this->renderSection('content'); ?>
    <?= $pager->links('komik', 'komik_pager'); ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>