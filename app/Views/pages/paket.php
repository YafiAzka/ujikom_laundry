<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Packet Page</h1>
    <br>
    <a href="/paket/add"><button class="btn btn-outline-primary">Add</button></a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Outlet</th>
                <th>Jenis</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($paket as $p) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $p['id_outlet']; ?></td>
                    <td><?= $p['jenis']; ?></td>
                    <td><?= $p['nama_paket']; ?></td>
                    <td>Rp <?= number_format($p['harga'], 2, ',', '.') ?></td>
                    <td><a href="/paket/edit/<?= $p['id']; ?>"><span><i class="bi bi-pencil-square"></i></span></a> |
                        <a href="/paket/delete/<?= $p['id']; ?>" onclick="return confirm('Yakin Hapus?')"><span><i class="bi bi-trash"></i></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Id Outlet</th>
                <th>Jenis</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Act</th>
            </tr>
        </tfoot>
    </table>

</div>

<?= $this->endSection(); ?>