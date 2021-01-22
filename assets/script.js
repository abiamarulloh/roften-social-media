$(document).ready(function(){
	$("#searchkeyUp").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#listData .card").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		})
	});
});

ClassicEditor
.create( document.querySelector( '#ckeditor-body' ))
.catch( error => {});


function seeComment(e, post_id, user_id) {
	$(`#${e}`).toggleClass("d-none");
	postComment(user_id, post_id);
	deleteComment(post_id);
	window.setInterval(() => {
		getComment(post_id)
	}, 2000);
}

// Get Comment
function getComment(post_id) {
	fetch(BASE_URL + 'user/commentList/' + post_id, {
		method: "GET",
	})
	.then((response) => response.text())
	.then((data) => {
		$(`#comment_list_${post_id}`).html(data);
		deleteComment(post_id);
	})
}


// // Post Comment
function postComment(user_id, post_id) {
	$( `#comment_submit_${post_id}`).click(function(event)
	{
		event.preventDefault();
		var comment_body = $(`#comment_${post_id}`).val();
		$.ajax(
			{
				type: "post",
				url: BASE_URL + 'user/comment',
				data: { "post_id": post_id, "user_id": user_id, "comment": comment_body },
				cache: false,
				success: function(response)
				{
						$(`#comment_${post_id}`).val("");
						$(`#result_or_error_comment_${post_id}`).html(response);
						
						// // GET Comment
						getComment(post_id)
						deleteComment(post_id);
				},
				error: function() 
				{
					alert("Invalide!");
				}
			}
		);
	});
}


function deleteComment(post_id) {
	$(`.delete-wrap button`).click(function(event){
		comment_id = $(this).data("id");
		event.preventDefault();
		$.ajax({
			type:'POST',
			url: BASE_URL + 'user/comment/delete/',
			data:{comment_id: comment_id},
			success: function(data){
				getComment(post_id)
			}
		})
	})
}


function deletePost(post_id) {
	$.ajax({
		type: 'POST',
		url: BASE_URL + 'user/post/delete/',
		data:{ post_id: post_id },
		success: function(data){
			window.location.reload()
		}
	})
}


function confirmDelete(post_id) {
	var deleteAlert = `Yakin ingin hapus Postingan ini ?`;
	var confirm = window.confirm(deleteAlert);
	if(confirm == true) {
		deletePost(post_id)
	}else {
		return false;
	}
}

