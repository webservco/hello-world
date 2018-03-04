<div class="container">
    <div class="content">

        <h1><?=__('Sign Up')?></h1>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name"><?=$this->data('form/meta/name')?></label>
                <input type="text" class="form-control<?=$this->data('form/errors/name')?' is-invalid':''?>"
                id="name" name="name" placeholder="<?=$this->data('form/meta/name')?>" aria-describedby="nameHelp"
                value="<?=$this->data('form/data/name')?>"<?=$this->data('form/required/name')?' required':''?>>
<?php if ($this->data('form/errors/name')) { ?>
                <div class="invalid-feedback"><?=implode('<br>', $this->data('form/errors/name'))?></div>
<?php } else {?>
<?php if ($this->data('form/help/name')) { ?>
                <small id="nameHelp" class="form-text text-muted"><?=$this->data('form/help/name')?></small>
            <?php } ?>
<?php } ?>
            </div>
            <div class="form-group">
                <label for="email"><?=$this->data('form/meta/email')?></label>
                <input type="email" class="form-control<?=$this->data('form/errors/email')?' is-invalid':''?>"
                id="email" name="email" placeholder="<?=$this->data('form/meta/email')?>" aria-describedby="emailHelp"
                value="<?=$this->data('form/data/email')?>"<?=$this->data('form/required/email')?' required':''?>>
<?php if ($this->data('form/errors/email')) { ?>
                <div class="invalid-feedback"><?=implode('<br>', $this->data('form/errors/email'))?></div>
<?php } else {?>
<?php if ($this->data('form/help/email')) { ?>
                <small id="emailHelp" class="form-text text-muted"><?=$this->data('form/help/email')?></small>
            <?php } ?>
<?php } ?>
            </div>
            <div class="form-group">
                <label for="password"><?=$this->data('form/meta/password')?></label>
                <input type="password" class="form-control<?=$this->data('form/errors/password')?' is-invalid':''?>"
                    id="password" name="password" placeholder="<?=$this->data('form/meta/password')?>" aria-describedby="passwordHelp"
                    value="<?=$this->data('form/data/password')?>"<?=$this->data('form/required/password')?' required':''?>>
<?php if ($this->data('form/errors/password')) { ?>
                <div class="invalid-feedback"><?=implode('<br>', $this->data('form/errors/password'))?></div>
<?php } else { ?>
<?php if ($this->data('form/help/password')) { ?>
                <small id="passwordHelp" class="form-text text-muted"><?=$this->data('form/help/password')?></small>
<?php } ?>
<?php } ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><?=__('Sign up')?></button>
            </div>

            <div class="form-group">
                <?=__('Already have an account?')?>
                <a href="<?=$this->data('url/app','/')?>User/login"><?=__('Sign in')?></a>
            </div>
        </form>

    </div><?php //content ?>
</div><?php //container ?>
