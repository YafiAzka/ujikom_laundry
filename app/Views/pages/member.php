<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Member Page</h1>
    <br>
    <a href="/member/add"><button class="btn btn-outline-primary">Add</button></a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No.HP</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($member as $m) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $m['nama']; ?></td>
                    <td><?= $m['alamat']; ?></td>
                    <td><?= $m['jenis_kelamin']; ?></td>
                    <td><?= $m['tlp']; ?></td>
                    <td><a href="/member/edit/<?= $m['id']; ?>"><span><i class="bi bi-pencil-square"></i></span></a> |
                        <a href="/member/delete/<?= $m['id']; ?>" onclick="return confirm('Yakin Hapus?')"><span><i class="bi bi-trash"></i></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No.HP</th>
                <th>Act</th>
            </tr>
        </tfoot>
    </table>

</div>

<?= $this->endSection(); ?>