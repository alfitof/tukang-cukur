<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="forms">
        <div class="form">
            <span class="title">Edit Antrean</span>
            <form action="/updatequeue/<?= $antrian['id']; ?>" method="post">
                <div class="input-field">
                    <input type="text" placeholder="Enter your name" name="pemesan" id="pemesan" value="<?= $antrian['pemesan'] ?>" autofocus>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Enter your adress" name="alamat" id="alamat" value="<?= $antrian['alamat'] ?>">
                    <i class="uil uil-location-point"></i>
                </div>
                <div class="input-field">
                    <input type="date" placeholder="Enter appointment time" name="tanggal" id="tanggal" value="<?= $antrian['tanggal'] ?>">
                    <i class="uil uil-calender"></i>
                </div>
                <div class="input-field button">
                    <input type="submit" name="submit" value="Edit Antrian">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>