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
			$("#brand").html(r.brand.brandName);
			$("#nicAmt").html(r.brand.nicotineAmt);
			$("#numDay").html(r.numDay);
			$("#goal").html(r.goal);
			$("#bedtime").html(r.bedtime);
			$("#statistics").append("<tr><td>"+r.statistics.populartime+"</td><td>"+r.statistics.avgSmokesDay+"</td><td>"+r.statistics.totalSmokesMonth+"</td><td>"+r.statistics.moneySpent+"</td><td>"+r.statistics.moneySaved+"</td><td>"+r.statistics.cigarettesNotSmoked+"</td></tr>");
		},
		error: function(xhs, textStatus, errorThrown) {
			if(xhr.status === 404) {
				$("#errorMessage").show();
				$("#errorMessage").html("Error: "+errorThrown);
			}
		}
	})
});

$('#log-smoke').submit(function(e) {
	e.preventDefault();
	var now = new Date($.now());
	now = now.getHours()+":"+now.getMinutes();
	$("#log-button").addClass('btn-success').removeClass('btn-primary');
	// $("#submit").attr("disabled", "disabled");
	// console.log("hmm");
	$("#log-button").html("You successfully logged your smoke at " + now + "!");
});