<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Transaksi Edit Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/transaksi/update/<?= $transaksi['id'] ?>" name="autoSumForm" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="<?= $transaksi['id'] ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <select name="id_outlet" class="form-control">
                                <?php foreach ($outlet as $o) : ?>
                                    <?php if ($o['id'] == $detail['id_outlet']) : ?>
                                        <option selected value="<?= $o["id"]; ?>"><?= $o["nama"]; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $o["id"]; ?>"><?= $o["nama"]; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <select name="id_member" class="form-control">
                                <?php foreach ($member as $m) : ?>
                                    <?php if ($m['id'] == $detail['id_member']) : ?>
                                        <option selected value="<?= $m["id"]; ?>"><?= $m["nama"]; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $m["id"]; ?>"><?= $m["nama"]; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <select name="id_user" class="form-control">
                                <?php foreach ($user as $u) : ?>
                                    <?php if ($u['id'] == $detail['id_user']) : ?>
                                        <option selected value="<?= $u["id"]; ?>"><?= $u["nama"]; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $u["id"]; ?>"><?= $u["nama"]; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" value="<?= $transaksi['kode_invoice'] ?>" name="kode_invoice" class="form-control">
                    <br>
                    <div class="form-row">
                        <div class="col-md-4">
                            <input type="text" value="<?= ($transaksi['tgl']) ?>" name="tgl" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="text" value="<?= $transaksi['batas_waktu'] ?>" name="batas_waktu" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="text" value="<?= $transaksi['tgl_bayar'] ?>" name="tgl_bayar" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-row">
                        <div class="col">
                            <br><input type="number" value="<?= $transaksi['biaya_tambahan'] ?>" name="biaya_tambahan" class="form-control" placeholder="Biaya Tambahan">
                        </div>
                        <div class="col">
                            <br><input type="number" value="<?= $transaksi['diskon'] ?>" name="diskon" class="form-control" placeholder="Diskon">
                        </div>
                        <div class="col">
                            <br><input type="number" value="<?= $transaksi['pajak'] ?>" name="pajak" class="form-control" placeholder="Pajak">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-row">
                        <div class="col">
                            <br><select name="status" class="form-control">
                                <option selected value="<?= $transaksi["status"]; ?>"><?= $transaksi["status"]; ?></option>
                                <option value="baru">Baru</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                <option value="diambil">Diambil</option>
                            </select>
                        </div>
                        <div class="col">
                            <br><select name="dibayar" class="form-control">
                                <option selected value="<?= $transaksi["dibayar"]; ?>"><?= $transaksi["dibayar"]; ?></option>
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

</div>

<?= $this->endSection(); ?>