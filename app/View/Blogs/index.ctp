<div class='mainblog section' id='mainblog'><div class='widget Blog' id='Blog1'>
        <div class='blog-posts hfeed'>
            <!-- google_ad_section_start(name=default) -->

            <div class="date-outer">
                <h2 class='date-header'><span>Monday, February 4, 2013</span></h2>
                <div class="date-posts">
                    <?php foreach ($articles as $article) { ?>
                        <div class='post-outer'>
                            <article class='post hentry'>
                                <a name='3153877782348172298'></a>
                                <header class='entry-header'>
                                    <h2 class='post-title entry-title'>
                                        <?php
                                        echo $this->Html->link($article['title'], array(
                                            'controller' => 'blogs',
                                            'action' => 'viewArticle',
                                            'bloger_id' => $user['id'],
                                            'slug' => $user['username'],
                                            'article_id' => $article['id'],
                                            'article_title' => $article['title'])
                                        )
                                        ?>
                                    </h2>
                                </header>
                                <div class='post-header-line-1'></div>
                                <div class='post-body entry-content'>
                                    <div id='summary3153877782348172298'>
                                        <p>
                                            <!--<img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUeMwXoI/AAAAAAAAFoc/7f0Um7OTgNg/s000/Antartic-by-Peter-Rejcek.jpg"  width="500" height="332">-->
                                            <?php echo $this->Text->truncate($article['content'], 500) ?>
                                        </p>
                                        <div style='float:right;padding-right:10px;margin-top:10px;'>
                                            <?php
                                            echo $this->Html->link('Đọc thêm', array(
                                                'controller' => 'blogs',
                                                'action' => 'viewArticle',
                                                'bloger_id' => $user['id'],
                                                'slug' => $user['username'],
                                                'article_id' => $article['id'],
                                                'article_title' => $article['title'])
                                            )
                                            ?>
                                        </div>
                                        <div style='clear: both;'></div>
                                    </div>
                                </div>
                                <footer class='entry-meta'>
                                    <?php $date = new DateTime($article['created_at']); ?>
                                    Đăng ngày:  <?php echo $date->format('d/m/Y') ?> 
                                </footer>
                            </article>
                            <div style='clear: both;'></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div style='clear: both;'></div>
    </div>
</div>