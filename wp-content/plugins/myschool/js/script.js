// $(function() {

// 	//registration form
// 	$('#registration').submit(function() {
		
// 		var $inputs = $('#registration :input');
// 	    var values = {};
// 	    $inputs.each(function() {
// 	        values[this.name] = $(this).val();
// 	    });

// 	    jQuery.ajax({

// 		      url: "http://localhost/classroom/wp-admin/admin-ajax.php?action=registration",
// 		      method: "POST",
// 		      dataType: "json",
// 		      'data': values
// 		  }).success(function(result) {
		   	
// 		   	console.debug(result);
// 		   	// return false;
// 		   	$(location).attr(
// 		   		'href',
// 		   		'http://localhost/classroom/wp-content/plugins/myschool/templates/dashboard.php');
// 		    });

// 		return false;
// 	});
// });