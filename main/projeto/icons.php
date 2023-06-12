<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Icons - tabler.github.io - a responsive, flat and full featured admin template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="index.php">
                <img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                  <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                </div>
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    <span class="nav-unread"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="float-right"><span class="badge badge-primary">6</span></span>
                      <i class="dropdown-icon fe fe-mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-send"></i> Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="index.php" class="nav-link"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Interface</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./cards.html" class="dropdown-item ">Cards design</a>
                      <a href="./charts.html" class="dropdown-item ">Charts</a>
                      <a href="./pricing-cards.html" class="dropdown-item ">Pricing cards</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./maps.html" class="dropdown-item ">Maps</a>
                      <a href="icons.php" class="dropdown-item active">Icons</a>
                      <a href="./store.html" class="dropdown-item ">Store</a>
                      <a href="./blog.html" class="dropdown-item ">Blog</a>
                      <a href="./carousel.html" class="dropdown-item ">Carousel</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./profile.html" class="dropdown-item ">Profile</a>
                      <a href="./login.html" class="dropdown-item ">Login</a>
                      <a href="./register.html" class="dropdown-item ">Register</a>
                      <a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>
                      <a href="./400.html" class="dropdown-item ">400 error</a>
                      <a href="./401.html" class="dropdown-item ">401 error</a>
                      <a href="./403.html" class="dropdown-item ">403 error</a>
                      <a href="./404.html" class="dropdown-item ">404 error</a>
                      <a href="./500.html" class="dropdown-item ">500 error</a>
                      <a href="./503.html" class="dropdown-item ">503 error</a>
                      <a href="./email.html" class="dropdown-item ">Email</a>
                      <a href="./empty.html" class="dropdown-item ">Empty page</a>
                      <a href="./rtl.html" class="dropdown-item ">RTL mode</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="./form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                  </li>
                  <li class="nav-item">
                    <a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Icons
              </h1>
            </div>
            <div class="row row-cards">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Feather Icons</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <p>Simply beautiful open source icons. For more info <a href="https://feathericons.com" target="_blank">click here</a>.</p>
                        <p><code>&lt;i class="fe fe-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                      </div>
                      <div class="col-9">
                        <div class="icons-list-wrap">
                          <ul class="icons-list">
                            <li class="icons-list-item"><i class="fe fe-activity" data-toggle="tooltip" title="fe fe-activity"></i></li>
                            <li class="icons-list-item"><i class="fe fe-airplay" data-toggle="tooltip" title="fe fe-airplay"></i></li>
                            <li class="icons-list-item"><i class="fe fe-alert-circle" data-toggle="tooltip" title="fe fe-alert-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-alert-octagon" data-toggle="tooltip" title="fe fe-alert-octagon"></i></li>
                            <li class="icons-list-item"><i class="fe fe-alert-triangle" data-toggle="tooltip" title="fe fe-alert-triangle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-align-center" data-toggle="tooltip" title="fe fe-align-center"></i></li>
                            <li class="icons-list-item"><i class="fe fe-align-justify" data-toggle="tooltip" title="fe fe-align-justify"></i></li>
                            <li class="icons-list-item"><i class="fe fe-align-left" data-toggle="tooltip" title="fe fe-align-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-align-right" data-toggle="tooltip" title="fe fe-align-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-anchor" data-toggle="tooltip" title="fe fe-anchor"></i></li>
                            <li class="icons-list-item"><i class="fe fe-aperture" data-toggle="tooltip" title="fe fe-aperture"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-down" data-toggle="tooltip" title="fe fe-arrow-down"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-down-circle" data-toggle="tooltip" title="fe fe-arrow-down-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-down-left" data-toggle="tooltip" title="fe fe-arrow-down-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-down-right" data-toggle="tooltip" title="fe fe-arrow-down-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-left" data-toggle="tooltip" title="fe fe-arrow-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-left-circle" data-toggle="tooltip" title="fe fe-arrow-left-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-right" data-toggle="tooltip" title="fe fe-arrow-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-right-circle" data-toggle="tooltip" title="fe fe-arrow-right-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-up" data-toggle="tooltip" title="fe fe-arrow-up"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-up-circle" data-toggle="tooltip" title="fe fe-arrow-up-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-up-left" data-toggle="tooltip" title="fe fe-arrow-up-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-arrow-up-right" data-toggle="tooltip" title="fe fe-arrow-up-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-at-sign" data-toggle="tooltip" title="fe fe-at-sign"></i></li>
                            <li class="icons-list-item"><i class="fe fe-award" data-toggle="tooltip" title="fe fe-award"></i></li>
                            <li class="icons-list-item"><i class="fe fe-bar-chart" data-toggle="tooltip" title="fe fe-bar-chart"></i></li>
                            <li class="icons-list-item"><i class="fe fe-bar-chart-2" data-toggle="tooltip" title="fe fe-bar-chart-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-battery" data-toggle="tooltip" title="fe fe-battery"></i></li>
                            <li class="icons-list-item"><i class="fe fe-battery-charging" data-toggle="tooltip" title="fe fe-battery-charging"></i></li>
                            <li class="icons-list-item"><i class="fe fe-bell" data-toggle="tooltip" title="fe fe-bell"></i></li>
                            <li class="icons-list-item"><i class="fe fe-bell-off" data-toggle="tooltip" title="fe fe-bell-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-bluetooth" data-toggle="tooltip" title="fe fe-bluetooth"></i></li>
                            <li class="icons-list-item"><i class="fe fe-bold" data-toggle="tooltip" title="fe fe-bold"></i></li>
                            <li class="icons-list-item"><i class="fe fe-book" data-toggle="tooltip" title="fe fe-book"></i></li>
                            <li class="icons-list-item"><i class="fe fe-book-open" data-toggle="tooltip" title="fe fe-book-open"></i></li>
                            <li class="icons-list-item"><i class="fe fe-bookmark" data-toggle="tooltip" title="fe fe-bookmark"></i></li>
                            <li class="icons-list-item"><i class="fe fe-box" data-toggle="tooltip" title="fe fe-box"></i></li>
                            <li class="icons-list-item"><i class="fe fe-briefcase" data-toggle="tooltip" title="fe fe-briefcase"></i></li>
                            <li class="icons-list-item"><i class="fe fe-calendar" data-toggle="tooltip" title="fe fe-calendar"></i></li>
                            <li class="icons-list-item"><i class="fe fe-camera" data-toggle="tooltip" title="fe fe-camera"></i></li>
                            <li class="icons-list-item"><i class="fe fe-camera-off" data-toggle="tooltip" title="fe fe-camera-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cast" data-toggle="tooltip" title="fe fe-cast"></i></li>
                            <li class="icons-list-item"><i class="fe fe-check" data-toggle="tooltip" title="fe fe-check"></i></li>
                            <li class="icons-list-item"><i class="fe fe-check-circle" data-toggle="tooltip" title="fe fe-check-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-check-square" data-toggle="tooltip" title="fe fe-check-square"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevron-down" data-toggle="tooltip" title="fe fe-chevron-down"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevron-left" data-toggle="tooltip" title="fe fe-chevron-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevron-right" data-toggle="tooltip" title="fe fe-chevron-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevron-up" data-toggle="tooltip" title="fe fe-chevron-up"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevrons-down" data-toggle="tooltip" title="fe fe-chevrons-down"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevrons-left" data-toggle="tooltip" title="fe fe-chevrons-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevrons-right" data-toggle="tooltip" title="fe fe-chevrons-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chevrons-up" data-toggle="tooltip" title="fe fe-chevrons-up"></i></li>
                            <li class="icons-list-item"><i class="fe fe-chrome" data-toggle="tooltip" title="fe fe-chrome"></i></li>
                            <li class="icons-list-item"><i class="fe fe-circle" data-toggle="tooltip" title="fe fe-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-clipboard" data-toggle="tooltip" title="fe fe-clipboard"></i></li>
                            <li class="icons-list-item"><i class="fe fe-clock" data-toggle="tooltip" title="fe fe-clock"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cloud" data-toggle="tooltip" title="fe fe-cloud"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cloud-drizzle" data-toggle="tooltip" title="fe fe-cloud-drizzle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cloud-lightning" data-toggle="tooltip" title="fe fe-cloud-lightning"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cloud-off" data-toggle="tooltip" title="fe fe-cloud-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cloud-rain" data-toggle="tooltip" title="fe fe-cloud-rain"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cloud-snow" data-toggle="tooltip" title="fe fe-cloud-snow"></i></li>
                            <li class="icons-list-item"><i class="fe fe-code" data-toggle="tooltip" title="fe fe-code"></i></li>
                            <li class="icons-list-item"><i class="fe fe-codepen" data-toggle="tooltip" title="fe fe-codepen"></i></li>
                            <li class="icons-list-item"><i class="fe fe-command" data-toggle="tooltip" title="fe fe-command"></i></li>
                            <li class="icons-list-item"><i class="fe fe-compass" data-toggle="tooltip" title="fe fe-compass"></i></li>
                            <li class="icons-list-item"><i class="fe fe-copy" data-toggle="tooltip" title="fe fe-copy"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-down-left" data-toggle="tooltip" title="fe fe-corner-down-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-down-right" data-toggle="tooltip" title="fe fe-corner-down-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-left-down" data-toggle="tooltip" title="fe fe-corner-left-down"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-left-up" data-toggle="tooltip" title="fe fe-corner-left-up"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-right-down" data-toggle="tooltip" title="fe fe-corner-right-down"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-right-up" data-toggle="tooltip" title="fe fe-corner-right-up"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-up-left" data-toggle="tooltip" title="fe fe-corner-up-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-corner-up-right" data-toggle="tooltip" title="fe fe-corner-up-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-cpu" data-toggle="tooltip" title="fe fe-cpu"></i></li>
                            <li class="icons-list-item"><i class="fe fe-credit-card" data-toggle="tooltip" title="fe fe-credit-card"></i></li>
                            <li class="icons-list-item"><i class="fe fe-crop" data-toggle="tooltip" title="fe fe-crop"></i></li>
                            <li class="icons-list-item"><i class="fe fe-crosshair" data-toggle="tooltip" title="fe fe-crosshair"></i></li>
                            <li class="icons-list-item"><i class="fe fe-database" data-toggle="tooltip" title="fe fe-database"></i></li>
                            <li class="icons-list-item"><i class="fe fe-delete" data-toggle="tooltip" title="fe fe-delete"></i></li>
                            <li class="icons-list-item"><i class="fe fe-disc" data-toggle="tooltip" title="fe fe-disc"></i></li>
                            <li class="icons-list-item"><i class="fe fe-dollar-sign" data-toggle="tooltip" title="fe fe-dollar-sign"></i></li>
                            <li class="icons-list-item"><i class="fe fe-download" data-toggle="tooltip" title="fe fe-download"></i></li>
                            <li class="icons-list-item"><i class="fe fe-download-cloud" data-toggle="tooltip" title="fe fe-download-cloud"></i></li>
                            <li class="icons-list-item"><i class="fe fe-droplet" data-toggle="tooltip" title="fe fe-droplet"></i></li>
                            <li class="icons-list-item"><i class="fe fe-edit" data-toggle="tooltip" title="fe fe-edit"></i></li>
                            <li class="icons-list-item"><i class="fe fe-edit-2" data-toggle="tooltip" title="fe fe-edit-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-edit-3" data-toggle="tooltip" title="fe fe-edit-3"></i></li>
                            <li class="icons-list-item"><i class="fe fe-external-link" data-toggle="tooltip" title="fe fe-external-link"></i></li>
                            <li class="icons-list-item"><i class="fe fe-eye" data-toggle="tooltip" title="fe fe-eye"></i></li>
                            <li class="icons-list-item"><i class="fe fe-eye-off" data-toggle="tooltip" title="fe fe-eye-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-facebook" data-toggle="tooltip" title="fe fe-facebook"></i></li>
                            <li class="icons-list-item"><i class="fe fe-fast-forward" data-toggle="tooltip" title="fe fe-fast-forward"></i></li>
                            <li class="icons-list-item"><i class="fe fe-feather" data-toggle="tooltip" title="fe fe-feather"></i></li>
                            <li class="icons-list-item"><i class="fe fe-file" data-toggle="tooltip" title="fe fe-file"></i></li>
                            <li class="icons-list-item"><i class="fe fe-file-minus" data-toggle="tooltip" title="fe fe-file-minus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-file-plus" data-toggle="tooltip" title="fe fe-file-plus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-file-text" data-toggle="tooltip" title="fe fe-file-text"></i></li>
                            <li class="icons-list-item"><i class="fe fe-film" data-toggle="tooltip" title="fe fe-film"></i></li>
                            <li class="icons-list-item"><i class="fe fe-filter" data-toggle="tooltip" title="fe fe-filter"></i></li>
                            <li class="icons-list-item"><i class="fe fe-flag" data-toggle="tooltip" title="fe fe-flag"></i></li>
                            <li class="icons-list-item"><i class="fe fe-folder" data-toggle="tooltip" title="fe fe-folder"></i></li>
                            <li class="icons-list-item"><i class="fe fe-folder-minus" data-toggle="tooltip" title="fe fe-folder-minus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-folder-plus" data-toggle="tooltip" title="fe fe-folder-plus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-git-branch" data-toggle="tooltip" title="fe fe-git-branch"></i></li>
                            <li class="icons-list-item"><i class="fe fe-git-commit" data-toggle="tooltip" title="fe fe-git-commit"></i></li>
                            <li class="icons-list-item"><i class="fe fe-git-merge" data-toggle="tooltip" title="fe fe-git-merge"></i></li>
                            <li class="icons-list-item"><i class="fe fe-git-pull-request" data-toggle="tooltip" title="fe fe-git-pull-request"></i></li>
                            <li class="icons-list-item"><i class="fe fe-github" data-toggle="tooltip" title="fe fe-github"></i></li>
                            <li class="icons-list-item"><i class="fe fe-gitlab" data-toggle="tooltip" title="fe fe-gitlab"></i></li>
                            <li class="icons-list-item"><i class="fe fe-globe" data-toggle="tooltip" title="fe fe-globe"></i></li>
                            <li class="icons-list-item"><i class="fe fe-grid" data-toggle="tooltip" title="fe fe-grid"></i></li>
                            <li class="icons-list-item"><i class="fe fe-hard-drive" data-toggle="tooltip" title="fe fe-hard-drive"></i></li>
                            <li class="icons-list-item"><i class="fe fe-hash" data-toggle="tooltip" title="fe fe-hash"></i></li>
                            <li class="icons-list-item"><i class="fe fe-headphones" data-toggle="tooltip" title="fe fe-headphones"></i></li>
                            <li class="icons-list-item"><i class="fe fe-heart" data-toggle="tooltip" title="fe fe-heart"></i></li>
                            <li class="icons-list-item"><i class="fe fe-help-circle" data-toggle="tooltip" title="fe fe-help-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-home" data-toggle="tooltip" title="fe fe-home"></i></li>
                            <li class="icons-list-item"><i class="fe fe-image" data-toggle="tooltip" title="fe fe-image"></i></li>
                            <li class="icons-list-item"><i class="fe fe-inbox" data-toggle="tooltip" title="fe fe-inbox"></i></li>
                            <li class="icons-list-item"><i class="fe fe-info" data-toggle="tooltip" title="fe fe-info"></i></li>
                            <li class="icons-list-item"><i class="fe fe-instagram" data-toggle="tooltip" title="fe fe-instagram"></i></li>
                            <li class="icons-list-item"><i class="fe fe-italic" data-toggle="tooltip" title="fe fe-italic"></i></li>
                            <li class="icons-list-item"><i class="fe fe-layers" data-toggle="tooltip" title="fe fe-layers"></i></li>
                            <li class="icons-list-item"><i class="fe fe-layout" data-toggle="tooltip" title="fe fe-layout"></i></li>
                            <li class="icons-list-item"><i class="fe fe-life-buoy" data-toggle="tooltip" title="fe fe-life-buoy"></i></li>
                            <li class="icons-list-item"><i class="fe fe-link" data-toggle="tooltip" title="fe fe-link"></i></li>
                            <li class="icons-list-item"><i class="fe fe-link-2" data-toggle="tooltip" title="fe fe-link-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-linkedin" data-toggle="tooltip" title="fe fe-linkedin"></i></li>
                            <li class="icons-list-item"><i class="fe fe-list" data-toggle="tooltip" title="fe fe-list"></i></li>
                            <li class="icons-list-item"><i class="fe fe-loader" data-toggle="tooltip" title="fe fe-loader"></i></li>
                            <li class="icons-list-item"><i class="fe fe-lock" data-toggle="tooltip" title="fe fe-lock"></i></li>
                            <li class="icons-list-item"><i class="fe fe-log-in" data-toggle="tooltip" title="fe fe-log-in"></i></li>
                            <li class="icons-list-item"><i class="fe fe-log-out" data-toggle="tooltip" title="fe fe-log-out"></i></li>
                            <li class="icons-list-item"><i class="fe fe-mail" data-toggle="tooltip" title="fe fe-mail"></i></li>
                            <li class="icons-list-item"><i class="fe fe-map" data-toggle="tooltip" title="fe fe-map"></i></li>
                            <li class="icons-list-item"><i class="fe fe-map-pin" data-toggle="tooltip" title="fe fe-map-pin"></i></li>
                            <li class="icons-list-item"><i class="fe fe-maximize" data-toggle="tooltip" title="fe fe-maximize"></i></li>
                            <li class="icons-list-item"><i class="fe fe-maximize-2" data-toggle="tooltip" title="fe fe-maximize-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-menu" data-toggle="tooltip" title="fe fe-menu"></i></li>
                            <li class="icons-list-item"><i class="fe fe-message-circle" data-toggle="tooltip" title="fe fe-message-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-message-square" data-toggle="tooltip" title="fe fe-message-square"></i></li>
                            <li class="icons-list-item"><i class="fe fe-mic" data-toggle="tooltip" title="fe fe-mic"></i></li>
                            <li class="icons-list-item"><i class="fe fe-mic-off" data-toggle="tooltip" title="fe fe-mic-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-minimize" data-toggle="tooltip" title="fe fe-minimize"></i></li>
                            <li class="icons-list-item"><i class="fe fe-minimize-2" data-toggle="tooltip" title="fe fe-minimize-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-minus" data-toggle="tooltip" title="fe fe-minus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-minus-circle" data-toggle="tooltip" title="fe fe-minus-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-minus-square" data-toggle="tooltip" title="fe fe-minus-square"></i></li>
                            <li class="icons-list-item"><i class="fe fe-monitor" data-toggle="tooltip" title="fe fe-monitor"></i></li>
                            <li class="icons-list-item"><i class="fe fe-moon" data-toggle="tooltip" title="fe fe-moon"></i></li>
                            <li class="icons-list-item"><i class="fe fe-more-horizontal" data-toggle="tooltip" title="fe fe-more-horizontal"></i></li>
                            <li class="icons-list-item"><i class="fe fe-more-vertical" data-toggle="tooltip" title="fe fe-more-vertical"></i></li>
                            <li class="icons-list-item"><i class="fe fe-move" data-toggle="tooltip" title="fe fe-move"></i></li>
                            <li class="icons-list-item"><i class="fe fe-music" data-toggle="tooltip" title="fe fe-music"></i></li>
                            <li class="icons-list-item"><i class="fe fe-navigation" data-toggle="tooltip" title="fe fe-navigation"></i></li>
                            <li class="icons-list-item"><i class="fe fe-navigation-2" data-toggle="tooltip" title="fe fe-navigation-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-octagon" data-toggle="tooltip" title="fe fe-octagon"></i></li>
                            <li class="icons-list-item"><i class="fe fe-package" data-toggle="tooltip" title="fe fe-package"></i></li>
                            <li class="icons-list-item"><i class="fe fe-paperclip" data-toggle="tooltip" title="fe fe-paperclip"></i></li>
                            <li class="icons-list-item"><i class="fe fe-pause" data-toggle="tooltip" title="fe fe-pause"></i></li>
                            <li class="icons-list-item"><i class="fe fe-pause-circle" data-toggle="tooltip" title="fe fe-pause-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-percent" data-toggle="tooltip" title="fe fe-percent"></i></li>
                            <li class="icons-list-item"><i class="fe fe-phone" data-toggle="tooltip" title="fe fe-phone"></i></li>
                            <li class="icons-list-item"><i class="fe fe-phone-call" data-toggle="tooltip" title="fe fe-phone-call"></i></li>
                            <li class="icons-list-item"><i class="fe fe-phone-forwarded" data-toggle="tooltip" title="fe fe-phone-forwarded"></i></li>
                            <li class="icons-list-item"><i class="fe fe-phone-incoming" data-toggle="tooltip" title="fe fe-phone-incoming"></i></li>
                            <li class="icons-list-item"><i class="fe fe-phone-missed" data-toggle="tooltip" title="fe fe-phone-missed"></i></li>
                            <li class="icons-list-item"><i class="fe fe-phone-off" data-toggle="tooltip" title="fe fe-phone-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-phone-outgoing" data-toggle="tooltip" title="fe fe-phone-outgoing"></i></li>
                            <li class="icons-list-item"><i class="fe fe-pie-chart" data-toggle="tooltip" title="fe fe-pie-chart"></i></li>
                            <li class="icons-list-item"><i class="fe fe-play" data-toggle="tooltip" title="fe fe-play"></i></li>
                            <li class="icons-list-item"><i class="fe fe-play-circle" data-toggle="tooltip" title="fe fe-play-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-plus" data-toggle="tooltip" title="fe fe-plus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-plus-circle" data-toggle="tooltip" title="fe fe-plus-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-plus-square" data-toggle="tooltip" title="fe fe-plus-square"></i></li>
                            <li class="icons-list-item"><i class="fe fe-pocket" data-toggle="tooltip" title="fe fe-pocket"></i></li>
                            <li class="icons-list-item"><i class="fe fe-power" data-toggle="tooltip" title="fe fe-power"></i></li>
                            <li class="icons-list-item"><i class="fe fe-printer" data-toggle="tooltip" title="fe fe-printer"></i></li>
                            <li class="icons-list-item"><i class="fe fe-radio" data-toggle="tooltip" title="fe fe-radio"></i></li>
                            <li class="icons-list-item"><i class="fe fe-refresh-ccw" data-toggle="tooltip" title="fe fe-refresh-ccw"></i></li>
                            <li class="icons-list-item"><i class="fe fe-refresh-cw" data-toggle="tooltip" title="fe fe-refresh-cw"></i></li>
                            <li class="icons-list-item"><i class="fe fe-repeat" data-toggle="tooltip" title="fe fe-repeat"></i></li>
                            <li class="icons-list-item"><i class="fe fe-rewind" data-toggle="tooltip" title="fe fe-rewind"></i></li>
                            <li class="icons-list-item"><i class="fe fe-rotate-ccw" data-toggle="tooltip" title="fe fe-rotate-ccw"></i></li>
                            <li class="icons-list-item"><i class="fe fe-rotate-cw" data-toggle="tooltip" title="fe fe-rotate-cw"></i></li>
                            <li class="icons-list-item"><i class="fe fe-rss" data-toggle="tooltip" title="fe fe-rss"></i></li>
                            <li class="icons-list-item"><i class="fe fe-save" data-toggle="tooltip" title="fe fe-save"></i></li>
                            <li class="icons-list-item"><i class="fe fe-scissors" data-toggle="tooltip" title="fe fe-scissors"></i></li>
                            <li class="icons-list-item"><i class="fe fe-search" data-toggle="tooltip" title="fe fe-search"></i></li>
                            <li class="icons-list-item"><i class="fe fe-send" data-toggle="tooltip" title="fe fe-send"></i></li>
                            <li class="icons-list-item"><i class="fe fe-server" data-toggle="tooltip" title="fe fe-server"></i></li>
                            <li class="icons-list-item"><i class="fe fe-settings" data-toggle="tooltip" title="fe fe-settings"></i></li>
                            <li class="icons-list-item"><i class="fe fe-share" data-toggle="tooltip" title="fe fe-share"></i></li>
                            <li class="icons-list-item"><i class="fe fe-share-2" data-toggle="tooltip" title="fe fe-share-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-shield" data-toggle="tooltip" title="fe fe-shield"></i></li>
                            <li class="icons-list-item"><i class="fe fe-shield-off" data-toggle="tooltip" title="fe fe-shield-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-shopping-bag" data-toggle="tooltip" title="fe fe-shopping-bag"></i></li>
                            <li class="icons-list-item"><i class="fe fe-shopping-cart" data-toggle="tooltip" title="fe fe-shopping-cart"></i></li>
                            <li class="icons-list-item"><i class="fe fe-shuffle" data-toggle="tooltip" title="fe fe-shuffle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-sidebar" data-toggle="tooltip" title="fe fe-sidebar"></i></li>
                            <li class="icons-list-item"><i class="fe fe-skip-back" data-toggle="tooltip" title="fe fe-skip-back"></i></li>
                            <li class="icons-list-item"><i class="fe fe-skip-forward" data-toggle="tooltip" title="fe fe-skip-forward"></i></li>
                            <li class="icons-list-item"><i class="fe fe-slack" data-toggle="tooltip" title="fe fe-slack"></i></li>
                            <li class="icons-list-item"><i class="fe fe-slash" data-toggle="tooltip" title="fe fe-slash"></i></li>
                            <li class="icons-list-item"><i class="fe fe-sliders" data-toggle="tooltip" title="fe fe-sliders"></i></li>
                            <li class="icons-list-item"><i class="fe fe-smartphone" data-toggle="tooltip" title="fe fe-smartphone"></i></li>
                            <li class="icons-list-item"><i class="fe fe-speaker" data-toggle="tooltip" title="fe fe-speaker"></i></li>
                            <li class="icons-list-item"><i class="fe fe-square" data-toggle="tooltip" title="fe fe-square"></i></li>
                            <li class="icons-list-item"><i class="fe fe-star" data-toggle="tooltip" title="fe fe-star"></i></li>
                            <li class="icons-list-item"><i class="fe fe-stop-circle" data-toggle="tooltip" title="fe fe-stop-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-sun" data-toggle="tooltip" title="fe fe-sun"></i></li>
                            <li class="icons-list-item"><i class="fe fe-sunrise" data-toggle="tooltip" title="fe fe-sunrise"></i></li>
                            <li class="icons-list-item"><i class="fe fe-sunset" data-toggle="tooltip" title="fe fe-sunset"></i></li>
                            <li class="icons-list-item"><i class="fe fe-tablet" data-toggle="tooltip" title="fe fe-tablet"></i></li>
                            <li class="icons-list-item"><i class="fe fe-tag" data-toggle="tooltip" title="fe fe-tag"></i></li>
                            <li class="icons-list-item"><i class="fe fe-target" data-toggle="tooltip" title="fe fe-target"></i></li>
                            <li class="icons-list-item"><i class="fe fe-terminal" data-toggle="tooltip" title="fe fe-terminal"></i></li>
                            <li class="icons-list-item"><i class="fe fe-thermometer" data-toggle="tooltip" title="fe fe-thermometer"></i></li>
                            <li class="icons-list-item"><i class="fe fe-thumbs-down" data-toggle="tooltip" title="fe fe-thumbs-down"></i></li>
                            <li class="icons-list-item"><i class="fe fe-thumbs-up" data-toggle="tooltip" title="fe fe-thumbs-up"></i></li>
                            <li class="icons-list-item"><i class="fe fe-toggle-left" data-toggle="tooltip" title="fe fe-toggle-left"></i></li>
                            <li class="icons-list-item"><i class="fe fe-toggle-right" data-toggle="tooltip" title="fe fe-toggle-right"></i></li>
                            <li class="icons-list-item"><i class="fe fe-trash" data-toggle="tooltip" title="fe fe-trash"></i></li>
                            <li class="icons-list-item"><i class="fe fe-trash-2" data-toggle="tooltip" title="fe fe-trash-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-trending-down" data-toggle="tooltip" title="fe fe-trending-down"></i></li>
                            <li class="icons-list-item"><i class="fe fe-trending-up" data-toggle="tooltip" title="fe fe-trending-up"></i></li>
                            <li class="icons-list-item"><i class="fe fe-triangle" data-toggle="tooltip" title="fe fe-triangle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-truck" data-toggle="tooltip" title="fe fe-truck"></i></li>
                            <li class="icons-list-item"><i class="fe fe-tv" data-toggle="tooltip" title="fe fe-tv"></i></li>
                            <li class="icons-list-item"><i class="fe fe-twitter" data-toggle="tooltip" title="fe fe-twitter"></i></li>
                            <li class="icons-list-item"><i class="fe fe-type" data-toggle="tooltip" title="fe fe-type"></i></li>
                            <li class="icons-list-item"><i class="fe fe-umbrella" data-toggle="tooltip" title="fe fe-umbrella"></i></li>
                            <li class="icons-list-item"><i class="fe fe-underline" data-toggle="tooltip" title="fe fe-underline"></i></li>
                            <li class="icons-list-item"><i class="fe fe-unlock" data-toggle="tooltip" title="fe fe-unlock"></i></li>
                            <li class="icons-list-item"><i class="fe fe-upload" data-toggle="tooltip" title="fe fe-upload"></i></li>
                            <li class="icons-list-item"><i class="fe fe-upload-cloud" data-toggle="tooltip" title="fe fe-upload-cloud"></i></li>
                            <li class="icons-list-item"><i class="fe fe-user" data-toggle="tooltip" title="fe fe-user"></i></li>
                            <li class="icons-list-item"><i class="fe fe-user-check" data-toggle="tooltip" title="fe fe-user-check"></i></li>
                            <li class="icons-list-item"><i class="fe fe-user-minus" data-toggle="tooltip" title="fe fe-user-minus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-user-plus" data-toggle="tooltip" title="fe fe-user-plus"></i></li>
                            <li class="icons-list-item"><i class="fe fe-user-x" data-toggle="tooltip" title="fe fe-user-x"></i></li>
                            <li class="icons-list-item"><i class="fe fe-users" data-toggle="tooltip" title="fe fe-users"></i></li>
                            <li class="icons-list-item"><i class="fe fe-video" data-toggle="tooltip" title="fe fe-video"></i></li>
                            <li class="icons-list-item"><i class="fe fe-video-off" data-toggle="tooltip" title="fe fe-video-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-voicemail" data-toggle="tooltip" title="fe fe-voicemail"></i></li>
                            <li class="icons-list-item"><i class="fe fe-volume" data-toggle="tooltip" title="fe fe-volume"></i></li>
                            <li class="icons-list-item"><i class="fe fe-volume-1" data-toggle="tooltip" title="fe fe-volume-1"></i></li>
                            <li class="icons-list-item"><i class="fe fe-volume-2" data-toggle="tooltip" title="fe fe-volume-2"></i></li>
                            <li class="icons-list-item"><i class="fe fe-volume-x" data-toggle="tooltip" title="fe fe-volume-x"></i></li>
                            <li class="icons-list-item"><i class="fe fe-watch" data-toggle="tooltip" title="fe fe-watch"></i></li>
                            <li class="icons-list-item"><i class="fe fe-wifi" data-toggle="tooltip" title="fe fe-wifi"></i></li>
                            <li class="icons-list-item"><i class="fe fe-wifi-off" data-toggle="tooltip" title="fe fe-wifi-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-wind" data-toggle="tooltip" title="fe fe-wind"></i></li>
                            <li class="icons-list-item"><i class="fe fe-x" data-toggle="tooltip" title="fe fe-x"></i></li>
                            <li class="icons-list-item"><i class="fe fe-x-circle" data-toggle="tooltip" title="fe fe-x-circle"></i></li>
                            <li class="icons-list-item"><i class="fe fe-x-square" data-toggle="tooltip" title="fe fe-x-square"></i></li>
                            <li class="icons-list-item"><i class="fe fe-zap" data-toggle="tooltip" title="fe fe-zap"></i></li>
                            <li class="icons-list-item"><i class="fe fe-zap-off" data-toggle="tooltip" title="fe fe-zap-off"></i></li>
                            <li class="icons-list-item"><i class="fe fe-zoom-in" data-toggle="tooltip" title="fe fe-zoom-in"></i></li>
                            <li class="icons-list-item"><i class="fe fe-zoom-out" data-toggle="tooltip" title="fe fe-zoom-out"></i></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Font Awesome</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <p>Powered by Font Awesome set. For more info <a href="http://fontawesome.io" target="_blank">click here</a>.</p>
                        <p><code>&lt;i class="fa fa-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                      </div>
                      <div class="col-9">
                        <div class="icons-list-wrap">
                          <ul class="icons-list">
                            <li class="icons-list-item"><i class="fa fa-500px" data-toggle="tooltip" title="fa fa-500px"></i></li>
                            <li class="icons-list-item"><i class="fa fa-address-book" data-toggle="tooltip" title="fa fa-address-book"></i></li>
                            <li class="icons-list-item"><i class="fa fa-address-book-o" data-toggle="tooltip" title="fa fa-address-book-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-address-card" data-toggle="tooltip" title="fa fa-address-card"></i></li>
                            <li class="icons-list-item"><i class="fa fa-address-card-o" data-toggle="tooltip" title="fa fa-address-card-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-adjust" data-toggle="tooltip" title="fa fa-adjust"></i></li>
                            <li class="icons-list-item"><i class="fa fa-adn" data-toggle="tooltip" title="fa fa-adn"></i></li>
                            <li class="icons-list-item"><i class="fa fa-align-center" data-toggle="tooltip" title="fa fa-align-center"></i></li>
                            <li class="icons-list-item"><i class="fa fa-align-justify" data-toggle="tooltip" title="fa fa-align-justify"></i></li>
                            <li class="icons-list-item"><i class="fa fa-align-left" data-toggle="tooltip" title="fa fa-align-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-align-right" data-toggle="tooltip" title="fa fa-align-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-amazon" data-toggle="tooltip" title="fa fa-amazon"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ambulance" data-toggle="tooltip" title="fa fa-ambulance"></i></li>
                            <li class="icons-list-item"><i class="fa fa-american-sign-language-interpreting" data-toggle="tooltip" title="fa fa-american-sign-language-interpreting"></i></li>
                            <li class="icons-list-item"><i class="fa fa-anchor" data-toggle="tooltip" title="fa fa-anchor"></i></li>
                            <li class="icons-list-item"><i class="fa fa-android" data-toggle="tooltip" title="fa fa-android"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angellist" data-toggle="tooltip" title="fa fa-angellist"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-double-down" data-toggle="tooltip" title="fa fa-angle-double-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-double-left" data-toggle="tooltip" title="fa fa-angle-double-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-double-right" data-toggle="tooltip" title="fa fa-angle-double-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-double-up" data-toggle="tooltip" title="fa fa-angle-double-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-down" data-toggle="tooltip" title="fa fa-angle-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-left" data-toggle="tooltip" title="fa fa-angle-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-right" data-toggle="tooltip" title="fa fa-angle-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-angle-up" data-toggle="tooltip" title="fa fa-angle-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-apple" data-toggle="tooltip" title="fa fa-apple"></i></li>
                            <li class="icons-list-item"><i class="fa fa-archive" data-toggle="tooltip" title="fa fa-archive"></i></li>
                            <li class="icons-list-item"><i class="fa fa-area-chart" data-toggle="tooltip" title="fa fa-area-chart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-down" data-toggle="tooltip" title="fa fa-arrow-circle-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-left" data-toggle="tooltip" title="fa fa-arrow-circle-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-o-down" data-toggle="tooltip" title="fa fa-arrow-circle-o-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-o-left" data-toggle="tooltip" title="fa fa-arrow-circle-o-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-o-right" data-toggle="tooltip" title="fa fa-arrow-circle-o-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-o-up" data-toggle="tooltip" title="fa fa-arrow-circle-o-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-right" data-toggle="tooltip" title="fa fa-arrow-circle-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-circle-up" data-toggle="tooltip" title="fa fa-arrow-circle-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-down" data-toggle="tooltip" title="fa fa-arrow-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-left" data-toggle="tooltip" title="fa fa-arrow-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-right" data-toggle="tooltip" title="fa fa-arrow-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrow-up" data-toggle="tooltip" title="fa fa-arrow-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrows" data-toggle="tooltip" title="fa fa-arrows"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrows-alt" data-toggle="tooltip" title="fa fa-arrows-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrows-h" data-toggle="tooltip" title="fa fa-arrows-h"></i></li>
                            <li class="icons-list-item"><i class="fa fa-arrows-v" data-toggle="tooltip" title="fa fa-arrows-v"></i></li>
                            <li class="icons-list-item"><i class="fa fa-asl-interpreting" data-toggle="tooltip" title="fa fa-asl-interpreting"></i></li>
                            <li class="icons-list-item"><i class="fa fa-assistive-listening-systems" data-toggle="tooltip" title="fa fa-assistive-listening-systems"></i></li>
                            <li class="icons-list-item"><i class="fa fa-asterisk" data-toggle="tooltip" title="fa fa-asterisk"></i></li>
                            <li class="icons-list-item"><i class="fa fa-at" data-toggle="tooltip" title="fa fa-at"></i></li>
                            <li class="icons-list-item"><i class="fa fa-audio-description" data-toggle="tooltip" title="fa fa-audio-description"></i></li>
                            <li class="icons-list-item"><i class="fa fa-automobile" data-toggle="tooltip" title="fa fa-automobile"></i></li>
                            <li class="icons-list-item"><i class="fa fa-backward" data-toggle="tooltip" title="fa fa-backward"></i></li>
                            <li class="icons-list-item"><i class="fa fa-balance-scale" data-toggle="tooltip" title="fa fa-balance-scale"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ban" data-toggle="tooltip" title="fa fa-ban"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bandcamp" data-toggle="tooltip" title="fa fa-bandcamp"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bank" data-toggle="tooltip" title="fa fa-bank"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bar-chart" data-toggle="tooltip" title="fa fa-bar-chart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bar-chart-o" data-toggle="tooltip" title="fa fa-bar-chart-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-barcode" data-toggle="tooltip" title="fa fa-barcode"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bars" data-toggle="tooltip" title="fa fa-bars"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bath" data-toggle="tooltip" title="fa fa-bath"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bathtub" data-toggle="tooltip" title="fa fa-bathtub"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery" data-toggle="tooltip" title="fa fa-battery"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-0" data-toggle="tooltip" title="fa fa-battery-0"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-1" data-toggle="tooltip" title="fa fa-battery-1"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-2" data-toggle="tooltip" title="fa fa-battery-2"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-3" data-toggle="tooltip" title="fa fa-battery-3"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-4" data-toggle="tooltip" title="fa fa-battery-4"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-empty" data-toggle="tooltip" title="fa fa-battery-empty"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-full" data-toggle="tooltip" title="fa fa-battery-full"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-half" data-toggle="tooltip" title="fa fa-battery-half"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-quarter" data-toggle="tooltip" title="fa fa-battery-quarter"></i></li>
                            <li class="icons-list-item"><i class="fa fa-battery-three-quarters" data-toggle="tooltip" title="fa fa-battery-three-quarters"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bed" data-toggle="tooltip" title="fa fa-bed"></i></li>
                            <li class="icons-list-item"><i class="fa fa-beer" data-toggle="tooltip" title="fa fa-beer"></i></li>
                            <li class="icons-list-item"><i class="fa fa-behance" data-toggle="tooltip" title="fa fa-behance"></i></li>
                            <li class="icons-list-item"><i class="fa fa-behance-square" data-toggle="tooltip" title="fa fa-behance-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bell" data-toggle="tooltip" title="fa fa-bell"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bell-o" data-toggle="tooltip" title="fa fa-bell-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bell-slash" data-toggle="tooltip" title="fa fa-bell-slash"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bell-slash-o" data-toggle="tooltip" title="fa fa-bell-slash-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bicycle" data-toggle="tooltip" title="fa fa-bicycle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-binoculars" data-toggle="tooltip" title="fa fa-binoculars"></i></li>
                            <li class="icons-list-item"><i class="fa fa-birthday-cake" data-toggle="tooltip" title="fa fa-birthday-cake"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bitbucket" data-toggle="tooltip" title="fa fa-bitbucket"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bitbucket-square" data-toggle="tooltip" title="fa fa-bitbucket-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bitcoin" data-toggle="tooltip" title="fa fa-bitcoin"></i></li>
                            <li class="icons-list-item"><i class="fa fa-black-tie" data-toggle="tooltip" title="fa fa-black-tie"></i></li>
                            <li class="icons-list-item"><i class="fa fa-blind" data-toggle="tooltip" title="fa fa-blind"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bluetooth" data-toggle="tooltip" title="fa fa-bluetooth"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bluetooth-b" data-toggle="tooltip" title="fa fa-bluetooth-b"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bold" data-toggle="tooltip" title="fa fa-bold"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bolt" data-toggle="tooltip" title="fa fa-bolt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bomb" data-toggle="tooltip" title="fa fa-bomb"></i></li>
                            <li class="icons-list-item"><i class="fa fa-book" data-toggle="tooltip" title="fa fa-book"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bookmark" data-toggle="tooltip" title="fa fa-bookmark"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bookmark-o" data-toggle="tooltip" title="fa fa-bookmark-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-braille" data-toggle="tooltip" title="fa fa-braille"></i></li>
                            <li class="icons-list-item"><i class="fa fa-briefcase" data-toggle="tooltip" title="fa fa-briefcase"></i></li>
                            <li class="icons-list-item"><i class="fa fa-btc" data-toggle="tooltip" title="fa fa-btc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bug" data-toggle="tooltip" title="fa fa-bug"></i></li>
                            <li class="icons-list-item"><i class="fa fa-building" data-toggle="tooltip" title="fa fa-building"></i></li>
                            <li class="icons-list-item"><i class="fa fa-building-o" data-toggle="tooltip" title="fa fa-building-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bullhorn" data-toggle="tooltip" title="fa fa-bullhorn"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bullseye" data-toggle="tooltip" title="fa fa-bullseye"></i></li>
                            <li class="icons-list-item"><i class="fa fa-bus" data-toggle="tooltip" title="fa fa-bus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-buysellads" data-toggle="tooltip" title="fa fa-buysellads"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cab" data-toggle="tooltip" title="fa fa-cab"></i></li>
                            <li class="icons-list-item"><i class="fa fa-calculator" data-toggle="tooltip" title="fa fa-calculator"></i></li>
                            <li class="icons-list-item"><i class="fa fa-calendar" data-toggle="tooltip" title="fa fa-calendar"></i></li>
                            <li class="icons-list-item"><i class="fa fa-calendar-check-o" data-toggle="tooltip" title="fa fa-calendar-check-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-calendar-minus-o" data-toggle="tooltip" title="fa fa-calendar-minus-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-calendar-o" data-toggle="tooltip" title="fa fa-calendar-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-calendar-plus-o" data-toggle="tooltip" title="fa fa-calendar-plus-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-calendar-times-o" data-toggle="tooltip" title="fa fa-calendar-times-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-camera" data-toggle="tooltip" title="fa fa-camera"></i></li>
                            <li class="icons-list-item"><i class="fa fa-camera-retro" data-toggle="tooltip" title="fa fa-camera-retro"></i></li>
                            <li class="icons-list-item"><i class="fa fa-car" data-toggle="tooltip" title="fa fa-car"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-down" data-toggle="tooltip" title="fa fa-caret-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-left" data-toggle="tooltip" title="fa fa-caret-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-right" data-toggle="tooltip" title="fa fa-caret-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-square-o-down" data-toggle="tooltip" title="fa fa-caret-square-o-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-square-o-left" data-toggle="tooltip" title="fa fa-caret-square-o-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-square-o-right" data-toggle="tooltip" title="fa fa-caret-square-o-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-square-o-up" data-toggle="tooltip" title="fa fa-caret-square-o-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-caret-up" data-toggle="tooltip" title="fa fa-caret-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cart-arrow-down" data-toggle="tooltip" title="fa fa-cart-arrow-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cart-plus" data-toggle="tooltip" title="fa fa-cart-plus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc" data-toggle="tooltip" title="fa fa-cc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-amex" data-toggle="tooltip" title="fa fa-cc-amex"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-diners-club" data-toggle="tooltip" title="fa fa-cc-diners-club"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-discover" data-toggle="tooltip" title="fa fa-cc-discover"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-jcb" data-toggle="tooltip" title="fa fa-cc-jcb"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-mastercard" data-toggle="tooltip" title="fa fa-cc-mastercard"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-paypal" data-toggle="tooltip" title="fa fa-cc-paypal"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-stripe" data-toggle="tooltip" title="fa fa-cc-stripe"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cc-visa" data-toggle="tooltip" title="fa fa-cc-visa"></i></li>
                            <li class="icons-list-item"><i class="fa fa-certificate" data-toggle="tooltip" title="fa fa-certificate"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chain" data-toggle="tooltip" title="fa fa-chain"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chain-broken" data-toggle="tooltip" title="fa fa-chain-broken"></i></li>
                            <li class="icons-list-item"><i class="fa fa-check" data-toggle="tooltip" title="fa fa-check"></i></li>
                            <li class="icons-list-item"><i class="fa fa-check-circle" data-toggle="tooltip" title="fa fa-check-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-check-circle-o" data-toggle="tooltip" title="fa fa-check-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-check-square" data-toggle="tooltip" title="fa fa-check-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-check-square-o" data-toggle="tooltip" title="fa fa-check-square-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-circle-down" data-toggle="tooltip" title="fa fa-chevron-circle-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-circle-left" data-toggle="tooltip" title="fa fa-chevron-circle-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-circle-right" data-toggle="tooltip" title="fa fa-chevron-circle-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-circle-up" data-toggle="tooltip" title="fa fa-chevron-circle-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-down" data-toggle="tooltip" title="fa fa-chevron-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-left" data-toggle="tooltip" title="fa fa-chevron-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-right" data-toggle="tooltip" title="fa fa-chevron-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chevron-up" data-toggle="tooltip" title="fa fa-chevron-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-child" data-toggle="tooltip" title="fa fa-child"></i></li>
                            <li class="icons-list-item"><i class="fa fa-chrome" data-toggle="tooltip" title="fa fa-chrome"></i></li>
                            <li class="icons-list-item"><i class="fa fa-circle" data-toggle="tooltip" title="fa fa-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-circle-o" data-toggle="tooltip" title="fa fa-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-circle-o-notch" data-toggle="tooltip" title="fa fa-circle-o-notch"></i></li>
                            <li class="icons-list-item"><i class="fa fa-circle-thin" data-toggle="tooltip" title="fa fa-circle-thin"></i></li>
                            <li class="icons-list-item"><i class="fa fa-clipboard" data-toggle="tooltip" title="fa fa-clipboard"></i></li>
                            <li class="icons-list-item"><i class="fa fa-clock-o" data-toggle="tooltip" title="fa fa-clock-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-clone" data-toggle="tooltip" title="fa fa-clone"></i></li>
                            <li class="icons-list-item"><i class="fa fa-close" data-toggle="tooltip" title="fa fa-close"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cloud" data-toggle="tooltip" title="fa fa-cloud"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cloud-download" data-toggle="tooltip" title="fa fa-cloud-download"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cloud-upload" data-toggle="tooltip" title="fa fa-cloud-upload"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cny" data-toggle="tooltip" title="fa fa-cny"></i></li>
                            <li class="icons-list-item"><i class="fa fa-code" data-toggle="tooltip" title="fa fa-code"></i></li>
                            <li class="icons-list-item"><i class="fa fa-code-fork" data-toggle="tooltip" title="fa fa-code-fork"></i></li>
                            <li class="icons-list-item"><i class="fa fa-codepen" data-toggle="tooltip" title="fa fa-codepen"></i></li>
                            <li class="icons-list-item"><i class="fa fa-codiepie" data-toggle="tooltip" title="fa fa-codiepie"></i></li>
                            <li class="icons-list-item"><i class="fa fa-coffee" data-toggle="tooltip" title="fa fa-coffee"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cog" data-toggle="tooltip" title="fa fa-cog"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cogs" data-toggle="tooltip" title="fa fa-cogs"></i></li>
                            <li class="icons-list-item"><i class="fa fa-columns" data-toggle="tooltip" title="fa fa-columns"></i></li>
                            <li class="icons-list-item"><i class="fa fa-comment" data-toggle="tooltip" title="fa fa-comment"></i></li>
                            <li class="icons-list-item"><i class="fa fa-comment-o" data-toggle="tooltip" title="fa fa-comment-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-commenting" data-toggle="tooltip" title="fa fa-commenting"></i></li>
                            <li class="icons-list-item"><i class="fa fa-commenting-o" data-toggle="tooltip" title="fa fa-commenting-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-comments" data-toggle="tooltip" title="fa fa-comments"></i></li>
                            <li class="icons-list-item"><i class="fa fa-comments-o" data-toggle="tooltip" title="fa fa-comments-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-compass" data-toggle="tooltip" title="fa fa-compass"></i></li>
                            <li class="icons-list-item"><i class="fa fa-compress" data-toggle="tooltip" title="fa fa-compress"></i></li>
                            <li class="icons-list-item"><i class="fa fa-connectdevelop" data-toggle="tooltip" title="fa fa-connectdevelop"></i></li>
                            <li class="icons-list-item"><i class="fa fa-contao" data-toggle="tooltip" title="fa fa-contao"></i></li>
                            <li class="icons-list-item"><i class="fa fa-copy" data-toggle="tooltip" title="fa fa-copy"></i></li>
                            <li class="icons-list-item"><i class="fa fa-copyright" data-toggle="tooltip" title="fa fa-copyright"></i></li>
                            <li class="icons-list-item"><i class="fa fa-creative-commons" data-toggle="tooltip" title="fa fa-creative-commons"></i></li>
                            <li class="icons-list-item"><i class="fa fa-credit-card" data-toggle="tooltip" title="fa fa-credit-card"></i></li>
                            <li class="icons-list-item"><i class="fa fa-credit-card-alt" data-toggle="tooltip" title="fa fa-credit-card-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-crop" data-toggle="tooltip" title="fa fa-crop"></i></li>
                            <li class="icons-list-item"><i class="fa fa-crosshairs" data-toggle="tooltip" title="fa fa-crosshairs"></i></li>
                            <li class="icons-list-item"><i class="fa fa-css3" data-toggle="tooltip" title="fa fa-css3"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cube" data-toggle="tooltip" title="fa fa-cube"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cubes" data-toggle="tooltip" title="fa fa-cubes"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cut" data-toggle="tooltip" title="fa fa-cut"></i></li>
                            <li class="icons-list-item"><i class="fa fa-cutlery" data-toggle="tooltip" title="fa fa-cutlery"></i></li>
                            <li class="icons-list-item"><i class="fa fa-dashboard" data-toggle="tooltip" title="fa fa-dashboard"></i></li>
                            <li class="icons-list-item"><i class="fa fa-dashcube" data-toggle="tooltip" title="fa fa-dashcube"></i></li>
                            <li class="icons-list-item"><i class="fa fa-database" data-toggle="tooltip" title="fa fa-database"></i></li>
                            <li class="icons-list-item"><i class="fa fa-deaf" data-toggle="tooltip" title="fa fa-deaf"></i></li>
                            <li class="icons-list-item"><i class="fa fa-deafness" data-toggle="tooltip" title="fa fa-deafness"></i></li>
                            <li class="icons-list-item"><i class="fa fa-dedent" data-toggle="tooltip" title="fa fa-dedent"></i></li>
                            <li class="icons-list-item"><i class="fa fa-delicious" data-toggle="tooltip" title="fa fa-delicious"></i></li>
                            <li class="icons-list-item"><i class="fa fa-desktop" data-toggle="tooltip" title="fa fa-desktop"></i></li>
                            <li class="icons-list-item"><i class="fa fa-deviantart" data-toggle="tooltip" title="fa fa-deviantart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-diamond" data-toggle="tooltip" title="fa fa-diamond"></i></li>
                            <li class="icons-list-item"><i class="fa fa-digg" data-toggle="tooltip" title="fa fa-digg"></i></li>
                            <li class="icons-list-item"><i class="fa fa-dollar" data-toggle="tooltip" title="fa fa-dollar"></i></li>
                            <li class="icons-list-item"><i class="fa fa-dot-circle-o" data-toggle="tooltip" title="fa fa-dot-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-download" data-toggle="tooltip" title="fa fa-download"></i></li>
                            <li class="icons-list-item"><i class="fa fa-dribbble" data-toggle="tooltip" title="fa fa-dribbble"></i></li>
                            <li class="icons-list-item"><i class="fa fa-drivers-license" data-toggle="tooltip" title="fa fa-drivers-license"></i></li>
                            <li class="icons-list-item"><i class="fa fa-drivers-license-o" data-toggle="tooltip" title="fa fa-drivers-license-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-dropbox" data-toggle="tooltip" title="fa fa-dropbox"></i></li>
                            <li class="icons-list-item"><i class="fa fa-drupal" data-toggle="tooltip" title="fa fa-drupal"></i></li>
                            <li class="icons-list-item"><i class="fa fa-edge" data-toggle="tooltip" title="fa fa-edge"></i></li>
                            <li class="icons-list-item"><i class="fa fa-edit" data-toggle="tooltip" title="fa fa-edit"></i></li>
                            <li class="icons-list-item"><i class="fa fa-eercast" data-toggle="tooltip" title="fa fa-eercast"></i></li>
                            <li class="icons-list-item"><i class="fa fa-eject" data-toggle="tooltip" title="fa fa-eject"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ellipsis-h" data-toggle="tooltip" title="fa fa-ellipsis-h"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ellipsis-v" data-toggle="tooltip" title="fa fa-ellipsis-v"></i></li>
                            <li class="icons-list-item"><i class="fa fa-empire" data-toggle="tooltip" title="fa fa-empire"></i></li>
                            <li class="icons-list-item"><i class="fa fa-envelope" data-toggle="tooltip" title="fa fa-envelope"></i></li>
                            <li class="icons-list-item"><i class="fa fa-envelope-o" data-toggle="tooltip" title="fa fa-envelope-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-envelope-open" data-toggle="tooltip" title="fa fa-envelope-open"></i></li>
                            <li class="icons-list-item"><i class="fa fa-envelope-open-o" data-toggle="tooltip" title="fa fa-envelope-open-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-envelope-square" data-toggle="tooltip" title="fa fa-envelope-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-envira" data-toggle="tooltip" title="fa fa-envira"></i></li>
                            <li class="icons-list-item"><i class="fa fa-eraser" data-toggle="tooltip" title="fa fa-eraser"></i></li>
                            <li class="icons-list-item"><i class="fa fa-etsy" data-toggle="tooltip" title="fa fa-etsy"></i></li>
                            <li class="icons-list-item"><i class="fa fa-eur" data-toggle="tooltip" title="fa fa-eur"></i></li>
                            <li class="icons-list-item"><i class="fa fa-euro" data-toggle="tooltip" title="fa fa-euro"></i></li>
                            <li class="icons-list-item"><i class="fa fa-exchange" data-toggle="tooltip" title="fa fa-exchange"></i></li>
                            <li class="icons-list-item"><i class="fa fa-exclamation" data-toggle="tooltip" title="fa fa-exclamation"></i></li>
                            <li class="icons-list-item"><i class="fa fa-exclamation-circle" data-toggle="tooltip" title="fa fa-exclamation-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-exclamation-triangle" data-toggle="tooltip" title="fa fa-exclamation-triangle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-expand" data-toggle="tooltip" title="fa fa-expand"></i></li>
                            <li class="icons-list-item"><i class="fa fa-expeditedssl" data-toggle="tooltip" title="fa fa-expeditedssl"></i></li>
                            <li class="icons-list-item"><i class="fa fa-external-link" data-toggle="tooltip" title="fa fa-external-link"></i></li>
                            <li class="icons-list-item"><i class="fa fa-external-link-square" data-toggle="tooltip" title="fa fa-external-link-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-eye" data-toggle="tooltip" title="fa fa-eye"></i></li>
                            <li class="icons-list-item"><i class="fa fa-eye-slash" data-toggle="tooltip" title="fa fa-eye-slash"></i></li>
                            <li class="icons-list-item"><i class="fa fa-eyedropper" data-toggle="tooltip" title="fa fa-eyedropper"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fa" data-toggle="tooltip" title="fa fa-fa"></i></li>
                            <li class="icons-list-item"><i class="fa fa-facebook" data-toggle="tooltip" title="fa fa-facebook"></i></li>
                            <li class="icons-list-item"><i class="fa fa-facebook-f" data-toggle="tooltip" title="fa fa-facebook-f"></i></li>
                            <li class="icons-list-item"><i class="fa fa-facebook-official" data-toggle="tooltip" title="fa fa-facebook-official"></i></li>
                            <li class="icons-list-item"><i class="fa fa-facebook-square" data-toggle="tooltip" title="fa fa-facebook-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fast-backward" data-toggle="tooltip" title="fa fa-fast-backward"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fast-forward" data-toggle="tooltip" title="fa fa-fast-forward"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fax" data-toggle="tooltip" title="fa fa-fax"></i></li>
                            <li class="icons-list-item"><i class="fa fa-feed" data-toggle="tooltip" title="fa fa-feed"></i></li>
                            <li class="icons-list-item"><i class="fa fa-female" data-toggle="tooltip" title="fa fa-female"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fighter-jet" data-toggle="tooltip" title="fa fa-fighter-jet"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file" data-toggle="tooltip" title="fa fa-file"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-archive-o" data-toggle="tooltip" title="fa fa-file-archive-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-audio-o" data-toggle="tooltip" title="fa fa-file-audio-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-code-o" data-toggle="tooltip" title="fa fa-file-code-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-excel-o" data-toggle="tooltip" title="fa fa-file-excel-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-image-o" data-toggle="tooltip" title="fa fa-file-image-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-movie-o" data-toggle="tooltip" title="fa fa-file-movie-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-o" data-toggle="tooltip" title="fa fa-file-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-pdf-o" data-toggle="tooltip" title="fa fa-file-pdf-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-photo-o" data-toggle="tooltip" title="fa fa-file-photo-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-picture-o" data-toggle="tooltip" title="fa fa-file-picture-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-powerpoint-o" data-toggle="tooltip" title="fa fa-file-powerpoint-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-sound-o" data-toggle="tooltip" title="fa fa-file-sound-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-text" data-toggle="tooltip" title="fa fa-file-text"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-text-o" data-toggle="tooltip" title="fa fa-file-text-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-video-o" data-toggle="tooltip" title="fa fa-file-video-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-word-o" data-toggle="tooltip" title="fa fa-file-word-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-file-zip-o" data-toggle="tooltip" title="fa fa-file-zip-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-files-o" data-toggle="tooltip" title="fa fa-files-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-film" data-toggle="tooltip" title="fa fa-film"></i></li>
                            <li class="icons-list-item"><i class="fa fa-filter" data-toggle="tooltip" title="fa fa-filter"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fire" data-toggle="tooltip" title="fa fa-fire"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fire-extinguisher" data-toggle="tooltip" title="fa fa-fire-extinguisher"></i></li>
                            <li class="icons-list-item"><i class="fa fa-firefox" data-toggle="tooltip" title="fa fa-firefox"></i></li>
                            <li class="icons-list-item"><i class="fa fa-first-order" data-toggle="tooltip" title="fa fa-first-order"></i></li>
                            <li class="icons-list-item"><i class="fa fa-flag" data-toggle="tooltip" title="fa fa-flag"></i></li>
                            <li class="icons-list-item"><i class="fa fa-flag-checkered" data-toggle="tooltip" title="fa fa-flag-checkered"></i></li>
                            <li class="icons-list-item"><i class="fa fa-flag-o" data-toggle="tooltip" title="fa fa-flag-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-flash" data-toggle="tooltip" title="fa fa-flash"></i></li>
                            <li class="icons-list-item"><i class="fa fa-flask" data-toggle="tooltip" title="fa fa-flask"></i></li>
                            <li class="icons-list-item"><i class="fa fa-flickr" data-toggle="tooltip" title="fa fa-flickr"></i></li>
                            <li class="icons-list-item"><i class="fa fa-floppy-o" data-toggle="tooltip" title="fa fa-floppy-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-folder" data-toggle="tooltip" title="fa fa-folder"></i></li>
                            <li class="icons-list-item"><i class="fa fa-folder-o" data-toggle="tooltip" title="fa fa-folder-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-folder-open" data-toggle="tooltip" title="fa fa-folder-open"></i></li>
                            <li class="icons-list-item"><i class="fa fa-folder-open-o" data-toggle="tooltip" title="fa fa-folder-open-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-font" data-toggle="tooltip" title="fa fa-font"></i></li>
                            <li class="icons-list-item"><i class="fa fa-font-awesome" data-toggle="tooltip" title="fa fa-font-awesome"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fonticons" data-toggle="tooltip" title="fa fa-fonticons"></i></li>
                            <li class="icons-list-item"><i class="fa fa-fort-awesome" data-toggle="tooltip" title="fa fa-fort-awesome"></i></li>
                            <li class="icons-list-item"><i class="fa fa-forumbee" data-toggle="tooltip" title="fa fa-forumbee"></i></li>
                            <li class="icons-list-item"><i class="fa fa-forward" data-toggle="tooltip" title="fa fa-forward"></i></li>
                            <li class="icons-list-item"><i class="fa fa-foursquare" data-toggle="tooltip" title="fa fa-foursquare"></i></li>
                            <li class="icons-list-item"><i class="fa fa-free-code-camp" data-toggle="tooltip" title="fa fa-free-code-camp"></i></li>
                            <li class="icons-list-item"><i class="fa fa-frown-o" data-toggle="tooltip" title="fa fa-frown-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-futbol-o" data-toggle="tooltip" title="fa fa-futbol-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gamepad" data-toggle="tooltip" title="fa fa-gamepad"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gavel" data-toggle="tooltip" title="fa fa-gavel"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gbp" data-toggle="tooltip" title="fa fa-gbp"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ge" data-toggle="tooltip" title="fa fa-ge"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gear" data-toggle="tooltip" title="fa fa-gear"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gears" data-toggle="tooltip" title="fa fa-gears"></i></li>
                            <li class="icons-list-item"><i class="fa fa-genderless" data-toggle="tooltip" title="fa fa-genderless"></i></li>
                            <li class="icons-list-item"><i class="fa fa-get-pocket" data-toggle="tooltip" title="fa fa-get-pocket"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gg" data-toggle="tooltip" title="fa fa-gg"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gg-circle" data-toggle="tooltip" title="fa fa-gg-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gift" data-toggle="tooltip" title="fa fa-gift"></i></li>
                            <li class="icons-list-item"><i class="fa fa-git" data-toggle="tooltip" title="fa fa-git"></i></li>
                            <li class="icons-list-item"><i class="fa fa-git-square" data-toggle="tooltip" title="fa fa-git-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-github" data-toggle="tooltip" title="fa fa-github"></i></li>
                            <li class="icons-list-item"><i class="fa fa-github-alt" data-toggle="tooltip" title="fa fa-github-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-github-square" data-toggle="tooltip" title="fa fa-github-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gitlab" data-toggle="tooltip" title="fa fa-gitlab"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gittip" data-toggle="tooltip" title="fa fa-gittip"></i></li>
                            <li class="icons-list-item"><i class="fa fa-glass" data-toggle="tooltip" title="fa fa-glass"></i></li>
                            <li class="icons-list-item"><i class="fa fa-glide" data-toggle="tooltip" title="fa fa-glide"></i></li>
                            <li class="icons-list-item"><i class="fa fa-glide-g" data-toggle="tooltip" title="fa fa-glide-g"></i></li>
                            <li class="icons-list-item"><i class="fa fa-globe" data-toggle="tooltip" title="fa fa-globe"></i></li>
                            <li class="icons-list-item"><i class="fa fa-google" data-toggle="tooltip" title="fa fa-google"></i></li>
                            <li class="icons-list-item"><i class="fa fa-google-plus" data-toggle="tooltip" title="fa fa-google-plus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-google-plus-circle" data-toggle="tooltip" title="fa fa-google-plus-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-google-plus-official" data-toggle="tooltip" title="fa fa-google-plus-official"></i></li>
                            <li class="icons-list-item"><i class="fa fa-google-plus-square" data-toggle="tooltip" title="fa fa-google-plus-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-google-wallet" data-toggle="tooltip" title="fa fa-google-wallet"></i></li>
                            <li class="icons-list-item"><i class="fa fa-graduation-cap" data-toggle="tooltip" title="fa fa-graduation-cap"></i></li>
                            <li class="icons-list-item"><i class="fa fa-gratipay" data-toggle="tooltip" title="fa fa-gratipay"></i></li>
                            <li class="icons-list-item"><i class="fa fa-grav" data-toggle="tooltip" title="fa fa-grav"></i></li>
                            <li class="icons-list-item"><i class="fa fa-group" data-toggle="tooltip" title="fa fa-group"></i></li>
                            <li class="icons-list-item"><i class="fa fa-h-square" data-toggle="tooltip" title="fa fa-h-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hacker-news" data-toggle="tooltip" title="fa fa-hacker-news"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-grab-o" data-toggle="tooltip" title="fa fa-hand-grab-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-lizard-o" data-toggle="tooltip" title="fa fa-hand-lizard-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-o-down" data-toggle="tooltip" title="fa fa-hand-o-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-o-left" data-toggle="tooltip" title="fa fa-hand-o-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-o-right" data-toggle="tooltip" title="fa fa-hand-o-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-o-up" data-toggle="tooltip" title="fa fa-hand-o-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-paper-o" data-toggle="tooltip" title="fa fa-hand-paper-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-peace-o" data-toggle="tooltip" title="fa fa-hand-peace-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-pointer-o" data-toggle="tooltip" title="fa fa-hand-pointer-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-rock-o" data-toggle="tooltip" title="fa fa-hand-rock-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-scissors-o" data-toggle="tooltip" title="fa fa-hand-scissors-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-spock-o" data-toggle="tooltip" title="fa fa-hand-spock-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hand-stop-o" data-toggle="tooltip" title="fa fa-hand-stop-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-handshake-o" data-toggle="tooltip" title="fa fa-handshake-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hard-of-hearing" data-toggle="tooltip" title="fa fa-hard-of-hearing"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hashtag" data-toggle="tooltip" title="fa fa-hashtag"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hdd-o" data-toggle="tooltip" title="fa fa-hdd-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-header" data-toggle="tooltip" title="fa fa-header"></i></li>
                            <li class="icons-list-item"><i class="fa fa-headphones" data-toggle="tooltip" title="fa fa-headphones"></i></li>
                            <li class="icons-list-item"><i class="fa fa-heart" data-toggle="tooltip" title="fa fa-heart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-heart-o" data-toggle="tooltip" title="fa fa-heart-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-heartbeat" data-toggle="tooltip" title="fa fa-heartbeat"></i></li>
                            <li class="icons-list-item"><i class="fa fa-history" data-toggle="tooltip" title="fa fa-history"></i></li>
                            <li class="icons-list-item"><i class="fa fa-home" data-toggle="tooltip" title="fa fa-home"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hospital-o" data-toggle="tooltip" title="fa fa-hospital-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hotel" data-toggle="tooltip" title="fa fa-hotel"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass" data-toggle="tooltip" title="fa fa-hourglass"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass-1" data-toggle="tooltip" title="fa fa-hourglass-1"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass-2" data-toggle="tooltip" title="fa fa-hourglass-2"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass-3" data-toggle="tooltip" title="fa fa-hourglass-3"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass-end" data-toggle="tooltip" title="fa fa-hourglass-end"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass-half" data-toggle="tooltip" title="fa fa-hourglass-half"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass-o" data-toggle="tooltip" title="fa fa-hourglass-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-hourglass-start" data-toggle="tooltip" title="fa fa-hourglass-start"></i></li>
                            <li class="icons-list-item"><i class="fa fa-houzz" data-toggle="tooltip" title="fa fa-houzz"></i></li>
                            <li class="icons-list-item"><i class="fa fa-html5" data-toggle="tooltip" title="fa fa-html5"></i></li>
                            <li class="icons-list-item"><i class="fa fa-i-cursor" data-toggle="tooltip" title="fa fa-i-cursor"></i></li>
                            <li class="icons-list-item"><i class="fa fa-id-badge" data-toggle="tooltip" title="fa fa-id-badge"></i></li>
                            <li class="icons-list-item"><i class="fa fa-id-card" data-toggle="tooltip" title="fa fa-id-card"></i></li>
                            <li class="icons-list-item"><i class="fa fa-id-card-o" data-toggle="tooltip" title="fa fa-id-card-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ils" data-toggle="tooltip" title="fa fa-ils"></i></li>
                            <li class="icons-list-item"><i class="fa fa-image" data-toggle="tooltip" title="fa fa-image"></i></li>
                            <li class="icons-list-item"><i class="fa fa-imdb" data-toggle="tooltip" title="fa fa-imdb"></i></li>
                            <li class="icons-list-item"><i class="fa fa-inbox" data-toggle="tooltip" title="fa fa-inbox"></i></li>
                            <li class="icons-list-item"><i class="fa fa-indent" data-toggle="tooltip" title="fa fa-indent"></i></li>
                            <li class="icons-list-item"><i class="fa fa-industry" data-toggle="tooltip" title="fa fa-industry"></i></li>
                            <li class="icons-list-item"><i class="fa fa-info" data-toggle="tooltip" title="fa fa-info"></i></li>
                            <li class="icons-list-item"><i class="fa fa-info-circle" data-toggle="tooltip" title="fa fa-info-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-inr" data-toggle="tooltip" title="fa fa-inr"></i></li>
                            <li class="icons-list-item"><i class="fa fa-instagram" data-toggle="tooltip" title="fa fa-instagram"></i></li>
                            <li class="icons-list-item"><i class="fa fa-institution" data-toggle="tooltip" title="fa fa-institution"></i></li>
                            <li class="icons-list-item"><i class="fa fa-internet-explorer" data-toggle="tooltip" title="fa fa-internet-explorer"></i></li>
                            <li class="icons-list-item"><i class="fa fa-intersex" data-toggle="tooltip" title="fa fa-intersex"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ioxhost" data-toggle="tooltip" title="fa fa-ioxhost"></i></li>
                            <li class="icons-list-item"><i class="fa fa-italic" data-toggle="tooltip" title="fa fa-italic"></i></li>
                            <li class="icons-list-item"><i class="fa fa-joomla" data-toggle="tooltip" title="fa fa-joomla"></i></li>
                            <li class="icons-list-item"><i class="fa fa-jpy" data-toggle="tooltip" title="fa fa-jpy"></i></li>
                            <li class="icons-list-item"><i class="fa fa-jsfiddle" data-toggle="tooltip" title="fa fa-jsfiddle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-key" data-toggle="tooltip" title="fa fa-key"></i></li>
                            <li class="icons-list-item"><i class="fa fa-keyboard-o" data-toggle="tooltip" title="fa fa-keyboard-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-krw" data-toggle="tooltip" title="fa fa-krw"></i></li>
                            <li class="icons-list-item"><i class="fa fa-language" data-toggle="tooltip" title="fa fa-language"></i></li>
                            <li class="icons-list-item"><i class="fa fa-laptop" data-toggle="tooltip" title="fa fa-laptop"></i></li>
                            <li class="icons-list-item"><i class="fa fa-lastfm" data-toggle="tooltip" title="fa fa-lastfm"></i></li>
                            <li class="icons-list-item"><i class="fa fa-lastfm-square" data-toggle="tooltip" title="fa fa-lastfm-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-leaf" data-toggle="tooltip" title="fa fa-leaf"></i></li>
                            <li class="icons-list-item"><i class="fa fa-leanpub" data-toggle="tooltip" title="fa fa-leanpub"></i></li>
                            <li class="icons-list-item"><i class="fa fa-legal" data-toggle="tooltip" title="fa fa-legal"></i></li>
                            <li class="icons-list-item"><i class="fa fa-lemon-o" data-toggle="tooltip" title="fa fa-lemon-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-level-down" data-toggle="tooltip" title="fa fa-level-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-level-up" data-toggle="tooltip" title="fa fa-level-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-life-bouy" data-toggle="tooltip" title="fa fa-life-bouy"></i></li>
                            <li class="icons-list-item"><i class="fa fa-life-buoy" data-toggle="tooltip" title="fa fa-life-buoy"></i></li>
                            <li class="icons-list-item"><i class="fa fa-life-ring" data-toggle="tooltip" title="fa fa-life-ring"></i></li>
                            <li class="icons-list-item"><i class="fa fa-life-saver" data-toggle="tooltip" title="fa fa-life-saver"></i></li>
                            <li class="icons-list-item"><i class="fa fa-lightbulb-o" data-toggle="tooltip" title="fa fa-lightbulb-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-line-chart" data-toggle="tooltip" title="fa fa-line-chart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-link" data-toggle="tooltip" title="fa fa-link"></i></li>
                            <li class="icons-list-item"><i class="fa fa-linkedin" data-toggle="tooltip" title="fa fa-linkedin"></i></li>
                            <li class="icons-list-item"><i class="fa fa-linkedin-square" data-toggle="tooltip" title="fa fa-linkedin-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-linode" data-toggle="tooltip" title="fa fa-linode"></i></li>
                            <li class="icons-list-item"><i class="fa fa-linux" data-toggle="tooltip" title="fa fa-linux"></i></li>
                            <li class="icons-list-item"><i class="fa fa-list" data-toggle="tooltip" title="fa fa-list"></i></li>
                            <li class="icons-list-item"><i class="fa fa-list-alt" data-toggle="tooltip" title="fa fa-list-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-list-ol" data-toggle="tooltip" title="fa fa-list-ol"></i></li>
                            <li class="icons-list-item"><i class="fa fa-list-ul" data-toggle="tooltip" title="fa fa-list-ul"></i></li>
                            <li class="icons-list-item"><i class="fa fa-location-arrow" data-toggle="tooltip" title="fa fa-location-arrow"></i></li>
                            <li class="icons-list-item"><i class="fa fa-lock" data-toggle="tooltip" title="fa fa-lock"></i></li>
                            <li class="icons-list-item"><i class="fa fa-long-arrow-down" data-toggle="tooltip" title="fa fa-long-arrow-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-long-arrow-left" data-toggle="tooltip" title="fa fa-long-arrow-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-long-arrow-right" data-toggle="tooltip" title="fa fa-long-arrow-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-long-arrow-up" data-toggle="tooltip" title="fa fa-long-arrow-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-low-vision" data-toggle="tooltip" title="fa fa-low-vision"></i></li>
                            <li class="icons-list-item"><i class="fa fa-magic" data-toggle="tooltip" title="fa fa-magic"></i></li>
                            <li class="icons-list-item"><i class="fa fa-magnet" data-toggle="tooltip" title="fa fa-magnet"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mail-forward" data-toggle="tooltip" title="fa fa-mail-forward"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mail-reply" data-toggle="tooltip" title="fa fa-mail-reply"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mail-reply-all" data-toggle="tooltip" title="fa fa-mail-reply-all"></i></li>
                            <li class="icons-list-item"><i class="fa fa-male" data-toggle="tooltip" title="fa fa-male"></i></li>
                            <li class="icons-list-item"><i class="fa fa-map" data-toggle="tooltip" title="fa fa-map"></i></li>
                            <li class="icons-list-item"><i class="fa fa-map-marker" data-toggle="tooltip" title="fa fa-map-marker"></i></li>
                            <li class="icons-list-item"><i class="fa fa-map-o" data-toggle="tooltip" title="fa fa-map-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-map-pin" data-toggle="tooltip" title="fa fa-map-pin"></i></li>
                            <li class="icons-list-item"><i class="fa fa-map-signs" data-toggle="tooltip" title="fa fa-map-signs"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mars" data-toggle="tooltip" title="fa fa-mars"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mars-double" data-toggle="tooltip" title="fa fa-mars-double"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mars-stroke" data-toggle="tooltip" title="fa fa-mars-stroke"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mars-stroke-h" data-toggle="tooltip" title="fa fa-mars-stroke-h"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mars-stroke-v" data-toggle="tooltip" title="fa fa-mars-stroke-v"></i></li>
                            <li class="icons-list-item"><i class="fa fa-maxcdn" data-toggle="tooltip" title="fa fa-maxcdn"></i></li>
                            <li class="icons-list-item"><i class="fa fa-meanpath" data-toggle="tooltip" title="fa fa-meanpath"></i></li>
                            <li class="icons-list-item"><i class="fa fa-medium" data-toggle="tooltip" title="fa fa-medium"></i></li>
                            <li class="icons-list-item"><i class="fa fa-medkit" data-toggle="tooltip" title="fa fa-medkit"></i></li>
                            <li class="icons-list-item"><i class="fa fa-meetup" data-toggle="tooltip" title="fa fa-meetup"></i></li>
                            <li class="icons-list-item"><i class="fa fa-meh-o" data-toggle="tooltip" title="fa fa-meh-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mercury" data-toggle="tooltip" title="fa fa-mercury"></i></li>
                            <li class="icons-list-item"><i class="fa fa-microchip" data-toggle="tooltip" title="fa fa-microchip"></i></li>
                            <li class="icons-list-item"><i class="fa fa-microphone" data-toggle="tooltip" title="fa fa-microphone"></i></li>
                            <li class="icons-list-item"><i class="fa fa-microphone-slash" data-toggle="tooltip" title="fa fa-microphone-slash"></i></li>
                            <li class="icons-list-item"><i class="fa fa-minus" data-toggle="tooltip" title="fa fa-minus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-minus-circle" data-toggle="tooltip" title="fa fa-minus-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-minus-square" data-toggle="tooltip" title="fa fa-minus-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-minus-square-o" data-toggle="tooltip" title="fa fa-minus-square-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mixcloud" data-toggle="tooltip" title="fa fa-mixcloud"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mobile" data-toggle="tooltip" title="fa fa-mobile"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mobile-phone" data-toggle="tooltip" title="fa fa-mobile-phone"></i></li>
                            <li class="icons-list-item"><i class="fa fa-modx" data-toggle="tooltip" title="fa fa-modx"></i></li>
                            <li class="icons-list-item"><i class="fa fa-money" data-toggle="tooltip" title="fa fa-money"></i></li>
                            <li class="icons-list-item"><i class="fa fa-moon-o" data-toggle="tooltip" title="fa fa-moon-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mortar-board" data-toggle="tooltip" title="fa fa-mortar-board"></i></li>
                            <li class="icons-list-item"><i class="fa fa-motorcycle" data-toggle="tooltip" title="fa fa-motorcycle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-mouse-pointer" data-toggle="tooltip" title="fa fa-mouse-pointer"></i></li>
                            <li class="icons-list-item"><i class="fa fa-music" data-toggle="tooltip" title="fa fa-music"></i></li>
                            <li class="icons-list-item"><i class="fa fa-navicon" data-toggle="tooltip" title="fa fa-navicon"></i></li>
                            <li class="icons-list-item"><i class="fa fa-neuter" data-toggle="tooltip" title="fa fa-neuter"></i></li>
                            <li class="icons-list-item"><i class="fa fa-newspaper-o" data-toggle="tooltip" title="fa fa-newspaper-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-object-group" data-toggle="tooltip" title="fa fa-object-group"></i></li>
                            <li class="icons-list-item"><i class="fa fa-object-ungroup" data-toggle="tooltip" title="fa fa-object-ungroup"></i></li>
                            <li class="icons-list-item"><i class="fa fa-odnoklassniki" data-toggle="tooltip" title="fa fa-odnoklassniki"></i></li>
                            <li class="icons-list-item"><i class="fa fa-odnoklassniki-square" data-toggle="tooltip" title="fa fa-odnoklassniki-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-opencart" data-toggle="tooltip" title="fa fa-opencart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-openid" data-toggle="tooltip" title="fa fa-openid"></i></li>
                            <li class="icons-list-item"><i class="fa fa-opera" data-toggle="tooltip" title="fa fa-opera"></i></li>
                            <li class="icons-list-item"><i class="fa fa-optin-monster" data-toggle="tooltip" title="fa fa-optin-monster"></i></li>
                            <li class="icons-list-item"><i class="fa fa-outdent" data-toggle="tooltip" title="fa fa-outdent"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pagelines" data-toggle="tooltip" title="fa fa-pagelines"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paint-brush" data-toggle="tooltip" title="fa fa-paint-brush"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paper-plane" data-toggle="tooltip" title="fa fa-paper-plane"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paper-plane-o" data-toggle="tooltip" title="fa fa-paper-plane-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paperclip" data-toggle="tooltip" title="fa fa-paperclip"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paragraph" data-toggle="tooltip" title="fa fa-paragraph"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paste" data-toggle="tooltip" title="fa fa-paste"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pause" data-toggle="tooltip" title="fa fa-pause"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pause-circle" data-toggle="tooltip" title="fa fa-pause-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pause-circle-o" data-toggle="tooltip" title="fa fa-pause-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paw" data-toggle="tooltip" title="fa fa-paw"></i></li>
                            <li class="icons-list-item"><i class="fa fa-paypal" data-toggle="tooltip" title="fa fa-paypal"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pencil" data-toggle="tooltip" title="fa fa-pencil"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pencil-square" data-toggle="tooltip" title="fa fa-pencil-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="fa fa-pencil-square-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-percent" data-toggle="tooltip" title="fa fa-percent"></i></li>
                            <li class="icons-list-item"><i class="fa fa-phone" data-toggle="tooltip" title="fa fa-phone"></i></li>
                            <li class="icons-list-item"><i class="fa fa-phone-square" data-toggle="tooltip" title="fa fa-phone-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-photo" data-toggle="tooltip" title="fa fa-photo"></i></li>
                            <li class="icons-list-item"><i class="fa fa-picture-o" data-toggle="tooltip" title="fa fa-picture-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pie-chart" data-toggle="tooltip" title="fa fa-pie-chart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pied-piper" data-toggle="tooltip" title="fa fa-pied-piper"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pied-piper-alt" data-toggle="tooltip" title="fa fa-pied-piper-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pied-piper-pp" data-toggle="tooltip" title="fa fa-pied-piper-pp"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pinterest" data-toggle="tooltip" title="fa fa-pinterest"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pinterest-p" data-toggle="tooltip" title="fa fa-pinterest-p"></i></li>
                            <li class="icons-list-item"><i class="fa fa-pinterest-square" data-toggle="tooltip" title="fa fa-pinterest-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-plane" data-toggle="tooltip" title="fa fa-plane"></i></li>
                            <li class="icons-list-item"><i class="fa fa-play" data-toggle="tooltip" title="fa fa-play"></i></li>
                            <li class="icons-list-item"><i class="fa fa-play-circle" data-toggle="tooltip" title="fa fa-play-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-play-circle-o" data-toggle="tooltip" title="fa fa-play-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-plug" data-toggle="tooltip" title="fa fa-plug"></i></li>
                            <li class="icons-list-item"><i class="fa fa-plus" data-toggle="tooltip" title="fa fa-plus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-plus-circle" data-toggle="tooltip" title="fa fa-plus-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-plus-square" data-toggle="tooltip" title="fa fa-plus-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-plus-square-o" data-toggle="tooltip" title="fa fa-plus-square-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-podcast" data-toggle="tooltip" title="fa fa-podcast"></i></li>
                            <li class="icons-list-item"><i class="fa fa-power-off" data-toggle="tooltip" title="fa fa-power-off"></i></li>
                            <li class="icons-list-item"><i class="fa fa-print" data-toggle="tooltip" title="fa fa-print"></i></li>
                            <li class="icons-list-item"><i class="fa fa-product-hunt" data-toggle="tooltip" title="fa fa-product-hunt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-puzzle-piece" data-toggle="tooltip" title="fa fa-puzzle-piece"></i></li>
                            <li class="icons-list-item"><i class="fa fa-qq" data-toggle="tooltip" title="fa fa-qq"></i></li>
                            <li class="icons-list-item"><i class="fa fa-qrcode" data-toggle="tooltip" title="fa fa-qrcode"></i></li>
                            <li class="icons-list-item"><i class="fa fa-question" data-toggle="tooltip" title="fa fa-question"></i></li>
                            <li class="icons-list-item"><i class="fa fa-question-circle" data-toggle="tooltip" title="fa fa-question-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-question-circle-o" data-toggle="tooltip" title="fa fa-question-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-quora" data-toggle="tooltip" title="fa fa-quora"></i></li>
                            <li class="icons-list-item"><i class="fa fa-quote-left" data-toggle="tooltip" title="fa fa-quote-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-quote-right" data-toggle="tooltip" title="fa fa-quote-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ra" data-toggle="tooltip" title="fa fa-ra"></i></li>
                            <li class="icons-list-item"><i class="fa fa-random" data-toggle="tooltip" title="fa fa-random"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ravelry" data-toggle="tooltip" title="fa fa-ravelry"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rebel" data-toggle="tooltip" title="fa fa-rebel"></i></li>
                            <li class="icons-list-item"><i class="fa fa-recycle" data-toggle="tooltip" title="fa fa-recycle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-reddit" data-toggle="tooltip" title="fa fa-reddit"></i></li>
                            <li class="icons-list-item"><i class="fa fa-reddit-alien" data-toggle="tooltip" title="fa fa-reddit-alien"></i></li>
                            <li class="icons-list-item"><i class="fa fa-reddit-square" data-toggle="tooltip" title="fa fa-reddit-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-refresh" data-toggle="tooltip" title="fa fa-refresh"></i></li>
                            <li class="icons-list-item"><i class="fa fa-registered" data-toggle="tooltip" title="fa fa-registered"></i></li>
                            <li class="icons-list-item"><i class="fa fa-remove" data-toggle="tooltip" title="fa fa-remove"></i></li>
                            <li class="icons-list-item"><i class="fa fa-renren" data-toggle="tooltip" title="fa fa-renren"></i></li>
                            <li class="icons-list-item"><i class="fa fa-reorder" data-toggle="tooltip" title="fa fa-reorder"></i></li>
                            <li class="icons-list-item"><i class="fa fa-repeat" data-toggle="tooltip" title="fa fa-repeat"></i></li>
                            <li class="icons-list-item"><i class="fa fa-reply" data-toggle="tooltip" title="fa fa-reply"></i></li>
                            <li class="icons-list-item"><i class="fa fa-reply-all" data-toggle="tooltip" title="fa fa-reply-all"></i></li>
                            <li class="icons-list-item"><i class="fa fa-resistance" data-toggle="tooltip" title="fa fa-resistance"></i></li>
                            <li class="icons-list-item"><i class="fa fa-retweet" data-toggle="tooltip" title="fa fa-retweet"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rmb" data-toggle="tooltip" title="fa fa-rmb"></i></li>
                            <li class="icons-list-item"><i class="fa fa-road" data-toggle="tooltip" title="fa fa-road"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rocket" data-toggle="tooltip" title="fa fa-rocket"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rotate-left" data-toggle="tooltip" title="fa fa-rotate-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rotate-right" data-toggle="tooltip" title="fa fa-rotate-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rouble" data-toggle="tooltip" title="fa fa-rouble"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rss" data-toggle="tooltip" title="fa fa-rss"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rss-square" data-toggle="tooltip" title="fa fa-rss-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rub" data-toggle="tooltip" title="fa fa-rub"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ruble" data-toggle="tooltip" title="fa fa-ruble"></i></li>
                            <li class="icons-list-item"><i class="fa fa-rupee" data-toggle="tooltip" title="fa fa-rupee"></i></li>
                            <li class="icons-list-item"><i class="fa fa-s15" data-toggle="tooltip" title="fa fa-s15"></i></li>
                            <li class="icons-list-item"><i class="fa fa-safari" data-toggle="tooltip" title="fa fa-safari"></i></li>
                            <li class="icons-list-item"><i class="fa fa-save" data-toggle="tooltip" title="fa fa-save"></i></li>
                            <li class="icons-list-item"><i class="fa fa-scissors" data-toggle="tooltip" title="fa fa-scissors"></i></li>
                            <li class="icons-list-item"><i class="fa fa-scribd" data-toggle="tooltip" title="fa fa-scribd"></i></li>
                            <li class="icons-list-item"><i class="fa fa-search" data-toggle="tooltip" title="fa fa-search"></i></li>
                            <li class="icons-list-item"><i class="fa fa-search-minus" data-toggle="tooltip" title="fa fa-search-minus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-search-plus" data-toggle="tooltip" title="fa fa-search-plus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sellsy" data-toggle="tooltip" title="fa fa-sellsy"></i></li>
                            <li class="icons-list-item"><i class="fa fa-send" data-toggle="tooltip" title="fa fa-send"></i></li>
                            <li class="icons-list-item"><i class="fa fa-send-o" data-toggle="tooltip" title="fa fa-send-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-server" data-toggle="tooltip" title="fa fa-server"></i></li>
                            <li class="icons-list-item"><i class="fa fa-share" data-toggle="tooltip" title="fa fa-share"></i></li>
                            <li class="icons-list-item"><i class="fa fa-share-alt" data-toggle="tooltip" title="fa fa-share-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-share-alt-square" data-toggle="tooltip" title="fa fa-share-alt-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-share-square" data-toggle="tooltip" title="fa fa-share-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-share-square-o" data-toggle="tooltip" title="fa fa-share-square-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-shekel" data-toggle="tooltip" title="fa fa-shekel"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sheqel" data-toggle="tooltip" title="fa fa-sheqel"></i></li>
                            <li class="icons-list-item"><i class="fa fa-shield" data-toggle="tooltip" title="fa fa-shield"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ship" data-toggle="tooltip" title="fa fa-ship"></i></li>
                            <li class="icons-list-item"><i class="fa fa-shirtsinbulk" data-toggle="tooltip" title="fa fa-shirtsinbulk"></i></li>
                            <li class="icons-list-item"><i class="fa fa-shopping-bag" data-toggle="tooltip" title="fa fa-shopping-bag"></i></li>
                            <li class="icons-list-item"><i class="fa fa-shopping-basket" data-toggle="tooltip" title="fa fa-shopping-basket"></i></li>
                            <li class="icons-list-item"><i class="fa fa-shopping-cart" data-toggle="tooltip" title="fa fa-shopping-cart"></i></li>
                            <li class="icons-list-item"><i class="fa fa-shower" data-toggle="tooltip" title="fa fa-shower"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sign-in" data-toggle="tooltip" title="fa fa-sign-in"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sign-language" data-toggle="tooltip" title="fa fa-sign-language"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sign-out" data-toggle="tooltip" title="fa fa-sign-out"></i></li>
                            <li class="icons-list-item"><i class="fa fa-signal" data-toggle="tooltip" title="fa fa-signal"></i></li>
                            <li class="icons-list-item"><i class="fa fa-signing" data-toggle="tooltip" title="fa fa-signing"></i></li>
                            <li class="icons-list-item"><i class="fa fa-simplybuilt" data-toggle="tooltip" title="fa fa-simplybuilt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sitemap" data-toggle="tooltip" title="fa fa-sitemap"></i></li>
                            <li class="icons-list-item"><i class="fa fa-skyatlas" data-toggle="tooltip" title="fa fa-skyatlas"></i></li>
                            <li class="icons-list-item"><i class="fa fa-skype" data-toggle="tooltip" title="fa fa-skype"></i></li>
                            <li class="icons-list-item"><i class="fa fa-slack" data-toggle="tooltip" title="fa fa-slack"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sliders" data-toggle="tooltip" title="fa fa-sliders"></i></li>
                            <li class="icons-list-item"><i class="fa fa-slideshare" data-toggle="tooltip" title="fa fa-slideshare"></i></li>
                            <li class="icons-list-item"><i class="fa fa-smile-o" data-toggle="tooltip" title="fa fa-smile-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-snapchat" data-toggle="tooltip" title="fa fa-snapchat"></i></li>
                            <li class="icons-list-item"><i class="fa fa-snapchat-ghost" data-toggle="tooltip" title="fa fa-snapchat-ghost"></i></li>
                            <li class="icons-list-item"><i class="fa fa-snapchat-square" data-toggle="tooltip" title="fa fa-snapchat-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-snowflake-o" data-toggle="tooltip" title="fa fa-snowflake-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-soccer-ball-o" data-toggle="tooltip" title="fa fa-soccer-ball-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort" data-toggle="tooltip" title="fa fa-sort"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-alpha-asc" data-toggle="tooltip" title="fa fa-sort-alpha-asc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-alpha-desc" data-toggle="tooltip" title="fa fa-sort-alpha-desc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-amount-asc" data-toggle="tooltip" title="fa fa-sort-amount-asc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-amount-desc" data-toggle="tooltip" title="fa fa-sort-amount-desc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-asc" data-toggle="tooltip" title="fa fa-sort-asc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-desc" data-toggle="tooltip" title="fa fa-sort-desc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-down" data-toggle="tooltip" title="fa fa-sort-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-numeric-asc" data-toggle="tooltip" title="fa fa-sort-numeric-asc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-numeric-desc" data-toggle="tooltip" title="fa fa-sort-numeric-desc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sort-up" data-toggle="tooltip" title="fa fa-sort-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-soundcloud" data-toggle="tooltip" title="fa fa-soundcloud"></i></li>
                            <li class="icons-list-item"><i class="fa fa-space-shuttle" data-toggle="tooltip" title="fa fa-space-shuttle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-spinner" data-toggle="tooltip" title="fa fa-spinner"></i></li>
                            <li class="icons-list-item"><i class="fa fa-spoon" data-toggle="tooltip" title="fa fa-spoon"></i></li>
                            <li class="icons-list-item"><i class="fa fa-spotify" data-toggle="tooltip" title="fa fa-spotify"></i></li>
                            <li class="icons-list-item"><i class="fa fa-square" data-toggle="tooltip" title="fa fa-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-square-o" data-toggle="tooltip" title="fa fa-square-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stack-exchange" data-toggle="tooltip" title="fa fa-stack-exchange"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stack-overflow" data-toggle="tooltip" title="fa fa-stack-overflow"></i></li>
                            <li class="icons-list-item"><i class="fa fa-star" data-toggle="tooltip" title="fa fa-star"></i></li>
                            <li class="icons-list-item"><i class="fa fa-star-half" data-toggle="tooltip" title="fa fa-star-half"></i></li>
                            <li class="icons-list-item"><i class="fa fa-star-half-empty" data-toggle="tooltip" title="fa fa-star-half-empty"></i></li>
                            <li class="icons-list-item"><i class="fa fa-star-half-full" data-toggle="tooltip" title="fa fa-star-half-full"></i></li>
                            <li class="icons-list-item"><i class="fa fa-star-half-o" data-toggle="tooltip" title="fa fa-star-half-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-star-o" data-toggle="tooltip" title="fa fa-star-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-steam" data-toggle="tooltip" title="fa fa-steam"></i></li>
                            <li class="icons-list-item"><i class="fa fa-steam-square" data-toggle="tooltip" title="fa fa-steam-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-step-backward" data-toggle="tooltip" title="fa fa-step-backward"></i></li>
                            <li class="icons-list-item"><i class="fa fa-step-forward" data-toggle="tooltip" title="fa fa-step-forward"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stethoscope" data-toggle="tooltip" title="fa fa-stethoscope"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sticky-note" data-toggle="tooltip" title="fa fa-sticky-note"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sticky-note-o" data-toggle="tooltip" title="fa fa-sticky-note-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stop" data-toggle="tooltip" title="fa fa-stop"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stop-circle" data-toggle="tooltip" title="fa fa-stop-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stop-circle-o" data-toggle="tooltip" title="fa fa-stop-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-street-view" data-toggle="tooltip" title="fa fa-street-view"></i></li>
                            <li class="icons-list-item"><i class="fa fa-strikethrough" data-toggle="tooltip" title="fa fa-strikethrough"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stumbleupon" data-toggle="tooltip" title="fa fa-stumbleupon"></i></li>
                            <li class="icons-list-item"><i class="fa fa-stumbleupon-circle" data-toggle="tooltip" title="fa fa-stumbleupon-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-subscript" data-toggle="tooltip" title="fa fa-subscript"></i></li>
                            <li class="icons-list-item"><i class="fa fa-subway" data-toggle="tooltip" title="fa fa-subway"></i></li>
                            <li class="icons-list-item"><i class="fa fa-suitcase" data-toggle="tooltip" title="fa fa-suitcase"></i></li>
                            <li class="icons-list-item"><i class="fa fa-sun-o" data-toggle="tooltip" title="fa fa-sun-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-superpowers" data-toggle="tooltip" title="fa fa-superpowers"></i></li>
                            <li class="icons-list-item"><i class="fa fa-superscript" data-toggle="tooltip" title="fa fa-superscript"></i></li>
                            <li class="icons-list-item"><i class="fa fa-support" data-toggle="tooltip" title="fa fa-support"></i></li>
                            <li class="icons-list-item"><i class="fa fa-table" data-toggle="tooltip" title="fa fa-table"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tablet" data-toggle="tooltip" title="fa fa-tablet"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tachometer" data-toggle="tooltip" title="fa fa-tachometer"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tag" data-toggle="tooltip" title="fa fa-tag"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tags" data-toggle="tooltip" title="fa fa-tags"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tasks" data-toggle="tooltip" title="fa fa-tasks"></i></li>
                            <li class="icons-list-item"><i class="fa fa-taxi" data-toggle="tooltip" title="fa fa-taxi"></i></li>
                            <li class="icons-list-item"><i class="fa fa-telegram" data-toggle="tooltip" title="fa fa-telegram"></i></li>
                            <li class="icons-list-item"><i class="fa fa-television" data-toggle="tooltip" title="fa fa-television"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tencent-weibo" data-toggle="tooltip" title="fa fa-tencent-weibo"></i></li>
                            <li class="icons-list-item"><i class="fa fa-terminal" data-toggle="tooltip" title="fa fa-terminal"></i></li>
                            <li class="icons-list-item"><i class="fa fa-text-height" data-toggle="tooltip" title="fa fa-text-height"></i></li>
                            <li class="icons-list-item"><i class="fa fa-text-width" data-toggle="tooltip" title="fa fa-text-width"></i></li>
                            <li class="icons-list-item"><i class="fa fa-th" data-toggle="tooltip" title="fa fa-th"></i></li>
                            <li class="icons-list-item"><i class="fa fa-th-large" data-toggle="tooltip" title="fa fa-th-large"></i></li>
                            <li class="icons-list-item"><i class="fa fa-th-list" data-toggle="tooltip" title="fa fa-th-list"></i></li>
                            <li class="icons-list-item"><i class="fa fa-themeisle" data-toggle="tooltip" title="fa fa-themeisle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer" data-toggle="tooltip" title="fa fa-thermometer"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-0" data-toggle="tooltip" title="fa fa-thermometer-0"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-1" data-toggle="tooltip" title="fa fa-thermometer-1"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-2" data-toggle="tooltip" title="fa fa-thermometer-2"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-3" data-toggle="tooltip" title="fa fa-thermometer-3"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-4" data-toggle="tooltip" title="fa fa-thermometer-4"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-empty" data-toggle="tooltip" title="fa fa-thermometer-empty"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-full" data-toggle="tooltip" title="fa fa-thermometer-full"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-half" data-toggle="tooltip" title="fa fa-thermometer-half"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-quarter" data-toggle="tooltip" title="fa fa-thermometer-quarter"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thermometer-three-quarters" data-toggle="tooltip" title="fa fa-thermometer-three-quarters"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thumb-tack" data-toggle="tooltip" title="fa fa-thumb-tack"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thumbs-down" data-toggle="tooltip" title="fa fa-thumbs-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thumbs-o-down" data-toggle="tooltip" title="fa fa-thumbs-o-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thumbs-o-up" data-toggle="tooltip" title="fa fa-thumbs-o-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-thumbs-up" data-toggle="tooltip" title="fa fa-thumbs-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-ticket" data-toggle="tooltip" title="fa fa-ticket"></i></li>
                            <li class="icons-list-item"><i class="fa fa-times" data-toggle="tooltip" title="fa fa-times"></i></li>
                            <li class="icons-list-item"><i class="fa fa-times-circle" data-toggle="tooltip" title="fa fa-times-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-times-circle-o" data-toggle="tooltip" title="fa fa-times-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-times-rectangle" data-toggle="tooltip" title="fa fa-times-rectangle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-times-rectangle-o" data-toggle="tooltip" title="fa fa-times-rectangle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tint" data-toggle="tooltip" title="fa fa-tint"></i></li>
                            <li class="icons-list-item"><i class="fa fa-toggle-down" data-toggle="tooltip" title="fa fa-toggle-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-toggle-left" data-toggle="tooltip" title="fa fa-toggle-left"></i></li>
                            <li class="icons-list-item"><i class="fa fa-toggle-off" data-toggle="tooltip" title="fa fa-toggle-off"></i></li>
                            <li class="icons-list-item"><i class="fa fa-toggle-on" data-toggle="tooltip" title="fa fa-toggle-on"></i></li>
                            <li class="icons-list-item"><i class="fa fa-toggle-right" data-toggle="tooltip" title="fa fa-toggle-right"></i></li>
                            <li class="icons-list-item"><i class="fa fa-toggle-up" data-toggle="tooltip" title="fa fa-toggle-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-trademark" data-toggle="tooltip" title="fa fa-trademark"></i></li>
                            <li class="icons-list-item"><i class="fa fa-train" data-toggle="tooltip" title="fa fa-train"></i></li>
                            <li class="icons-list-item"><i class="fa fa-transgender" data-toggle="tooltip" title="fa fa-transgender"></i></li>
                            <li class="icons-list-item"><i class="fa fa-transgender-alt" data-toggle="tooltip" title="fa fa-transgender-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-trash" data-toggle="tooltip" title="fa fa-trash"></i></li>
                            <li class="icons-list-item"><i class="fa fa-trash-o" data-toggle="tooltip" title="fa fa-trash-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tree" data-toggle="tooltip" title="fa fa-tree"></i></li>
                            <li class="icons-list-item"><i class="fa fa-trello" data-toggle="tooltip" title="fa fa-trello"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tripadvisor" data-toggle="tooltip" title="fa fa-tripadvisor"></i></li>
                            <li class="icons-list-item"><i class="fa fa-trophy" data-toggle="tooltip" title="fa fa-trophy"></i></li>
                            <li class="icons-list-item"><i class="fa fa-truck" data-toggle="tooltip" title="fa fa-truck"></i></li>
                            <li class="icons-list-item"><i class="fa fa-try" data-toggle="tooltip" title="fa fa-try"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tty" data-toggle="tooltip" title="fa fa-tty"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tumblr" data-toggle="tooltip" title="fa fa-tumblr"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tumblr-square" data-toggle="tooltip" title="fa fa-tumblr-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-turkish-lira" data-toggle="tooltip" title="fa fa-turkish-lira"></i></li>
                            <li class="icons-list-item"><i class="fa fa-tv" data-toggle="tooltip" title="fa fa-tv"></i></li>
                            <li class="icons-list-item"><i class="fa fa-twitch" data-toggle="tooltip" title="fa fa-twitch"></i></li>
                            <li class="icons-list-item"><i class="fa fa-twitter" data-toggle="tooltip" title="fa fa-twitter"></i></li>
                            <li class="icons-list-item"><i class="fa fa-twitter-square" data-toggle="tooltip" title="fa fa-twitter-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-umbrella" data-toggle="tooltip" title="fa fa-umbrella"></i></li>
                            <li class="icons-list-item"><i class="fa fa-underline" data-toggle="tooltip" title="fa fa-underline"></i></li>
                            <li class="icons-list-item"><i class="fa fa-undo" data-toggle="tooltip" title="fa fa-undo"></i></li>
                            <li class="icons-list-item"><i class="fa fa-universal-access" data-toggle="tooltip" title="fa fa-universal-access"></i></li>
                            <li class="icons-list-item"><i class="fa fa-university" data-toggle="tooltip" title="fa fa-university"></i></li>
                            <li class="icons-list-item"><i class="fa fa-unlink" data-toggle="tooltip" title="fa fa-unlink"></i></li>
                            <li class="icons-list-item"><i class="fa fa-unlock" data-toggle="tooltip" title="fa fa-unlock"></i></li>
                            <li class="icons-list-item"><i class="fa fa-unlock-alt" data-toggle="tooltip" title="fa fa-unlock-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-unsorted" data-toggle="tooltip" title="fa fa-unsorted"></i></li>
                            <li class="icons-list-item"><i class="fa fa-upload" data-toggle="tooltip" title="fa fa-upload"></i></li>
                            <li class="icons-list-item"><i class="fa fa-usb" data-toggle="tooltip" title="fa fa-usb"></i></li>
                            <li class="icons-list-item"><i class="fa fa-usd" data-toggle="tooltip" title="fa fa-usd"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user" data-toggle="tooltip" title="fa fa-user"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user-circle" data-toggle="tooltip" title="fa fa-user-circle"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user-circle-o" data-toggle="tooltip" title="fa fa-user-circle-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user-md" data-toggle="tooltip" title="fa fa-user-md"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user-o" data-toggle="tooltip" title="fa fa-user-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user-plus" data-toggle="tooltip" title="fa fa-user-plus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user-secret" data-toggle="tooltip" title="fa fa-user-secret"></i></li>
                            <li class="icons-list-item"><i class="fa fa-user-times" data-toggle="tooltip" title="fa fa-user-times"></i></li>
                            <li class="icons-list-item"><i class="fa fa-users" data-toggle="tooltip" title="fa fa-users"></i></li>
                            <li class="icons-list-item"><i class="fa fa-vcard" data-toggle="tooltip" title="fa fa-vcard"></i></li>
                            <li class="icons-list-item"><i class="fa fa-vcard-o" data-toggle="tooltip" title="fa fa-vcard-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-venus" data-toggle="tooltip" title="fa fa-venus"></i></li>
                            <li class="icons-list-item"><i class="fa fa-venus-double" data-toggle="tooltip" title="fa fa-venus-double"></i></li>
                            <li class="icons-list-item"><i class="fa fa-venus-mars" data-toggle="tooltip" title="fa fa-venus-mars"></i></li>
                            <li class="icons-list-item"><i class="fa fa-viacoin" data-toggle="tooltip" title="fa fa-viacoin"></i></li>
                            <li class="icons-list-item"><i class="fa fa-viadeo" data-toggle="tooltip" title="fa fa-viadeo"></i></li>
                            <li class="icons-list-item"><i class="fa fa-viadeo-square" data-toggle="tooltip" title="fa fa-viadeo-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-video-camera" data-toggle="tooltip" title="fa fa-video-camera"></i></li>
                            <li class="icons-list-item"><i class="fa fa-vimeo" data-toggle="tooltip" title="fa fa-vimeo"></i></li>
                            <li class="icons-list-item"><i class="fa fa-vimeo-square" data-toggle="tooltip" title="fa fa-vimeo-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-vine" data-toggle="tooltip" title="fa fa-vine"></i></li>
                            <li class="icons-list-item"><i class="fa fa-vk" data-toggle="tooltip" title="fa fa-vk"></i></li>
                            <li class="icons-list-item"><i class="fa fa-volume-control-phone" data-toggle="tooltip" title="fa fa-volume-control-phone"></i></li>
                            <li class="icons-list-item"><i class="fa fa-volume-down" data-toggle="tooltip" title="fa fa-volume-down"></i></li>
                            <li class="icons-list-item"><i class="fa fa-volume-off" data-toggle="tooltip" title="fa fa-volume-off"></i></li>
                            <li class="icons-list-item"><i class="fa fa-volume-up" data-toggle="tooltip" title="fa fa-volume-up"></i></li>
                            <li class="icons-list-item"><i class="fa fa-warning" data-toggle="tooltip" title="fa fa-warning"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wechat" data-toggle="tooltip" title="fa fa-wechat"></i></li>
                            <li class="icons-list-item"><i class="fa fa-weibo" data-toggle="tooltip" title="fa fa-weibo"></i></li>
                            <li class="icons-list-item"><i class="fa fa-weixin" data-toggle="tooltip" title="fa fa-weixin"></i></li>
                            <li class="icons-list-item"><i class="fa fa-whatsapp" data-toggle="tooltip" title="fa fa-whatsapp"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wheelchair" data-toggle="tooltip" title="fa fa-wheelchair"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wheelchair-alt" data-toggle="tooltip" title="fa fa-wheelchair-alt"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wifi" data-toggle="tooltip" title="fa fa-wifi"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wikipedia-w" data-toggle="tooltip" title="fa fa-wikipedia-w"></i></li>
                            <li class="icons-list-item"><i class="fa fa-window-close" data-toggle="tooltip" title="fa fa-window-close"></i></li>
                            <li class="icons-list-item"><i class="fa fa-window-close-o" data-toggle="tooltip" title="fa fa-window-close-o"></i></li>
                            <li class="icons-list-item"><i class="fa fa-window-maximize" data-toggle="tooltip" title="fa fa-window-maximize"></i></li>
                            <li class="icons-list-item"><i class="fa fa-window-minimize" data-toggle="tooltip" title="fa fa-window-minimize"></i></li>
                            <li class="icons-list-item"><i class="fa fa-window-restore" data-toggle="tooltip" title="fa fa-window-restore"></i></li>
                            <li class="icons-list-item"><i class="fa fa-windows" data-toggle="tooltip" title="fa fa-windows"></i></li>
                            <li class="icons-list-item"><i class="fa fa-won" data-toggle="tooltip" title="fa fa-won"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wordpress" data-toggle="tooltip" title="fa fa-wordpress"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wpbeginner" data-toggle="tooltip" title="fa fa-wpbeginner"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wpexplorer" data-toggle="tooltip" title="fa fa-wpexplorer"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wpforms" data-toggle="tooltip" title="fa fa-wpforms"></i></li>
                            <li class="icons-list-item"><i class="fa fa-wrench" data-toggle="tooltip" title="fa fa-wrench"></i></li>
                            <li class="icons-list-item"><i class="fa fa-xing" data-toggle="tooltip" title="fa fa-xing"></i></li>
                            <li class="icons-list-item"><i class="fa fa-xing-square" data-toggle="tooltip" title="fa fa-xing-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-y-combinator" data-toggle="tooltip" title="fa fa-y-combinator"></i></li>
                            <li class="icons-list-item"><i class="fa fa-y-combinator-square" data-toggle="tooltip" title="fa fa-y-combinator-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-yahoo" data-toggle="tooltip" title="fa fa-yahoo"></i></li>
                            <li class="icons-list-item"><i class="fa fa-yc" data-toggle="tooltip" title="fa fa-yc"></i></li>
                            <li class="icons-list-item"><i class="fa fa-yc-square" data-toggle="tooltip" title="fa fa-yc-square"></i></li>
                            <li class="icons-list-item"><i class="fa fa-yelp" data-toggle="tooltip" title="fa fa-yelp"></i></li>
                            <li class="icons-list-item"><i class="fa fa-yen" data-toggle="tooltip" title="fa fa-yen"></i></li>
                            <li class="icons-list-item"><i class="fa fa-yoast" data-toggle="tooltip" title="fa fa-yoast"></i></li>
                            <li class="icons-list-item"><i class="fa fa-youtube" data-toggle="tooltip" title="fa fa-youtube"></i></li>
                            <li class="icons-list-item"><i class="fa fa-youtube-play" data-toggle="tooltip" title="fa fa-youtube-play"></i></li>
                            <li class="icons-list-item"><i class="fa fa-youtube-square" data-toggle="tooltip" title="fa fa-youtube-square"></i></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Flags</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <p> For more info <a href="" target="_blank">click here</a>.</p>
                        <p><code>&lt;i class="flag flag-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                      </div>
                      <div class="col-9">
                        <div class="icons-list-wrap">
                          <ul class="icons-list">
                            <li class="icons-list-item"><i class="flag flag-ad" data-toggle="tooltip" title="flag flag-ad"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ae" data-toggle="tooltip" title="flag flag-ae"></i></li>
                            <li class="icons-list-item"><i class="flag flag-af" data-toggle="tooltip" title="flag flag-af"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ag" data-toggle="tooltip" title="flag flag-ag"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ai" data-toggle="tooltip" title="flag flag-ai"></i></li>
                            <li class="icons-list-item"><i class="flag flag-al" data-toggle="tooltip" title="flag flag-al"></i></li>
                            <li class="icons-list-item"><i class="flag flag-am" data-toggle="tooltip" title="flag flag-am"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ao" data-toggle="tooltip" title="flag flag-ao"></i></li>
                            <li class="icons-list-item"><i class="flag flag-aq" data-toggle="tooltip" title="flag flag-aq"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ar" data-toggle="tooltip" title="flag flag-ar"></i></li>
                            <li class="icons-list-item"><i class="flag flag-as" data-toggle="tooltip" title="flag flag-as"></i></li>
                            <li class="icons-list-item"><i class="flag flag-at" data-toggle="tooltip" title="flag flag-at"></i></li>
                            <li class="icons-list-item"><i class="flag flag-au" data-toggle="tooltip" title="flag flag-au"></i></li>
                            <li class="icons-list-item"><i class="flag flag-aw" data-toggle="tooltip" title="flag flag-aw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ax" data-toggle="tooltip" title="flag flag-ax"></i></li>
                            <li class="icons-list-item"><i class="flag flag-az" data-toggle="tooltip" title="flag flag-az"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ba" data-toggle="tooltip" title="flag flag-ba"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bb" data-toggle="tooltip" title="flag flag-bb"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bd" data-toggle="tooltip" title="flag flag-bd"></i></li>
                            <li class="icons-list-item"><i class="flag flag-be" data-toggle="tooltip" title="flag flag-be"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bf" data-toggle="tooltip" title="flag flag-bf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bg" data-toggle="tooltip" title="flag flag-bg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bh" data-toggle="tooltip" title="flag flag-bh"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bi" data-toggle="tooltip" title="flag flag-bi"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bj" data-toggle="tooltip" title="flag flag-bj"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bl" data-toggle="tooltip" title="flag flag-bl"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bm" data-toggle="tooltip" title="flag flag-bm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bn" data-toggle="tooltip" title="flag flag-bn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bo" data-toggle="tooltip" title="flag flag-bo"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bq" data-toggle="tooltip" title="flag flag-bq"></i></li>
                            <li class="icons-list-item"><i class="flag flag-br" data-toggle="tooltip" title="flag flag-br"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bs" data-toggle="tooltip" title="flag flag-bs"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bt" data-toggle="tooltip" title="flag flag-bt"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bv" data-toggle="tooltip" title="flag flag-bv"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bw" data-toggle="tooltip" title="flag flag-bw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-by" data-toggle="tooltip" title="flag flag-by"></i></li>
                            <li class="icons-list-item"><i class="flag flag-bz" data-toggle="tooltip" title="flag flag-bz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ca" data-toggle="tooltip" title="flag flag-ca"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cc" data-toggle="tooltip" title="flag flag-cc"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cd" data-toggle="tooltip" title="flag flag-cd"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cf" data-toggle="tooltip" title="flag flag-cf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cg" data-toggle="tooltip" title="flag flag-cg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ch" data-toggle="tooltip" title="flag flag-ch"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ci" data-toggle="tooltip" title="flag flag-ci"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ck" data-toggle="tooltip" title="flag flag-ck"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cl" data-toggle="tooltip" title="flag flag-cl"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cm" data-toggle="tooltip" title="flag flag-cm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cn" data-toggle="tooltip" title="flag flag-cn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-co" data-toggle="tooltip" title="flag flag-co"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cr" data-toggle="tooltip" title="flag flag-cr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cu" data-toggle="tooltip" title="flag flag-cu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cv" data-toggle="tooltip" title="flag flag-cv"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cw" data-toggle="tooltip" title="flag flag-cw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cx" data-toggle="tooltip" title="flag flag-cx"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cy" data-toggle="tooltip" title="flag flag-cy"></i></li>
                            <li class="icons-list-item"><i class="flag flag-cz" data-toggle="tooltip" title="flag flag-cz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-de" data-toggle="tooltip" title="flag flag-de"></i></li>
                            <li class="icons-list-item"><i class="flag flag-dj" data-toggle="tooltip" title="flag flag-dj"></i></li>
                            <li class="icons-list-item"><i class="flag flag-dk" data-toggle="tooltip" title="flag flag-dk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-dm" data-toggle="tooltip" title="flag flag-dm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-do" data-toggle="tooltip" title="flag flag-do"></i></li>
                            <li class="icons-list-item"><i class="flag flag-dz" data-toggle="tooltip" title="flag flag-dz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ec" data-toggle="tooltip" title="flag flag-ec"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ee" data-toggle="tooltip" title="flag flag-ee"></i></li>
                            <li class="icons-list-item"><i class="flag flag-eg" data-toggle="tooltip" title="flag flag-eg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-eh" data-toggle="tooltip" title="flag flag-eh"></i></li>
                            <li class="icons-list-item"><i class="flag flag-er" data-toggle="tooltip" title="flag flag-er"></i></li>
                            <li class="icons-list-item"><i class="flag flag-es" data-toggle="tooltip" title="flag flag-es"></i></li>
                            <li class="icons-list-item"><i class="flag flag-et" data-toggle="tooltip" title="flag flag-et"></i></li>
                            <li class="icons-list-item"><i class="flag flag-eu" data-toggle="tooltip" title="flag flag-eu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-fi" data-toggle="tooltip" title="flag flag-fi"></i></li>
                            <li class="icons-list-item"><i class="flag flag-fj" data-toggle="tooltip" title="flag flag-fj"></i></li>
                            <li class="icons-list-item"><i class="flag flag-fk" data-toggle="tooltip" title="flag flag-fk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-fm" data-toggle="tooltip" title="flag flag-fm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-fo" data-toggle="tooltip" title="flag flag-fo"></i></li>
                            <li class="icons-list-item"><i class="flag flag-fr" data-toggle="tooltip" title="flag flag-fr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ga" data-toggle="tooltip" title="flag flag-ga"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gb" data-toggle="tooltip" title="flag flag-gb"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gb-eng" data-toggle="tooltip" title="flag flag-gb-eng"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gb-nir" data-toggle="tooltip" title="flag flag-gb-nir"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gb-sct" data-toggle="tooltip" title="flag flag-gb-sct"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gb-wls" data-toggle="tooltip" title="flag flag-gb-wls"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gd" data-toggle="tooltip" title="flag flag-gd"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ge" data-toggle="tooltip" title="flag flag-ge"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gf" data-toggle="tooltip" title="flag flag-gf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gg" data-toggle="tooltip" title="flag flag-gg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gh" data-toggle="tooltip" title="flag flag-gh"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gi" data-toggle="tooltip" title="flag flag-gi"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gl" data-toggle="tooltip" title="flag flag-gl"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gm" data-toggle="tooltip" title="flag flag-gm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gn" data-toggle="tooltip" title="flag flag-gn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gp" data-toggle="tooltip" title="flag flag-gp"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gq" data-toggle="tooltip" title="flag flag-gq"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gr" data-toggle="tooltip" title="flag flag-gr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gs" data-toggle="tooltip" title="flag flag-gs"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gt" data-toggle="tooltip" title="flag flag-gt"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gu" data-toggle="tooltip" title="flag flag-gu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gw" data-toggle="tooltip" title="flag flag-gw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-gy" data-toggle="tooltip" title="flag flag-gy"></i></li>
                            <li class="icons-list-item"><i class="flag flag-hk" data-toggle="tooltip" title="flag flag-hk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-hm" data-toggle="tooltip" title="flag flag-hm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-hn" data-toggle="tooltip" title="flag flag-hn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-hr" data-toggle="tooltip" title="flag flag-hr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ht" data-toggle="tooltip" title="flag flag-ht"></i></li>
                            <li class="icons-list-item"><i class="flag flag-hu" data-toggle="tooltip" title="flag flag-hu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-id" data-toggle="tooltip" title="flag flag-id"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ie" data-toggle="tooltip" title="flag flag-ie"></i></li>
                            <li class="icons-list-item"><i class="flag flag-il" data-toggle="tooltip" title="flag flag-il"></i></li>
                            <li class="icons-list-item"><i class="flag flag-im" data-toggle="tooltip" title="flag flag-im"></i></li>
                            <li class="icons-list-item"><i class="flag flag-in" data-toggle="tooltip" title="flag flag-in"></i></li>
                            <li class="icons-list-item"><i class="flag flag-io" data-toggle="tooltip" title="flag flag-io"></i></li>
                            <li class="icons-list-item"><i class="flag flag-iq" data-toggle="tooltip" title="flag flag-iq"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ir" data-toggle="tooltip" title="flag flag-ir"></i></li>
                            <li class="icons-list-item"><i class="flag flag-is" data-toggle="tooltip" title="flag flag-is"></i></li>
                            <li class="icons-list-item"><i class="flag flag-it" data-toggle="tooltip" title="flag flag-it"></i></li>
                            <li class="icons-list-item"><i class="flag flag-je" data-toggle="tooltip" title="flag flag-je"></i></li>
                            <li class="icons-list-item"><i class="flag flag-jm" data-toggle="tooltip" title="flag flag-jm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-jo" data-toggle="tooltip" title="flag flag-jo"></i></li>
                            <li class="icons-list-item"><i class="flag flag-jp" data-toggle="tooltip" title="flag flag-jp"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ke" data-toggle="tooltip" title="flag flag-ke"></i></li>
                            <li class="icons-list-item"><i class="flag flag-kg" data-toggle="tooltip" title="flag flag-kg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-kh" data-toggle="tooltip" title="flag flag-kh"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ki" data-toggle="tooltip" title="flag flag-ki"></i></li>
                            <li class="icons-list-item"><i class="flag flag-km" data-toggle="tooltip" title="flag flag-km"></i></li>
                            <li class="icons-list-item"><i class="flag flag-kn" data-toggle="tooltip" title="flag flag-kn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-kp" data-toggle="tooltip" title="flag flag-kp"></i></li>
                            <li class="icons-list-item"><i class="flag flag-kr" data-toggle="tooltip" title="flag flag-kr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-kw" data-toggle="tooltip" title="flag flag-kw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ky" data-toggle="tooltip" title="flag flag-ky"></i></li>
                            <li class="icons-list-item"><i class="flag flag-kz" data-toggle="tooltip" title="flag flag-kz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-la" data-toggle="tooltip" title="flag flag-la"></i></li>
                            <li class="icons-list-item"><i class="flag flag-lb" data-toggle="tooltip" title="flag flag-lb"></i></li>
                            <li class="icons-list-item"><i class="flag flag-lc" data-toggle="tooltip" title="flag flag-lc"></i></li>
                            <li class="icons-list-item"><i class="flag flag-li" data-toggle="tooltip" title="flag flag-li"></i></li>
                            <li class="icons-list-item"><i class="flag flag-lk" data-toggle="tooltip" title="flag flag-lk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-lr" data-toggle="tooltip" title="flag flag-lr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ls" data-toggle="tooltip" title="flag flag-ls"></i></li>
                            <li class="icons-list-item"><i class="flag flag-lt" data-toggle="tooltip" title="flag flag-lt"></i></li>
                            <li class="icons-list-item"><i class="flag flag-lu" data-toggle="tooltip" title="flag flag-lu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-lv" data-toggle="tooltip" title="flag flag-lv"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ly" data-toggle="tooltip" title="flag flag-ly"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ma" data-toggle="tooltip" title="flag flag-ma"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mc" data-toggle="tooltip" title="flag flag-mc"></i></li>
                            <li class="icons-list-item"><i class="flag flag-md" data-toggle="tooltip" title="flag flag-md"></i></li>
                            <li class="icons-list-item"><i class="flag flag-me" data-toggle="tooltip" title="flag flag-me"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mf" data-toggle="tooltip" title="flag flag-mf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mg" data-toggle="tooltip" title="flag flag-mg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mh" data-toggle="tooltip" title="flag flag-mh"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mk" data-toggle="tooltip" title="flag flag-mk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ml" data-toggle="tooltip" title="flag flag-ml"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mm" data-toggle="tooltip" title="flag flag-mm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mn" data-toggle="tooltip" title="flag flag-mn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mo" data-toggle="tooltip" title="flag flag-mo"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mp" data-toggle="tooltip" title="flag flag-mp"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mq" data-toggle="tooltip" title="flag flag-mq"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mr" data-toggle="tooltip" title="flag flag-mr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ms" data-toggle="tooltip" title="flag flag-ms"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mt" data-toggle="tooltip" title="flag flag-mt"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mu" data-toggle="tooltip" title="flag flag-mu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mv" data-toggle="tooltip" title="flag flag-mv"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mw" data-toggle="tooltip" title="flag flag-mw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mx" data-toggle="tooltip" title="flag flag-mx"></i></li>
                            <li class="icons-list-item"><i class="flag flag-my" data-toggle="tooltip" title="flag flag-my"></i></li>
                            <li class="icons-list-item"><i class="flag flag-mz" data-toggle="tooltip" title="flag flag-mz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-na" data-toggle="tooltip" title="flag flag-na"></i></li>
                            <li class="icons-list-item"><i class="flag flag-nc" data-toggle="tooltip" title="flag flag-nc"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ne" data-toggle="tooltip" title="flag flag-ne"></i></li>
                            <li class="icons-list-item"><i class="flag flag-nf" data-toggle="tooltip" title="flag flag-nf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ng" data-toggle="tooltip" title="flag flag-ng"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ni" data-toggle="tooltip" title="flag flag-ni"></i></li>
                            <li class="icons-list-item"><i class="flag flag-nl" data-toggle="tooltip" title="flag flag-nl"></i></li>
                            <li class="icons-list-item"><i class="flag flag-no" data-toggle="tooltip" title="flag flag-no"></i></li>
                            <li class="icons-list-item"><i class="flag flag-np" data-toggle="tooltip" title="flag flag-np"></i></li>
                            <li class="icons-list-item"><i class="flag flag-nr" data-toggle="tooltip" title="flag flag-nr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-nu" data-toggle="tooltip" title="flag flag-nu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-nz" data-toggle="tooltip" title="flag flag-nz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-om" data-toggle="tooltip" title="flag flag-om"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pa" data-toggle="tooltip" title="flag flag-pa"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pe" data-toggle="tooltip" title="flag flag-pe"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pf" data-toggle="tooltip" title="flag flag-pf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pg" data-toggle="tooltip" title="flag flag-pg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ph" data-toggle="tooltip" title="flag flag-ph"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pk" data-toggle="tooltip" title="flag flag-pk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pl" data-toggle="tooltip" title="flag flag-pl"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pm" data-toggle="tooltip" title="flag flag-pm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pn" data-toggle="tooltip" title="flag flag-pn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pr" data-toggle="tooltip" title="flag flag-pr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ps" data-toggle="tooltip" title="flag flag-ps"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pt" data-toggle="tooltip" title="flag flag-pt"></i></li>
                            <li class="icons-list-item"><i class="flag flag-pw" data-toggle="tooltip" title="flag flag-pw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-py" data-toggle="tooltip" title="flag flag-py"></i></li>
                            <li class="icons-list-item"><i class="flag flag-qa" data-toggle="tooltip" title="flag flag-qa"></i></li>
                            <li class="icons-list-item"><i class="flag flag-re" data-toggle="tooltip" title="flag flag-re"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ro" data-toggle="tooltip" title="flag flag-ro"></i></li>
                            <li class="icons-list-item"><i class="flag flag-rs" data-toggle="tooltip" title="flag flag-rs"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ru" data-toggle="tooltip" title="flag flag-ru"></i></li>
                            <li class="icons-list-item"><i class="flag flag-rw" data-toggle="tooltip" title="flag flag-rw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sa" data-toggle="tooltip" title="flag flag-sa"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sb" data-toggle="tooltip" title="flag flag-sb"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sc" data-toggle="tooltip" title="flag flag-sc"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sd" data-toggle="tooltip" title="flag flag-sd"></i></li>
                            <li class="icons-list-item"><i class="flag flag-se" data-toggle="tooltip" title="flag flag-se"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sg" data-toggle="tooltip" title="flag flag-sg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sh" data-toggle="tooltip" title="flag flag-sh"></i></li>
                            <li class="icons-list-item"><i class="flag flag-si" data-toggle="tooltip" title="flag flag-si"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sj" data-toggle="tooltip" title="flag flag-sj"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sk" data-toggle="tooltip" title="flag flag-sk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sl" data-toggle="tooltip" title="flag flag-sl"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sm" data-toggle="tooltip" title="flag flag-sm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sn" data-toggle="tooltip" title="flag flag-sn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-so" data-toggle="tooltip" title="flag flag-so"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sr" data-toggle="tooltip" title="flag flag-sr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ss" data-toggle="tooltip" title="flag flag-ss"></i></li>
                            <li class="icons-list-item"><i class="flag flag-st" data-toggle="tooltip" title="flag flag-st"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sv" data-toggle="tooltip" title="flag flag-sv"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sx" data-toggle="tooltip" title="flag flag-sx"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sy" data-toggle="tooltip" title="flag flag-sy"></i></li>
                            <li class="icons-list-item"><i class="flag flag-sz" data-toggle="tooltip" title="flag flag-sz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tc" data-toggle="tooltip" title="flag flag-tc"></i></li>
                            <li class="icons-list-item"><i class="flag flag-td" data-toggle="tooltip" title="flag flag-td"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tf" data-toggle="tooltip" title="flag flag-tf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tg" data-toggle="tooltip" title="flag flag-tg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-th" data-toggle="tooltip" title="flag flag-th"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tj" data-toggle="tooltip" title="flag flag-tj"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tk" data-toggle="tooltip" title="flag flag-tk"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tl" data-toggle="tooltip" title="flag flag-tl"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tm" data-toggle="tooltip" title="flag flag-tm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tn" data-toggle="tooltip" title="flag flag-tn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-to" data-toggle="tooltip" title="flag flag-to"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tr" data-toggle="tooltip" title="flag flag-tr"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tt" data-toggle="tooltip" title="flag flag-tt"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tv" data-toggle="tooltip" title="flag flag-tv"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tw" data-toggle="tooltip" title="flag flag-tw"></i></li>
                            <li class="icons-list-item"><i class="flag flag-tz" data-toggle="tooltip" title="flag flag-tz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ua" data-toggle="tooltip" title="flag flag-ua"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ug" data-toggle="tooltip" title="flag flag-ug"></i></li>
                            <li class="icons-list-item"><i class="flag flag-um" data-toggle="tooltip" title="flag flag-um"></i></li>
                            <li class="icons-list-item"><i class="flag flag-un" data-toggle="tooltip" title="flag flag-un"></i></li>
                            <li class="icons-list-item"><i class="flag flag-us" data-toggle="tooltip" title="flag flag-us"></i></li>
                            <li class="icons-list-item"><i class="flag flag-uy" data-toggle="tooltip" title="flag flag-uy"></i></li>
                            <li class="icons-list-item"><i class="flag flag-uz" data-toggle="tooltip" title="flag flag-uz"></i></li>
                            <li class="icons-list-item"><i class="flag flag-va" data-toggle="tooltip" title="flag flag-va"></i></li>
                            <li class="icons-list-item"><i class="flag flag-vc" data-toggle="tooltip" title="flag flag-vc"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ve" data-toggle="tooltip" title="flag flag-ve"></i></li>
                            <li class="icons-list-item"><i class="flag flag-vg" data-toggle="tooltip" title="flag flag-vg"></i></li>
                            <li class="icons-list-item"><i class="flag flag-vi" data-toggle="tooltip" title="flag flag-vi"></i></li>
                            <li class="icons-list-item"><i class="flag flag-vn" data-toggle="tooltip" title="flag flag-vn"></i></li>
                            <li class="icons-list-item"><i class="flag flag-vu" data-toggle="tooltip" title="flag flag-vu"></i></li>
                            <li class="icons-list-item"><i class="flag flag-wf" data-toggle="tooltip" title="flag flag-wf"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ws" data-toggle="tooltip" title="flag flag-ws"></i></li>
                            <li class="icons-list-item"><i class="flag flag-ye" data-toggle="tooltip" title="flag flag-ye"></i></li>
                            <li class="icons-list-item"><i class="flag flag-yt" data-toggle="tooltip" title="flag flag-yt"></i></li>
                            <li class="icons-list-item"><i class="flag flag-za" data-toggle="tooltip" title="flag flag-za"></i></li>
                            <li class="icons-list-item"><i class="flag flag-zm" data-toggle="tooltip" title="flag flag-zm"></i></li>
                            <li class="icons-list-item"><i class="flag flag-zw" data-toggle="tooltip" title="flag flag-zw"></i></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Payments</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <p> For more info <a href="" target="_blank">click here</a>.</p>
                        <p><code>&lt;i class="payment payment-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                      </div>
                      <div class="col-9">
                        <div class="icons-list-wrap">
                          <ul class="icons-list">
                            <li class="icons-list-item"><i class="payment payment-2checkout" data-toggle="tooltip" title="payment payment-2checkout"></i></li>
                            <li class="icons-list-item"><i class="payment payment-alipay" data-toggle="tooltip" title="payment payment-alipay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-amazon" data-toggle="tooltip" title="payment payment-amazon"></i></li>
                            <li class="icons-list-item"><i class="payment payment-americanexpress" data-toggle="tooltip" title="payment payment-americanexpress"></i></li>
                            <li class="icons-list-item"><i class="payment payment-applepay" data-toggle="tooltip" title="payment payment-applepay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-bancontact" data-toggle="tooltip" title="payment payment-bancontact"></i></li>
                            <li class="icons-list-item"><i class="payment payment-bitcoin" data-toggle="tooltip" title="payment payment-bitcoin"></i></li>
                            <li class="icons-list-item"><i class="payment payment-bitpay" data-toggle="tooltip" title="payment payment-bitpay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-cirrus" data-toggle="tooltip" title="payment payment-cirrus"></i></li>
                            <li class="icons-list-item"><i class="payment payment-clickandbuy" data-toggle="tooltip" title="payment payment-clickandbuy"></i></li>
                            <li class="icons-list-item"><i class="payment payment-coinkite" data-toggle="tooltip" title="payment payment-coinkite"></i></li>
                            <li class="icons-list-item"><i class="payment payment-dinersclub" data-toggle="tooltip" title="payment payment-dinersclub"></i></li>
                            <li class="icons-list-item"><i class="payment payment-directdebit" data-toggle="tooltip" title="payment payment-directdebit"></i></li>
                            <li class="icons-list-item"><i class="payment payment-discover" data-toggle="tooltip" title="payment payment-discover"></i></li>
                            <li class="icons-list-item"><i class="payment payment-dwolla" data-toggle="tooltip" title="payment payment-dwolla"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ebay" data-toggle="tooltip" title="payment payment-ebay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-eway" data-toggle="tooltip" title="payment payment-eway"></i></li>
                            <li class="icons-list-item"><i class="payment payment-giropay" data-toggle="tooltip" title="payment payment-giropay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-googlewallet" data-toggle="tooltip" title="payment payment-googlewallet"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ingenico" data-toggle="tooltip" title="payment payment-ingenico"></i></li>
                            <li class="icons-list-item"><i class="payment payment-jcb" data-toggle="tooltip" title="payment payment-jcb"></i></li>
                            <li class="icons-list-item"><i class="payment payment-klarna" data-toggle="tooltip" title="payment payment-klarna"></i></li>
                            <li class="icons-list-item"><i class="payment payment-laser" data-toggle="tooltip" title="payment payment-laser"></i></li>
                            <li class="icons-list-item"><i class="payment payment-maestro" data-toggle="tooltip" title="payment payment-maestro"></i></li>
                            <li class="icons-list-item"><i class="payment payment-mastercard" data-toggle="tooltip" title="payment payment-mastercard"></i></li>
                            <li class="icons-list-item"><i class="payment payment-monero" data-toggle="tooltip" title="payment payment-monero"></i></li>
                            <li class="icons-list-item"><i class="payment payment-neteller" data-toggle="tooltip" title="payment payment-neteller"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ogone" data-toggle="tooltip" title="payment payment-ogone"></i></li>
                            <li class="icons-list-item"><i class="payment payment-okpay" data-toggle="tooltip" title="payment payment-okpay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paybox" data-toggle="tooltip" title="payment payment-paybox"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paymill" data-toggle="tooltip" title="payment payment-paymill"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payone" data-toggle="tooltip" title="payment payment-payone"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payoneer" data-toggle="tooltip" title="payment payment-payoneer"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paypal" data-toggle="tooltip" title="payment payment-paypal"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paysafecard" data-toggle="tooltip" title="payment payment-paysafecard"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payu" data-toggle="tooltip" title="payment payment-payu"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payza" data-toggle="tooltip" title="payment payment-payza"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ripple" data-toggle="tooltip" title="payment payment-ripple"></i></li>
                            <li class="icons-list-item"><i class="payment payment-sage" data-toggle="tooltip" title="payment payment-sage"></i></li>
                            <li class="icons-list-item"><i class="payment payment-sepa" data-toggle="tooltip" title="payment payment-sepa"></i></li>
                            <li class="icons-list-item"><i class="payment payment-shopify" data-toggle="tooltip" title="payment payment-shopify"></i></li>
                            <li class="icons-list-item"><i class="payment payment-skrill" data-toggle="tooltip" title="payment payment-skrill"></i></li>
                            <li class="icons-list-item"><i class="payment payment-solo" data-toggle="tooltip" title="payment payment-solo"></i></li>
                            <li class="icons-list-item"><i class="payment payment-square" data-toggle="tooltip" title="payment payment-square"></i></li>
                            <li class="icons-list-item"><i class="payment payment-stripe" data-toggle="tooltip" title="payment payment-stripe"></i></li>
                            <li class="icons-list-item"><i class="payment payment-switch" data-toggle="tooltip" title="payment payment-switch"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ukash" data-toggle="tooltip" title="payment payment-ukash"></i></li>
                            <li class="icons-list-item"><i class="payment payment-unionpay" data-toggle="tooltip" title="payment payment-unionpay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-verifone" data-toggle="tooltip" title="payment payment-verifone"></i></li>
                            <li class="icons-list-item"><i class="payment payment-verisign" data-toggle="tooltip" title="payment payment-verisign"></i></li>
                            <li class="icons-list-item"><i class="payment payment-visa" data-toggle="tooltip" title="payment payment-visa"></i></li>
                            <li class="icons-list-item"><i class="payment payment-webmoney" data-toggle="tooltip" title="payment payment-webmoney"></i></li>
                            <li class="icons-list-item"><i class="payment payment-westernunion" data-toggle="tooltip" title="payment payment-westernunion"></i></li>
                            <li class="icons-list-item"><i class="payment payment-worldpay" data-toggle="tooltip" title="payment payment-worldpay"></i></li>
                            <li class="icons-list-item"><i class="payment payment-2checkout-dark" data-toggle="tooltip" title="payment payment-2checkout-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-alipay-dark" data-toggle="tooltip" title="payment payment-alipay-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-amazon-dark" data-toggle="tooltip" title="payment payment-amazon-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-americanexpress-dark" data-toggle="tooltip" title="payment payment-americanexpress-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-applepay-dark" data-toggle="tooltip" title="payment payment-applepay-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-bancontact-dark" data-toggle="tooltip" title="payment payment-bancontact-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-bitcoin-dark" data-toggle="tooltip" title="payment payment-bitcoin-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-bitpay-dark" data-toggle="tooltip" title="payment payment-bitpay-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-cirrus-dark" data-toggle="tooltip" title="payment payment-cirrus-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-clickandbuy-dark" data-toggle="tooltip" title="payment payment-clickandbuy-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-coinkite-dark" data-toggle="tooltip" title="payment payment-coinkite-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-dinersclub-dark" data-toggle="tooltip" title="payment payment-dinersclub-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-directdebit-dark" data-toggle="tooltip" title="payment payment-directdebit-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-discover-dark" data-toggle="tooltip" title="payment payment-discover-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-dwolla-dark" data-toggle="tooltip" title="payment payment-dwolla-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ebay-dark" data-toggle="tooltip" title="payment payment-ebay-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-eway-dark" data-toggle="tooltip" title="payment payment-eway-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-giropay-dark" data-toggle="tooltip" title="payment payment-giropay-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-googlewallet-dark" data-toggle="tooltip" title="payment payment-googlewallet-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ingenico-dark" data-toggle="tooltip" title="payment payment-ingenico-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-jcb-dark" data-toggle="tooltip" title="payment payment-jcb-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-klarna-dark" data-toggle="tooltip" title="payment payment-klarna-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-laser-dark" data-toggle="tooltip" title="payment payment-laser-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-maestro-dark" data-toggle="tooltip" title="payment payment-maestro-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-mastercard-dark" data-toggle="tooltip" title="payment payment-mastercard-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-monero-dark" data-toggle="tooltip" title="payment payment-monero-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-neteller-dark" data-toggle="tooltip" title="payment payment-neteller-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ogone-dark" data-toggle="tooltip" title="payment payment-ogone-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-okpay-dark" data-toggle="tooltip" title="payment payment-okpay-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paybox-dark" data-toggle="tooltip" title="payment payment-paybox-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paymill-dark" data-toggle="tooltip" title="payment payment-paymill-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payone-dark" data-toggle="tooltip" title="payment payment-payone-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payoneer-dark" data-toggle="tooltip" title="payment payment-payoneer-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paypal-dark" data-toggle="tooltip" title="payment payment-paypal-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-paysafecard-dark" data-toggle="tooltip" title="payment payment-paysafecard-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payu-dark" data-toggle="tooltip" title="payment payment-payu-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-payza-dark" data-toggle="tooltip" title="payment payment-payza-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ripple-dark" data-toggle="tooltip" title="payment payment-ripple-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-sage-dark" data-toggle="tooltip" title="payment payment-sage-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-sepa-dark" data-toggle="tooltip" title="payment payment-sepa-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-shopify-dark" data-toggle="tooltip" title="payment payment-shopify-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-skrill-dark" data-toggle="tooltip" title="payment payment-skrill-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-solo-dark" data-toggle="tooltip" title="payment payment-solo-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-square-dark" data-toggle="tooltip" title="payment payment-square-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-stripe-dark" data-toggle="tooltip" title="payment payment-stripe-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-switch-dark" data-toggle="tooltip" title="payment payment-switch-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-ukash-dark" data-toggle="tooltip" title="payment payment-ukash-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-unionpay-dark" data-toggle="tooltip" title="payment payment-unionpay-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-verifone-dark" data-toggle="tooltip" title="payment payment-verifone-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-verisign-dark" data-toggle="tooltip" title="payment payment-verisign-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-visa-dark" data-toggle="tooltip" title="payment payment-visa-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-webmoney-dark" data-toggle="tooltip" title="payment payment-webmoney-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-westernunion-dark" data-toggle="tooltip" title="payment payment-westernunion-dark"></i></li>
                            <li class="icons-list-item"><i class="payment payment-worldpay-dark" data-toggle="tooltip" title="payment payment-worldpay-dark"></i></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">First link</a></li>
                    <li><a href="#">Second link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Third link</a></li>
                    <li><a href="#">Fourth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Fifth link</a></li>
                    <li><a href="#">Sixth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Other link</a></li>
                    <li><a href="#">Last link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              Premium and Open Source dashboard template with responsive and high quality UI. For Free!
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                    <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                  </ul>
                </div>
                <div class="col-auto">
                  <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>