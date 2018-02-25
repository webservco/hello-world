    <div class="container">
        <div class="content">
            
            <h1><?=$this->data('meta/title', __('Sessions'))?></h1>
            <p>
                <?=$this->data('meta/message', '')?>
            </p>
            
            <div class="btn-group" role="group" aria-label="<?=__('Actions')?>">
                <a class="btn btn-light" href="<?=$this->data('url/app','/')?>HelloWorld/sessions/set" title="HelloWorld/sessions/set">HelloWorld/sessions/set</a>
                <a class="btn btn-light" href="<?=$this->data('url/app','/')?>HelloWorld/sessions/get" title="HelloWorld/sessions/getHelloWorld/sessions/get">HelloWorld/sessions/get</a>
                <a class="btn btn-light" href="" title="<?=$this->data('url/app','/')?>HelloWorld/sessions/remove" title="HelloWorld/sessions/remove">HelloWorld/sessions/remove</a>
            </div>
            
        </div><?php //content ?>
    </div><?php //container ?>
