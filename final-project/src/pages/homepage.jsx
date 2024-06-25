import React from "react";
import "../css/homepage.css";

export default function Homepage() {
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  }

  window.onscroll = function () {
    toggleScrollToTopButton();
  };

  function toggleScrollToTopButton() {
    var scrollToTopButton = document.querySelector(".scroll-to-top-btn");
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      scrollToTopButton.style.display = "block";
    } else {
      scrollToTopButton.style.display = "none";
    }
  }

  const slider = document.querySelector(".card-slider");
  const cards = document.querySelectorAll(".card");
  let currentCard = 0;

  function nextCard() {
    slider.dataset.active = currentCard;
    currentCard = (currentCard + 1) % cards.length;
    cards.forEach((card) => {
      card.classList.remove("active");
    });
    cards[currentCard].classList.add("active");
  }

  setInterval(nextCard, 5000);
  return (
    <div>
      <>
        <nav
          className="navbar navbar-expand-lg navbar-light bg-primary"
          id="navigation"
        >
          <div className="container">
            <h4 className="nb"> Trip</h4>
            <h4 className="nb2">Explore</h4>
            <button
              className="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span className="navbar-toggler-icon" />
            </button>
            <div className="collapse navbar-collapse" id="navbarNavDropdown">
              <ul className="navbar-nav ml-auto">
                <li className="nav-item active">
                  <a className="nav-link" href="#">
                    Perjalanan <span className="sr-only">(current)</span>
                  </a>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="stories.html">
                    cerita
                  </a>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="tricksperjalanan.html">
                    triks perjalanan
                  </a>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="penawaran.html">
                    penawaran
                  </a>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="mobil.html">
                    mobil
                  </a>
                </li>
                <li className="nav-item mt-1" id="navid">
                  <img src="./img/user-regular.svg" alt="" />
                  <a className="nav-link btn btn-primary " href="cari.html"></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div className="jumbotron jumbotron-lg " id="jumbo">
          <p className="display-4 font-weight-bold">Pesan tiket penerbangan</p>
          <p>situs lain sederhadan tidak dapat menemukan.</p>
          <div class="button-container">
           <a href="#" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
           </div>


        </div>
        
        <section>
          <div className="container mb-4">
            <a href="">trips explore.com</a>
            <a href="">Penerbangan Murah </a>
          </div>
          <section>
            <div className="card-container">
              <div className="card-deck ">
                <div className="card border-0">
                  <img
                    src="./img/plane.png"
                    className="card-img-top"
                    alt="..."
                  />
                  <div className="card-body">
                    <h5 className="card-title font-weight-bold">
                      Satu pencarian, semua penerbangan
                    </h5>
                    <p className="card-text">
                      trips explore menemukan penerbangan murah yang tidak dapat
                      dilihat oleh situs lain
                    </p>
                    <p className="card-text">
                      <small className="text-muted">
                        Last updated 3 mins ago
                      </small>
                    </p>
                  </div>
                </div>
                <div className="card border-0">
                  <img
                    src="./img/credit.png"
                    className="card-img-top"
                    alt="..."
                  />
                  <div className="card-body">
                    <h5 className="card-title font-weight-bold">
                      Pemesanan yang aman dan mudah
                    </h5>
                    <p className="card-text">
                      Kami menerima sebagian besar metode pembayaran dan
                      menjamin tingkat keamanan tertinggi
                    </p>
                    <p className="card-text">
                      <small className="text-muted" />
                    </p>
                  </div>
                </div>
                <div className="card border-0">
                  <img
                    src="./img/teamwork.png"
                    className="card-img-top"
                    alt="..."
                  />
                  <div className="card-body">
                    <h5 className="card-title font-weight-bold">
                      Dipercaya oleh jutaan orang
                    </h5>
                    <p className="card-text">
                      Bergabunglah dengan lebih dari 10 juta penumpang setiap
                      tahun yang memesan dengan mudah
                    </p>
                    <p className="card-text">
                      <small className="text-muted" />
                    </p>
                  </div>
                </div>
                <div className="card border-0">
                  <img
                    src="./img/plane-ticket.png"
                    className="card-img-top"
                    alt="..."
                  />
                  <div className="card-body">
                    <h5 className="card-title font-weight-bold">
                      harga terjangkau{" "}
                    </h5>
                    <p className="card-text">
                      kami menyediakan maskapai termurah dengan fasilitas
                      terbaik
                    </p>
                    <p className="card-text">
                      <small className="text-muted" />
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div className="container">
              <h4 className="font-weight-bold mb-3">
                penerbangan nasional terpopuler
              </h4>
              <div className="jumbotron bg-white">
                <div className="grub">
                  <div className="div">
                    <div className="card-group mb-3 border-0">
                      <div className="card border-0 rounded-circle" id="gambar">
                        <a href="URL_tujuan">
                          <img
                            src="./img/garuda.jpg"
                            className="card-img-top border-0 rounded-circle"
                            alt="..."
                          />
                        </a>
                      </div>
                      <div className="card border-0 rounded-circle" id="gambar">
                        <a href="URL_tujuan">
                          <img
                            src="./img/transnusa.jpg"
                            className="card-img-top boder rounded-circle"
                            alt="..."
                          />
                        </a>
                      </div>
                      <div className="card border-0 rounded-circle" id="gambar">
                        <a href="URL_tujuan">
                          <img
                            src="./img/indonesia.jpg"
                            className="card-img-top boder rounded-circle"
                            alt="..."
                          />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div className="card-group">
                      <div className="card border-0 rounded-circle" id="gambar">
                        <a href="URL_tujuan">
                          <img
                            src="./img/mandala.jpg"
                            className="card-img-top boder rounded-circle"
                            alt="..."
                          />
                        </a>
                      </div>
                      <div className="card border-0 rounded-circle" id="gambar">
                        <a href="https://www.lionair.co.id/hubungi-kami">
                          <img
                            src="./img/lion.jpg"
                            className="card-img-top boder rounded-circle"
                            alt="..."
                          />
                        </a>
                      </div>
                      <div className="card border-0 rounded-circle" id="gambar">
                        <a href="URL_tujuan">
                          <img
                            src="./img/xpress.png"
                            className="card-img-top boder rounded-circle"
                            alt="..."
                          />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="tutor">
              <ul className="list-group mt-3">
                <li className="list-group-item">
                  <h4 className="font-weight-bold" id="cara-memesan">
                    Cara memesan penerbangan murah
                  </h4>
                  <p>
                    trips explore.com adalah cara terbaik untuk mencari,
                    menemukan, dan memesan penerbangan murah. Kami membuat
                    diskon, penawaran penerbangan, dan tarif udara murah mudah
                    ditemukan.
                  </p>
                  <p>
                    Untuk menemukan penerbangan murah secara online, Kiwi.com
                    adalah cara terbaik dan termudah untuk mendapatkan diskon
                    pada rute satu arah, pulang pergi, internasional, dan
                    multi-kota. Panduan ini menjelaskan bagaimana trips
                    explore.com bekerja, dan bagaimana kami dapat membantu Anda
                    mencari dan memesan penerbangan termurah yang tersedia.
                  </p>
                  <h4 className="font-weight-bold" id="tips">
                    Tips untuk memesan penerbangan murah di trips explore.com
                  </h4>
                  <h5 className="font-weight-bold" id="waktu">
                    Waktu dan hari terbaik untuk memesan penerbangan
                  </h5>
                  <p>
                    Mudah untuk menemukan waktu dan hari terbaik untuk terbang
                    menggunakan mesin pencari yang fleksibel dari trips
                    explore.com Anda dapat memasukkan tanggal yang tepat yang
                    Anda inginkan untuk bepergian, atau Anda dapat memilih
                    rentang tanggal untuk menemukan opsi termurah
                  </p>
                  <p>
                    Ketika Anda mencari, Anda akan melihat harga terendah yang
                    tersedia pada setiap tanggal, sehingga Anda dapat memilih
                    yang paling cocok untuk Anda, atau filter untuk menemukan
                    opsi tercepat atau terbaik. Anda juga dapat memfilter
                    penerbangan berdasarkan harga maksimum, atau memilih rentang
                    harga.
                  </p>
                  <h4 className="font-weight-bold">
                    Temukan penerbangan murah tanpa tujuan
                  </h4>
                  <p>
                    Jika Anda ingin menemukan penerbangan termurah ke mana saja,
                    Anda juga dapat melakukannya di Kiwi.com. Jika Anda tidak
                    memiliki tujuan tertentu, cukup pilih lokasi keberangkatan
                    Anda dan pilih ’Ke mana saja’ sebagai tujuan Anda. Ini akan
                    menunjukkan rute termurah dari lokasi Anda.
                  </p>
                  <p>
                    Anda juga dapat menggunakan pencarian peta kami untuk
                    menemukan tujuan murah: perbesar atau pindahkan peta, dan
                    tujuan dan harga akan muncul. Anda dapat melihat penawaran
                    terbaik yang dihighlight dengan warna hijau, jadi Anda tahu
                    Anda mendapatkan harga yang bagus.
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <div className="container mt-3">
            <div>
              <div className="jumbotron" id="slider">
                <h1 className="font-weight-bold">
                  Destinasi populer musim ini
                </h1>
                <p>Kami merekomendasikan destinasi terbaik di musim ini</p>
                <div className="card-group">
                  <div className="card bg-dark text-white" id="cardm">
                    <div className="card-img-overlay">
                      <h5 className="card-title">Everest</h5>
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                    </div>
                  </div>
                  <div className="card" id="cardk">
                    <div className="card-body">
                      <h5 className="card-title">sumbawa</h5>
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                    </div>
                  </div>
                  <div className="card" id="cardf">
                    <div className="card-body">
                      <h5 className="card-title">lampung</h5>
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                    </div>
                    <div className="card-footer">
                      <small className="text-muted" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <button
              type="button"
              className="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModal"
            ></button>
            <div
              className="modal fade"
              id="exampleModal"
              tabIndex={-1}
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div className="modal-dialog" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <h5 className="modal-title" id="exampleModalLabel">
                      Judul Modal
                    </h5>
                    <button
                      type="button"
                      className="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div className="modal-body">Konten Modal di sini...</div>
                  <div className="modal-footer">
                    <button
                      type="button"
                      className="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Tutup
                    </button>
                    <button type="button" className="btn btn-primary">
                      Simpan Perubahan
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            className="scroll-to-top-btn btn-primary rounded-pill"
            onClick={() => scrollToTop()}
          >
            <i className="fas fa-arrow-up" />
          </button>
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <hr />
          <footer className="text-center text-lg-start bg-light text-muted">
            <section className="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
              <div className="me-5 d-none d-lg-block"></div>
              <div>
                <a href="" className="me-4 text-reset">
                  <i className="bi bi-facebook" />
                </a>
                <a href="" className="me-4 text-reset">
                  <i className="bi bi-twitter" />
                </a>
                <a href="" className="me-4 text-reset">
                  <i className="bi bi-google" />
                </a>
                <a href="" className="me-4 text-reset">
                  <i className="bi bi-instagram" />
                </a>
                <a href="" className="me-4 text-reset">
                  <i className="bi bi-linkedin" />
                </a>
                <a href="" className="me-4 text-reset">
                  <i className="bi bi-github" />
                </a>
              </div>
            </section>
            <section className="">
              <div className="container text-center text-md-start mt-5">
                <div className="row mt-3">
                  <div className="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 className="text-uppercase fw-bold mb-4">
                      <i className="bi bi-gem me-3" />
                      Trips Explore
                    </h6>
                    <p>
                      Discover new adventures and create unforgettable memories
                      with our travel services. Explore the world with comfort
                      and the best prices.
                    </p>
                  </div>
                  <div className="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 className="text-uppercase fw-bold mb-4">Products</h6>
                    <p>
                      <a href="#!" className="text-reset">
                        Angular
                      </a>
                    </p>
                    <p>
                      <a href="#!" className="text-reset">
                        React
                      </a>
                    </p>
                    <p>
                      <a href="#!" className="text-reset">
                        Vue
                      </a>
                    </p>
                    <p>
                      <a href="#!" className="text-reset">
                        Laravel
                      </a>
                    </p>
                  </div>
                  <div className="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 className="text-uppercase fw-bold mb-4">
                      Useful links
                    </h6>
                    <p>
                      <a href="#!" className="text-reset">
                        Pricing
                      </a>
                    </p>
                    <p>
                      <a href="#!" className="text-reset">
                        Settings
                      </a>
                    </p>
                    <p>
                      <a href="#!" className="text-reset">
                        Orders
                      </a>
                    </p>
                    <p>
                      <a href="#!" className="text-reset">
                        Help
                      </a>
                    </p>
                  </div>
                  <div className="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 className="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                      <i className="bi bi-house me-3" />
                      Daerah Istimewa Yogyakarta 55584
                    </p>
                    <p>
                      <i className="bi bi-phone me-3" /> +62 1234 1234
                    </p>
                    <p>
                      <i className="bi bi-printer me-3" /> +62 1234 1234
                    </p>
                  </div>
                </div>
              </div>
            </section>
            <div
              className="text-center p-4"
              style={{ backgroundColor: "rgba(0, 0, 0, 0.05)" }}
            >
              © 2024 Hak Cipta Dilindungi
              <a className="text-reset fw-bold" href="https://mdbootstrap.com/">
                https://tripsexplore.com/
              </a>
            </div>
          </footer>
        </section>
      </>
    </div>
  );
}
