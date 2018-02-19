                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title"><?=$this->data('strings/title', 'Page title')?></h2>
                    </header>
                    <div class="post-description">
                        <p>
                            <h3>General</h3>
                            <ul>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/hello">HTML: /HelloWorld/hello</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/helloResponse">HTML: /HelloWorld/helloResponse</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>hi">HTML: /hi</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/hello/1">JSON: /HelloWorld/hello/1</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>json">JSON: /json</a></li>
                            </ul>
                            <h3>CLI<h3>
                            <ul>
                                <li>CLI: php public/index.php</li>
                                <li>CLI: bin/cli hi</li>
                                <li>CLI: bin/cli hi Mr.Smith</li>
                            </ul>
                            <h3>Sessions</h3>
                            <ul>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/sessions/set">HelloWorld/sessions/set</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/sessions/get">HelloWorld/sessions/get</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/sessions/remove">HelloWorld/sessions/remove</a></li>
                            </ul>
                            <h3>Cookies</h3>
                            <ul>    
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/cookies/set">HelloWorld/cookies/set</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/cookies/get">HelloWorld/cookies/get</a></li>
                                <li><a href="<?=$this->data('app/url','/')?>HelloWorld/cookies/remove">HelloWorld/cookies/remove</a></li>
                            </ul>
                            
                        </p>
                    </div>
                </section>
