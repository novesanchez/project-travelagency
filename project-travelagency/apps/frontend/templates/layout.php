<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    
    <title>Aus Wonder Travel PTY Ltd.</title>
    <meta name="description" content=""/> 
    <meta name="author" content="Nove"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>


    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css"/>   
    <link rel="stylesheet" href="/css/bootstrap/custom_bootstrap.css"/> 

  </head>
  <body>
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Aus Wonder Travel PTY Ltd.</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-file"></span>Quotations<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Create Quotation</a></li>
                                <li><a href="#">View All Quotations</a></li>                        
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-cog"></span>Maintenance<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Hotels</a></li>                        
                                <li><a href="#">Coaches</a></li>
                                <li><a href="#">Services</a></li>                        
                                <li><a href="#">Cities</a></li>
                                <li><a href="#">Activities</a></li>  
                                <li class="divider"></li>
                                <li><a href="#">Coach Threshold</a></li>  
                                <li><a href="#">Company Info.</a></li>  
                                <li><a href="#">Document Config</a></li>  
                            </ul>
                        </li>                
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-wrench"></span>Settings<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Users</a></li>                        
                                <li><a href="#">User Group</a></li>                        
                                <li><a href="#">User Access Assignment</a></li>                        
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-user"></span>&nbsp;nove.sanchez@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="/index.php/home/Logout">
                                <span class="glyphicon glyphicon-off"></span>&nbsp;<span class="label label-primary" style="font-size: 13px;">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
      
        <?php  echo $sf_content ?>

  </body>
</html>
