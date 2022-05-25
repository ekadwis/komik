<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="card-group justify-content-start mb-3">
    <?php foreach ($listManhua as $list) : ?>
        <div class="row col-md-6 g-0 text-light">
            <div class="card mb-3 mx-2 bg-dark border-darkgrey" style="max-width: 540px;">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/img/<?= $list['img']; ?>" class="card-img rounded-start" alt="<?= $list['img']; ?>" style="height: 220px; width: 100%">
                    </div>
                    <div class="col-md-8">
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
                            <p class="card-text d-flex justify-content-start fs-lastSeen"><small><?= $list['nama_tipe']; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>