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
