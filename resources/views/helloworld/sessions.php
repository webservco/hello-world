                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?=$this->data('meta/title', 'Sessions')?></h2>
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
                            <li class="pure-menu-item"><a href="<?=$this->data('app/url','/')?>HelloWorld/sessions/set" class="pure-menu-link">HelloWorld/sessions/set</a></li>
                            <li class="pure-menu-item"><a href="<?=$this->data('app/url','/')?>HelloWorld/sessions/get" class="pure-menu-link">HelloWorld/sessions/get</a></li>
                            <li class="pure-menu-item"><a href="<?=$this->data('app/url','/')?>HelloWorld/sessions/remove" class="pure-menu-link">HelloWorld/sessions/remove</a></li>
                        </ul>
                    </div>
                </section>
