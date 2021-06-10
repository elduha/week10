<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="./css/style-index.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>

<script type="text/javascript">
    $(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
    });

</script>

<body class="body-bg">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand ml-5 font-weight-regular" style="font-size: 30px;">YourTrip</a>
                
                <!-- Collapse Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <!-- Collapsible Content -->

                <div class="collapse navbar-collapse pr-5" id="navbarNavDropdown">

                <!-- Links -->
                    <ul class="navbar-nav ml-auto"> 

                        <li class="nav-item">
                            <a href="index2.php" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-label="navbarDropdownMenuLink">
                                <a href="index.php" class="dropdown-item">Create own tour</a>
                                <a href="tours.html" class="dropdown-item">Choose ready tour</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacts</a>
                        </li>

                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h1 style="letter-spacing: 6px; font-size: 50px;">Discover wonderful places in Kazakhstan</h1>
                    <h3 style="color:white">Create your own trip with us</h3>
                    <button type="button" class="btn" id="buttons">More details</button> <br>
                </div>
            </div>
        </div>
    </section>

    <div class="container" id="info">
        <h2>What is our <b id="blueEl">goals?</b></h2>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <img src="./img/icon1-index.jpg" alt="icon1" id="image-icons">
                <div id="about">
                <h3>Provide you ready-made tours</h3>
                <p style="padding-top: 10px;">You can choose ready-made tours that we will provide you
                        with and come up with in advance.Your trip will be 
                        already thought out. Scroll down below to see more</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <img src="./img/icon2-index.jpg" alt="icon2" id="image-icons">
                <div id="about">
                <h3>Help you to create your own trip</h3>
                <p style="padding-top: 10px;">You can create your own trip using our website. It's very simple.
                        Choose the available locations and create your own journey. 
                        Scroll down below to see more</p>
                </div>
            </div>
        </div>
    </div>
    


    <div class="container" id="info-tours">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <img src="./img/charyn-index.jpg" alt="charyn" id="image">
            </div>
            <div class="col-sm-4 col-md-4" id="special-heading">
                <h2>Choose <br> <b id="blueEl"> ready-made tour</b></h2>
                <p>See the local architecture and enjoy the nature of Kazakhstan.</p>
                <button type="button" class="btn" id="buttons">See More</button>
            </div>
        </div>
    </div>
    
    <div class="container" id="info-tours">
        <div class="row">
            <div class="col-sm-4 col-md-4" id="special-heading">
                <h2>Choose <br> <b id="blueEl"> ready-made tour</b></h2>
                <p>See the local architecture and enjoy the nature of Kazakhstan.</p>
                <button type="button" class="btn" id="buttons">See More</button>
            </div>
            <div class="col-sm-8 col-md-8">
                <img src="./img/alakol-index.jpg" alt="alakol" id="image">
            </div>
        </div>
    </div>

    <footer id="footer">
        <img src="./img/footer.jpg" alt="footer" style="width:100% ;height: auto;">
    </footer>
</body>
</html>