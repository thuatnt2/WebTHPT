<?php foreach ($posts as $article) { ?>
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
        <div class="article-footer">
            <p>            
                <?php $date = new DateTime($article['Article']['created_at']); ?>
                <?php echo "Đăng ngày: " . $date->format('d/m/Y') ?>
            </p>
            <span class="article-actions" style="display: none">
                <ul>
                    <li>
                        <a href="#" class="btn btn-small btn-warning">Xóa</a>

                    </li>
                    <li>
                        <a href="#"  class="btn btn-small btn-success">Sửa</a>
                    </li>
                </ul>
            </span>
        </div>
    </article>
    <div style='clear: both;'></div>
<?php } ?>

<?php if ($current_user_id_owner): ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('article').mouseenter(function() {
                console.log('hover');
                $(this).find('.article-actions').fadeIn(150);
            });
            $('article').mouseleave(function() {
                console.log('hover');
                $(this).find('.article-actions').fadeOut(150);
            });
        });
    </script> 

<?php endif; ?>

