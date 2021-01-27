<div class="container">
    <div class="row">
		<div class="col-md-7 d-flex align-items-center my-5">
			<div>
				<h1 class="display-4">Buat dan share artikelmu diroften</h1>
				<p class="lead">Gabung sekarang! untuk terhubung dengan pengguna lainnya dan agar dapat share artikel bermanfaat diroften</p>
			</div>
		</div>
        <div class="col-md-5 mb-5 mt-5">
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

<div class="container mt-t mb-4" style="margin-top: 130px;">
	<div class="row">
		<div class="col-md-8">
			Copyright &copy; Roften. <?= date("Y", time()) ?>
		</div>
		<div class="col-md-4">
			<span class="btn" id="btn-view"><i class="fas fa-mobile"></i> Mobile</span>
		</div>
	</div>
</div>
