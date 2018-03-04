<div class="container">
    <div class="content">

        <h1><?=sprintf('Hello %s!', $this->when('user/name', 'N/A'))?></h1>

        <div class="btn-group" role="group" aria-label="<?=__('Actions')?>">
            <a class="btn btn-light" href="<?=$this->data('url/app','/')?>User/logout" title="User/logout">User/logout</a>
        </div>

    </div><?php //content ?>
</div><?php //container ?>
