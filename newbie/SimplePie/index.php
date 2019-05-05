<?php
	require_once 'autoloader.php';
	$feed = new SimplePie();

	$feed->set_feed_url('https://vnexpress.net/rss/the-thao.rss');
	$feed->enable_cache(true);
	$feed->set_cache_duration(3600); //Tạo số giây
	$feed->set_cache_location('cache');
	$feed->init();
	echo $feed->get_title();

?>