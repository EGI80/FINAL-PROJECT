<!DOCTYPE html>
<html lang="id">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

  <style>
    .tim-container-member {
        width: 80%;
        max-width: 1000px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
        box-sizing: border-box;
        margin: auto;
    }

    .tim-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .tim-header h1 {
        margin: 0;
        font-size: 2.5em;
        color: #333;
    }

    .tim-header p {
        margin: 10px 0 0;
        font-size: 1.2em;
        color: #777;
    }

    .tim-members {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .tim-member {
        flex: 0 0 45%; /* Adjust the width of each member card */
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 30px;
        transition: transform 0.3s ease;
        box-sizing: border-box;
    }

    .tim-member:hover {
        transform: scale(1.05);
    }

    .member-img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-bottom: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .tim-member h3 {
        margin: 10px 0 5px;
        font-size: 1.5em;
        color: #333;
    }

    .tim-member p {
        margin: 5px 0 0;
        font-size: 1em;
        color: #777;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .social-icon {
        margin: 0 10px;
        color: #555;
        font-size: 1.5em;
        transition: color 0.3s;
    }

    .social-icon:hover {
        color: #007bff;
    }

    .gallery {
        margin-top: 50px;
    }

    .gallery-images {
        display: flex;
        flex-wrap: wrap;
    }

    .gallery-images img {
        width: 200px;
        height: auto;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .tim-member {
            flex: 0 0 100%;
        }
    }
  </style>
</head>
<section class="team" id="team">
    <body>
    <div class="tim-container-member">
        <div class="tim-header lg">
            <h1>Tim Kami</h1>
            <p>Kenali lebih dekat dengan tim profesional kami.</p>
        </div>
        <div class="tim-members">
            <div class="tim-member">
                <img src="https://i.ibb.co.com/gVJkBT5/EGI-DIAN-ADI-PRADANA.jpg" alt="EGI DIAN ADI PRADANA" class="member-img">
                <h3>EGI DIAN ADI PRADANA</h3>
                <p>22.11.4745</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/001ardhana?igsh=bzhqNGc3N25nODB6&utm_source=qr" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/EGI80" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="mailto:egidianadi@students.amikom.ac.id" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="tim-member">
                <img src="https://i.ibb.co.com/BqHWTmy/SALMAN-AL-FARISY.jpg" alt="SALMAN AL FARISY" class="member-img">
                <h3>SALMAN AL FARISY</h3>
                <p>22.11.4707</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/slmnlfrsy_?igsh=MXJ5Z3EyeDRhMjkxaA==" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/zyy993" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="mailto:salmanalfarisy4707@students.amikom.ac.id" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="tim-member">
                <img src="https://i.ibb.co.com/xLV8wZ1/DEO-PAVENDA-PUTRA.jpg" alt="EUODEO PAVENDA PUTRA" class="member-img">
                <h3>EUODEO PAVENDA PUTRA</h3>
                <p>22.11.4705</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/deopavenda?igsh=MXIxejFoNXZlZjF0Nw==" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/deopavenda" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="mailto:deopavenda@students.amikom.ac.id" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="tim-member">
                <img src="https://i.ibb.co.com/vPt4Smy/SAVE-20240703-131810.jpg" alt="MUHAMMAD GHOZI ALGHIFARI" class="member-img">
                <h3>MUHAMMAD GHOZI ALGHIFARI</h3>
                <p>22.11.4682</p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="mailto:ghozi@example.com" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="tim-member">
                <img src="https://i.ibb.co.com/fHVFsBR/HAMKA.jpg" alt="HAMKA NANDA ERINDRA" class="member-img">
                <h3>HAMKA NANDA ERINDRA</h3>
                <p>22.11.4683</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/haka_mii/" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/misakisimp" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="mailto:hamkananda@students.amikom.ac.id" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>

  <!-- Script Bootstrap, jQuery, dan Slick -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    </body>
    </section>
</html>
