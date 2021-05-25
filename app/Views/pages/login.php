    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">


    <div id="main" style="margin:2% 10% 4% 10%;">

        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mx-auto pt-5">
                        <center>
                            <h2>Login Page</h2><br>
                            <hr>
                        </center>
                        <form method="POST" action="login/login_action">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <p>
                            <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                        <div class="alert alert-warning">
                            <?php echo session()->getFlashdata('gagal') ?>
                        </div>
                    <?php } ?>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>