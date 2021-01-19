  
  

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url("assets/bootstrap4/js/jquery.min.js"); ?> "></script>
    <script src="<?= base_url("assets/bootstrap4/js/popper.min.js"); ?> "></script>
		<script src="<?= base_url("assets/bootstrap4/js/bootstrap.min.js"); ?> "></script>
    <!-- Font Awesome -->
    <script src="<?= base_url("assets/fontAwesome/js/all.min.js"); ?> "></script>
		<script src="<?= base_url("assets/script.js"); ?> "></script>
		<script>
			ClassicEditor
        .create( document.querySelector( '#ckeditor-body' ))
        .catch( error => {
            console.error( error );
        } );

		</script>
  </body>
</html>
