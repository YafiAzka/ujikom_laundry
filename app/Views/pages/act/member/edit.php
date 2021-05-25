<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Member Edit Page</h1>
    <br>

    <div class="jumbotron">
        <form action="/member/update/<?= $member['id'] ?>" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="<?= $member['id'] ?>" readonly class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?= $member['alamat'] ?>" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" value="<?= $member['nama'] ?>" name="nama" class="form-control" placeholder="Nama">
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <select name="jenis_kelamin" class="form-control">
                                <option selected value="<?= $member["jenis_kelamin"]; ?>"> <?= $member["jenis_kelamin"]; ?></option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" value="<?= $member['tlp'] ?>" name="tlp" class="form-control" placeholder="No.Telpon">
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