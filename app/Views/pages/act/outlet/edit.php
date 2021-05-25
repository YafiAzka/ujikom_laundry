<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Outlet Edit Page</h1>
    <br>

    <div class="jumbotron">
        <form action="/outlet/update/<?= $outlet['id'] ?>" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="<?= $outlet['id'] ?>" readonly class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?= $outlet['alamat'] ?>" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" value="<?= $outlet['nama'] ?>" name="nama" class="form-control" placeholder="Nama">
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?= $outlet['tlp'] ?>" name="tlp" class="form-control" placeholder="No.Telpon">
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