
<div class="container"> 
    <div class="row my-5">
		<?php foreach($all_users as $all_user) :  ?>
			<div class="col-md-4 mb-4 text-center mt-5 mb-5">
			<?php if($all_user['username'] != $user['username']  ) : ?>
				<a href="<?= base_url($all_user['username']);  ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm border-0">
						<div class="card-body">
							<img src="<?= base_url("assets/images/profile/") . $all_user['image']; ?>" alt="u" class="img-thumbnail rounded-circle mt-2 mb-4" style="max-width:200px; width:200px; height:200px; max-height:200px;">

							<p class="text-muted">
								ID : <?= $all_user['username']; ?>
							</p>
							
							<h5 class="card-title"><?= $all_user['fullname']; ?></h5>
							<h6 class="card-subtitle text-muted"><?= $all_user['profesi']; ?></h6>
							<p class="card-subtitle m-2"><?= $all_user['sekolah']; ?></p>
							
							<a href="https://wa.me/<?= $all_user['whatsapp']; ?>" class="card-link text-dark <?= $all_user['whatsapp'] ? '' : 'd-none'; ?>"><i class="fab fa-whatsapp"></i></a>
						<a href="https://www.facebook.com/<?= $all_user['facebook']; ?>" class="card-link text-dark <?= $all_user['facebook'] ? '' : 'd-none'; ?>"><i class="fab fa-facebook"></i></a>
						<a href="https://www.instagram.com/<?= $all_user['instagram']; ?>" class="card-link text-dark <?= $all_user['instagram'] ? '' : 'd-none'; ?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</a>
			<?php else : ?>
				<div class="card shadow-sm border-0">
					<div class="card-body">
						<img src="<?= base_url("assets/images/profile/") . $all_user['image']; ?>" alt="u" class="img-thumbnail rounded-circle mt-2 mb-4" style="max-width:200px; width:200px; height:200px; max-height:200px;">
						<p class="text-muted">
							ID : <span><?= $all_user['username']; ?></span>
						</p>
						<h5 class="card-title"><?= $all_user['fullname']; ?></h5>
						<h6 class="card-subtitle text-muted"><?= $all_user['profesi']; ?></h6>
						<p class="card-subtitle m-2"><?= $all_user['sekolah']; ?></p>

						<a href="https://wa.me/<?= $all_user['whatsapp']; ?>" class="card-link text-dark <?= $all_user['whatsapp'] ? '' : 'd-none'; ?>"><i class="fab fa-whatsapp"></i></a>
						<a href="https://www.facebook.com/<?= $all_user['facebook']; ?>" class="card-link text-dark <?= $all_user['facebook'] ? '' : 'd-none'; ?>"><i class="fab fa-facebook"></i></a>
						<a href="https://www.instagram.com/<?= $all_user['instagram']; ?>" class="card-link text-dark <?= $all_user['instagram'] ? '' : 'd-none'; ?>"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			<?php endif ; ?>
		</div>
		<?php endforeach ?>
    </div>
</div>
