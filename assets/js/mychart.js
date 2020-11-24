const base_url = "http://localhost/bank-sampah/user/tampilDiagram";
$.ajax({
	url: base_url,
	success: function (data) {
		// console.log(data[1]'');
		// console.log(data[2]);''
		var ctx = document.getElementById("myPieChart1");
		var myPieChart = new Chart(ctx, {
			type: "pie",
			data: {
				labels: ["Withdraw", "Setoran"],
				datasets: [
					{
						data: [data[2], data[1]],
						backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc"],
						hoverBackgroundColor: ["#2e59d9", "#17a673", "#2c9faf"],
						hoverBorderColor: "rgba(234, 236, 244, 1)",
					},
				],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: "#dddfeb",
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false,
				},
				cutoutPercentage: 80,
			},
		});
	},
});
