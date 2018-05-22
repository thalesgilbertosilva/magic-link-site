<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>MAGIC LINK | Provedor de Internet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"  style="background-color: #030000;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a href="#myPage">
                        <img class="log-topo-imagem" src="imagens/logo_magic.png" alt=""/>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#myPage">INÍCIO</a></li>
                        <li><a href="#about">EMPRESA</a></li>
                        <li><a href="#portfolio">COBERTURA</a></li>
                        <li><a href="#pricing">PLANOS</a></li>
                        <li><a href="login.php" target="_blank">BOLETOS</a></li>
                        <li><a href="https://magiclink.tomticket.com/?account=1422208P15052018075949" target="_blank">SUPORTE</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" >
                    <img src="http://www.camara.gov.br/internet/bancoimagem/banco/img201606221239384557867.jpg">
                </div>
                <div class="item">
                    <img src="http://www.camara.gov.br/internet/bancoimagem/banco/img201606221239384557867.jpg" style="">
                </div>
                <div class="item">
                    <img src="http://www.camara.gov.br/internet/bancoimagem/banco/img201606221239384557867.jpg">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>EMPRESA</h2><br>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <br><button class="btn btn-default btn-lg">Get in Touch</button>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo slideanim"></span>
            </div>
            <div class="col-sm-8">
                <h2>Our Values</h2><br>
                <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center">
        <h2></h2>
        <h4>What we offer</h4>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-off logo-small"></span>
                <h4>POWER</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-heart logo-small"></span>
                <h4>LOVE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-lock logo-small"></span>
                <h4>JOB DONE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-leaf logo-small"></span>
                <h4>GREEN</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate logo-small"></span>
                <h4>CERTIFIED</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4 style="color:#303030;">HARD WORK</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>COBERTURA</h2><br>
        <h4>What we have created</h4>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="paris.jpg" alt="Paris" width="400" height="300">
                    <p><strong>Paris</strong></p>
                    <p>Yes, we built Paris</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="newyork.jpg" alt="New York" width="400" height="300">
                    <p><strong>New York</strong></p>
                    <p>We built New York</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
                    <p><strong>San Francisco</strong></p>
                    <p>Yes, San Fran is ours</p>
                </div>
            </div>
        </div><br>
    </div>
    <!-- <h2>What our customers say</h2>
     <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">-->
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>-->

    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>-->

    <!-- Container (Pricing Section) -->
    <div id="pricing" class="container-fluid">
        <div class="text-center" >
            <h2>Planos</h2>
            <h4>Encontre aqui o plano perfeito para você.</h4>
        </div>
        <div class="row slideanim">
            <div class="col-sm-3 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1 class="planos-megas">5 Megas</h1>
                        <h1 style="font-size: 22px">FIBRA ÓPTICA</h1>
                    </div>
                    <div class="panel-body" style="height: 100px;">
                        <p><strong>Perfeita para:</strong><br> Redes sociais e pesquisas</p>
                    </div>
                    <div class="panel-footer">
                        <h3 class="planos-text">Download:</h3>
                        <p>5Mbps</p>
                        <div class="">
                            <h3 class="planos-text">Upload:</h3>
                            <p>5Mbps</p>
                        </div>
                        <button class="btn btn-lg" style=" color: #008B8B;background-color: #201E1E;font-weight: bold;">Contratar</button>
                    </div>
                </div>      
            </div>     
            <div class="col-sm-3 col-xs-12">
                <div class="panel panel-default text-center"  style="border-radius: 5px;">
                    <div class="panel-heading">
                        <h1 class="planos-megas">10 Megas</h1>
                        <h1 style="font-size: 22px">FIBRA ÓPTICA</h1>
                    </div>
                      <div class="panel-body" style="height: 100px;">
                        <p><strong>Perfeita para:</strong><br>Jogos online e videos</p>
                    </div>
                     <div class="panel-footer">
                        <h3 class="planos-text">Download:</h3>
                        <p>10Mbps</p>
                        <div class="">
                            <h3 class="planos-text">Upload:</h3>
                            <p>10Mbps</p>
                        </div>
                        <button class="btn btn-lg" style=" color: #008B8B;background-color: #201E1E;font-weight: bold;">Contratar</button>
                    </div>
                </div>      
            </div>       
            <div class="col-sm-3 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1 class="planos-megas">20 Megas</h1>
                        <h1 style="font-size: 22px">FIBRA ÓPTICA</h1>
                    </div>
                    <div class="panel-body" style="height: 100px;">
                        <p><strong>Perfeita para:</strong><br> Jogos online e video em alta qualidade</p>
                    </div>
                    <div class="panel-footer">
                        <h3 class="planos-text">Download:</h3>
                        <p>20Mbps</p>
                        <div class="">
                            <h3 class="planos-text">Upload:</h3>
                            <p>20Mbps</p>
                        </div>
                        <button class="btn btn-lg" style=" color: #008B8B;background-color: #201E1E;font-weight: bold;">Contratar</button>
                    </div>
                </div>      
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1 class="planos-megas">30 Megas</h1>
                        <h1 style="font-size: 22px">FIBRA ÓPTICA</h1>
                    </div>
                     <div class="panel-body" style="height: 100px;">
                        <p><strong>Perfeita para:</strong><br> Jogos online, videos em alta qualidade e redes sociais</p>
                    </div>
                    <div class="panel-footer">
                        <h3 class="planos-text">Download:</h3>
                        <p>30Mbps</p>
                        <div class="">
                            <h3 class="planos-text">Upload:</h3>
                            <p>30Mbps</p>
                        </div>
                        <button class="btn btn-lg" style=" color: #008B8B;background-color: #201E1E;font-weight: bold;">Contratar</button>
                    </div>
                </div>      
            </div> 
        </div>
    </div>


    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">SUPORTE</h2>
        <br><button class="btn btn-default btn-lg" onclick.href=""><a href="https://magic-link.tomticket.com">Fazer Chamado</a></button>
        <!--<div class="row">
            <div class="col-sm-5">
                <p>Entre em contato conosco, e nós responderemos em até 24 horas.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>-->
        </div>
    </div>

    <!-- Add Google Maps -->
    <div id="googleMap" style="height:400px;width:100%;"></div>
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapProp = {center: myCenter, zoom: 12, scrollwheel: false, draggable: false, mapTypeId: google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({position: myCenter});
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p id="text-footer"><strong>Copyright &copy; 2018 | Magic Link</strong> </p>
    </footer>

    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function () {
                $(".slideanim").each(function () {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

</body>
</html>
