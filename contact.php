<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/daterangepicker-bs3.css" />


    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Payless Online Travel</div>
    <div class="address-bar">Bay 513, 3208 - 8 Ave. NE | Calgary, AB T2A 7V8 | 403.539.0200</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Payless Online Travel</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="active">
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Payless Online Travel</strong></h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <!-- <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2507.650879337149!2d-113.9867107!3d51.0595339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717b2b428c25b5%3A0x3b7f155b4b49962e!2s3208+8+Ave+NE%2C+Calgary%2C+AB+T2A!5e0!3m2!1sen!2sca!4v1431581786064" width="100%" height="400" frameborder="0" scrolling="no" style="border:0" marginheight="0" marginwidth="0"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>403.539.0200</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    <p>Address:<br>
                        <strong>Bay 513, 3208 - 8 Ave. NE
                            <br>Calgary, AB
                            <br>T2A 7V8</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Drop us a request or just say hi!</p>
                    <form name="form1" method="post" action="send_contact.php" role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input name="name" id="name" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input name="customer_mail" id="customer_mail" type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea name="detail" id="detail" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="submit" name="submit" value="submit">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Travel Agent Test--> 
    </div>
    <!-- /.container -->


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
                        VACATIONS |  CRUISES  |  AIR  |  BUSINESS TRAVEL | INSURANCE
                        <br>
                        3208 - 8 AVE NE, BAY 513 | Calgary | AB | T2A 7V8
                        <br>
                        Ph: (403) 539-0200
                        <br>
                        &copy; 2015 Privacy Policy
                        <br>
                        All Rights Reserved by Payless Online Travel
                    </p>
                
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/moment.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="js/daterangepicker.js"></script>


    /<script src="js/bootstrap-typeahead.js"></script>




    <script type="text/javascript">
        $(document).ready(function() {
              $('#birthday').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
        });

        $(document).ready(function() {
            $('#reservation').daterangepicker(null, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });

                                // $(document).ready(function () {
/*
                                  $(document).ready(function () {

                                    var dataSource = new Bloodhound({
                                        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('country'),
                                        queryTokenizer: Bloodhound.tokenizers.whitespace,
                                        prefetch: {
                                            url: "http://jsbin.com/nepazu/1.json"
                                        }
                                    });


                                    dataSource.initialize();

                                    $('.typeahead').typeahead({
                                        highlight: true
                                    }, {
                                        displayKey: 'country',
                                        source: dataSource.ttAdapter()
                                    });

                                });*/


       // $('#demo1').typeahead({
        $("*[id=demo1]").typeahead({
            // displayKey: name
            source: [
                { id: 1, name: 'Toronto'},
                { id: 2, name: 'Montreal' },
                { id: 3, name: 'New York' },
                { id: 4, name: 'Buffalo' },
                { id: 5, name: 'Boston' },
                { id: 6, name: 'Columbus' },
                { id: 7, name: 'Dallas' },
                { id: 8, name: 'Vancouver' },
                { id: 9, name: 'Seattle' },
                { id: 10, name: 'Los Angeles' }
                // { id: 11, name: 'Los askdfhksahj', type:'aklshdkfjh' }
    
            ]

            // source: "https://raw.githubusercontent.com/jbrooksuk/JSON-Airports/master/airports.json"

        });


    </script>

</body>

</html>
