$(document).ready(function(){
	$("#searchkeyUp").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#listData .card").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});

ClassicEditor
.create( document.querySelector( '#ckeditor-body' ))
.catch( error => {});

function seeComment(e) {
	console.log(e)
	$(`#${e}`).toggleClass("d-none");
}
