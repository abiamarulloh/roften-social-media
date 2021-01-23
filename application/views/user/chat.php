<div class="container">
    <div class="row my-5 ">
        <div class="col-md-12 mb-5 mx-auto">
            <div class="card fixed-top">
				<div class="card-header navbar-bg text-white ">
                    <div class="d-flex align-items-center">
						<a href="<?= base_url($username); ?>" class="btn btn-sm text-white mr-2"> 
							<i class="fas fa-arrow-left"></i>
						</a>
						<a href="<?= base_url($username); ?>" class="text-decoration-none text-white w-100">
							<img src="<?= base_url("assets/images/profile/") . $friend['image']; ?>" alt="" class="responsive-img rounded-circle float-left" width="50px" height="50px"> 
							<strong class="text-uppercase">
								<p class="text-lead  ml-2 d-inline"><?= $username; ?></p> <br>
								<small class="text-white ml-2 d-inline"><?= $friend['profesi'] ?></small>
							</strong>
						</a>
					</div>
                </div>
                <div class="card-body" style="height: 100vh; overflow-y: auto">
                    <ul class="list-group mb-5" id="chat_list">
                        <?php foreach($chatAll as $c) : ?>
                            <?php if($c['message']) : ?> 
								<?php if($c['sender_id'] && $c['receiver_id'] ) : ?>
								
									<?php if($c['sender_id'] == $user['id'] ) : ?>
										<li class="right-chat ml-auto list-group-item border-0">
										
											<div class="text-break mr-2">
												<span>
													<?= $c['message']; ?>
												</span>
												<span class="float-left mt-5 d-flex align-items-center">
													<i class="fas fa-check ml-2 text-primary float-left"></i>
													<span class="date-chat-left m-2"><?= date("h.i", $c['date_created']); ?></span>
												</span>
											</div>
											<div>
												<img 
													src="<?= base_url("assets/images/profile/") . $user['image']; ?>" 
													alt="<?= $user['image']; ?>"
												>
											</div>
										
									<?php else : ?>
										<li class="left-chat mr-auto list-group-item border-0">
											<div>
												<a href="<?= base_url($friend['username']) ?>">
													<img 
														src="<?= base_url("assets/images/profile/") . $friend['image']; ?>" 
														alt="<?= $friend['image']; ?>"
													>
												</a>
											</div>
											<div class="text-break ml-2">
												<span>
													<?= $c['message']; ?>
												</span>
												<span class="float-right mt-5 d-flex align-items-center">
													<span class="date-chat-left m-2"><?= date("h.i", $c['date_created']); ?></span>
													<i class="fas fa-check mr-2 text-primary float-right"></i>
												</span>
											
											</div>
											
									<?php endif; ?>
									</li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                   
					<div class="card-footer mb-5 ">
						<?= form_open(); ?>
								<input type="text" hidden id="friend_username" value="<?= $friend['username'] ?>">
								<input type="text" hidden name="sender_id" id="sender_id" value="<?= $user['id']; ?>">
								<input type="text"  hidden name="receiver_id" id="receiver_id" value="<?= $friend['id']; ?>">
							<div class="form-group">
								<label for="messageUser">Pesan</label>
								<textarea class="form-control" name="messageUser" id="messageUser"></textarea>
								<div id="result_or_error_comment"></div>
							</div>
							<button type="submit" id="chatBtnSubmit" class="btn btn-primary mb-5">Kirim Pesan <i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
