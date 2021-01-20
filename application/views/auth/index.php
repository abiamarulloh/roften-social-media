<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto my-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2>Login</h2>
                    <?= $this->session->flashdata("auth"); ?>
                    <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email address" id="email">
                            <?= form_error("email",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                            <?= form_error("password",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a href="<?= base_url("register"); ?>" class="text-decoration-none">don't have an account? register now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
