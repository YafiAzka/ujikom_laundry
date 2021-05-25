<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
foreach ($detail as $item) {
    $id_detail = $item;
}
$detailid = substr($id_detail['id'], 3);
// echo $detailid;
?>

<div id="main" style="margin:0 3% 5% 10%;">


    <h1>Detail Add Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/detail/save" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="DT-0<?= $detailid + 1 ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan"><br>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <select name="id_transaksi" class="form-control">
                        <option value="0">~ Pilih Id Transaksi ~</option>
                        <?php foreach ($transaksi as $t) : ?>
                            <option value="<?= $t["id"]; ?>"><?= $t["id"]; ?> | <?= $t["status"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-row">
                        <div class="col">
                            <br><input type="number" name="qty" class="form-control" placeholder="Kuantitas">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <select name="id_paket" class="form-control">
                        <option value="0">~ Pilih Id Paket ~</option>
                        <?php foreach ($paket as $p) : ?>
                            <option value="<?= $p["id"]; ?>"><?= $p["id"]; ?> | <?= $p["nama_paket"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <br>
            <hr>
            <a href="/detail"><span class="btn btn-outline-secondary">Back</span></a>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>


</div>

<?= $this->endSection(); ?>