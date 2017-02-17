<?php




require_once('twitter_proxy.php');

// Twitter OAuth Config options
$oauth_access_token = '108524504-d7eXJUKS0xOAf2G1I7ulVhQ946y7FCVNbI6IlNlp';
$oauth_access_token_secret = '2o74BU9kyQsyfQU39p0B9Z2opMtsRLDKiFEx9H8y35SEr';
$consumer_key = 're1FSXZgZqjfu9goK8JdYg';
$consumer_secret = 'XuF7JT2O4KWK3RU9kLTLabx2RGC4IjVqlFSH2tMxs';
$user_id = '';
$screen_name = 'EuroChemGroup';
$count =10;
$include_rts = 'true';
$exclude_replies = 'true';


$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $_GET['twitter_account'];
$twitter_url .= '&count=' . $_GET['tt_tweets'];
$twitter_url .= '&include_rts=' . $_GET['tt_retweets'];
$twitter_url .= '&exclude_replies=' . $_GET['tt_messages'];

//echo $twitter_url;



// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count,
	$include_rts							// The number of tweets to pull out
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);

echo $tweets;

?>