<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
foreach ($paket as $item) {
    $id_paket = $item;
}
$paketid = substr($id_paket['id'], 3);
// echo $paketid;
?>

<div id="main" style="margin:0 3% 5% 10%;">


    <h1>Paket Add Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/paket/save" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="PK-0<?= $paketid + 1 ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="nama_paket" class="form-control" placeholder="Nama Paket">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <select name="id_outlet" class="form-control">
                        <option value="0">~ Pilih Id Outlet ~</option>
                        <?php foreach ($outlet as $o) : ?>
                            <option value="<?= $o["id"]; ?>"><?= $o["id"]; ?> | <?= $o["nama"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <select name="jenis" class="form-control">
                                <option value="0">~ Pilih Jenis Paket ~</option>
                                <option value="kiloan">Kiloan</option>
                                <option value="selimut">Selimut</option>
                                <option value="bed_cover">Bed Cover</option>
                                <option value="kaos">Kaos</option>
                                <option value="lain">Lain</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" name="harga" class="form-control" placeholder="Harga">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <a href="/paket"><span class="btn btn-outline-secondary">Back</span></a>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>


</div>

<?= $this->endSection(); ?>