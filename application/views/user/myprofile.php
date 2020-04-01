<div class="container"> 



    <div class="row my-5">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4 col-sm-12 text-center">
                        
                        <img src="<?= base_url("assets/images/profile/") . $user['image']; ?>" class="card-img mb-2 mt-4 rounded-circle mt-2 mb-2" style="max-width:200px; width:200px; height:200px; max-height:200px;"> 
                        <h5 class="card-title"><?= $user['fullname']; ?></h5>
                        <small class="badge badge-success">ID : <?= $user['username']; ?></small>
                        <a href="<?= base_url("user/setting/"); ?>" class="text-dark  badge badge-warning"><i class="fas fa-cogs"></i> </a>
                    </div>
                    <div class="col-md-8 p-4">
                        <div class="card-body">
                       
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <small class="badge badge-primary">Profesi</small>   <?= $user['profesi']; ?>
                                </li>
                                <li class="list-group-item">
                                    <small class="badge badge-primary">Sekolah</small>  <?= $user['sekolah']; ?>
                                </li>
                                <li class="list-group-item">
                                    <small class="badge badge-primary">Bio</small>  <?= $user['bio']; ?>
                                </li>
                            </ul>
                           

                            <hr>
                            <div class="text-muted">
                                <small class="text-muted mr-2">Hubungi Saya : </small>
                            
                                <a href="https://wa.me/<?= $user['whatsapp']; ?>" class="card-link text-dark"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.facebook.com/<?= $user['facebook']; ?>" class="card-link text-dark"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/<?= $user['instagram']; ?>" class="card-link text-dark"><i class="fab fa-instagram"></i></a>
                            </div>
                            
                            <p class="card-text"><small class="text-muted">Bergabung pada  <?= date("d M Y", $user['date_created']); ?></small></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
      
        
       
    </div>
</div>