<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow-md">
	<div class="container">
		<a class="navbar-brand text-white text-uppercase" href="<?= base_url("") ?>">
			<img src="<?= base_url('assets/images/roften-logo.png') ?>" width="30" height="30" class="d-inline-block align-top">
			Roften
		</a>
		<span class="btn text-white" id="btn-view"></span>
	</div>
	</div>
</nav>

<nav class="navbar navbar-expand-lg fixed-bottom  navbar-bg navbar-light  shadow-sm ">
	<div class="container d-flex justify-content-around">
		<a class="mr-2 text-decoration-none text-white <?= $title == "Roften - Home" ? "bg-dark p-1 rounded" : '' ?>" class="m-0" href="<?= base_url("home"); ?>">
			<i class="fas fa-lg fa-fw fa-home"></i>
		</a>

		<a class="mr-2 text-decoration-none text-white <?= $title == "Roften - Friends" ? "bg-dark p-1 rounded" : '' ?>" class="m-0" href="<?= base_url("friend"); ?>">
			<i class="fas fa-lg fa-fw fa-users"></i>
		</a>

		<a class="mr-2 text-decoration-none text-white <?= $title == "Roften - Chat" ? "bg-dark p-1 rounded" : '' ?>" class="m-0" href="<?= base_url("chat"); ?>">
			<i class="fas fa-lg fa-fw fa-comment-alt"></i>
		</a>

		<div class="btn-group dropup">
			<a class="m-0 dropdown-toggle 
			<?=  
				($title == "Roften - Home" 
				|| $title == "Roften - Friends" 
				|| $title == "Roften - Chat") ? "" : 'bg-dark p-1 rounded text-white'  ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="<?= base_url("assets/images/profile/") . $user['image']; ?>" alt="user" class="img-thumbnail rounded-circle" style="max-height:30px; height:30px; width:30px; max-width:30px;">
			</a>
			<div class="dropdown-menu dropdown-left">
				<?php
				$username = explode("@", $user['email']);
				$username = $username[0];
				?>
				<a href="<?= base_url($username); ?>" class="text-dark dropdown-item"><i class="fas fa-user"></i> Profile</a>
				<a href="<?= base_url("profile/setting"); ?>" class="text-dark dropdown-item"><i class="fas fa-cogs"></i> Setting</a>
				<a href="<?= base_url("logout"); ?>" class="text-dark dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
			</div>
		</div>

	</div>
</nav>
