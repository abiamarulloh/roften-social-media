<div class="container" style="margin-top: 100px;">
	<div class="row mb-5">
		<div class="col-md-8 mx-auto" id="listData">
			<form>
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="searchkeyUp" placeholder="type for find article" aria-label="Recipient's username" aria-describedby="button-addon2">
				</div>
			</form>
			<?php foreach($users_posts as $user_post) : ?>
			<div class="card border-0 mb-5">
				<div class="card-body fit-body-post">
					<h1 class="display-4 text-center m-3" id="post-title"><strong><?= $user_post['title'] ?></strong></h1>
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
					<p class="show-comment-link" onclick="seeComment('section-comment-<?= $user_post['post_id'] ?>', <?= $user_post['post_id'] ?>, <?= $user['id'] ?>)">Show Comment</p>
				</div>
				<div class="card-footer border-0 mb-5 d-none" id="section-comment-<?= $user_post['post_id'] ?>">
					<?php $this->session->flashdata("message"); ?>
					<?= form_open(); ?>
						<input type="text" name="post_id" hidden value="<?= $user_post['post_id']; ?>">
						<input type="text" name="user_id" hidden value="<?= $user['id']; ?>" >
						<div class="form-group">
							<label for="comment_<?= $user_post['post_id']; ?>">Komentar</label>
							<input type="text" class="form-control" name="comment" id="comment_<?= $user_post['post_id']; ?>">
							<small class="form-text text-muted" id="result_or_error_comment_<?= $user_post['post_id']; ?>"></small>
						</div>
						<button type="submit" id="comment_submit_<?= $user_post['post_id']; ?>" class="btn btn-primary">Submit</button>
					</form>
					<hr>
					<div id="comment_list_<?= $user_post['post_id']; ?>">
						<?php foreach($user_comments as $user_comment) : ?>
							<?php if($user_comment['post_id'] == $user_post['post_id']) : ?>
							<div class="row my-3">
								<div class="col-md-12">
									<div class="d-flex align-items-center mb-3">
										<div>
											<img src="<?= base_url("assets/images/profile/") .  $user_comment['image'] ?>" width="50px" alt="">
										</div>
										<div class="ml-3">
											<span class="d-block"><?= $user_comment['fullname']; ?></span>
											<span  class="d-block"><a href="<?= base_url($user_comment['username']); ?>" class="text-dark"><?= $user_comment['username']; ?></a></span>
										</div>
										<div class="ml-4 <?= $user_comment['username'] == $user['username'] ? '' : 'd-none' ?> delete-wrap">
											<button type="submit" data-id="<?= $user_comment['comment_id'] ?>" class="text-dark btn-delete">
												<i class="fas fa-fw fa-trash"></i>
											</button>
										</div>
									</div>
									<div>
										<?= $user_comment['comment']; ?>
									</div>
								</div>
							</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>		
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
