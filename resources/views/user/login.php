        <div class="container">
            <div class="content">

                <h1><?=__('Sign In')?></h1>
                <form method="post" enctype="multipart/form-data">
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
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" aria-describedby="rememberHelp"
                            <?=$this->data('form/data/remember')?' checked':''?>>
                            <label for="remember" class="form-check-label"><?=$this->data('form/meta/remember')?></label>
<?php if ($this->data('form/help/remember')) { ?>
                            <small id="rememberHelp" class="form-text text-muted"><?=$this->data('form/help/remember')?></small>
<?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?=__('Sign in')?></button>
                    </div>

                    <div class="form-group">
                        <?=__('Don\'t have an account?')?>
                        <a href="<?=$this->data('url/app','/')?>User/register"><?=__('Sign up')?></a>
                    </div>
                </form>

            </div><?php //content ?>
        </div><?php //container ?>
