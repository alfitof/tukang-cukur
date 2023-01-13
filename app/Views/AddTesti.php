<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="forms">
        <div class="form">
            <span class="title">Tambah Testimoni</span>
            <form action="/inserttesti" method="post" enctype="multipart/form-data">
                <div class="input-field">
                    <input type="text" placeholder="Enter your name" name="nama" id="nama" value="<?= session()->get('nama'); ?>" required>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Enter your review" name="review" id="review" autofocus required>
                    <i class="uil uil-location-point"></i>
                </div>
                <div class="input-field">
                    <input type="file" name="gambar" id="gambar" required>
                    <i class="uil uil-calender"></i>
                </div>
                <div class="input-field button">
                    <input type="submit" name="submit" value="Tambah!">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>