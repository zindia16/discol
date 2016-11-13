<div class="valign-wrapper light-blue lighten-2" ng-controller="login">
    <div class="container">
        <div class="row" style="margin-top: 25px">
            <div class="col m12">
                <div class="row white teal-text" style="padding:50px">
                    <div class="red white-text card center">
                        <span ng-show="response" style="display: none;">{{response.error_message}}</span>
                    </div>
                    <form name="registration" novalidate="" ng-submit="signup()">
                    <div class="col s12 center">
                        <h4>Signup</h4>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">person_outline</i>
                        <input id="first_name" type="text" name="first_name" required="" ng-model="user.first_name" required>
                        <label for="first_name">First Name</label>
                        <p ng-show="registration.first_name.$invalid && !registration.first_name.$pristine">Your username is required.</p>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">person_outline</i>
                        <input id="last_name" type="text" name="last_name" class="validate" ng-model="user.last_name">
                        <label for="last_name">Last Name</label>
                        <p ng-show="registration.last_name.$invalid && !registration.last_name.$pristine">Last name is required.</p>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="text" name="email" class="validate" required ng-model="user.email">
                        <label for="email">Email</label>
                        <p ng-show="registration.email.$invalid && !registration.email.$pristine">Email is required.</p>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="username" type="text" name="username" class="validate" ng-model="user.username">
                        <label for="username">Username</label>
                        <p ng-show="registration.username.$invalid && !registration.username.$pristine">Username is required.</p>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" type="password" name="password" class="validate" required ng-model="user.password">
                        <label for="password">Password</label>
                        <p ng-show="registration.password.$invalid && !registration.password.$pristine" class="help-block">Enter a valid email.</p>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="confirm_password" type="password" name="confirm_password" class="validate">
                        <label for="confirm_password">Confirm Password</label>
                    </div>
                    <div class="col s12 center">
                        <button ng-disabled="registration.$invalid " type="submit" class="btn">Signup</button>
                        <p class="center">
                            Already have an account? <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">Login</a>
                        </p>

                    </div>
                    <div style="margin-bottom: 50px">&nbsp;</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>