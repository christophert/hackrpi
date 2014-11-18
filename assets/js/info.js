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
			$("#statistics").append("<tr><td>"+r.statistics.populartime+"</td><td>"+r.statistics.avgSmokesDay+"</td><td>"+r.statistics.totalSmokesMonth+"</td><td>$"+r.statistics.moneySpent+"</td><td>$"+r.statistics.moneySaved+"</td><td>"+r.statistics.cigarettesNotSmoked+"</td></tr>");
			$.each(r.log, function(i, log) {
				 $("#smokelog").prepend("<tr><td>"+humanTime(log.logentry.logtime)+"</td></tr>");
			});
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
	var epoch = (new Date).getTime();
	$.ajax({
		type: "POST",
		url: "/api/log.php",
		timeout: 2000,
		cache: false,
		success: function(r) {
				$("#log-button").addClass('btn-success').removeClass('btn-primary');
				$("#log-button").attr("disabled", "disabled");
				// console.log("hmm");
				$("#log-button").html("You successfully logged your smoke at " + now + "!");
				$("#smokelog").append("<tr><td>"+humanTime(epoch)+"</td></tr>");
		},
		error: function(xhs, textStatus, errorThrown) {
			if(xhr.status === 510) {
				$("#log-button").addClass('btn-danger').removeClass('btn-primary');
				$("#log-button").attr("disabled", "disabled");
				$("#log-button").html("There was an error logging your smoke.");
			}
		}
	})
});

var humanTime = function(t) {
	if(t > 0) {
		var date = new Date(t*1000);
		return date;
	}
}