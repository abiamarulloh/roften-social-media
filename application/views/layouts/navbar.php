<nav class="navbar navbar-expand-lg fixed-top  navbar-light bg-light  shadow-sm ">
  <div class="container">
    <a class="navbar-brand font-weight-bolder text-dark text-uppercase" href="<?= base_url("user") ?>">
      <img src="<?= base_url('assets/images/network.svg') ?>" width="30" height="30" class="d-inline-block align-top">
      Roften
    </a>

      
    </div>

  </div>
</nav>

<nav class="navbar navbar-expand-lg fixed-bottom bg-primary  navbar-light  shadow-sm ">
  <div class="container d-flex justify-content-around">
      <a class="mr-2 text-decoration-none text-white" class="m-0" href="<?= base_url("user/index"); ?>"> 
        <i class="fas fa-lg fa-fw fa-home"></i>  
      </a>
      <a class="mr-2 text-decoration-none text-white" class="m-0" href="<?= base_url("user/chat"); ?>"> 
        <i class="fas fa-lg fa-fw fa-comments"></i>  
      </a>
      <a class="m-0" href="<?= base_url("user/myprofile"); ?>">
        <img src="<?= base_url("assets/images/profile/") . $user['image']; ?>" alt="user" class="img-thumbnail rounded-circle" style="max-height:30px; height:30px; width:30px; max-width:30px;"> 
      </a>

  </div>
</nav>

