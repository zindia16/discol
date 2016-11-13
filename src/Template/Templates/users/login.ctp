<div class="valign-wrapper light-blue lighten-2">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row" style="">
                <div class="col m6 center valign-wrapper hide-on-small-only" style="min-height: 400px">
                    <h5 class="header col s12 light white-text">Kickstart Your Project, Collaborate With Ideas, Discover People. Get Connected.</h5>
                </div>
                <div class="col m6">
                    <div class="row white teal-text" style="padding:50px">
                        <div class="red white-text card center" ng-show="response.message">
                            {{response.message}}
                        </div>
                            <div class="col s12 center">
                                <h4>Login</h4>
                            </div>
							<form ng-submit="login()">
	                            <div class="input-field col s12">
	                                <i class="material-icons prefix">account_circle</i>
	                                <input id="icon_prefix" type="text" name="username" ng-model="user.username" class="validate">
	                                <label for="icon_prefix">Username</label>
	                            </div>
	                            <div class="input-field col s12">
	                                <i class="material-icons prefix">vpn_key</i>
	                                <input id="icon_telephone" type="password" name="password" ng-model="user.password" class="validate">
	                                <label for="icon_telephone">Password</label>
	                            </div>
	                            <div class="col s12 center">
	                                <button type="submit" class="btn">Login</button>
	                                <p class="center">
	                                    Forgot password? <a href="javascript:void(0)">Recover</a><br/>
	                                    Not have an account? <a href="#/signup">Signup</a>
	                                </p>

	                            </div>
							</form>
                            <div style="margin-bottom: 50px">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

