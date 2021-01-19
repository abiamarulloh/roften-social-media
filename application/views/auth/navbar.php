<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm ">
  <div class="container">
    <a class="navbar-brand text-white" href="#">
      <img src="<?= base_url('assets/images/roften-logo.png') ?>" width="30" height="30" class="d-inline-block align-top">
      ROFTEN
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <?php if($title == "Login") : ?>
            <li class="nav-item active">
          <?php else : ?>
            <li class="nav-item">
          <?php endif; ?>
            <a class="nav-link text-white font-weight-bolder" href="<?= base_url("login"); ?>"><b>Login</b></a>
          </li>

          <?php if($title == "Register") : ?>
            <li class="nav-item active">
          <?php else : ?>
            <li class="nav-item">
          <?php endif; ?>
            <a class="nav-link text-white font-weight-bolder" href="<?= base_url("register"); ?>">Register</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
