// function tampilRekening() {
// 	var idNasabah = document.getElementById('namaNasabah').value
// 	// console.log(idNasabah)
// 	if (idNasabah == '') {
// 		document.getElementById('no_rek').value = ''
// 	} else {
// 		$.ajax({
// 			url: '/bank-sampah/user/tampilDataNasabah/' + idNasabah,
// 			type: 'get',
// 			dataType: 'json',
// 			success: function (data) {
// 				// console.log(data.no_rekening)
// 				if (data) {
// 					document.getElementById('no_rek').value = data.no_rekening
// 				} else {
// 					document.getElementById('no_rek').value = ''
// 				}
// 	 		}
// 		})
// 	}
// }

// $('.page-scroll').on('click', function(e){

// 	var tujuan = $(this).attr('href');
// 	var elemenTujuan = $(tujuan);

// 	$('body').animate({
// 		scrollTop: elemenTujuan.offset().top
// 	});

// 	e.preventDefault();
// });

$(document).ready(function () {
	$("#tUser").change(function () {
		var tUser = document.getElementById("tUser").value;
		$.ajax({
			url: "/bank-sampah/user/tampilDiagram" + tUser,
			method: "GET",
			dataType: "json",
			success: function (data) {
				console.log(data);
				// var label = [];
				// var value = [];
				// for (var i in data) {
				// 	label.push(data[i].tanggal_transaksi);
				// 	value.push(data[i].jumlah_subtotal);
				// }
				var ctx = document.getElementById("myPieChart1");
				var myPieChart1 = new Chart(ctx, {
					type: "pie",
					data: {
						labels: ["Transaksi", "Setoran"],
						datasets: [
							{
								data: [50, 50],
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
	});

	$("#tgl_cetak").change(function () {
		var tgl_cetak = document.getElementById("tgl_cetak").value;
		$.ajax({
			url: "/bank-sampah/user/tampilCetak/" + tgl_cetak,
			type: "get",
			dataType: "json",
			success: function (data) {
				// console.log(data);
				var html = "";
				var no = 1;
				data.forEach((data) => {
					html += "<tr>";
					html += "<td>" + no++ + "</td>";
					html += "<td>" + data.nama + "</td>";
					html += "<td>" + data.jenis_sampah + "</td>";
					html += "<td>" + data.harga + "</td>";
					html += "<td>" + data.banyak_sampah + "</td>";
					html += "<td>" + data.satuan + "</td>";
					html += "<td>" + data.jumlah_subtotal + "</td>";
					html += "</tr>";
				});
				$("#isi_transaksi").html(html);
			},
		});
		document.getElementById("tombol_cetak").href =
			"/bank-sampah/c_excel/cetak/" + tgl_cetak;
	});

	$("#datatable").DataTable({
		lengthMenu: [
			[5, 10, 15, 20, -1],
			[5, 10, 15, 20, "all"],
		],
	});

	$("#jumlahSampah").keyup(function () {
		var hrg_sampah = document.getElementById("hrg_sampah").value;
		var jumlahSampah = document.getElementById("jumlahSampah").value;
		document.getElementById("hasil").value = hrg_sampah * jumlahSampah;
	});
});

function tampilCetak() {
	
	$.ajax({
		url: "/bank-sampah/user/tampilCetak/" + tgl_cetak,
		type: "get",
		dataType: "json",
		success: function (data) {
			// console.log(data);
			var html = "";
			var no = 1;
			data.forEach((data) => {
				html += "<tr>";
				html += "<td>" + no++ + "</td>";
				html += "<td>" + data.nama + "</td>";
				html += "<td>" + data.jenis_sampah + "</td>";
				html += "<td>" + data.harga + "</td>";
				html += "<td>" + data.banyak_sampah + "</td>";
				html += "<td>" + data.satuan + "</td>";
				html += "<td>" + data.jumlah_subtotal + "</td>";
				html += "</tr>";
			});
			$("#isi_transaksi").html(html);
		},
	});
	document.getElementById("tombol_cetak").href =
		"/bank-sampah/c_excel/cetak/" + tgl_cetak;
}



function tampilSampah() {
	var idHarga = document.getElementById("namaSampah").value;
	if (idHarga == "") {
		// document.getElementById('nm_sampah').value = ''
		document.getElementById("hrg_sampah").value = "";
		document.getElementById("st_sampah").value = "";
	} else {
		$.ajax({
			url: "/bank-sampah/user/tampilDataSampah/" + idHarga,
			type: "get",
			dataType: "json",
			success: function (file) {
				// console.log(file)
				if (file) {
					// document.getElementById('nm_sampah').value = file.jenis_sampah
					document.getElementById("hrg_sampah").value = file.harga;
					document.getElementById("st_sampah").value = file.satuan;
				} else {
					// document.getElementById('nm_sampah').value = ''
					document.getElementById("hrg_sampah").value = "";
					document.getElementById("st_sampah").value = "";
				}
			},
		});
	}
}

// function tampilSetoranNasabah(){
// 	var idNasabah = document.getElementById('id_nasabah').value
// }
