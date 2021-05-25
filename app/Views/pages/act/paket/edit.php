<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Paket Edit Page</h1>
    <br>
    <hr>

    <div class="jumbotron">
        <form action="/paket/update/<?= $paket['id'] ?>" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="<?= $paket['id'] ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?= $paket['nama_paket'] ?>" name=" nama_paket" class="form-control" placeholder="Nama Paket">
                        </div>
                    </div>
                </div>
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
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <select name="jenis" class="form-control">
                                <option selected value="<?= $paket["jenis"]; ?>"><?= $paket["jenis"]; ?></option>
                                <option value="kiloan">Kiloan</option>
                                <option value="selimut">Selimut</option>
                                <option value="bed_cover">Bed Cover</option>
                                <option value="kaos">Kaos</option>
                                <option value="lain">Lain</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" value="<?= $paket['harga'] ?>" name="harga" class="form-control" placeholder="Harga">
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