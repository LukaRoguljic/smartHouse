<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer" lang="en">

<head>
  <link rel="icon" href="images/arduino_link.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SmartHouse</title>
  <link href="css/vendor/all.css" rel="stylesheet">
  <link href="css/app/app.css" rel="stylesheet">
</head>

<body>

  <!-- Wrapper required for sidebar transitions -->
  <div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
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
        <div class="collapse navbar-collapse" id="main-nav">
          
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="login.html">Prijavi se</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->

      </div>
    </div>
    <!-- content push wrapper -->
    <div class="st-pusher" id="content">

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <div class="cover overlay cover-image-full home">
            <img src="images/smart_tech.png" alt="" />

            <div class="overlay overlay-bg-black">
              <div class="container">
                <div class="page-section">
                  <h1 class="margin-none text-display-1 text-overlay">Smart House Monitoring</h1>

                  <p class="text-subhead text-overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur consequatur distinctio earum ipsam. <span class="hidden-xs hidden-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus hic
                    quisquam reprehenderit vero voluptatum? Accusantium in nesciunt perspiciatis repellendus sed! Aliquid
                    architecto ducimus optio reprehenderit.</span></p>

                  <br/>
                  <a class="btn bg-lightred btn-lg" href="registration.html">Registriraj se</a>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="text-center">
              <h2>Mogućnosti &amp; Značajke</h2>

              <br/>
            </div>
            <div class="row" data-toggle="gridalicious">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-tachometer fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Praćenje kućne temperature</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-tint   fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Vrijednost vlage</p>
                    </div>
                  </div>
                </div>
              </div>
			  
			  <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-lightbulb-o  fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Stanje osvjetljenja</p>
                    </div>
                  </div>
                </div>
              </div>

             
              

            
            <div class="row">
              <div class="col-md-6">
                <div class="media">
                  <img src="images/people/110/aleksic_logo.jpg" alt="People" class="pull-left img-circle media-object" />

                  <div class="media-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quo!</p>
                    <p>
                      <strong>Aleksić Davor <span class="text-muted">daleksic14@gmail.com.</span></strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="media">
                  <img src="images/people/110/luka_logo.jpg" alt="People" class="pull-left img-circle media-object" />

                  <div class="media-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quo!</p>
                    <p>
                      <strong>Roguljić Luka <span class="text-muted">luka.roguljic16@gmail.com</span></strong>
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <br/>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->



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