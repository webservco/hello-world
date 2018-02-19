                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?=$this->data('strings/title', 'Cookies')?></h2>
                    </header>
                    <div class="post-description">
                        <p>
                            <?=$this->data('strings/message', '')?>
                        </p>
                    </div>
                </section>
                <section class="post">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul>
                            <li class="pure-menu-item"><a href="<?=$this->data('app/url','/')?>HelloWorld/cookies/set" class="pure-menu-link">HelloWorld/cookies/set</a></li>
                            <li class="pure-menu-item"><a href="<?=$this->data('app/url','/')?>HelloWorld/cookies/get" class="pure-menu-link">HelloWorld/cookies/get</a></li>
                            <li class="pure-menu-item"><a href="<?=$this->data('app/url','/')?>HelloWorld/cookies/remove" class="pure-menu-link">HelloWorld/cookies/remove</a></li>
                        </ul>
                    </div>
                </section>
