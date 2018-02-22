                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?=$this->data('meta/title', __('Cookies'))?></h2>
                    </header>
                    <div class="post-description">
                        <p>
                            <?=$this->data('meta/message', '')?>
                        </p>
                    </div>
                </section>
                <section class="post">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul>
                            <li class="pure-menu-item"><a href="<?=$this->data('url/app','/')?>HelloWorld/cookies/set" class="pure-menu-link">HelloWorld/cookies/set</a></li>
                            <li class="pure-menu-item"><a href="<?=$this->data('url/app','/')?>HelloWorld/cookies/get" class="pure-menu-link">HelloWorld/cookies/get</a></li>
                            <li class="pure-menu-item"><a href="<?=$this->data('url/app','/')?>HelloWorld/cookies/remove" class="pure-menu-link">HelloWorld/cookies/remove</a></li>
                        </ul>
                    </div>
                </section>
