<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>kodebike</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body id="home">
<!-- header -->
      
       

      <h1 class="logo">Kode-Bike</h1>
      <?php /* ?>
      <div class="menu">
      <a href="#contact" class="scroll">Register</a>      
      </div>
      <?php */ ?>
      <h2 style="margin-top: 123px;text-align: center;font-weight:bold;font-size:3em;color:#fff;">Rent Electric bicycle for easy commute</h2>
      
      <div class="contact1" id="contact">
        <div class="bottom-search-area hide-sm">
          <div class="col-12">
            <div class="text-success" style="display:none;text-align:center;margin-bottom:10px;color:#fff;font-weight:bold"><?php echo $_SESSION['success']; ?></div>
            <form id="search_form" name="register" action="" method="post" enctype="multipart/form-data" data-reactid=".0">
              <div class="search-form-input-wrapper" data-reactid=".0.0">
                <div class="location-wrapper" data-reactid=".0.0.0">
                  <span class="input-placeholder-group" data-reactid=".0.0.0.0">
                    <input required type="text" class="form-inline location input-large input-contrast" aria-autocomplete="both" aria-owns="menu-1" autocomplete="off" value="" placeholder="From Location" name="from_location" id="from_location" data-reactid=".0.0.0.0.1">
                  </span>
                  <p id="enter_from_location_error_message" class="bad hide" data-reactid=".0.0.0.1">Please Enter From location</p>
                </div>
                <div class="location-wrapper" data-reactid=".0.0.0">
                  <span class="input-placeholder-group" data-reactid=".0.0.0.0">
                    <input required type="text" class="form-inline location input-large input-contrast" aria-autocomplete="both" aria-owns="menu-1" autocomplete="off" value="" placeholder="To Location" name="to_location" id="to_location" data-reactid=".0.0.0.0.1">
                  </span>
                  <p id="enter_to_location_error_message" class="bad hide" data-reactid=".0.0.0.1">Please Enter TO location</p>
                </div>
                <span class="input-placeholder-group" data-reactid=".0.0.1">
                  <input required type="email" id="email" class="form-inline checkin search-option input-large input-contrast input-underline ui-datepicker-target" autocomplete="off" name="email" placeholder="Email address" data-reactid=".0.0.1.1">
                </span>
                <span class="input-placeholder-group" data-reactid=".0.0.2">
                  <input required type="text" id="phone_number" class="form-inline checkout search-option input-large input-contrast input-underline ui-datepicker-target" autocomplete="off" name="phone_number" placeholder="Phone Number" data-reactid=".0.0.2.1">
                </span>
              </div>
              <button type="submit" class="search-button form-inline btn btn-primary btn-large" id="submit_location" data-reactid=".0.2">Register</button>
            </form>
          </div>
        </div>
      </div>




       


      <!-- footer -->
      <div class="footer text-center">
        <div class="social">
        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
        </div>
      Powered by: <a href="http://www.kodeplay.com">www.kodeplay.com</a>
      </div>
      <!-- footer -->


      <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
      <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
          <!-- The container for the modal slides -->
          <div class="slides"></div>
          <!-- Controls for the borderless lightbox -->
          <h3 class="title">Title</h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <!-- The modal dialog, which will be used to wrap the lightbox content -->    
      </div>

<?php /* ?>
<a href="#home" class="gototop scroll"><i class="fa fa-angle-up  fa-3x"></i></a>
<?php */ ?>

<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


 
 
<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>