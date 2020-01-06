<div class="container-fluid">
        <?php
        foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>

        <a href="<?= base_url('penyelenggara/index/add') ?>" class="btn btn-primary" name='add'>Tambah Event</a>
    <?php if ($event) {
        foreach ($event as $e) { ?>
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?= $e['nama_event'] ?></h4>
                    <p class="card-text">Rp. <?= $e['biaya'] ?></p>
                    <p class="card-text">Rp. <?= $e[''] ?></p>
                </div>
            </div>
    <?php }
            }else{ echo $output; ?>
            <p>data tidak ada</p>
            <?php } ?>

</div>