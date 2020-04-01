<div class="container">
    <div class="row my-5 ">
        <div class="col-md-12 mb-5 mx-auto" >
            <div class="card overflow-auto" >
                <div class="card-header fixed-top bg-primary text-white">
                    <img src="<?= base_url("assets/images/profile/") . $friend['image']; ?>" alt="" class="responsive-img rounded-circle float-left" width="50px" height="50px"> 

                    <strong class="text-uppercase">
                        <p class="text-lead  ml-2 d-inline"><?= $username; ?></p> <br>
                        <small class="text-white ml-2 d-inline"><?= $friend['profesi'] ?></small>
                    </strong>
                
                </div>
                <div class="card-body" style="margin-top:100px;">
                    <ul class="list-group mb-5">
                        <?php foreach($chatAll as $c) : ?>
                            <?php if($c['message']) : ?> 
                                <?php if($c['sender_id'] && $c['receiver_id'] ) : ?>
                                    <!-- Mengimplementasikan $render_receiverdb dan menge -->
                                        <?php if($c['sender_id'] == $user['id'] ) : ?>
                                            <li class="list-group-item w-75 mb-0 ml-auto list-group-item-primary mb-2 border-0 ">

                                        <?php else : ?>
                                            <li class="list-group-item mb-0 mb-2 border-0 w-75">
                                        <?php endif; ?>
                                            <small class="text-muted font-weight-bold">
                                                <?php 
                                                
                                                    if ($user['id'] === $c['sender_id'] ) {
                                                        echo $user['username'];
                                                    }
                                                    else {
                                                        echo $friend['username'];
                                                    }
                                                
                                                
                                                ?>
                                                <small class="text-muted float-right"><?= date("h.i", $c['date_created']); ?></small>
                                                <hr>
                                            </small>
                                            <br>
                                            <?= $c['message']; ?>
                                            <i class="fas fa-check ml-2 float-right"></i>
                                        
                                        </li>

                                <?php endif; ?>

                            <?php endif; ?>
                        <?php endforeach; ?>
                                
                    </ul>
                    <form action="" method="post">
                            <input type="text" hidden name="sender_id" value="<?= $user['id']; ?>">
                            <input type="text"  hidden name="receiver_id" value="<?= $friend['id']; ?>">

                        <div class="form-group">
                            <label for="messageUser">Pesan</label>
                            <textarea class="form-control" name="messageUser" id="messageUser" rows="3"></textarea>
                            <?= form_error("messageUser", "<small class='text-danger'>", "</small>") ?>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>