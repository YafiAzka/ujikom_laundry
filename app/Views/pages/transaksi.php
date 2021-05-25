<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Transaksi Page</h1>
    <br>
    <a href="/transaksi/add"><button class="btn btn-outline-primary">Add</button></a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Outlet</th>
                <th>Id Member</th>
                <th>Id User</th>
                <th>Kode Invoice</th>
                <th>Tanggal</th>
                <th>Batas Waktu</th>
                <th>Tanggal Bayar</th>
                <th>Biaya Tambahan</th>
                <th>Diskon</th>
                <th>Pajak</th>
                <th>Status</th>
                <th>DiBayar</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($transaksi as $t) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $t['id_outlet']; ?></td>
                    <td><?= $t['id_member']; ?></td>
                    <td><?= $t['id_user']; ?></td>
                    <td><?= $t['kode_invoice']; ?></td>
                    <td><?= $t['tgl']; ?></td>
                    <td><?= $t['batas_waktu']; ?></td>
                    <td><?= $t['tgl_bayar']; ?></td>
                    <td><?= $t['biaya_tambahan']; ?></td>
                    <td><?= $t['diskon']; ?></td>
                    <td><?= $t['pajak']; ?></td>
                    <td><?= $t['status']; ?></td>
                    <td><?= $t['dibayar']; ?></td>
                    <td><a href="/transaksi/edit/<?= $t['id']; ?>"><span><i class="bi bi-pencil-square"></i></span></a> |
                        <a href="/transaksi/delete/<?= $t['id']; ?>" onclick="return confirm('Yakin Hapus?')"><span><i class="bi bi-trash"></i></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Id Outlet</th>
                <th>Id Member</th>
                <th>Id User</th>
                <th>Kode Invoice</th>
                <th>Tanggal</th>
                <th>Batas Waktu</th>
                <th>Tanggal Bayar</th>
                <th>Biaya Tambahan</th>
                <th>Diskon</th>
                <th>Pajak</th>
                <th>Status</th>
                <th>DiBayar</th>
                <th>Act</th>
            </tr>
        </tfoot>
    </table>

</div>

<?= $this->endSection(); ?>