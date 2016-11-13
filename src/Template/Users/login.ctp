<div class="valign-wrapper light-blue lighten-2">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row" style="">
                <div class="col m6 center valign-wrapper hide-on-small-only" style="min-height: 400px">
                    <h5 class="header col s12 light white-text">Kickstart Your Project, Collaborate With Ideas, Discover People. Get Connected.</h5>
                </div>
                <div class="col m6">
                    <div class="row white teal-text" style="padding:50px">
                        <div class="red white-text card center">
                            <?= $this->Flash->render('auth') ?>
                            <?= $this->Flash->render() ?>
                        </div>
                        <?= $this->Form->create() ?>
                            <div class="col s12 center">
                                <h4>Login</h4>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" name="username" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="icon_telephone" type="password" name="password" class="validate">
                                <label for="icon_telephone">Password</label>
                            </div>
                            <div class="col s12 center">
                                <button type="submit" class="btn">Login</button>
                                <p class="center">
                                    Forgot password? <a href="#">Recover</a><br/>
                                    Not have an account? <a href="<?= $this->Url->build(['controller'=>'Users','action'=>'signup']) ?>">Signup</a>
                                </p>
                                
                            </div>
                            <div style="margin-bottom: 50px">&nbsp;</div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>