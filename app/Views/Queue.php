<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<table class="table table-dark table-bordered table-striped" id="orderTable">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Cukur</th>
        <th>Action</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($antrian as $antri) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $antri->pemesan  ?></td>
            <td><?= $antri->alamat  ?></td>
            <td><?= $antri->tanggal  ?></td>
            <td>
                <button class="btn btn-outline-warning d-inline" onClick="location.href='/editqueue/<?= $antri->id ?>'">Edit</button>
                <button class="btn btn-outline-danger d-inline" onClick="location.href='/deletequeue/<?= $antri->id ?>'">Delete</button>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?= $this->endSection(); ?>