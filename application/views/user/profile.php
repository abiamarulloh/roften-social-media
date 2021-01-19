
<div class="container my-5"> 
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card mb-3 border-0">
                <div class="row no-gutters">
                    <div class="col-md-4 col-sm-12 text-center">
                        <img src="<?= base_url("assets/images/profile/") . $friend['image']; ?>" class="card-img mb-2 mt-4 rounded-circle mt-2 mb-2" style="max-width:200px; width:200px; height:200px; max-height:200px;"> 
                        <div>
							<h5 class="card-title"><?= $friend['fullname']; ?></h5>
							<small class="text-dark">ID : <?= $friend['username']; ?></small> 
						</div>
						<?php if($user['username'] != $friend['username']): ?>
							<a href="<?= base_url("chat/") . $friend['username']; ?>" class="text-dark text-decoration-none"> <i class="fas fa-comment-alt"></i> Chat</a>
						<?php endif; ?>
						<hr>
						<div class="text-muted">
							<a href="https://wa.me/<?= $friend['whatsapp']; ?>" class="card-link text-dark <?= $friend['whatsapp'] ? '' : 'd-none'; ?>"><i class="fab fa-whatsapp"></i></a>
							<a href="https://www.facebook.com/<?= $friend['facebook']; ?>" class="card-link text-dark <?= $friend['facebook'] ? '' : 'd-none'; ?>"><i class="fab fa-facebook"></i></a>
							<a href="https://www.instagram.com/<?= $friend['instagram']; ?>" class="card-link text-dark <?= $friend['instagram'] ? '' : 'd-none'; ?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
                    <div class="col-md-8 p-4">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <small class="badge badge-primary">Profesi</small> <br>
									<?= $friend['profesi']; ?>
									<hr>
                                </li>
                                <li class="list-group-item border-0">
                                    <small class="badge badge-primary">Sekolah</small> <br>
									<?= $friend['sekolah']; ?>
									<hr>
                                </li>
                                <li class="list-group-item border-0">
                                    <small class="badge badge-primary">Bio</small> <br>
									<?= $friend['bio']; ?>
									<hr>
                                </li>
                            </ul>
                            <p class="card-text"><small class="text-muted">Bergabung pada  <?= date("d M Y", $friend['date_created']); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<div class="row my-5 <?= $user['username'] != $friend['username'] ? 'd-none' : ''; ?>">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3>Buat Postingan</h3>
					<?php if($this->session->flashdata("message")) : ?>
						<?= $this->session->flashdata("message") ?>
					<?php endif; ?>
					<?= form_open_multipart() ?>
						<input type="text" name="user_id" hidden value="<?= $friend['id'] ?>">
						<div class="form-group">
							<input type="text" placeholder="Post Title" class="form-control" name="title">
							<?= form_error("title",'<small class="text-danger">' , '</small>' ) ?>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="body"  id="ckeditor-body" rows="3"></textarea>
							<?= form_error("body",'<small class="text-danger">' , '</small>' ) ?>
						</div>
						<button type="submit" class="btn btn-primary mt-3"><i class="fas fa-edit"></i> Posting</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-5">
			<div class="col-md-8 mx-auto mb-5">
				
				<form class="<?= $user_posts ? '' : 'd-none'; ?>">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Search post" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
				
				<?php foreach ($user_posts as $user_post) : ?>
				<div class="card border-0">
					<div class="card-body fit-body-post">
						<h1 class="display-4 text-center m-3"><strong><?= $user_post['title'] ?></strong></h1>
						<small class="d-block text-center m-3 my-2"><?= date("l, d F Y h:i:j", $user_post['post_create']) ?></small>

						<a href="<?= base_url($user_post['username']); ?>">
							<div class="post-profile-header mt-5 d-md d-flex d-sm d-block">
								<div>
									<img src="<?= base_url("assets/images/profile/") . $user_post['image'] ?>" alt="<?= $user_post['image'] ?>" class="rounded-circle" width="50px">
								</div>
								<div>
									<span class="d-block"><strong><?= $user_post['fullname'] ?></strong></span> 
									<span class="d-block"><?= $user_post['username'] ?></span>
								</div>
							</div>
						</a>
						<p class="card-text"><?= htmlspecialchars_decode($user_post["body"]); ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
	</div>
	
</div>
