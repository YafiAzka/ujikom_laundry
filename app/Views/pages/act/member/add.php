<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
foreach ($member as $item) {
    $id_member = $item;
}
$memberid = substr($id_member['id'], 2);
// echo $memberid;
?>

<div id="main" style="margin:0 3% 5% 10%;">


    <h1>Member Add Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/member/save" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="M-<?= $memberid + 1 ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="0">~ Pilih Jenis Kelamin ~</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" name="tlp" class="form-control" placeholder="No.Telpon">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <a href="/member"><span class="btn btn-outline-secondary">Back</span></a>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>


</div>

<?= $this->endSection(); ?>