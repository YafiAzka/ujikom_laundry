<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="main" style="margin:0 3% 5% 10%;">

    <h1>Member Edit Page</h1>
    <br>
    <hr>
    <div class="jumbotron">
        <form action="/user/update/<?= $user['id'] ?>" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" value="<?= $user['id'] ?>" class="form-control" name="id"><br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?= $user['username'] ?>" name="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" value="<?= $user['nama'] ?>" name="nama" class="form-control" placeholder="Nama">
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" value="<?= $user['password'] ?>" name="password" class="form-control" placeholder="Password"><br>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <select name="id_outlet" class="form-control">
                                <?php foreach ($outlet as $o) : ?>
                                    <?php if ($o['id'] == $detail['id_outlet']) : ?>
                                        <option selected value="<?= $o["id"]; ?>"><?= $o["nama"]; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $o["id"]; ?>"><?= $o["id"]; ?> | <?= $o["nama"]; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <br>
                        </div>
                        <div class="col">
                            <select name="role" class="form-control">
                                <option selected value="<?= $user["role"]; ?>"><?= $user["role"]; ?></option>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="owner">Owner</option>
                            </select>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <a href="/user"><span class="btn btn-outline-secondary">Back</span></a>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>

</div>

<?= $this->endSection(); ?>