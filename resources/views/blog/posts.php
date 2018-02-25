        <div class="container">
            <div class="content">
                
                <h1><?=$this->data('meta/title', __('Posts'))?></h1>
                
<?php foreach($this->data('posts',[]) as $post) {
    echo $post['html'];
} ?>                

            </div><?php //content ?>
        </div><?php //container ?>

