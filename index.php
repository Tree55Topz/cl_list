<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<head>

    <meta charset="utf-8">

    <title>Cometlist - Anonymous & Shared Bookmarks</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/login_register_modal.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-left" href="#">Cometlist</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php include "components/navBar.php"; ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="  search-query form-control" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="button">
                            <span class=" glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
			<button type="button" onclick="pages/saveBookmark.php"> Save A Bookmark!</button> 

        </div>
			
    </header>

    <!-- Register Modal -->
    <div id="register" class="modal fade" role="dialog">
       <?php include "components/registerModal.php"; ?>
    </div>
	
	<!-- Sign In Modal -->
    <div id="signIn" class="modal fade" role="dialog">
       <?php include "components/signInModal.php"; ?>
    </div> 

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <div class="summaryText">
                    <h2>Save your bookmarks to re-use anywhere</h2>
                    <p>Save and organize your bookmarks to pull up anywhere, anytime, and on any device. </p>
                </div>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <div class="summaryText">
                    <h2>A more intuitive way to search the web</h2>
                    <p>Keep track of the best sites you have found while doing research, browsing, or just exploring the web. Mark
                        these lists as Public so anyone can find your list! No more using a search engine and clicking link by link.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <div class="summaryText">
                    <h2>Anonymous bookmarks</h2>
                    <p>Rather not have anyone see what you are bookmarking? No problem, Cometlist will keep any unshared lists
                        invisible and private to your account.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->


</body>

</html>
