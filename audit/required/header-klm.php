<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kilimanjaro App</title>
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- SmartAddon.com Verification -->
    <meta name="smartaddon-verification" content="936e8d43184bc47ef34e25e426c508fe" />
	<meta name="keywords" content="Kilimanjaro App, Guide, Android App, Tanzania, Moshi, Pascal, Msoka, Pascal Msoka, Pacsal, pcg, paXo">
	<meta name="description" content="Kilimanjaro in Tanzania and not Kenya">
    <!-- site css -->
    <link rel="stylesheet" href="designs/css/site.min.css">
    <script type="text/javascript" src="designs/js/site.min.js"></script>
  </head>
  <body style="background-color: #f1f2f6;">
    <div class="docs-header">
      <!--nav-->
      <nav class="navbar navbar-default navbar-custom" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="designs/img/logo.png" height="40"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
			  <li><a class="nav-link <?php if($_GET['klmapp']=='accomodations'){echo "current";}else{}?>" href="?klmapp=accomodations">Accomodation</a></li>
              <li><a class="nav-link <?php if($_GET['klmapp']=='transports'){echo "current";}else{}?>" href="?klmapp=transports">Transpotation</a></li>
              <li><a class="nav-link <?php if($_GET['klmapp']=='agents'){echo "current";}else{}?>" href="?klmapp=agents">Travel Agents</a></li>
			  <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
							<li><a class="nav-link <?php if($_GET['klmapp']=='dashboard'){echo "current";}else{}?>" href="?klmapp=dashboard">Dashboard</a></li>
                            <li><a class="nav-link <?php if($_GET['klmapp']=='trash'){echo "current";}else{}?>" href="?klmapp=trash">Trash</a></li>
                            <li><a class="nav-link <?php if($_GET['klmapp']=='system-logs'){echo "current";}else{}?>" href="?klmapp=logs">System Logs</a></li>
                            <li><a class="nav-link <?php if($_GET['klmapp']=='settings'){echo "current";}else{}?>" href="?klmapp=settings">Settings</a></li>
                            <li class="divider"></li>
							<li><a href="?klmapp=logout">Logout</a></li>
                          </ul>
                        </li>
            </ul>
          </div>
        </div>
      </nav>
	</div>  
