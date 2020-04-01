

<div class="card bg-dark text-white">
  <div class="card-body">
    <marquee behavior="scroll"  class="font-weight-bold" direction="left">Selamat datang Kawan Roften, silahkan  berpartisipasi dengan bergabung di Website Roften. </marquee>
  </div>
</div>

<div class="container"> 
    <div class="row my-5">
    
    <?php foreach($uA as $u) :  ?>
        <div class="col-md-4 mb-4 text-center">
            <a href="<?= base_url("u/" . $u['username']);  ?>" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <img src="<?= base_url("assets/images/profile/") . $u['image']; ?>" alt="u" class="img-thumbnail rounded-circle mt-2 mb-4" style="max-width:200px; width:200px; height:200px; max-height:200px;">
                        <h5 class="card-title"><?= $u['fullname']; ?></h5>
                        <h6 class="card-subtitle text-muted"><?= $u['profesi']; ?></h6>
                        <p class="card-text"><?= $u['sekolah']; ?></p>
                        <p class="card-text"> 
                            <?= $u['bio']; ?>
                        </p>
                    
                        <small class="badge badge-success"><?= $u['username']; ?></small>
                        <hr>
                        <span class="text-muted text-center d-block">Hubungi saya : </span>
                        <a href="https://wa.me/<?= $u['whatsapp']; ?>" class="card-link"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/<?= $u['facebook']; ?>" class="card-link"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/<?= $u['instagram']; ?>" class="card-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach ?>
       
    </div>
</div>