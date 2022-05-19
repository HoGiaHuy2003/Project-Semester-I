<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/project/public/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/project/public/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="http://yoursite.com/themify-icons.css">
    <span class="ti-download"></span>
</head>
<body   >
    <div class="container">
      <div class="header">
        <div class="navbar" style="z-index: 100; left: 0;" >
          <div class="logo">
            <img src="http://localhost/project/public/images/Auctions%20Table.png" style="width: 90px;">
          </div>
        <div class="nav">              
                <li class="nav-item">
                  <a class="nav-link" href="?method=product&action=show">AUCTION</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CATEGORY</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACT US</a>
                </li>
        </div>
        <div class="nav">
          <a href="#" class="ti-search"></a>
          <a href="?method=product" class="ti-user"></a>
        </div>
        </div>
      </div>
        <div class="main">
          <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <a href="https://stackoverflow.com/questions/60447614/how-to-make-image-clickable-in-automatic-and-manual-slideshows">
              <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aphelios_0.jpg" style="width:100%" height="400px">
              </a> 
            </div>              
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <a href="https://stackoverflow.com/questions/60447614/how-to-make-image-clickable-in-automatic-and-manual-slideshows">
              <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aphelios_0.jpg" style="width:100%" height="400px">
              </a> 
            </div>
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <a href="https://stackoverflow.com/questions/60447614/how-to-make-image-clickable-in-automatic-and-manual-slideshows">
              <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aphelios_0.jpg" style="width:100%" height="400px">
              </a> 
            </div>
            <div>
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
              <br>
              <div style="text-align:center" >
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
              </div>
            </div>
            <div class="row row1" >
              <div class="text1">
                <B>ALL OUR PRODUCTS</B>
                <div class="line-1"></div>
              </div>
              <div class="column">
                <a href="https://stackoverflow.com/questions/60447614/how-to-make-image-clickable-in-automatic-and-manual-slideshows">
                <img src="https://cdngarenanow-a.akamaihd.net/games/lol/2020/LOLwebsite/champion/Aatrox_0.jpg" alt="stuff" style="width:100%" height="300px">
                </a> 
              </div>
              <div class="column">
                <a href="https://stackoverflow.com/questions/60447614/how-to-make-image-clickable-in-automatic-and-manual-slideshows">
                <img src="https://cdngarenanow-a.akamaihd.net/games/lol/2020/LOLwebsite/champion/Aatrox_0.jpg" alt="stuff" style="width:100%" height="300px">
                </a> 
              </div>
              <div class="column">
                <a href="https://stackoverflow.com/questions/60447614/how-to-make-image-clickable-in-automatic-and-manual-slideshows">
                <img src="https://cdngarenanow-a.akamaihd.net/games/lol/2020/LOLwebsite/champion/Aatrox_0.jpg" alt="stuff" style="width:100%" height="300px">
                </a> 
            </div>
        
          </div>
          <p style="text-align: center;">
            ABOUT US <br>
We are an organization selling valuable items and goods through auctions <br>
we have a vast experience of organizing auctions for past 25 years.
          </p>
      <div class="footer">
        <div class="clearfix">
          <div class="box" style="color: white;">
          <img src="http://localhost/project/public/images/To%20make%20cool%20text%20like%20this,%20select%20some%20text%20and%20hit%20the%20Effects%20tab%20in%20your%20top%20toolbar..png" width="100%" height="130px">
          </div>
          <div class="box" style="color: white;">
            <p>ADDRESS: </p>
            <p>54-56 Lê Thanh Nghị, Q. Hai Bà Trưng </p>
            </div>
            <div class="box" style="color: white;">
              <p>CONTACT US: </p>
              <p>+84 9999999</p>
              <p>auctionsprovip@gmail.com</p>
              </div>
        </div>
      </div>
    </div>
    </div>
    
<script>
    let slideIndex = 1;
    var timer = null;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
      clearTimeout(timer);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
      clearTimeout(timer);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n==undefined){n = ++slideIndex}
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      timer = setTimeout(showSlides, 5000);
    }
    
    </script>
    
</body>
</html>