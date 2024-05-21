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
  function toggleFAQAnswer(answerId) {
	var answer = document.getElementById(answerId);
	if (answer.style.display === "none") {
		answer.style.display = "block";
	} else {
		answer.style.display = "none";
	}
}

function toggleInfoAnswer(informasiId) {
	var informasi = document.getElementById(informasiId);
	if (informasi.style.display === "none") {
		informasi.style.display = "block";
	} else {
		informasi.style.display = "none";
	}
}

function redirectToCarPage() {
    var selectedCar = document.getElementById('mobilPilihan').value.toLowerCase();

    switch (selectedCar) {
        case 'bmw':
            window.location.href = 'bmw.html';
            break;
        case 'bugatti':
            window.location.href = 'bugatti.html';
            break;
        case 'ferrari':
            window.location.href = 'ferrari.html';
            break;
        case 'lamborghini':
            window.location.href = 'lamborghini.html';
            break;
        case 'porsche':
            window.location.href = 'porsche.html';
            break;
        case 'honda':
            window.location.href = 'honda.html';
            break;
        case 'ford':
            window.location.href = 'ford.html';
            break;
        default:
            break;
    }
}
document.querySelector('.form').addEventListener('submit', function (event) {
    event.preventDefault();
    redirectToCarPage();
});
