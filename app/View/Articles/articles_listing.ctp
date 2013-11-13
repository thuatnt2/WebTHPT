<?php foreach ($articles as $article) { ?>
    <article>
        <header class='entry-header'>
            <h2 class='post-title entry-title'>
                <?php $user_slug = $this->Common->vnit_change_string(Inflector::slug($user['username'])) ?>
                <?php $article_slug = $this->Common->vnit_change_string(Inflector::slug($article['Article']['title'])) ?>
                <?php
                echo $this->Html->link($article['Article']['title'], array(
                    'controller' => 'blogs',
                    'action' => 'viewArticle',
                    'bloger_id' => $user['id'],
                    'slug' => $user_slug,
                    'article_id' => $article['Article']['id'],
                    'article_title' => $article_slug)
                )
                ?>
            </h2>
        </header>
        <div class='post-header-line-1'></div>
        <div class='post-body entry-content'>
            <div id='summary'>
                <p>
                    <?php echo $this->Text->truncate($article['Article']['content'], 500) ?>
                </p>
                <div style='float:right;padding-right:10px;margin-top:10px;'>
                    <?php
                    echo $this->Html->link('Đọc thêm', array(
                        'controller' => 'blogs',
                        'action' => 'viewArticle',
                        'bloger_id' => $user['id'],
                        'slug' => $user_slug,
                        'article_id' => $article['Article']['id'],
                        'article_title' => $article_slug)
                    )
                    ?>
                </div>
                <div style='clear: both;'></div>
            </div>
        </div>
        <footer class='entry-meta'>
            <?php $date = new DateTime($article['Article']['created_at']); ?>
            Đăng ngày:  <?php echo $date->format('d/m/Y') ?> 
        </footer>
    </article>
    <div style='clear: both;'></div>
<?php } ?>
