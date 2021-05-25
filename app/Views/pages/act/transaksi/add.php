<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
foreach ($transaksi as $item) {
    $id_transaksi = $item;
}
$transaksiid = substr($id_transaksi['id'], 3);
$transaksiinv = substr($id_transaksi['kode_invoice'], 4);
// echo $transaksiid;
?>

<div id="main" style="margin:0 3% 5% 10%;">


    <h1>Transaksi Add Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/transaksi/save" name="autoSumForm" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="TR-0<?= $transaksiid + 1 ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <select name="id_outlet" class="form-control">
                                <option value="0">~ Pilih Id Outlet ~</option>
                                <?php foreach ($outlet as $o) : ?>
                                    <option value="<?= $o["id"]; ?>"><?= $o["id"]; ?> | <?= $o["nama"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <select name="id_member" class="form-control">
                                <option value="0">~ Pilih Id Member ~</option>
                                <?php foreach ($member as $m) : ?>
                                    <option value="<?= $m["id"]; ?>"><?= $m["id"]; ?> | <?= $m["nama"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <select name="id_user" class="form-control">
                                <option value="0">~ Pilih Id User ~</option>
                                <?php foreach ($user as $u) : ?>
                                    <option value="<?= $u["id"]; ?>"><?= $u["id"]; ?> | <?= $u["nama"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" value="INV-<?= $transaksiinv + 1 ?>" name="kode_invoice" class="form-control" placeholder="Nama">
                    <br>
                    <div class="form-row">
                        <div class="col-md-4">
                            <input type="datetime-local" name="tgl" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="datetime-local" name="batas_waktu" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="datetime-local" name="tgl_bayar" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-row">
                        <div class="col">
                            <br><input type="number" name="biaya_tambahan" class="form-control" placeholder="Biaya Tambahan">
                        </div>
                        <div class="col">
                            <br><input type="number" name="diskon" class="form-control" placeholder="Diskon">
                        </div>
                        <div class="col">
                            <br><input type="number" name="pajak" class="form-control" placeholder="Pajak">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-row">
                        <div class="col">
                            <br><select name="status" class="form-control">
                                <option value="0">~ Pilih Status ~</option>
                                <option value="baru">Baru</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                <option value="diambil">Diambil</option>
                            </select>
                        </div>
                        <div class="col">
                            <br><select name="dibayar" class="form-control">
                                <option value="0">~ Pilih Dibayar/Belum ~</option>
                                <option value="dibayar">DiBayar</option>
                                <option value="belum_dibayar">Belum DiBayar</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <a href="/transaksi"><span class="btn btn-outline-secondary">Back</span></a>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>

    <!-- onFocus='startCalc();' onBlur='stopCalc()' -->
    <!-- <script>
        function startCalc() {
            interval = setInterval("calc()", 1);
        }

        function calc() {
            one = document.autoSumForm.biaya_tambahan.value;
            two = document.autoSumForm.diskon.value;
            three = document.autoSumForm.pajak.value;
            document.autoSumForm.total_pembayaran.value = (one * 1) * (two * 1);
        }

        function stopCalc() {
            clearInterval(interval);
        }
    </script> -->

</div>

<?= $this->endSection(); ?>