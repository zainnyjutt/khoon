<?php
include('common/basepath.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $bp; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $bp; ?>css/index.css">
    <link rel="icon" href="<?php echo $bp; ?>assets/blooddrop.jpg">
    
    <title>Khoon | Donate Blood</title>
</head>
<body>
  <?php
  include('common/navbar.php')
  ?>
  
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo $bp; ?>assets/slider2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="<?php echo $bp; ?>model/find_donor.html" class="btn btn-primary sbutton" role="button">Find DONOR</a>
            <a href="<?php echo $bp; ?>model/become_donor.html" class="btn btn-primary sbutton" role="button">Become a DONOR</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $bp; ?>assets/slider1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="<?php echo $bp; ?>model/find_donor.html" class="btn btn-primary sbutton" role="button">Find DONOR</a>
            <a href="<?php echo $bp; ?>model/become_donor.html" class="btn btn-primary sbutton" role="button">Become a DONOR</a>
          </div>  
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $bp; ?>assets/slider3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="<?php echo $bp; ?>model/find_donor.html" class="btn btn-primary sbutton" role="button">Find DONOR</a>
            <a href="<?php echo $bp; ?>model/become_donor.html" class="btn btn-primary sbutton" role="button">Become a DONOR</a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1 class="display-4">PREVIOUS DONORS & RECEPIENTS</h1>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row" id="carouselRow1">
          <div class="col-md-4 carousel-col">
            <div class="card carousel-card">
              <div class="card-body">
                <h5 class="card-title carousel-card-title">Reviewer 1</h5>
                <p class="card-text carousel-card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 carousel-col">
            <div class="card carousel-card">
              <div class="card-body">
                <h5 class="card-title carousel-card-title">Reviewer 2</h5>
                <p class="card-text carousel-card-text">"Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 carousel-col">
            <div class="card carousel-card">
              <div class="card-body">
                <h5 class="card-title carousel-card-title">Reviewer 3</h5>
                <p class="card-text carousel-card-text">"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row" id="carouselRow2">
          <div class="col-md-4 carousel-col">
            <div class="card carousel-card">
              <div class="card-body">
                <h5 class="card-title carousel-card-title">Reviewer 4</h5>
                <p class="card-text carousel-card-text">"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 carousel-col">
            <div class="card carousel-card">
              <div class="card-body">
                <h5 class="card-title carousel-card-title">Reviewer 5</h5>
                <p class="card-text carousel-card-text">"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 carousel-col">
            <div class="card carousel-card">
              <div class="card-body">
                <h5 class="card-title carousel-card-title">Reviewer 6</h5>
                <p class="card-text carousel-card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>
  
<h1 class="display-4">Any Queries OR About US</h1>
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        <p class="card-text">If you have any queries just click the button below!</p>
        <a href="<?php echo $bp; ?>model/contact_us.html" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Want to know about us</h5>
        <p class="card-text">Just click the button below to know about us.</p>
        <a href="<?php echo $bp; ?>model/about_us.html" class="btn btn-primary">About Us</a>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<?php
include('common/footer.php')
?>
  <script src="./js/bootstrap.js"></script>
  <!-- <script src="./js/navbar.js"></script> -->
</body>
</html>
