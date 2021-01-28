  
  

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url("assets/bootstrap4/js/jquery.min.js"); ?> "></script>
    <script src="<?= base_url("assets/bootstrap4/js/popper.min.js"); ?> "></script>
		<script src="<?= base_url("assets/bootstrap4/js/bootstrap.min.js"); ?> "></script>
    <!-- Font Awesome -->
    <script src="<?= base_url("assets/fontAwesome/js/all.min.js"); ?> "></script>
		<script>
			var BASE_URL = "<?php echo base_url();?>";

			let storage = localStorage.getItem("view");
			if(!storage) {
				if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
					let desktop = `width=device-width, initial-scale=1, shrink-to-fit=no`
					localStorage.setItem("view", `width=device-width, initial-scale=1, shrink-to-fit=no`)
					$("#meta-view")[0].setAttribute("content", desktop)
					$("#btn-view").html(`<i class="fas fa-desktop"></i> Desktop`)
				}else{
					let mobile = `width=device-width, initial-scale=0, shrink-to-fit=no`
					localStorage.setItem("view", `width=device-width, initial-scale=0, shrink-to-fit=no`)
					$("#meta-view")[0].setAttribute("content", mobile)
					$("#btn-view").html(`<i class="fas fa-mobile"></i> Mobile`)
				}
			}else {
				if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
					let desktop = localStorage.getItem("view")
					$("#meta-view")[0].setAttribute("content", desktop)
					$("#btn-view").html(`<i class="fas fa-desktop"></i> Desktop`)
				}else{
					let mobile = localStorage.getItem("view")
					$("#meta-view")[0].setAttribute("content", mobile)
					$("#btn-view").html(`<i class="fas fa-mobile"></i> Mobile`)
				}
			}

			$("#btn-view").on("click", () => {
				let storage = localStorage.getItem("view");
				let mobile = `width=device-width, initial-scale=1, shrink-to-fit=no`
				let desktop = `width=device-width, initial-scale=0, shrink-to-fit=no`
				if(storage == mobile) {
					localStorage.setItem("view", desktop);
					$("#meta-view")[0].setAttribute("content", desktop)
					$("#btn-view").html(`<i class="fas fa-mobile"></i> Mobile`)
				}else {
					localStorage.setItem("view", mobile);
					$("#meta-view")[0].setAttribute("content", mobile)
					$("#btn-view").html(`<i class="fas fa-desktop"></i> Desktop`)
				}
			});
		</script>
		<script src="<?= base_url("assets/script.js"); ?> "></script>
  </body>
</html>
