<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- Message Success Login -->
<div class="container pt-4">
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('msg'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</div>

<div class="card-group justify-content-start mb-3">
    <?php foreach ($listKomik as $list) : ?>
        <div class="row col-sm-6 g-0 text-light">
            <div class="card mb-3 mx-2 bg-dark border-darkgrey" style="max-width: 540px;">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/img/<?= $list['img']; ?>" class="card-img rounded-start" alt="<?= $list['img']; ?>" style="height: 220px; width: 100%">
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <h5 class="card-title fs-judul"><?= $list['judul_komik']; ?></h5>
                            <?php
                            $kalimat = $list['sinopsis'];
                            $jumlahkarakter = 125;
                            $cetak = substr($kalimat, 0, $jumlahkarakter);
                            $sinopsis = $cetak . "...";
                            ?>
                            <p class="card-text mb-4 fs-sinopsis text-justify"><?= $sinopsis; ?></p>
                            <p class="card-text d-flex justify-content-between fs-lastSeen"><small>Last updated 3 mins ago</small> <a href="#"><small>Ch. 118</small></a></p>
                            <?php

                            if ($list['tipe_komik'] == 'TK01') {
                                $newTipe = 'Manga';
                            } else if ($list['tipe_komik'] == 'TK02') {
                                $newTipe = 'Manhwa';
                            } else if ($list['tipe_komik'] == 'TK03') {
                                $newTipe = 'Manhua';
                            }

                            ?>
                            <p class="card-text d-flex justify-content-start fs-lastSeen"><small><?= $newTipe; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?= $this->endSection(); ?>