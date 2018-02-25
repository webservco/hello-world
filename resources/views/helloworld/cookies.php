    <div class="container">
        <div class="content">
            
            <h1><?=$this->data('meta/title', __('Cookies'))?></h1>
            <p>
                <?=$this->data('meta/message', '')?>
            </p>
            
            <div class="btn-group" role="group" aria-label="<?=__('Actions')?>">
                <a class="btn btn-light" href="<?=$this->data('url/app','/')?>HelloWorld/cookies/set" title="HelloWorld/cookies/set">HelloWorld/cookies/set</a>
                <a class="btn btn-light" href="<?=$this->data('url/app','/')?>HelloWorld/cookies/get" title="HelloWorld/cookies/getHelloWorld/cookies/get">HelloWorld/cookies/get</a>
                <a class="btn btn-light" href="" title="<?=$this->data('url/app','/')?>HelloWorld/cookies/remove" title="HelloWorld/cookies/remove">HelloWorld/cookies/remove</a>
            </div>
            
        </div><?php //content ?>
    </div><?php //container ?>
