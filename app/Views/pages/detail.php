<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Transaction Detail Page</h1>
    <br>
    <a href="/detail/add"><button class="btn btn-outline-primary">Add</button></a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Transaksi</th>
                <th>Id Paket</th>
                <th>Kuantitas</th>
                <th>Keterangan</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($detail as $d) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $d['id_transaksi']; ?></td>
                    <td><?= $d['id_paket']; ?></td>
                    <td><?= $d['qty']; ?></td>
                    <td><?= $d['keterangan']; ?></td>
                    <td><a href="/detail/edit/<?= $d['id']; ?>"><span><i class="bi bi-pencil-square"></i></span></a> |
                        <a href="/detail/hapus/<?= $d['id']; ?>" onclick="return confirm('Yakin Hapus?')"><span><i class="bi bi-trash"></i></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Id Transaksi</th>
                <th>Id Paket</th>
                <th>Kuantitas</th>
                <th>Keterangan</th>
                <th>Act</th>
            </tr>
        </tfoot>
    </table>

</div>

<?= $this->endSection(); ?>