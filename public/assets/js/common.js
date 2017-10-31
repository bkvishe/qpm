function showAlert(type, msg, id='alertMsg'){

	var html = '<div class="alert alert-'+type+' alert-dismissible">';
	html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
	html += '<h4><i class="icon fa fa-'+type+'"></i> Alert!</h4>';
	html += msg;
	html += '</div>';

	$("#"+id).html(html);
}

function defaultError(id='alertMsg'){

	var html = '<div class="alert alert-error alert-dismissible">';
	html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
	html += '<h4><i class="icon fa fa-error"></i> Alert!</h4>';
	html += 'Something went wrong! Please try again later.';
	html += '</div>';

	$("#"+id).html(html);
}

function show_dashboard(){

	location.reload();
}