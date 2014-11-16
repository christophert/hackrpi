$('#signin').submit(function(e) {
	//prevent default
	e.preventDefault();
	//package form data
	var serializedData = $(this).serialize();
	$('#successMessage').hide();
	$('#successMessage').html('');
	$('#errorMessage').hide();
	$('#errorMessage').html('');
	$.ajax({
		type: "POST",
		url: "/api/login.php",
		data: serializedData,
		dataType: "json",
		timeout: 2000,
		cache: false,
		success: function(r) {
			$("#successMessage").show();
			if(r.status.validated) {
				$("#successMessage").html("Logged in successfully! Redirecting to main page...");
			}
		},
		error: function(xhr, textStatus, errorThrown) {
			if(xhr.status === 404) {
				$("#errorMessage").show();
				$("#errorMessage").html("Error: "+errorThrown);
			}
		}
	})
});