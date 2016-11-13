<!DOCTYPE html>
<html lang="en" ng-app="LandingApp">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Discol</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="bower_components/Materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">

                <div class="nav-wrapper container">
                    <a href="#/" class="brand-logo blue-text"><i class="material-icons left">public</i>Discol</a>
                    <a href="javascript:void(0)" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#/login">Login</a></li>
                        <li><a href="#/signup">Signup</a></li>
                        <li><a href="#/howItWorks">How It Works</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#/login">Login</a></li>
                        <li><a href="#/signup">Signup</a></li>
                        <li><a href="#/howItWorks">How It Works</a></li>
                    </ul>
                </div>

            </nav>
        </div>
		<div class="" ng-view></div>
        <footer class="page-footer blue">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">About DisCol</h5>
                        <p class="grey-text text-lighten-4">We are a team of highly profession and motivated towards creating a project that is social network of early entrepreneur, helping them collaborate and manage their projects better. </p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Partners</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Associates</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="brown-text text-lighten-3" href="">DisCol IT Team</a>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            var ROOT_URL = "<?php echo $this->Url->build('/',TRUE); ?>";
        </script>

        <!--  Scripts-->
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/Materialize/dist/js/materialize.js"></script>
        <script src="bower_components/angular/angular.min.js"></script>
        <script src="bower_components/angular-route/angular-route.min.js"></script>
        <script src="bower_components/angular-materialize/src/angular-materialize.js"></script>
        <script src="bower_components/ngstorage/ngStorage.min.js"></script>
        <script src="js/LandingApp/app.js"></script>
        <script src="js/LandingApp/login.controller.js"></script>
        <script type="text/javascript">
            (function ($) {
                $(function () {
                    $('.button-collapse').sideNav();
                    $('.parallax').parallax();
                }); // end of document ready
            })(jQuery); // end of jQuery name space
        </script>

    </body>
</html>
