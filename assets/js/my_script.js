$(document).ready(function () {


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
				if (data.length > 0) {
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
				} else {
					html += "<tr>";
					html += "<td colspan=7 align=center>Tidak Ada Data</td>";
					html += "</tr>";
				}
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

var tgl_cetak = document.getElementById("tgl_cetak").value;
if(tgl_cetak){
	$.ajax({
		url: "/bank-sampah/user/tampilCetak/" + tgl_cetak,
		type: "get",
		dataType: "json",
		success: function (data) {
			// console.log(data);
			var html = "";
			var no = 1;
			if (data.length > 0) {
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
				} else {
					html += "<tr>";
					html += "<td colspan=7 align=center>Tidak Ada Data</td>";
					html += "</tr>";
				}
				$("#isi_transaksi").html(html);
			}
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