  
  

  
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

			$("#profile-tab").click(function(){
				localStorage.setItem("tabActive", "profile-tab");
			});

			$("#security-tab").click(function(){
				localStorage.setItem("tabActive", "security-tab");
			});

			$("#medsos-tab").click(function(){
				localStorage.setItem("tabActive", "medsos-tab");
			});

			// Check tabActive and add class active
			let tabActive = localStorage.getItem("tabActive");
			if(tabActive == "profile-tab") {
				$("#profile-tab").addClass("active")
				$("#profile-tab").attr("href", "#profile")

				$("#profile").addClass("show active")
				$("#security").removeClass("show active")
				$("#medsos").removeClass("show active")

				$("#medsos-tab").removeClass("active")
				$("#security-tab").removeClass("active")
			}else if(tabActive == "security-tab") {
				$("#security-tab").addClass("active")
				$("#security-tab").attr("href", "#security")

				$("#security").addClass("show active")
				$("#profile").removeClass("show active")
				$("#medsos").removeClass("show active")

				$("#profile-tab").removeClass("active")
				$("#medsos-tab").removeClass("active")
			}else if(tabActive == "medsos-tab") {
				$("#medsos-tab").addClass("active")
				$("#medsos-tab").attr("href", "#medsos")

				$("#medsos").addClass("show active")
				$("#security").removeClass("show active")
				$("#profile").removeClass("show active")

				$("#security-tab").removeClass("active")
				$("#profile-tab").removeClass("active")
			}

		</script>
		<script src="<?= base_url("assets/script.js"); ?> "></script>
  </body>
</html>
