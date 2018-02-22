    <div class="sidebar pure-u-1 pure-u-md-1-4">
        
        <div class="footer">
            <div class="pure-menu pure-menu-horizontal">
                <ul>
<?php foreach ($this->data('i18n/langs', []) as $code => $item) {
    if ($code != $this->data('i18n/lang')) {
?>
                    <li class="pure-menu-item">
                        <a href="?lang=<?=$code?>"><?=$item['title']?></a>
                    </li>
<?php
    }
}
?>
                </ul>
            </div>
        </div>
            
        <div class="header">
            <h1 class="brand-title"><?__('Hello World!')?></h1>
            <h2 class="brand-tagline"><?=__('Sample App for the WebServCo PHP Framework')?></h2>
            
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="<?=$this->data('url/app','/')?>"><?=__('Home')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="<?=$this->data('url/app','/')?>blog"><?=__('Blog')?></a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </div>
