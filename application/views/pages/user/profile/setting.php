<div class="container text-white">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5 mb-5" style="padding-bottom:60px; padding-top:60px">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> 
                        <i class="fas fa-fw fa-user"></i>
                     </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        <i class="fas fa-fw fa-lock"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        <i class="fas fa-fw fa-users"></i>
                    </a>
                </li>
            </ul>
            
            <!-- alert -->
            <?= $this->session->flashdata("message"); ?>
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <!-- Setting My Profile  -->
                    <h3>Detail </h3>
                    <hr>
                    <?= form_open_multipart(); ?>
                        <input type="text" name="id" hidden value="<?= $user['id']; ?>">
                        <div class="form-group">
                            <label for="image">Foto Profile</label>
                            <input type="file" accept="image/png, image/jpeg" id="image" name="image" class="p-1 mb-2">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Nama Lengkap</label>
                            <input type="text" class="form-control" name="fullname" value="<?= $user['fullname']; ?>" id="fullname">
                            <?= form_error("fullname",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                           <?php 
                                $username = explode("@", $user['email']); 
                                $username = $username[0];
                           ?>
                           <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" readonly name="username" value="<?= $username; ?>" id="username">
                        </div>
                        <div class="form-group">
                            <label for="profesi">Profesi</label>
                            <input type="text" class="form-control" name="profesi" value="<?= $user['profesi']; ?>" id="profesi">
                        </div>
                        <div class="form-group">
                            <label for="sekolah">Universitas/ Sekolah/ perusahaan</label>
                            <input type="text" class="form-control" name="sekolah" value="<?= $user['sekolah']; ?>" id="sekolah">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio"rows="3"><?= $user['bio']; ?></textarea>
                        </div>
						<div class="form-group d-flex justify-content-between">
							<a href="<?= base_url($username) ?>" class="btn bg-white"><i class="fas fa-arrow-left"></i></a>
							<button type="submit" class="btn bg-white text-dark">Save</button>
						</div>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- Setting Security -->
                    <h3>Security</h3>
                    <p>Ganti password Roften.</p>
                    <hr>
                    <form action="<?= base_url("setting/security"); ?>" method="post">
                        <input type="text" name="id" hidden value="<?= $user['id']; ?>">
                        <div class="form-group">
                            <label for="currentPassword">Password Sekarang</label>
                            <input type="password" class="form-control" name="currentPassword" id="currentPassword">
                            <small class="text-muted">*Password yang anda gunakan saat ini*</small> <br>
                            <?= form_error("currentPassword",'<small class="text-danger">' , '</small>' ) ?>

                        </div>
                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <small class="text-muted">*Password Baru pengganti password saat ini*</small> <br>
                            <?= form_error("password",'<small class="text-danger">' , '</small>' ) ?>

                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                            <small class="text-muted">*Konfirmasi password baru*</small> <br>
                            <?= form_error("confirmpassword",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
						<div class="form-group d-flex justify-content-between">
							<a href="<?= base_url($username) ?>" class="btn bg-white"><i class="fas fa-arrow-left"></i></a>
							<button type="submit" class="btn bg-white text-dark">Save</button>
						</div>
                    </form>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <!-- setting Medsos -->
                    <h3>Media Sosial </h3>
                    <p>Membantu temanmu mengetahui siapa dirimu dengan menambahkan alamat media sosial dibawah ini.</p>
                    <hr>
                    <form action="<?= base_url("setting/medsos") ?>" method="post">
                        <input type="text" name="id" hidden value="<?= $user['id']; ?>">
                        <div class="form-group">
                            <label for="whatsapp"> <i class="fab fa-fw fa-whatsapp"></i> Whatsapp</label>
                            <input type="text" class="form-control" name="whatsapp" value="<?= $user['whatsapp']; ?>"  id="whatsapp">
                            <small class="text-muted">Example : 6289 *** </small> <br>
                            <?= form_error("whatsapp",'<small class="text-danger">' , '</small>' ) ?>
                        </div>
                        <div class="form-group">
                            <label for="instagram"> <i class="fab fa-fw fa-instagram"></i> Instagram</label>
                            <input type="text" class="form-control" name="instagram"  value="<?= $user['instagram']; ?>" id="instagram">
                            <small class="text-muted">Example : abiamarulloh </small>
                        </div>
                        <div class="form-group">
                            <label for="facebook"> <i class="fab fa-fw fa-facebook"></i> Facebook</label>
                            <input type="text" class="form-control" name="facebook"  value="<?= $user['facebook']; ?>" id="facebook">
                            <small class="text-muted">Example : beehon06 </small>
                        </div>
						<div class="form-group d-flex justify-content-between">
							<a href="<?= base_url($username) ?>" class="btn bg-white"><i class="fas fa-arrow-left"></i></a>
							<button type="submit" class="btn bg-white text-dark">Save</button>
						</div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>



