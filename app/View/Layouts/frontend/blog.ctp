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
                                            <?php $user_slug = $this->Common->vnit_change_string(Inflector::slug($user['username'])) ?>
                                            <?php
                                            echo $this->Html->link("Trang chủ", array(
                                                'controller' => 'blogs',
                                                'action' => 'index',
                                                'bloger_id' => $user['id'],
                                                'slug' => $user_slug)
                                            )
                                            ?>
                                        </li>
                                        <li><a href='#'>Tài liệu</a></li>
                                        <li><a href='#'>Giới thiệu</a></li>
                                        <li id="search-bar"> <aside class='widget widget_search' id='search-3'>
                                                <form action='' id='searchform' method='get'>
                                                    <div>
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
                            </div>

                        </div>
                    </div>
                </div>
            </header>
            <div class='wrapper'>
                <div class='site-content'>
                    <div id='content'>
                        <?php echo $this->fetch('content') ?>
                    </div>
                </div>
                <div class='sidebar'>
                    <div class='sidebar-children'>
                        <div class='widget-content'>
                            <div id="user-infor" style="">    
                                <h2>Giới thiệu </h2>
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
                    <div class='sidebar-children'>
                        <div class='widget-content'>
                            <div id="blog-calendar">

                            </div>
                        </div>
                        <div class='clear'></div>
                    </div>

                    <div class='sidebar-children'>
                        <h2>Bài viết mới nhất</h2>
                        <div class='popular-posts'>
                            <ul>
                                <li>
                                    <a href="#">Bài 3</a>
                                </li>
                                <li>
                                    <a href="#">Bài 2</a>
                                </li>
                                <li>
                                    <a href="#">Bài 2</a>
                                </li>
                            </ul>

                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='sidebar-children' >
                        <h2>Thống kê</h2>
                        <div class=''>
                            <ul>
                                <li>
                                    Số lần truy cập : 10
                                </li>
                                <li>
                                    Tổng số bài viết: 15
                                </li>
                                <li>
                                    Bình luận : 76
                                </li>
                            </ul>
                            <div class='clear'></div>

                        </div>
                    </div></div>
            </div><!-- #secondary -->
        </div><!-- #main .wrapper -->
        <footer id='colophon' role='contentinfo'>
            <div class='site-info'>
                <!-- you have not permission to remove this footer credits -->
                Copyright 2013 
            </div>
        </footer>
        <script type='text/javascript'>
            $(document).ready(function() {
                var dates_have_post = <?php echo json_encode($dates_have_post) ?>;
                function filterArticleSender(date) {
                    $.ajax({
                        url: '/blog/filter_article_by_date',
                        type: 'GET',
                        data: {bloger_id: '<?php echo $user['id'] ?>', date: date},
                        success: function(response) {
                            var articles_list_container = $('#blog-index-wrapper');
                            articles_list_container.fadeOut(300, function() {
                                articles_list_container.html(response['html']).fadeIn(300);
                            });
                        },
                        error: function() {
                            alert('Có lỗi xảy ra. Thao tác không thành công.');
                        }
                    });
                }
                function filterArticleByDate(dateSelected) {
                    for (i = 0; i < dates_have_post.length; i++) {
                        if (dateSelected === dates_have_post[i]) {
                            filterArticleSender(dateSelected);
                        }
                    }
                }

                $('#blog-calendar').datepicker({
                    monthNames: ['Tháng 1 / ', 'Tháng 2 / ', 'Tháng 3 / ', 'Tháng 4 / ', 'Tháng 5 / ', 'Tháng 6 / ',
                        'Tháng 7 / ', 'Tháng 8 / ', 'Tháng 9 / ', 'Tháng 10 / ', 'Tháng 11 / ', 'Tháng 12 / '],
                    dateFormat: 'yy-mm-dd',
                    beforeShowDay: function(date) {
                        var dateInStr = date.getFullYear() + '-';
                        var month = date.getMonth() + 1;
                        dateInStr += (month < 10 ? ('0' + month) : ('' + month)) + '-';
                        var day = date.getDate();
                        dateInStr += (day < 10 ? ('0' + day) : ('' + day));
                        for (i = 0; i < dates_have_post.length; i++) {
                            if (dateInStr === dates_have_post[i]) {
                                return [true, 'date-have-post'];
                            }
                        }
                        return [true];
                    },
                    onSelect: filterArticleByDate,
                    dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"]
                });
            });

        </script>
    </body>
</html>