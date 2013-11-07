<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
        <title>Blog giáo viên</title>
        <?php echo $this->Html->css('blog') ?>
    </head>
    <body class='custom-font-enabled'>
        <div class='site' id='page'>
            <header class='site-header' id='masthead'>
                <div class='header section' id='header'><div class='widget Header' id='Header1'>
                        <div id='header-inner'>
                            <div class='titlewrapper'>
                                <h1 class='site-title'>
                                    <a href='http://twentytwelve-btemplates.blogspot.com/'>Blog giáo viên</a>
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
                                        <li id='currentpage'><a href='#'>Trang chủ</a></li>
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

                    <div class='sidebartop section' id='sidebartop'><div class='widget HTML' id='HTML1'>
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

                            <div class='clear'></div>
                        </div><div class='widget PopularPosts' id='PopularPosts1'>
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
    <script type="text/javascript">
        if (window.jstiming)
            window.jstiming.load.tick('widgetJsBefore');
    </script><script type="text/javascript" src="//www.blogger.com/static/v1/widgets/3811003446-widgets.js"></script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <script type='text/javascript'>
        if (typeof(BLOG_attachCsiOnload) != 'undefined' && BLOG_attachCsiOnload != null) {
            window['blogger_templates_experiment_id'] = "templatesV1";
            window['blogger_blog_id'] = '3196393530055707151';
            BLOG_attachCsiOnload('');
        }
        _WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d3196393530055707151', '//twentytwelve-btemplates.blogspot.com/', '3196393530055707151');
        _WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '3196393530055707151', 'bloggerUrl': 'http://www.blogger.com', 'title': 'Twenty Twelve', 'pageType': 'index', 'url': 'http://twentytwelve-btemplates.blogspot.com/', 'canonicalUrl': 'http://twentytwelve-btemplates.blogspot.com/', 'canonicalHomepageUrl': 'http://twentytwelve-btemplates.blogspot.com/', 'homepageUrl': 'http://twentytwelve-btemplates.blogspot.com/', 'blogspotFaviconUrl': 'http://twentytwelve-btemplates.blogspot.com/favicon.ico', 'enabledCommentProfileImages': true, 'adultContent': false, 'disableAdSenseWidget': false, 'analyticsAccountNumber': '', 'searchLabel': '', 'searchQuery': '', 'pageName': '', 'pageTitle': 'Twenty Twelve', 'encoding': 'UTF-8', 'locale': 'en', 'localeUnderscoreDelimited': 'en', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'languageDirection': 'ltr', 'feedLinks': '\74link rel\75\42alternate\42 type\75\42application/atom+xml\42 title\75\42Twenty Twelve - Atom\42 href\75\42http://twentytwelve-btemplates.blogspot.com/feeds/posts/default\42 /\76\n\74link rel\75\42alternate\42 type\75\42application/rss+xml\42 title\75\42Twenty Twelve - RSS\42 href\75\42http://twentytwelve-btemplates.blogspot.com/feeds/posts/default?alt\75rss\42 /\76\n\74link rel\75\42service.post\42 type\75\42application/atom+xml\42 title\75\42Twenty Twelve - Atom\42 href\75\42http://www.blogger.com/feeds/3196393530055707151/posts/default\42 /\76\n', 'meTag': '\74link rel\75\42me\42 href\75\42http://www.blogger.com/profile/04752887254250043082\42 /\76\n', 'openIdOpTag': '\74link rel\75\42openid.server\42 href\75\42http://www.blogger.com/openid-server.g\42 /\76\n\74link rel\75\42openid.delegate\42 href\75\42http://twentytwelve-btemplates.blogspot.com/\42 /\76\n', 'imageSrcTag': '', 'latencyHeadScript': '\74script type\75\42text/javascript\42\76(function() { var b\75window,e\75\42jstiming\42,g\75\42tick\42;(function(){function d(a){this.t\75{};this.tick\75function(a,d,c){c\75void 0!\75c?c:(new Date).getTime();this.t[a]\75[c,d]};this[g](\42start\42,null,a)}var a\75new d;b.jstiming\75{Timer:d,load:a};if(b.performance\46\46b.performance.timing){var a\75b.performance.timing,c\75b[e].load,f\75a.navigationStart,a\75a.responseStart;0\74f\46\46a\76\75f\46\46(c[g](\42_wtsrt\42,void 0,f),c[g](\42wtsrt_\42,\42_wtsrt\42,a),c[g](\42tbsd_\42,\42wtsrt_\42))}try{a\75null,b.chrome\46\46b.chrome.csi\46\46(a\75Math.floor(b.chrome.csi().pageT),c\46\0460\74f\46\46(c[g](\42_tbnd\42,void 0,b.chrome.csi().startE),\nc[g](\42tbnd_\42,\42_tbnd\42,f))),null\75\75a\46\46b.gtbExternal\46\46(a\75b.gtbExternal.pageT()),null\75\75a\46\46b.external\46\46(a\75b.external.pageT,c\46\0460\74f\46\46(c[g](\42_tbnd\42,void 0,b.external.startE),c[g](\42tbnd_\42,\42_tbnd\42,f))),a\46\46(b[e].pt\75a)}catch(l){}})();b.tickAboveFold\75function(d){var a\0750;if(d.offsetParent){do a+\75d.offsetTop;while(d\75d.offsetParent)}d\75a;750\76\75d\46\46b[e].load[g](\42aft\42)};var h\75!1;function k(){h||(h\75!0,b[e].load[g](\42firstScrollTime\42))}b.addEventListener?b.addEventListener(\42scroll\42,k,!1):b.attachEvent(\42onscroll\42,k);\n })();\74/script\076', 'mobileHeadScript': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/15de8d1bfc9ff1d1', 'plusOneApiSrc': 'https://apis.google.com/js/plusone.js', 'testHtml5CssSrc': '//www.blogger.com/static/v1/widgets/2412321170-css_bundle_html5.css', 'sf': 'n'}}, {'name': 'skin', 'data': {'vars': {}, 'override': ''}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '/?view\75classic'}, 'flipcard': {'name': 'flipcard', 'url': '/?view\75flipcard'}, 'magazine': {'name': 'magazine', 'url': '/?view\75magazine'}, 'mosaic': {'name': 'mosaic', 'url': '/?view\75mosaic'}, 'sidebar': {'name': 'sidebar', 'url': '/?view\75sidebar'}, 'snapshot': {'name': 'snapshot', 'url': '/?view\75snapshot'}, 'timeslide': {'name': 'timeslide', 'url': '/?view\75timeslide'}}}]);
        _WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'mainblog', null, document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': '//www.blogger.com/static/v1/jsbin/3145159868-lbx.js', 'lightboxCssUrl': '//www.blogger.com/static/v1/v-css/4138445517-lightbox_bundle.css'}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PageListView', new _WidgetInfo('PageList8', 'nbttopmenu', null, document.getElementById('PageList8'), {'title': 'Pages - Menu', 'links': [{'href': 'http://twentytwelve-btemplates.blogspot.com/', 'title': 'Home', 'isCurrentPage': true}, {'href': 'http://twentytwelve-btemplates.blogspot.com/p/about.html', 'title': 'About', 'isCurrentPage': false}, {'href': 'http://twentytwelve-btemplates.blogspot.com/p/contact.html', 'title': 'Contact', 'isCurrentPage': false}], 'mobile': false}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'sidebartop', null, document.getElementById('HTML1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'sidebartop', null, document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML4', 'sidebartop', null, document.getElementById('HTML4'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML3', 'sidebartop', null, document.getElementById('HTML3'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'sidebartop', null, document.getElementById('HTML2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LabelView', new _WidgetInfo('Label2', 'sidebartop', null, document.getElementById('Label2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header', null, document.getElementById('Header1'), {}, 'displayModeFull'));
    </script>
</body>
</html>