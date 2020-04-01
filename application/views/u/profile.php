

<?php if(  $user['username']  ) : ?>
<div class="container"> 
    <div class="row my-5">
        <div class="col-md-3 mx-auto mb-4 text-center">
            <div class="card shadow-lg">
                <div class="card-body">
                    <img src="<?= base_url("assets/images/profile/") . $user['image']; ?>" alt="user" class="img-thumbnail rounded-circle w-50" style="max-width:100px; width:100px;  max-height:100px;">
                    <h5 class="card-title"><?= $user['fullname']; ?></h5>
                    <h6 class="card-subtitle text-muted"><?= $user['profesi']; ?></h6>
                    <p class="card-text"><?= $user['sekolah']; ?></p>
                    <p class="card-text"> 
                        <?= $user['bio']; ?>
                    </p>
                    <hr>
                    <span class="text-muted text-center d-block">Hubungi saya : </span>
                    <a href="https://wa.me/<?= $user['whatsapp']; ?>" class="card-link"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/<?= $user['facebook']; ?>" class="card-link"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/<?= $user['instagram']; ?>" class="card-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php else : ?>
<div class="container"> 
    <div class="row my-5">
        <div class="col-md-12 mx-auto mb-4 text-center">
            <div class="card shadow-lg text-center">
                <div class="card-body">
                    <h1 class="display-4">Maaf, Username tidak dikenal.<h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
