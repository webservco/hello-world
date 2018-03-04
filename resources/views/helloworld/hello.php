        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3"><?=$this->data('meta/title', __('Hello World!'))?></h1>
                <p><?=$this->data('meta/description', __('Sample App for the WebServCo PHP Framework'))?></p>
                <p><a class="btn btn-primary btn-lg" href="<?=$this->data('url/app','/')?>" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>HelloWorld</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-secondary" href="<?=$this->data('url/app','/')?>" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Blog</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-secondary" href="<?=$this->data('url/app','/')?>blog" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>User</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="<?=$this->data('url/app','/')?>me" role="button">View details &raquo;</a></p>
                </div>
            </div>
            <hr>
        </div>

        <div class="container">
            <div class="content">
                <h1><?=$this->data('meta/title', __('Page title'))?></h1>

                                <h3>General</h3>
                                <ul>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/hello">HTML: /HelloWorld/hello</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/helloResponse">HTML: /HelloWorld/helloResponse</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>hi">HTML: /hi</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/hello/1">JSON: /HelloWorld/hello/1</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>json">JSON: /json</a></li>
                                </ul>
                                <h3>CLI</h3>
                                <ul>
                                    <li>CLI: php public/index.php</li>
                                    <li>CLI: bin/cli hi</li>
                                    <li>CLI: bin/cli hi Mr.Smith</li>
                                </ul>
                                <h3>Sessions</h3>
                                <ul>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/sessions/set">HelloWorld/sessions/set</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/sessions/get">HelloWorld/sessions/get</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/sessions/remove">HelloWorld/sessions/remove</a></li>
                                </ul>
                                <h3>Cookies</h3>
                                <ul>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/cookies/set">HelloWorld/cookies/set</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/cookies/get">HelloWorld/cookies/get</a></li>
                                    <li><a href="<?=$this->data('url/app','/')?>HelloWorld/cookies/remove">HelloWorld/cookies/remove</a></li>
                                </ul>

            </div><?php //content ?>
        </div><?php //container ?>
