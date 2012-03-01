<!doctype html>
<html>
<head>
<title>News Helper</title>
<?php
    require_once('php/magpierss/rss_fetch.inc');
    $rssurl = $_GET['http://kcmckell.blogspot.com/feeds/posts/default'];
    $rss = fetch_rss($rssurl);
?>
    
</head>
<body>
<hgroup>
    <?php
        echo '<h1>' . $rss->channel['title'] . '</h1>';
        echo '<h2>' . $rss->channel['description'] . '</h2>';
    ?>
</hgroup>

</body>
</html>