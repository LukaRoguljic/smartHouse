<?php
   include('session.php');
?>
<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">

<head>
  <?php include("monitoring_head.html");?>
</head>

<body>
  <div class="st-container">
    <?php include("monitoring_navbar.html");?>
    <?php include("sidebar.html"); ?>
    <?php include("monitoring_main_content.html");?>
</div>

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "learning",
      skins: {
        "default": {
          "primary-color": "#16ae9f"
        },
        "orange": {
          "primary-color": "#e74c3c"
        },
        "blue": {
          "primary-color": "#4687ce"
        },
        "purple": {
          "primary-color": "#af86b9"
        },
        "brown": {
          "primary-color": "#c3a961"
        }
      }
    };
  </script>

<script>
  function heat_function() {
    var x = Math.floor((Math.random() * 13) + 15);
    document.getElementById("heat_demo").innerHTML = x;
}

function moisture_function() {
    var y = Math.floor((Math.random() * 35) + 25);
    document.getElementById("moisture_demo").innerHTML = y;
}

function illumination_function() {
    var z = Math.floor((Math.random() * 300) + 50);
    document.getElementById("illumination_demo").innerHTML = z;
}
</script>
<script src="js/vendor/all.js"></script>
<script src="js/app/app.js"></script>
</body>
</html>