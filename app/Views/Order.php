<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="forms">
        <div class="form">
            <span class="title">Order</span>
            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success mt-4">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php }; ?>
            <form action="/insert" method="post">
                <div class="input-field">
                    <input type="text" placeholder="Enter your name" name="pemesan" id="pemesan" value="<?= session()->get('nama'); ?>" required>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Enter your adress" name="alamat" id="alamat" autofocus required>
                    <i class="uil uil-location-point"></i>
                </div>
                <div class="input-field">
                    <input type="date" placeholder="Enter appointment time" name="tanggal" id="tanggal" required>
                    <i class="uil uil-calender"></i>
                </div>
                <div class="input-field button">
                    <input type="submit" name="submitOrderan" value="Order Tukang Cukur!">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>