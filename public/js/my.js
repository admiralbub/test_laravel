

$(document).ready(function(){
	$('#add_article').on('click',function(){
		var title = $('#title').val();
		var content = $('#content').val();

		var csrf = $('#csrf-token').val();
		$.ajax({
			url: '/api/addpost',
			 type: "POST",
			data: {title:title,content:content},
			headers: {
        		'X-CSRF-TOKEN': csrf
    		},
			success: function (data) {
				jQuery.each(data.errors, function(key, value){
                  	$('.alert-danger').show();
                  	$('.alert-danger').append('<p>'+value+'</p>');
                });
                if(!data.errors) {
                	location.href=location.href;
                }
			},
			

		});

	});

	$('#edit_article').on('click',function(){
		var title = $('#title').val();
		var content = $('#content').val();
		var id_article = $('#id_article').val();
		var csrf = $('#csrf-token').val();
		$.ajax({
			url: '/api/editpost/'+id_article,
			 type: "POST",
			data: {title:title,content:content,id_article:id_article},
			headers: {
        		'X-CSRF-TOKEN': csrf
    		},
			success: function (data) {
				jQuery.each(data.errors, function(key, value){
                  	$('.alert-danger').show();
                  	$('.alert-danger').append('<p>'+value+'</p>');
                });
                if(!data.errors) {
                	location.href=location.href;
                }
			},
			

		});

	});
	$('#delete_article').on('click',function(){
		location.href=location.href;
	});
	$(".delbutton").click(function() {
        var del_id = $(this).attr("id");
        if (confirm("Sure you want to delete this post? This cannot be undone later.")) {
        	$.ajax({
            	type : "GET",
            	url : '/api/deletepost/'+del_id,

           		//data : info,
            	success : function() {
            		location.href=location.href;
            	}
         	});
       	}
        return false;
     });
    
})


