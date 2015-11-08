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
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
            <div class="logo "><a href="<?php echo base_url('home') ?>"><img src="/assets/img/logo3.png"></a></div>
        </div>        
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-center">
            <div class="slogan"><p>L’Institut Privé Supérieur des Systèmes d’Information</p></div>
        </div>
        </div>
        <div class="colright">
            <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 text-center">
            <div class="col-lg-6">                
                <div class="social">                  
                       <a href="https://www.facebook.com/ipformation" class="fa fa-facebook fa-2x"></a>
                       <a href="https://twitter.com/ipformation" class="fa fa-twitter fa-2x"></a>
                       <a href="#" class="fa fa-linkedin fa-2x"></a>                    
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="monipssi">
                        <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-user"></i> Mon IPSSI</a>
                </div>  
            </div> <!-- end class 1st row -->              
            </div>    
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">

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
                <a class="navbar-brand" href="<?php echo base_url('home') ?>"><span class="glyphicon glyphicon-home"></span>Accueil</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li  class="dropdown full-width">
                        <a href="<?php echo base_url('pages/view/groupe') ?>">Le groupe</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="container-fluid">   
                                    <div class="col-sm-12 col-md-12 col-lg-12"> 
                                        <li>test megamenu</li>

                                        <li>test megamenu</li>

                                        <li>test megamenu</li>

                                        <li>test megamenu</li>

                                        <li>test megamenu</li>
                                    </div>
                                </div> 
                            </ul>
                    </li>
                    <li  class="dropdown full-width">
                        <a href="<?php echo base_url('pages/view/activite') ?>">L'activité</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="container-fluid">   
                                    <div class="col-sm-12 col-md-12 col-lg-12"> 
                                        <li><a href="<?php echo base_url('pages/view/cursus1') ?>">Cursus 1</a></li>
                                        <li><a href="<?php echo base_url('pages/view/cursus2') ?>">Cursus 2</a></li>
                                        <li><a href="<?php echo base_url('pages/view/cursus3') ?>">Cursus 3</a></li>
                                        <li><a href="<?php echo base_url('pages/view/cursus4') ?>">Cursus 4</a></li>
                                        <li><a href="<?php echo base_url('pages/view/cursus5') ?>">Cursus 5</a></li>
                                    </div>
                                </div> 
                            </ul>
                    </li>
                    <li  class="dropdown full-width">
                        <a href="<?php echo base_url('pages/view/rejoindre') ?>">Nous rejoindre</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="container-fluid">   
                                    <div class="col-sm-12 col-md-12 col-lg-12"> 
                                        <li>test megamenu</li>

                                        <li>test megamenu</li>

                                        <li>test megamenu</li>

                                        <li>test megamenu</li>

                                        <li>test megamenu</li>
                                    </div>
                                </div> 
                            </ul>
                    </li>
                    <li  class="dropdown full-width">
                        <a href="<?php echo base_url('pages/view/collaborateur') ?>">Espace collaborateur</a>
                    </li>
                    <li  class="dropdown full-width">
                        <a href="<?php echo base_url('pages/view/contact') ?>">contact</a>
                    </li>
                      
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    </div>
    <div class="container">
