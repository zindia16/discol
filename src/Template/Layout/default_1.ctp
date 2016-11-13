<!DOCTYPE html>
<html lang="en" ng-app="App" ng-controller="Main">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Discol</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?= $this->Url->build('/') ?>bower_components/Materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?= $this->Url->build('/') ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">

                <div class="nav-wrapper container">
                    <a href="<?= $this->Url->build('/') ?>" class="brand-logo blue-text"><i class="material-icons left">public</i>Discol</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= $this->Url->build(['controller'=>'Users','action'=>'index']) ?>"><?= $User['first_name']." ".$User['last_name'] ?></a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'Users','action'=>'logout']) ?>">Logout</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="<?= $this->Url->build(['controller'=>'Users','action'=>'index']) ?>"><?= $User['first_name']." ".$User['last_name'] ?></a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'Users','action'=>'logout']) ?>">Logout</a></li>
                    </ul>
                </div>

            </nav>
        </div>
        <div class="container" ng-view>
            
        </div>
        <footer class="page-footer blue">
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="brown-text text-lighten-3" href="<?= $this->Url->build('/') ?>">DisCol IT Team</a>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            var ROOT_URL = "<?php echo $this->Url->build('/'); ?>";
        </script>

        <!--  Scripts-->
        <script src="<?= $this->Url->build('/') ?>bower_components/jquery/dist/jquery.js"></script>
        <script src="<?= $this->Url->build('/') ?>bower_components/Materialize/dist/js/materialize.js"></script>
        <script src="<?= $this->Url->build('/') ?>bower_components/angular/angular.min.js"></script>
        <script src="<?= $this->Url->build('/') ?>bower_components/angular-materialize/src/angular-materialize.js"></script>
        <script src="<?= $this->Url->build('/') ?>/App/app.js"></script>
    </body>
</html>

