<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<section>
    <div class="container1">
        <h2 class="mt-5 mb-2 text-center">Our Satisfied Customer</h2>=
        <?php if (session()->getFlashdata('success')) { ?>
            <div class="alert alert-success mb-4" style="margin: auto; width: 88%;">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php }; ?>
        <div class="w-full">
            <button class="btn btn-outline-light mb-5" style="margin-left: 6.3rem;" onclick="location.href ='/tambahtesti'">Tambah Testimoni</button>
        </div>
        <div class="row g-0">
            <?php foreach ($antrian as $p) : ?>
                <div class="col-md-4" style="padding: 15px;" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="testimony-top text-center">
                        <img src="<?= "/testi/" . $p["gambar"] ?>" width="300px" height="200px" />
                    </div>
                    <div class="testimony-bottom text-center">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="text-center"><?= $p["nama"] ?></h3>
                        <p class="text-center"><?= $p["review"] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="container m-auto">
            <div class="row">
                <div class="col">

                    <?= $pager->links('antrian', 'pagination'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>