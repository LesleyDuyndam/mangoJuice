<?php
# Load Twitter class
require_once('libs/twitteroauth/TwitterOAuth.php');

header('Content-Type: application/json');

# Define constants
define('TWEET_LIMIT',10);
define('TWITTER_USERNAME', 'LesleyDuyndam');
define('CONSUMER_KEY', 'VhQ5JFiDKXCssvtMSOcqp0xkI');
define('CONSUMER_SECRET', 'WFU8uAspDW6ZtPfTY0SaYPrh0NIDAFMyzkFM1hCEBRE6rlANTH');
define('ACCESS_TOKEN', '190177836-kG8TIL0sFeVCQGdAqsHYm0FYycE7SIjAeWuuG5Ix');
define('ACCESS_TOKEN_SECRET', 'xTG13BPLFrLuhiPSLfo9QH2mbLp8TCFEB3RNDPKjsrRo4');

# Create the connection
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

# Migrate over to SSL/TLS
$twitter->ssl_verifypeer = true;

$twitter->decode_json = false;

# Load the Tweets
echo $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'true', 'count' => TWEET_LIMIT));
