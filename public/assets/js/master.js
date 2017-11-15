function customer_list(){

	$("#loader").show();
	$.ajax({
		type:'POST',
		dataType:'HTML',
		url:base_url+'index.php/Customer/list',
		success:function(resp){
			$("#loader").hide();
			$("#main-wrapper").html(resp);
			$('#customer_list').DataTable();
		}
	});
}

function customer_add(){

	$("#loader").show();
	$.ajax({
		type:'POST',
		dataType:'HTML',
		url:base_url+'index.php/Customer/add_form',
		success:function(resp){
			$("#loader").hide();
			$("#main-wrapper").html(resp);
		}
	});
}

function customer_add_action(){

	var flag = 1;

	if($("#fullname").val() == ''){
		flag = 0;
		$("#fullname").css({
			'border-color':'red'
		});
	}
	else{
		$("#fullname").css({
			'border-color':'#ccc'
		});
	}

	if(flag == 1){

		var formData = $("#customer_form").serialize();

		$("#loader").show();
		$.ajax({
			type:'POST',
			dataType:'JSON',
			data:formData,
			url:base_url+'index.php/Customer/add_action',
			success:function(resp){
				$("#loader").hide();
				showAlert(resp['type'], resp['msg']);
			}
		});
	}
	else{
		showAlert('error', 'Enter Mandatory Fields');
	}
}

function customer_update(cust_id){

	if(cust_id != ''){
		$("#loader").show();
		$.ajax({
			type:'POST',
			dataType:'HTML',
			data:{cust_id:cust_id},
			url:base_url+'index.php/Customer/update_form',
			success:function(resp){
				$("#loader").hide();
				$("#main-wrapper").html(resp);
			}
		});
	}
}

function customer_update_action(){

	var flag = 1;

	if($("#fullname").val() == ''){
		flag = 0;
		$("#fullname").css({
			'border-color':'red'
		});
	}
	else{
		$("#fullname").css({
			'border-color':'#ccc'
		});
	}

	if(flag == 1){

		var formData = $("#customer_form").serialize();
		
		$("#loader").show();
		$.ajax({
			type:'POST',
			dataType:'JSON',
			data:formData,
			url:base_url+'index.php/Customer/update_action',
			success:function(resp){
				$("#loader").hide();
				showAlert(resp['type'], resp['msg']);
			}
		});
	}
	else{
		showAlert('error', 'Enter Mandatory Fields');
	}
}

function customer_delete(cust_id){

	if(cust_id != ''){
		$("#loader").show();
		$.ajax({
			type:'POST',
			dataType:'JSON',
			data:{cust_id:cust_id},
			url:base_url+'index.php/Customer/delete_action',
			success:function(resp){
				$("#loader").hide();
				showAlert(resp['type'], resp['msg']);
				setTimeout(function(){
					customer_list();
				}, 3000);
			}
		});
	}
}

function transaction_list(){

	$("#loader").show();
	$.ajax({
		type:'POST',
		dataType:'HTML',
		url:base_url+'index.php/Transaction/list',
		success:function(resp){
			$("#loader").hide();
			$("#main-wrapper").html(resp);
			$('#transaction_list').DataTable();
		}
	});
}

function trans_form(cust_id){

	$("#loader").show();
	$.ajax({
		type:'POST',
		dataType:'HTML',
		data:{cust_id:cust_id},
		url:base_url+'index.php/Transaction/add_form',
		success:function(resp){
			$("#loader").hide();
			$("#main-wrapper").html(resp);
			$('#expiry_date').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
		}
	});
}

function transaction_add_action(){

	var flag = 1;

	if($("#plan_id").val() == ''){
		flag = 0;
		$("#plan_id").css({
			'border-color':'red'
		});
	}
	else{
		$("#plan_id").css({
			'border-color':'#ccc'
		});
	}

	if($("#amount").val() == ''){
		flag = 0;
		$("#amount").css({
			'border-color':'red'
		});
	}
	else{
		$("#amount").css({
			'border-color':'#ccc'
		});
	}

	if($("#period").val() == 0){
		flag = 0;
		$("#period").css({
			'border-color':'red'
		});
	}
	else{
		$("#period").css({
			'border-color':'#ccc'
		});
	}

	if(flag == 1){

		var formData = $("#transaction_form").serialize();
		
		$("#loader").show();
		$.ajax({
			type:'POST',
			dataType:'JSON',
			data:formData,
			url:base_url+'index.php/Transaction/add_action',
			success:function(resp){
				$("#loader").hide();
				show_status_modal(resp);
			}
		});
	}
	else{
		showAlert('error', 'Enter Mandatory Fields');
	}
}

