function tampilRekening() {
	var idNasabah = document.getElementById('namaNasabah').value
	// console.log(idNasabah)
	if (idNasabah == '') {
		document.getElementById('no_rek').value = ''
	} else {
		$.ajax({
			url: '/banksampah/user/tampilDataNasabah/' + idNasabah,
			type: 'get',
			dataType: 'json',
			success: function (data) {
				// console.log(data.no_rekening)
				if (data) {
					document.getElementById('no_rek').value = data.no_rekening
				} else {
					document.getElementById('no_rek').value = ''
				}
			}
		})
	}
}

function tampilSampah() {
	var idHarga = document.getElementById('namaSampah').value
	if (idHarga == '') {
		// document.getElementById('nm_sampah').value = ''
		document.getElementById('hrg_sampah').value = ''
		document.getElementById('st_sampah').value = ''
	} else {
		$.ajax({
			url: '/bank-sampah/user/tampilDataSampah/' + idHarga,
			type: 'get',
			dataType: 'json',
			success: function (file) {
				// console.log(file)
				if (file) {
					// document.getElementById('nm_sampah').value = file.jenis_sampah
					document.getElementById('hrg_sampah').value = file.harga
					document.getElementById('st_sampah').value = file.satuan
				} else {
					// document.getElementById('nm_sampah').value = ''
					document.getElementById('hrg_sampah').value = ''
					document.getElementById('st_sampah').value = ''
				}
			}
		})
	}
}

// function tampilSetoranNasabah(){
// 	var idNasabah = document.getElementById('id_nasabah').value
// }

$(document).ready(function () {

	$('#jumlahSampah').keyup(function () {
		var hrg_sampah = document.getElementById('hrg_sampah').value
		var jumlahSampah = document.getElementById('jumlahSampah').value
		document.getElementById('hasil').value = hrg_sampah * jumlahSampah
	})

	$('#dataTable').DataTable({
		"lengthMenu": [
			[5, 10, 15, 20, -1],
			[5, 10, 15, 20, 'all']
		]
	})
	// 	var get_wilayah = 'https://x.rajaapi.com/MeP7c5newpy77Dqybi96tXf6q6ZfvacsnAPJFfbhgeIpVWgDOfDHHP8k9C/m/wilayah/'
	// 	var get_kecamatan = 'kecamatan?idkabupaten=3674'
	// 	$.getJSON(get_wilayah + get_kecamatan, function (data) {
	// 		console.log(data)
	// 		var a, html = ''
	// 		console.log()
	// 		html += '<option>-- Pilih Kecamatan --</option>'
	// 		for (a = 0; a < data.data.length; a++) {
	// 			html += '<option id="id_kecamatan' + a + '" value="' + data.data[a].name + '" data-id="' + data.data[a].id + '">' + data.data[a].name + '</option>'
	// 		}
	// 		$('#kecamatan').html(html)
	// 		$('#kecamatan').attr("data-banyak", data.data.length)
	// 	})
})
