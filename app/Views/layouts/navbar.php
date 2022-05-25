<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Komik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $home; ?> mx-2" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?= $manga; ?> mx-2" href="/manga">Manga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $manhwa; ?> mx-2" href="/manhwa">Manhwa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $manhua; ?> mx-2" href="/manhua">Manhua</a>
        </li>
      </ul>
    </div>
    <div class="justify-content-end">
      <a href="/logout" class="btn btn-outline-purple">Logout</a>
    </div>

  </div>
</nav