<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="home">
        <img src="/logo2.png" width="200" height="180"><br>
        Halo, <?php if (session()->get('member_username')) { ?>
            <?= session()->get('nama'); ?>
        <?php } else { ?>
            Guest
        <?php }; ?>
        <br>
        Mau Cukur Hari ini?

    </div>
</div>

<?= $this->endSection(); ?>