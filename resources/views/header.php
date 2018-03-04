    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?=$this->data('url/app','/')?>"><?=__('Hello World!')?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="<?__('Toggle navigation')?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbars">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=$this->data('url/app','/')?>"><?=__('Home')?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$this->data('url/app','/')?>blog"><?=__('Blog')?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=$this->data('url/app','/')?>me"><?=__('User')?></a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="i18n" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">I18n</a>
                    <div class="dropdown-menu" aria-labelledby="i18n">
<?php foreach ($this->data('i18n/langs', []) as $code => $item) {
    if ($code != $this->data('i18n/lang')) {
?>
                        <a class="dropdown-item" href="<?=$this->data('url/lang')?>&amp;lang=<?=$code?>"><?=$item['title']?></a>
<?php
    }
}
?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="https://github.com/webservco/hello-world">Github</a>
                </li>
            </ul>

        </div><?php //navbars ?>
    </nav>
