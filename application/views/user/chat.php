




<div class="container"> 

    
    <div class="row my-5">
    
    <?php foreach($userAll as $uA) :  ?>
        <div class="col-md-4 mb-4 mt-5 mb-5 text-center">
        <!-- diri kita tidak boleh chtan kepada diri sendiri -->
        <!-- Jika Bukan  profile kita yang diklik maka tampilkan -->
        <?php if( $user['username'] != $uA['username']  ) : ?>
            <a href="<?= base_url("user/chatUser/" . $uA['username']);  ?>" class="text-decoration-none text-dark">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <img src="<?= base_url("assets/images/profile/") . $uA['image']; ?>" alt="u" class="img-thumbnail rounded-circle mt-2 mb-4" style="max-width:50px; width:50px; height:50px; max-height:50px;">
                        <h5 class="card-title"><?= $uA['fullname']; ?></h5>
                        <small class="badge badge-success">ID : <?= $uA['username']; ?></small>
                    </div>
                </div>
            </a>
            <!-- Jika profile kita yang diklik maka hilangkan Link -->
        <?php else : ?>
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <img src="<?= base_url("assets/images/profile/") . $uA['image']; ?>" alt="u" class="img-thumbnail rounded-circle mt-2 mb-4" style="max-width:50px; width:50px; height:50px; max-height:50px;">
                    <h5 class="card-title"><?= $uA['fullname']; ?></h5>
                    <small class="badge badge-success">ID : <?= $uA['username']; ?></small>
                </div>
            </div>
        <?php endif ; ?>
    </div>
    <?php endforeach ?>
       
    </div>
</div>