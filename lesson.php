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
          <a class="navbar-brand" href="index.html">Learning</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
          
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs">
              <a href="#sidebar-chat" data-toggle="sidebar-menu">
                <i class="fa fa-comments"></i>
              </a>
            </li>
            <!-- User -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> Bill <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="user-private-profile.html">Profile</a></li>
                <li><a href="user-private-messages.html">Messages</a></li>
                <li><a href="login.html">Logout</a></li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->

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
        <br></br><br></br>
        <div class="sidebar-block">
          <ul class="list-group list-group-menu primary">
            <li class="list-group-item active">
              <a href="">Subscribe</a>
            </li>
            <br></br>
            <li class="list-group-item">
              <a href="">Just this course</a>
            </li>
          </ul>
          <br></br>
        </div>
        <h4 class="category">Tutor</h4>
        <div class="sidebar-block">
          <div class="media">
            <a class="pull-left" href="">
              <img class="img-circle media-object" src="images/people/50/guy-1.jpg" alt="people" />
            </a>
            <div class="media-body">
              <h4 class="sidebar-heading media-heading">John. S</h4>
              <p>Leading UX Designer</p>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda autem ...</p>
        </div>
        <div class="sidebar-block equal-padding">
          <a class="btn btn-block btn-default" href="library-grid.html">Back to Library</a>
        </div>
      </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar sidebar-chat right sidebar-size-2 sidebar-offset-0 chat-skin-white sidebar-visible-mobile" id=sidebar-chat>
      <div class="split-vertical">
        <div class="chat-search">
          <input type="text" class="form-control" placeholder="Search" />
        </div>

        <ul class="chat-filter nav nav-pills ">
          <li class="active"><a href="#" data-target="li">All</a></li>
          <li><a href="#" data-target=".online">Online</a></li>
          <li><a href="#" data-target=".offline">Offline</a></li>
        </ul>
        <div class="split-vertical-body">
          <div class="split-vertical-cell">
            <div data-scrollable>
              <ul class="chat-contacts">
                <li class="online" data-user-id="1">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">

                        <div class="contact-name">Jonathan S.</div>
                        <small>"Free Today"</small>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="online away" data-user-id="2">
                  <a href="#">

                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-5.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Mary A.</div>
                        <small>"Feeling Groovy"</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="3">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left ">
                        <span class="status"></span>
                        <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Adrian D.</div>
                        <small>Busy</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="offline" data-user-id="4">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Michelle S.</div>
                        <small>Offline</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="offline" data-user-id="5">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <img src="images/people/110/woman-7.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Daniele A.</div>
                        <small>Offline</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="6">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-4.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Jake F.</div>
                        <small>Busy</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online away" data-user-id="7">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Jane A.</div>
                        <small>"Custom Status"</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="offline" data-user-id="8">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Sabine J.</div>
                        <small>"Offline right now"</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online away" data-user-id="9">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-9.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Danny B.</div>
                        <small>Be Right Back</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="10">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Elise J.</div>
                        <small>My Status</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="11">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">John J.</div>
                        <small>My Status #1</small>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script id="chat-window-template" type="text/x-handlebars-template">

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-bill">
          <a href="#" class="close"><i class="fa fa-times"></i></a>
          <a href="#">
            <span class="pull-left">
                    <img src="{{ user_image }}" width="40">
                </span>
            <span class="contact-name">{{user}}</span>
          </a>
        </div>
        <div class="panel-body" id="chat-bill">
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">Feeling Groovy?</span>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">Yep.</span>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">This chat window looks amazing.</span>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">Thanks!</span>
            </div>
          </div>
        </div>
        <input type="text" class="form-control" placeholder="Type message..." />
      </div>
    </script>

    <div class="chat-window-container"></div>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
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
                    <h1 class="h3 media-heading">Github Webhooks for Beginners</h1>
                    <p class="small text-muted">
                      <i class="fa fa-clock-o fa-fw"></i> 4 hrs
                      <i class="fa fa-user fa-fw"></i> Adrian Demian
                      <i class="fa fa-calendar fa-fw"></i> 21/10/14
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, assumenda blanditiis, corporis, eaque exercitationem harum illo incidunt labore natus odio quas quod tenetur voluptatum. Adipisci amet architecto aut dignissimos facere fugit
                      hic iste iusto, minus molestias nemo obcaecati odit officiis perspiciatis, porro provident quasi ratione reiciendis repudiandae rerum sapiente temporibus ut voluptate. Aperiam atque consequuntur facere in nisi quos rem.</p>
                    <span class="label bg-lightred">New</span>
                    <span class="label label-default">GitHub</span>
                    <span class="label label-default">Beginner</span>
                  </div>
                </div>
              </div>
            </div>

            <h5>Curriculum</h5>
            <div class="panel panel-default curriculum open">
              <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                <div class="media">
                  <span class="icon-block half pull-left"><i class="fa fa-graduation-cap"></i></span>
                  <div class="media-body">
                    <h4 class="media-heading">Step by Step</h4>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                  </div>
                </div>
                <span class="collapse-status collapse-open">Open</span>
                <span class="collapse-status collapse-close">Close</span>
              </div>
              <div class="list-group collapse in" id="curriculum-1">
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">1.</td>
                          <td>Installation</td>
                          <td class="text-right">2:03 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item active" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">2.</td>
                          <td>M-V-Huh?</td>
                          <td class="text-right">25:01 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">3.</td>
                          <td>Models</td>
                          <td class="text-right">12:10 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">4.</td>
                          <td>Database Access</td>
                          <td class="text-right">1:25 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">5.</td>
                          <td>Eloquent Basics</td>
                          <td class="text-right">22:30 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default curriculum">
              <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-2">
                <div class="media">
                  <span class="icon-block half pull-left"><i class="fa fa-graduation-cap"></i></span>
                  <div class="media-body">
                    <h4 class="media-heading">Another Chapter</h4>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                  </div>
                </div>
                <span class="collapse-status collapse-open">Open</span>
                <span class="collapse-status collapse-close">Close</span>
              </div>
              <div class="list-group collapse" id="curriculum-2">
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">1.</td>
                          <td>Installation</td>
                          <td class="text-right">2:03 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item active" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">2.</td>
                          <td>M-V-Huh?</td>
                          <td class="text-right">25:01 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">3.</td>
                          <td>Models</td>
                          <td class="text-right">12:10 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">4.</td>
                          <td>Database Access</td>
                          <td class="text-right">1:25 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="list-group-item" data-target="lesson.html">
                  <div class="table-responsive">
                    <table class="table table-condensed table-borderless margin-none">
                      <tbody>
                        <tr>
                          <td class="w50">5.</td>
                          <td>Eloquent Basics</td>
                          <td class="text-right">22:30 min</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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