function show_status_modal(resp){

	var html ='';
	var title = 'Transaction Status';

	var status = 'Failed';
	var ref_id = '';
	var amount = '';
	var period = '';
	var expiry = '';

	if(resp.status == 1){

		status = resp.trans_details.status
		ref_id = resp.trans_details.ref_id;
		amount = resp.trans_details.amount;
		period = resp.trans_details.period;
		expiry = resp.trans_details.expiry;
	}

	html += '<div class="row"><div class="col-lg-12">'
	html += '<table class="table table-bordered">';
	
	html += '<tr><th>Status</th>';
	html += '<td>'+status+'</td></tr>';
	html += '<tr><th>Reference Id</th>';
	html += '<td>'+ref_id+'</td></tr>';
	html += '<tr><th>Amount</th>';
	html += '<td><i class="fa fa-inr" aria-hidden="true"></i> '+amount+'</td></tr>';
	html += '<tr><th>Period</th>';
	html += '<td>'+period+' Months</td></tr>';
	html += '<tr><th>Expiry Date</th>';
	html += '<td>'+expiry+'</td></tr></tr>';

	html += '</table>'; 
	html += '</div></div>';

	$("#modal-default .modal-title").html(title);
	$("#modal-default .modal-body").html(html);

	$("#modal-default").modal('show');
}

function getExpiryDate(period){

	var CurrentDate = new Date();
	CurrentDate.setMonth(CurrentDate.getMonth() + parseInt(period));

	var exprityDate = CurrentDate.getDate() + '-' + CurrentDate.getMonth() + '-' + CurrentDate.getFullYear();

	$("#expiry_date").val(exprityDate);
}

function customer_details(cust_id) {
	
	$("#loader").show();
	$.ajax({
		type:'POST',
		dataType:'JSON',
		data:{cust_id:cust_id},
		url:base_url+'index.php/Customer/get_details',
		success:function(resp){
			$("#loader").hide();

			if(resp.status == 1){

				var html = '';

				html += '<div class="row">';

				//customer details
				html += '<div class="col-lg-12">';
				html += '<h4>Customer Details</h4>';
				html += '<table class="table table-bordered">';
				html += '<tr><th>Name</th><td>'+resp.data.customer.fullname+'</td></tr>';
				html += '<tr><th>Mobile</th><td>'+resp.data.customer.mobile+'</td></tr>';
				html += '<tr><th>Area</th><td>'+$.parseJSON(resp.data.customer.address).area+'</td></tr>';
				html += '<tr><th>City</th><td>'+$.parseJSON(resp.data.customer.address).city+'</td></tr>';
				html += '</table>';
				html += '</div>';

				//trans details
				html += '<div class="col-lg-12">';
				html += '<h4>Transaction Details</h4>';
				html += '<table class="table table-bordered">';

				if(resp.data.transactions.length != 0){

					html += '<tr><th>Sr. No.</th>';
					html += '<th>Ref. No.</th>';
					html += '<th>Amount</th>';
					html += '<th>Plan Id</th>';
					html += '<th>Period</th>';
					html += '<th>Expiry</th>';
					html += '<th>Payment Status</th>';
					html += '<th>Date</th>';
					html += '</tr>';

					$.each(resp.data.transactions, function(index, value){
						html += '<tr><td>'+(index + 1)+'</td>';
						html += '<td>'+value['trans_ref_id']+'</td>';
						html += '<td>'+value['amount']+'</td>';
						html += '<td>'+value['plan_id']+'</td>';
						html += '<td>'+value['period']+' Month(s)</td>';
						html += '<td>'+value['expiry_date']+'</td>';
						html += '<td>'+value['payment_status']+'</td>';
						html += '<td>'+value['created_date']+'</td>';
						html += '</tr>';
					});
					
				}
				else{
					html += '<tr><td>No transactions found !</td></tr>';
				}
				html += '</table>';
				html += '</div>'
				html += '</div>';

				$(".modal-title").html('Details');
				$(".modal-body").html(html);

			}
			else{
				showAlert('error', 'No details available');
			}
			$("#modal-default").modal('show');
		}
	});
}

