<?php
//gather PhP
include 'comic.php';

//Remove errors from the page.
error_reporting(0); 
?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online Web Comic">
    <meta name="author" content="Website: @fredghostkyle. ">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Room 404 | Page <?php echo $page;?></title>

    <!-- Bootstrap core CSS -->
    <link href="./htmladd/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./htmladd/offcanvas.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./htmladd/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Room 404</a>
        </div>
        <div class="collapse navbar-collapse navbar-left">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Comic</a></li>
            <li><a href="./store">Store</a></li>
            <li><a href="./about">About/Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"> </span><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li role="presentation" class="dropdown-header"><span class="glyphicon glyphicon-file"></span> Page Placment</a></li>
                  <li><a href="./?save="><span class="glyphicon glyphicon-floppy-save"></span> Save current page (automatic)</a></li>
                  <li><a href="./?reset="><span class="glyphicon glyphicon-fire"></span> Reset page placment</a></li>
                  <li><a href="./comicfiles/workings"><span class="glyphicon glyphicon-info-sign"></span> Info on page placment/saving</a>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation" class="dropdown-header"><span class="glyphicon glyphicon-file"></span> Page Jump</li>
                  <form class="navbar-form form-group-sm" role="search" method="get" action="./">
                    <div class="input-group form-group-sm">
                        <input type="text" class="form-control" placeholder="Page #" name="page">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit">Jump</button>
                        </span>
                    </div><!-- /input-group -->
                  </form>
              </ul>
          </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Pages</button>
          </p>
          <br>
          <br>
            
<?php
/*
 * Checking to see that the page you trying to view is liginimet (note:placed here for the on-screen error looks nicer)
 */

if ($missing) {
    echo '<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><center>Looks like you are looking for a page that is not created yet! Sorry about that :(</center></div>';   
}
?>

          <div class="jumbotron">
            <center><p><h1><?php echo $title;?></h1></p></center>
            <center><p><img src="<?php echo $image;?>" alt="Image for <?php echo $page;?>." width="100%" hight="100%"></p></center>
            <center><h5><?php echo $text;?></h5></center>
            <br>
            <center><p><a href="./?page=<?php echo $page +1;?>"><button class="btn btn-info btn-sm">==></button></a></p></center>
          </div>

            <!-- Place contents of row.html here for best result. -->

        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <br>
            <h3>Pages</h3>
          <div class="list-group">
<?php
/*
 * Determen if a previous page is needed
 */

if($page-1 <= 0) {
    echo '';
}
else {
    $pageMinus = $page -1;
    echo '            <a href="./?page='.$pageMinus.'" class="list-group-item">Page '.$pageMinus.' (previous page)</a>';
} ?>
            <a href="./?page=<?php echo $page;?>" class="list-group-item active">Page <?php echo $page;?> (current page)</a>
            <a href="./?page=<?php echo $page +1;?>" class="list-group-item">Page <?php echo $page +1;?></a>
            <a href="./?page=<?php echo $page +2;?>" class="list-group-item">Page <?php echo $page +2;?></a>
            <a href="./?page=<?php echo $page +3;?>" class="list-group-item">Page <?php echo $page +3;?></a>
            <a href="./?page=<?php echo $page +4;?>" class="list-group-item">Page <?php echo $page +4;?></a>
            <a href="./?page=<?php echo $page +5;?>" class="list-group-item">Page <?php echo $page +5;?></a>
            <a href="./?page=<?php echo $page +6;?>" class="list-group-item">Page <?php echo $page +6;?></a>
            <a href="./?page=<?php echo $page +7;?>" class="list-group-item">Page <?php echo $page +7;?></a>
            <a href="./?page=<?php echo $page +8;?>" class="list-group-item">Page <?php echo $page +8;?></a>
          </div>
        </div><!--/span-->
      </div><!--/row-->


<!-- Modal for $Welcome -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>Welcome!</center></h4>
      </div>
      <div class="modal-body">
        <h1>CONTENT ADVISORY:</h1>
        <h3>This content is onlt sudgested to peoples over the age of 13. By closing this window you agree to that fact and assume FULL responsobility. If you disslike that idea leave NOW!</h3>
        <br>
        <br>
        <h4>Sorry about that! Leagly we need to get that out of the way, and also we don't need younger kids getting exposed to the type on information here! Welcome to Room 404's Web Comic! We hope you enjoy the hard work we have endlessly put into this. After you close this box you can start reading. Just click the arrow below the image and text to move on. If you enjoy our comic we would greatly apprecait if you perchesed something from our <a href="store/">Store</a>! </h4>
        <br>
        <h4>If you have any questions visit the forums or tumblr.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Lets Read!</button>
      </div>
    </div>
  </div>
</div>

      <hr>

      <footer>
        <p>© Room 404 2014</p>
      </footer>

    </div><!--/.container-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./htmladd/jquery.min.js"></script>
    <script src="./htmladd/bootstrap.min.js"></script>
    <script src="./htmladd/offcanvas.js"></script>

<?php
//exicute the modal if you are new
if($welcome == true) {
    echo "<script> $('#myModal').modal('show');</script>";
}
?>

    </body>
</html>