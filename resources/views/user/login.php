                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?=$this->data('meta/title', __('Sign in'))?></h2>
                    </header>
                    <div class="post-description">
                        <form class="pure-form pure-form-aligned">
                            <fieldset>
                                <div class="pure-control-group">
                                    <label for="email"><?=__('Email Address')?></label>
                                    <input id="email" type="text" placeholder="<?=__('Email Address')?>">
                                    <span class="pure-form-message-inline"><?=__('required')?></span>
                                </div>
                                <div class="pure-control-group">
                                    <label for="password"><?=__('Password')?></label>
                                    <input id="password" type="password" placeholder="<?=__('Password')?>">
                                    <span class="pure-form-message-inline"><?=__('required')?></span>
                                </div>
                                
                                <div class="pure-controls">
                                    <label for="remember" class="pure-checkbox">
                                        <input id="remember" type="checkbox"> <?=__('Remember me')?>
                                    </label>
                                    
                                    <button type="submit" class="pure-button pure-button-primary"><?=__('Sign in')?></button>
                                </div>
                                
                            </fieldset>
                        </form>
                    </div>
                </section>
