
<div class="container"> 

    <div class="row my-5">

    <?php foreach($userAll as $uA) :  ?>
        <div class="col-md-4 mb-4 text-center mt-5 mb-5">
        <!-- diri kita tidak boleh chtan kepada diri sendiri -->
        <!-- Jika Bukan  profile kita yang diklik maka tampilkan -->
        <?php if( $user['username'] != $uA['username']  ) : ?>
            <a href="<?= base_url("user/user_profile/" . $uA['username']);  ?>" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <img src="<?= base_url("assets/images/profile/") . $uA['image']; ?>" alt="u" class="img-thumbnail rounded-circle mt-2 mb-4" style="max-width:200px; width:200px; height:200px; max-height:200px;">
                        <h5 class="card-title"><?= $uA['fullname']; ?></h5>
                        <h6 class="card-subtitle text-muted"><?= $uA['profesi']; ?></h6>
                        <p class="card-text"><?= $uA['sekolah']; ?></p>
                        <p class="card-text"> 
                            <?= $uA['bio']; ?>
                        </p>
                    
                        <small class="badge badge-success">ID : <?= $uA['username']; ?></small>
                        <hr>
                        <span class="text-muted text-center d-block">Hubungi saya : </span>
                        <a href="https://wa.me/<?= $uA['whatsapp']; ?>" class="card-link"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/<?= $uA['facebook']; ?>" class="card-link"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/<?= $uA['instagram']; ?>" class="card-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </a>
            <!-- Jika profile kita yang diklik maka hilangkan Link -->
        <?php else : ?>
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <img src="<?= base_url("assets/images/profile/") . $uA['image']; ?>" alt="u" class="img-thumbnail rounded-circle mt-2 mb-4" style="max-width:200px; width:200px; height:200px; max-height:200px;">
                    <h5 class="card-title"><?= $uA['fullname']; ?></h5>
                    <h6 class="card-subtitle text-muted"><?= $uA['profesi']; ?></h6>
                    <p class="card-text"><?= $uA['sekolah']; ?></p>
                    <p class="card-text"> 
                        <?= $uA['bio']; ?>
                    </p>
                
                    <small class="badge badge-success">ID : <?= $uA['username']; ?></small>
                    <hr>
                    <span class="text-muted text-center d-block">Hubungi saya : </span>
                    <a href="https://wa.me/<?= $uA['whatsapp']; ?>" class="card-link"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/<?= $uA['facebook']; ?>" class="card-link"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/<?= $uA['instagram']; ?>" class="card-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        <?php endif ; ?>
    </div>
    <?php endforeach ?>
       
    </div>
</div>