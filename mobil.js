(function () {
	window.onload = () => {
		const obj = document.querySelector("#gallery");
		const time = 10000;
		function animStart() {
			if (obj.classList.contains("active") == false) {
				obj.classList.add("active");
				setTimeout(() => {
					animEnd();
				}, time);
			}
		}
		function animEnd() {
			obj.classList.remove("active");
			obj.offsetWidth;
		}
		document.addEventListener("scroll", function () {
			animStart();
		});
		window.addEventListener("resize", animStart);
		animStart();
	};
})();
  function isiLokasiPenjemputan(destinasi) {
    var now = new Date();
    var tahun = now.getFullYear();
    var bulan = ('0' + (now.getMonth() + 1)).slice(-2);
    var tanggal = ('0' + now.getDate()).slice(-2);
    var jam = ('0' + now.getHours()).slice(-2);
    var menit = ('0' + now.getMinutes()).slice(-2);

    var waktuSekarang = tahun + '-' + bulan + '-' + tanggal + 'T' + jam + ':' + menit;

    document.getElementById('lokasiPenjemputan').value = destinasi;
    document.getElementById('tanggalPenjemputan').value = waktuSekarang;
    document.getElementById('tanggalPengambilan').value = waktuSekarang;
  }
