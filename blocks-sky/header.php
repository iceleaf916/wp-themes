<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<?php include_once("desc.php"); ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="http://feeds.feedburner.com/happyyezi" />
<link rel="pingback" href="http://www.yeezi.org/xmlrpc.php" />
<style type="text/css" media="screen">@import url( http://www.yeezi.org/wp-content/themes/blocks-sky/style.css );</style>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://www.yeezi.org/wp-content/themes/blocks-sky/js/base.js"></script>
<?php if(is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>

<!-- Gooogle analytics codes -->
<script type="text/javascript">  
var _gaq = _gaq || [];  
_gaq.push(['_setAccount', 'UA-20777099-1']);  
_gaq.push(['_setDomainName', '.yeezi.org']);  
_gaq.push(['_trackPageview']);  (function() {    
var ga = document.createElement('script'); 
ga.type = 'text/javascript'; ga.async = true;    
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  
})();
</script>
<!-- Gooogle analytics codes -->

<script type="text/javascript">
$(document).ready(function(){$('.post .title a').hover(function() {$(this).stop().animate({'left': '5px'}, 'fast');}, function() {$(this).stop().animate({'left': '0px'}, 'fast');});});</script>


</head>

<body>

<!-- container START -->
<div id="container">	
<!-- header START -->	
    <div id="header">		
        <div class="content">			
            <div id="title">
                <h1><a href="http://www.yeezi.org">一叶知秋</a></h1>
				<div id="tagline">Linux,Python,Web,Wordpress...</div>
            </div>
            <div class="searchbox">
                <form method="get" action="<?php bloginfo('home'); ?>/" id="search" method="get">
                    <div class="content"> <input class="textfield" type="text" value="<?php echo wp_specialchars($s, 1); ?>" size="24" name="s"/> <input class="button" type="submit" value="搜索"/></div>
                </form>			
            </div>			
            <div class="fixed"></div>		
        </div>
        <div class="meta">
        <ul id="menubar">
            <li><a href="http://www.yeezi.org/">Home</a></li>
            <?php wp_list_pages('title_li=0&sort_column=menu_order'); ?>
            <li><a href="http://t.yeezi.org/" target="_blank">MicroBlog</a></li>
            <li><a href="http://wiki.yeezi.org/" target="_blank">Let's Wiki</a></li>
        </ul>
        
        <div id="subscribe" class="feed">
        <a rel="external nofollow" title="订阅这个博客" class="feedlink" href="http://feed.yeezi.org">RSS 订阅</a>
        <ul>
            <li><a rel="external nofollow" title="订阅到 Google" href="https://www.google.com/reader/view/feed/http://feeds.feedburner.com/happyyezi/" target="_blank">	Google Reader</a></li>
            <li><a rel="external nofollow" title="订阅到 鲜果"	href="http://www.xianguo.com/subscribe.php?url=http://feeds.feedburner.com/happyyezi" target="_blank">鲜果</a></li>	
            <li><a rel="external nofollow" title="订阅到 抓虾"	href="http://www.zhuaxia.com/add_channel.php?url=http://feeds.feedburner.com/happyyezi" target="_blank">抓虾</a></li>						
            <li><a rel="external nofollow" title="订阅到 哪咤"	href="http://inezha.com/add?url=http://feeds.feedburner.com/happyyezi" target="_blank">哪咤</a></li>						
            <li><a rel="external nofollow" title="订阅到 有道"	href="http://reader.youdao.com/#url=http://feeds.feedburner.com/happyyezi" target="_blank">有道</a></li>						
            <li><a rel="external nofollow" title="订阅到 Yahoo"	href="http://add.my.yahoo.com/rss?url=http://feeds.feedburner.com/happyyezi" target="_blank">Yahoo</a></li>						
            <li><a rel="external nofollow" title="订阅到 Newsgator"	href="http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://feeds.feedburner.com/happyyezi" target="_blank">Newsgator</a></li>
            <li><a rel="external nofollow" title="订阅到 Bloglines"	href="http://www.bloglines.com/sub/http://feeds.feedburner.com/happyyezi" target="_blank">Bloglines</a></li>					
        </ul>			
    </div>				
    <div>					
        <a title="Follow Me!" class="greedlink" href="http://twitter.com/happyyezi/">Follow Me</a>
    </div>
        <span id="copyright"> Copyright &copy; 2009-2011 一叶知秋 </span>
        <div class="fixed"></div>
    </div>	
</div>	
<!-- header END -->	

<!-- content START -->	
<div id="content">		
    <!-- main START -->		
    <div id="main">