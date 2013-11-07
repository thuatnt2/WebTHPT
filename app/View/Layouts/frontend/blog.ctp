<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
        <title>Blog giáo viên</title>
        <?php echo $this->Html->css(array('blog/blog', 'blog/aristo')) ?>
        <?php
        echo $this->Html->script(array(
            'vendor/jquery-2.0.2.min', 'blog/jquery-ui-1.9.2.custom.min'))
        ?>
    </head>
    <body class='custom-font-enabled'>
        <div class='site' id='page'>
            <header class='site-header' id='masthead'>
                <div class='header section' id='header'><div class='widget Header' id='Header1'>
                        <div id='header-inner'>
                            <div class='titlewrapper'>
                                <h1 class='site-title'>
                                    <a href=''>Blog giáo viên</a>
                                </h1>
                            </div>
                            <div class='descriptionwrapper'>
                                <h2 class='site-description'>Không có gì quý hơn độc lập tự do</h2>
                            </div>
                        </div>
                    </div></div>
                <div class='main-navigation' id='site-navigation' role='navigation'>
                    <div class='nav-menu'>
                        <div class='nbttopmenu section' id='nbttopmenu'><div class='widget PageList' id='PageList8'>
                                <div class='widget-content'>
                                    <ul>
                                        <li id='currentpage'>
                                            <?php
                                            echo $this->Html->link("Trang chủ", array(
                                                'controller' => 'blogs',
                                                'action' => 'index',
                                                'bloger_id' => $user['id'],
                                                'slug' => $user['username'])
                                            )
                                            ?>
                                        </li>
                                        <li><a href='#'>Tài liệu</a></li>
                                        <li><a href='#'>Giới thiệu</a></li>
                                        <li id="search-bar"> <aside class='widget widget_search' id='search-3'>
                                                <form action='' id='searchform' method='get'>
                                                    <div><label class='screen-reader-text' for='s'>Search for:</label>
                                                        <input id='s' name='q' type='text' value=''/>
                                                        <input id='searchsubmit' type='submit' value='Tìm'/>
                                                    </div>
                                                </form>
                                            </aside>
                                        </li>
                                    </ul>
                                    <div class='clear'></div>

                                    <div class='clear'></div>
                                </div>
                            </div></div>
                    </div>
                </div><!-- #site-navigation -->
            </header><!-- #masthead -->
            <div class='wrapper' id='main'>
                <div class='site-content' id='primary'>
                    <div id='content' role='main'>
                        <?php echo $this->fetch('content') ?>

                    </div><!-- #content -->
                </div><!-- #primary -->
                <div class='widget-area' id='secondary' role='complementary'>

                    <div class='sidebartop section' id='sidebartop'>
                        <div class='widget HTML' id='HTML1'>
                            <div class='widget-content'>
                                <div id="blog-calendar">

                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='widget HTML' id='HTML1'>
                            <div class='widget-content'>
                                <div id="user-infor" style="">    
                                    <legend><b>Giới thiệu </b></legend>
                                    <div>
                                        <ul>
                                            <li>Họ tên: <?php echo $user['first_name'] . ' ' . $user['last_name'] ?></li>
                                            <li>Khoa: CNTT</li>
                                            <li>Danh ngôn: </li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class='clear'></div>

                        </div>

                        <div class='widget PopularPosts' id='PopularPosts1'>
                            <h2>Bài viết mới nhất</h2>
                            <div class='widget-content popular-posts'>
                                <ul>
                                    <li>
                                        <div class='item-content'>
                                            <div class='item-title'><a href='http://twentytwelve-btemplates.blogspot.com/2013/02/lorem-ipsum_964.html'>Lorem Ipsum</a></div>
                                            <div class='item-snippet'>Download this and more Blogger Templates  at . For tutorials, tips and tricks about Blogger visit our Blog . &#187; A normal paragraph Ea eam lab...</div>
                                        </div>
                                        <div style='clear: both;'></div>
                                    </li>
                                </ul>
                                <div class='clear'></div>

                                <div class='clear'></div>
                            </div>
                        </div>
                    </div><div class='widget Label' id='Label2'>
                        <h2>Thống kê</h2>
                        <div class='widget-content list-label-widget-content'>
                            <ul>
                                <li>
                                    <a dir='ltr' href='http://twentytwelve-btemplates.blogspot.com/search/label/Lorem%201'>Lorem 1</a>
                                    <span dir='ltr'>(3)</span>
                                </li>
                                <li>
                                    <a dir='ltr' href='http://twentytwelve-btemplates.blogspot.com/search/label/Lorem%202'>Lorem 2</a>
                                    <span dir='ltr'>(2)</span>
                                </li>
                                <li>
                                    <a dir='ltr' href='http://twentytwelve-btemplates.blogspot.com/search/label/Lorem%203'>Lorem 3</a>
                                    <span dir='ltr'>(3)</span>
                                </li>
                            </ul>
                            <div class='clear'></div>

                            <div class='clear'></div>
                        </div>
                    </div></div>
            </div><!-- #secondary -->
        </div><!-- #main .wrapper -->
        <footer id='colophon' role='contentinfo'>
            <div class='site-info'>
                <!-- you have not permission to remove this footer credits -->
                Copyright &#169; 2012 <a href='http://twentytwelve-btemplates.blogspot.com/'>Twenty Twelve</a> | Powered by <a href='http://www.blogger.com/'>Blogger</a>
                <br/>Design by <a href='http://wordpress.org/' target='_blank'>WordPress Team</a> | Blogger Template by <a href='http://newbloggerthemes.com/' target='_blank' title='Best Blogger Templates'>NewBloggerThemes.com</a>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
    </div><!-- #page -->
    <script type='text/javascript'>
        $('#blog-calendar').datepicker({
        });
    </script>
</body>
</html>