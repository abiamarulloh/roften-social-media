<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto my-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2>Register</h2>
                    <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="fullname">Nama lengkap</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Nama lengkap"  id="fullname" value="<?= set_value("fullname"); ?>">
                            <?= form_error("fullname",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email address" id="email" value="<?= set_value("email"); ?>">
                            <?= form_error("email",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" value="<?= set_value("password"); ?>">
                            <?= form_error("password",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm password</label>
                            <input type="password" class="form-control" name="confirmpassword"  placeholder="Confirm password" id="confirmpassword" value="<?= set_value("confirmpassword"); ?>">
                            <?= form_error("confirmpassword",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a href="<?= base_url("login"); ?>" class="text-decoration-none">already have an account? login now !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
