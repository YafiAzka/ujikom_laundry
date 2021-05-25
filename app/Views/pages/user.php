<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>User Page</h1>
    <br>
    <a href="/user/add"><button class="btn btn-outline-primary">Add</button></a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Id Outlet</th>
                <th>Role</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($user as $u) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $u['nama']; ?></td>
                    <td><?= $u['username']; ?></td>
                    <td><?= $u['id_outlet']; ?></td>
                    <td><?= $u['role']; ?></td>
                    <td><a href="/user/edit/<?= $u['id']; ?>"><span><i class="bi bi-pencil-square"></i></span></a> |
                        <a href="/user/delete/<?= $u['id']; ?>" onclick="return confirm('Yakin Hapus?')"><span><i class="bi bi-trash"></i></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Id Outlet</th>
                <th>Role</th>
                <th>Act</th>
            </tr>
        </tfoot>
    </table>

</div>

<?= $this->endSection(); ?>