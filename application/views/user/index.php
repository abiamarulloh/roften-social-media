<div class="container" style="margin-top: 100px;">
	<div class="row mb-5">
		<div class="col-md-8 mx-auto">
			<form>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search post" aria-label="Recipient's username" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
					</div>
				</div>
			</form>
			<?php foreach ($users_posts as $user_post) : ?>
			<div class="card border-0 mb-5">
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
