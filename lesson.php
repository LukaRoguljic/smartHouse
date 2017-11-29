<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SmartHouse</title>
  <link href="css/vendor/all.css" rel="stylesheet">
  <link href="css/app/app.css" rel="stylesheet">
  <link href="css/random.css" rel="stylesheet">
</head>

<body>
  <!-- Wrapper required for sidebar transitions -->
  <div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#sidebar-chat" data-toggle="sidebar-menu" class="toggle pull-right visible-xs"><i class="fa fa-comments"></i></a>
          <a class="navbar-brand" href="index.html">SmartHouseMonitoring</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
      </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu">
      <div data-scrollable>
        <h4 class="category">Informacije o sustavu</h4>
        <div class="sidebar-block">
          <div class="media">
            <span class=" media-object icon-block half bg-gray-dark">
                    <i class="fa fa-adjust "></i>
                </span>
            
          </div>
          <p class="margin-none">Sustav, svojim korisnicima, pruža uvid u stanje vrijednosti temperature i vlage u njihovoj kući sa udaljene lokacije.</p>
        </div>
        <h4 class="category"></h4>
        <div class="sidebar-block">
          <ul class="list-group list-group-menu primary">
            <li class="list-group-item active">
              <a href="">Iznos temp.</a>
            </li>
            <li class="list-group-item active">
              <a href="">Iznos vlage </a>
            </li>
          </ul>
        </div>
        <div class="sidebar-block equal-padding">
          <a class="btn btn-block btn-default" href="library-grid.html">Back to Library</a>
        </div>
      </div>
    </div>

    
    <div class="st-pusher" id="content">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <div class="container-fluid">

            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media">
                  <span class="pull-right icon-block double media-object "><img src="images/people/110/image_screen.jpg" alt="People"/></span>
                  <div class="media-body">
                    <h1 class="h3 media-heading">Github Open-Source</h1>
                    <p>Ovaj cijeli projekt je napravljen u duhu "open-source" koncepta. Na "buttonu" GitHub možete pogledati kod za ovaj sustav te ga modificirati za svoje potrebe. Cilj Otvorenog koda je da što više ljudi sudjeluju u razvoju neke aplikacije kao i naobrazbe. Mnogo više možete naučiti gledajući druge kodove.</p>
                    <a href="https://github.com/LukaRoguljic/smartHouse" target="_blank"><span class="label bg-lightred">GitHub</span></a>
                    <span class="label bg-lightred">Beginner</span>
                  </div>
                </div>
              </div>
            </div>

            <h5>MONITORING</h5>
            <div class="panel panel-default curriculum open">
              <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                <div class="media">
                  <span class="icon-block half pull-left"><i class="fa fa-tachometer"></i></span>
                  <div class="media-body">
                    <form action="">
                      <input class="btn btn-primary" type="submit" name="login" value="Prijava"/>
                    </form>
                  </div>
                </div>
              </div>
              
            

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

    <!-- Footer -->
    <footer class="footer">
      <strong>ThemeKit</strong> v4.0.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->

  </div>
  <!-- /st-container -->

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
  <script src="js/vendor/all.js"></script>
  <script src="js/app/app.js"></script>
</body>
</html>