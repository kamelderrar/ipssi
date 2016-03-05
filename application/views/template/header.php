<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/modern-business.css">
        <link rel="stylesheet" href="/assets/css/main.css">

        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    </head>
    
    <body>
    <!-- logo et slogan -->

    <div class="container">
    <div id="slogan">

    <div class="row">

        <div id="logoslogan">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 text-center">
            <div class="logo "><a href="<?php echo base_url('home') ?>"><img src="/assets/img/logo3.png"></a></div>
        </div>        
        <div class="col-lg-5 col-md-5 col-sm-7 col-xs-7 text-center">
            <div class="slogan"><p>L’Institut Privé Supérieur des Systèmes d’Information</p></div>
        </div>
        </div>
        <div class="colright">
            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-6 text-center">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">                
                <div class="social">                  
                       <a href="https://www.facebook.com/ipformation" class="fa fa-facebook fa-2x"></a>
                       <a href="https://twitter.com/ipformation" class="fa fa-twitter fa-2x"></a>
                       <a href="#" class="fa fa-linkedin fa-2x"></a>                    
                </div> 
            </div>
            <div class=" col-xs-4 col-sm-6 col-md-6 col-lg-6">
                <div class="monipssi">
                        <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-user"></i> Mon IPSSI</a>
                </div>  
            </div> <!-- end class 1st row -->              
            </div>    
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">

            <div class="recherche">
                <form class="navbar-form " role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Rechercher">
                       <button type="submit" class="btn btn-default">Ok</button>
                    </div>
                </form>
            </div> 

        </div>              
        </div>              
        </div> <!-- end colright -->
    </div> <!-- end class 2nd row -->
    </div>     
    </div>

    <!-- Navigation -->
    <div class="tnav">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container megamenu">
            <div class="row">
            <div class="col-lg-12">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<!--                 <a class="navbar-brand" href="<?php echo base_url('home') ?>"><span class="glyphicon glyphicon-home"></span>Accueil</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse js-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Le groupe<span class="caret"></span></a>              
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Groupe ip-formation</li>

                            <div id="menCollection" class="carousel slide" data-ride="carousel" data-interval="false">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="/assets/img/panoramique/pano1.jpg" class="img-responsive" alt="product 1"></a>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="/assets/img/panoramique/pano2.jpg" class="img-responsive" alt="product 2"></a>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="/assets/img/panoramique/pano3.jpg" class="img-responsive" alt="product 3"></a>
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->

                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Le groupe</li>
                            <li><a href="<?php echo base_url('pages/presentation') ?>">Présentation</a></li>
                            <li><a href="<?php echo base_url('pages/chiffres') ?>">Chiffres clés</a></li>
                            <li><a href="<?php echo base_url('pages/expertise') ?>">Notre expertise</a></li>
                            <li><a href="<?php echo base_url('pages/valeurs') ?>">Les valeurs du groupe</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li></li>                      
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li></li>                     
                        </ul>
                    </li>
                </ul>               
            </li>
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">L'activité <span class="caret"></span></a>                
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Groupe ip-formation</li>
                            <div id="womenCollection" class="carousel slide" data-ride="carousel" data-interval="false">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="/assets/img/photos_jobdating/img-1.jpg" class="img-responsive" alt="product 1"></a>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="/assets/img/photos_jobdating/img-8.jpg" class="img-responsive" alt="product 2"></a>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="/assets/img/photos_jobdating/img-3.jpg" class="img-responsive" alt="product 3"></a>
                                </div><!-- End Item -->                                                         
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->                        
                            </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">L'activité</li>
                            <li><a href="<?php echo base_url('pages/metiers') ?>">Nos métiers</a></li>
                            <li><a href="<?php echo base_url('pages/secteurs') ?>">Nos secteurs d'activités</a></li>
                            <li><a href="<?php echo base_url('pages/confiance') ?>">Ils nous font confiance</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li></li>                     
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                </ul>               
            </li>            
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nous rejoindre<span class="caret"></span></a>                
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Groupe ip-formation</li>
                            <div id="womenCollection" class="carousel slide" data-ride="carousel" data-interval="false">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="/assets/img/photos_jobdating/img-1.jpg" class="img-responsive" alt="product 1"></a>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="/assets/img/photos_jobdating/img-8.jpg" class="img-responsive" alt="product 2"></a>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="/assets/img/photos_jobdating/img-3.jpg" class="img-responsive" alt="product 3"></a>
                                </div><!-- End Item -->                                                         
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->                        
                            </ul>
                    </li>
                    <li class="col-sm-3">
                    <ul>
                            <li class="dropdown-header">Nous rejoindre</li>
                            <li><a href="<?php echo base_url('pages/postes') ?>">Les postes à pourvoir</a></li>
                            <li><a href="<?php echo base_url('pages/postuler') ?>">Postuler</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li></li>                     
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        
                    </li>
                </ul>               
            </li>
            <li><a href="#">Espace collaborateur</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div><!-- /.nav-collapse -->
            <!-- /.navbar-collapse -->
            </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    </div>
   
</div> 

    <div class="container">
