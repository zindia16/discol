<!DOCTYPE html>
<html lang="en" ng-app="App" ng-controller="Main">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Discol</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="bower_components/Materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="bower_components/angular-material/angular-material.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">

                <div class="nav-wrapper" style="padding: 0px 25px">
                    <a href="#/" class="brand-logo blue-text"><i class="material-icons left">public</i>Discol</a>
                    <a href="#" data-activates="mobile-demo" data-sidenav="left" data-menuwidth="250" data-closeonclick="true" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down" style="line-height:52px">
                        <li ng-class="getClass('/posts')">
                            <a href="#/posts" class="blue-text" tooltipped data-position="bottom" data-delay="50" data-tooltip="Posts"><i class="material-icons">send</i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="brown-text" tooltipped data-position="bottom" data-delay="50" data-tooltip="Blogs"><i class="material-icons">edit</i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="yellow-text" tooltipped data-position="bottom" data-delay="50" data-tooltip="Ideas"><i class="material-icons">wb_incandescent</i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="orange-text" tooltipped data-position="bottom" data-delay="50" data-tooltip="Brainstorm"><i class="material-icons">flash_on</i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="red-text" tooltipped data-position="bottom" data-delay="50" data-tooltip="Goals"><i class="material-icons">my_location</i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="teal-text" tooltipped data-position="bottom" data-delay="50" data-tooltip="Projects"><i class="material-icons">terrain</i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" ><span class="new badge red" style="margin-left: -25px;">4</span><i class="material-icons left">notifications</i></a>
                        </li>
                        <li>
                            <a class='dropdown-button' href='javascript:void(0);' data-activates='userDropdown' dropdown data-hover="true">{{user.first_name}}<i class="material-icons right">more_vert</i></a>
                            <ul id='userDropdown' class='dropdown-content'>
								<li><a href="javascript:void(0);" ng-click="logout()">Logout</a></li>
                                <li><a href="javascript:void(0);">Settings</a></li>                                
                            </ul>
                        </li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <a href="javascript:void(0);" ><i class="material-icons left">notifications</i> Notifications <span class="new badge red">4</span></a>
                        </li>
                        <li ng-class="getClass('/posts')">
                            <a href="#/posts" class="blue-text"><i class="material-icons left">send</i> Blogs</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="brown-text"><i class="material-icons left">edit</i> Blogs</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="yellow-text"><i class="material-icons left">wb_incandescent</i> Ideas</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="orange-text"><i class="material-icons left">flash_on</i> Brainstorm</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="red-text"><i class="material-icons left">my_location</i> Goals</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="teal-text"><i class="material-icons left">terrain</i> Projects</a>
                        </li>
                        <li><a href="javascript:void(0);"><i class="material-icons left">person</i> {{user.first_name}}</a></li>
                        <li><a href="javascript:void(0);" ng-click="logout()"><i class="material-icons left">power_settings_new</i> Logout</a></li>
                    </ul>
                </div>

            </nav>
        </div>
		<div id="toaster"></div>
        <div class="container" ng-view>

        </div>
        <footer class="page-footer blue">
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
        <script src="bower_components/angular-aria/angular-aria.min.js"></script>
        <script src="bower_components/angular-animate/angular-animate.min.js"></script>
        <script src="bower_components/angular-material/angular-material.min.js"></script>
        <script src="bower_components/ngstorage/ngStorage.min.js"></script>
        <script src="js/App/app.js"></script>
        <!-- Services -->
        <script src="js/App/services/posts.service.js"></script>
        <!-- Controllers -->
        <script src="js/App/controllers/main.controller.js"></script>
        <script src="js/App/controllers/posts.controller.js"></script>
        <script src="js/App/controllers/post.controller.js"></script>

    </body>
</html>
