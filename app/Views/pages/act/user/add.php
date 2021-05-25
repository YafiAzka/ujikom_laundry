<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
foreach ($user as $item) {
    $id_user = $item;
}
$userid =  substr($id_user['id'], -2,);
// echo $userid;
?>

<div id="main" style="margin:0 3% 5% 10%;">


    <h1>user Add Page</h1>
    <br>
    <hr>
    <div class="jumbotron">
        <form action="/user/save" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="user00<?= $userid + 1 ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" name="password" class="form-control" placeholder="Password"><br>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <select name="id_outlet" class="form-control">
                                <option value="0">~ Pilih Id Outlet ~</option>
                                <?php foreach ($outlet as $o) : ?>
                                    <option value="<?= $o["id"]; ?>"><?= $o["id"]; ?> | <?= $o["nama"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                        </div>
                        <div class="col">
                            <select name="role" class="form-control">
                                <option value="0">~ Pilih Role ~</option>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="owner">Owner</option>
                            </select>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <a href="/user"><span class="btn btn-outline-secondary">Back</span></a>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>



</div>

<?= $this->endSection(); ?>