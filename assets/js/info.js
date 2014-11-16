//info.js
$("#user-information").ready(function() {
	$.ajax({
		type: "POST",
		url: "/api/info.php",
		timeout: 2000,
		cache: false,
		success: function(r) {
			$("#name").html(r.firstName + " " + r.lastName);
			$("#email").html(r.email);
			$("#phone").html(r.phone);
			$("#age").html(r.age);
			$("#weight").html(r.weight);
			$("#brand").html(r.brand);
			$("#numDay").html(r.numDay);
			$("#goal").html(r.goal);
			$("#bedtime").html(r.bedtime);
		},
		error: function(xhs, textStatus, errorThrown) {
			if(xhr.status === 404) {
				$("#errorMessage").show();
				$("#errorMessage").html("Error: "+errorThrown);
			}
		}
	})
}