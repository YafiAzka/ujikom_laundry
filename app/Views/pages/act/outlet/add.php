<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
foreach ($outlet as $item) {
    $id_outlet = $item;
}
$outletid = substr($id_outlet['id'], 3);
// echo $outletid;
?>

<div id="main" style="margin:0 3% 5% 10%;">


    <h1>Outlet Add Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/outlet/save" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="OT-0<?= $outletid + 1 ?>" class="form-control" name="id"><br>
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
                            <input type="text" name="tlp" class="form-control" placeholder="No.Telpon">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <a href="/outlet"><span class="btn btn-outline-secondary">Back</span></a>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>


</div>

<?= $this->endSection(); ?>