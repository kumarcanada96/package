<?php
if($_POST["message"]) {
    mail("damani.kumar@gmail.com", "Form to email message", $_POST["message"], "From:kumarcanada96@gmail.com");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>test email</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link
    href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
    <link
    href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"
    type="text/css">


    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span
                class="icon-bar"></span> <span class="icon-bar"></span> <span
                class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.html">Travel
                Connection</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="about.html">About</a></li>
                <li><a class="page-scroll" href="index.html#services">Services</a></li>
                <li><a href="hotels.html">Hotels</a></li>
                <li><a href="vacation.html">Vacation</a></li>
                <li><a href="cruise.html">Cruise</a></li>
                <li><a href="insurance.html">Insurance</a></li>
                <li><a class="page-scroll" href="index.html#portfolio">Request Quote</a></li>
                <li><a href="quotes.html">Testimonials</a></li>
                               <li><a class="page-scroll" href="index.html#contact">Contact Us</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

    <!-- <header> -->


            <section class="bg-or" id="contact">


            	<div class="containder">

            			<form method="post" action="contact.php">
						    <textarea name="message"></textarea>
						    <input type="submit">
						</form>

            	</div>






            </section>
    <!-- </header> -->







                            <!-- Scripts Used -->
                            
                            <!-- jQuery -->
                            <script src="js/jquery.js"></script>

                            <!-- Bootstrap Core JavaScript -->
                            <script src="js/bootstrap.min.js"></script>

                            <!-- Plugin JavaScript -->
                            <script src="js/jquery.easing.min.js"></script>
                            <script src="js/jquery.fittext.js"></script>
                            <script src="js/wow.min.js"></script>

                            <!-- Custom Theme JavaScript -->
                            <script src="js/creative.js"></script>

                        </body>

                        </html>