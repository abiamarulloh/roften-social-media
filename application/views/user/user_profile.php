<div class="container"> 
    <div class="row my-5  ">
        <div class="col-md-12">
            <div class="card mb-3 shadow-sm">
                <div class="row mb-5 no-gutters">
                    <div class="col-md-4 col-sm-12 text-center">
                        <img src="<?= base_url("assets/images/profile/") . $userByUsername->image; ?>" class="card-img mb-2 mt-4 rounded-circle mt-2 mb-2" style="max-width:200px; width:200px; height:200px; max-height:200px;">
                        <h5 class="card-title"><?=$userByUsername->fullname; ?></h5>
                        <small class="badge badge-success">ID : <?= $userByUsername->username; ?></small>
                    </div>
                    <div class="col-md-8 p-4">
                        <div class="card-body">
                       
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <small class="badge badge-primary">Profesi</small>   <?= $userByUsername->profesi; ?>
                                </li>
                                <li class="list-group-item">
                                    <small class="badge badge-primary">Sekolah</small>  <?= $userByUsername->sekolah; ?>
                                </li>
                                <li class="list-group-item">
                                    <small class="badge badge-primary">Bio</small>  <?= $userByUsername->bio; ?>
                                </li>
                            </ul>
                           

                            <hr>
                            <div class="text-muted">
                                <small class="text-muted mr-2">Hubungi Saya : </small>
                            
                                <a href="https://wa.me/<?= $userByUsername->whatsapp; ?>" class="card-link text-dark"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.facebook.com/<?= $userByUsername->facebook; ?>" class="card-link text-dark"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/<?= $userByUsername->instagram; ?>" class="card-link text-dark"><i class="fab fa-instagram"></i></a>
                            </div>
                            
                            <p class="card-text"><small class="text-muted">Bergabung pada  <?= date("d M Y", $userByUsername->date_created); ?></small></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>