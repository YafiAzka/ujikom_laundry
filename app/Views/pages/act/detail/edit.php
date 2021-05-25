<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Detail Edit Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/detail/update/<?= $detail['id'] ?>" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="<?= $detail['id'] ?>" readonly class="form-control"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?= $detail['keterangan'] ?>" name="keterangan" class="form-control" placeholder="Keterangan"><br>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <select name="id_transaksi" class="form-control">
                        <?php foreach ($transaksi as $t) : ?>
                            <?php if ($t['id'] == $detail['id_transaksi']) : ?>
                                <option selected value="<?= $t["id"]; ?>"><?= $t["id"]; ?> | <?= $t["status"]; ?></option>
                            <?php else : ?>
                                <option value="<?= $t["id"]; ?>"><?= $t["id"]; ?> | <?= $t["status"]; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-row">
                        <div class="col">
                            <br><input type="number" value="<?= $detail['qty'] ?>" name="qty" class="form-control" placeholder="Kuantitas">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <select name="id_paket" class="form-control">
                        <?php foreach ($paket as $p) : ?>
                            <?php if ($p['id'] == $detail['id_paket']) : ?>
                                <option selected value="<?= $p["id"]; ?>"><?= $p["id"]; ?> | <?= $t["status"]; ?></option>
                            <?php else : ?>
                                <option value="<?= $p["id"]; ?>"><?= $p["id"]; ?> | <?= $p["nama_paket"]; ?></option>
                            <?php endif; ?>
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