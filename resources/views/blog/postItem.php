                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="Avatar" class="post-avatar" src="img/tape.png">
                        <h2 class="post-title"><?=$this->data('title','{TITLE}')?></h2>
                        <p class="post-meta">
                            Tags:
                            <a class="post-category post-category-design" href="#">CSS</a>
                            <a class="post-category post-category-js" href="#">JavaScript</a>
                            <a class="post-category" href="#">Uncategorized</a>
                        </p>
                    </header>
                    <div class="post-description">
                        <p>
                            <?=$this->data('content','{CONTENT}')?>
                        </p>
                    </div>
                </section>
