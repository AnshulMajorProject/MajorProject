<?php
// Path to TwitterOAuth library
require_once("twitteroauth/TwitterOAuth.php");

/*
 * Twitter App Settings
 * Set access tokens and API keys
 */
$consumerKey       = "G0WLJqJCiXHA6jMHMRSQexbOc";
$consumerSecret    = "qp9iBozhJoes0E52JG2DNDdfMzRCdpaAvx2Ff4Ni654TQfgQ9I";
$accessToken       = "1501241082897596425-4qjFFoUHX4smZ3cckzVd4OvhWggBwX";
$accessTokenSecret = "DXEBHKQqhngGFYW6s1jzqC4BjIGiWRcqDrwO364nlUkKT";

// Twitter account username
$twitterID = 'codexworldblog';

// Number of tweets
$tweetNum = 10;
 
// Authenticate with twitter
$twitterConnection = new TwitterOAuth(
    $consumerKey,
    $consumerSecret,
    $accessToken,
    $accessTokenSecret
);

// Get the user timeline feeds
$feedData = $twitterConnection->get(
    'statuses/user_timeline',
    array(
        'screen_name'     => $twitterID,
        'count'           => $tweetNum,
        'exclude_replies' => false
    )
);
?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>NEWS ONE</title>
        <meta charset="ut-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="news_one_style.css">
    </head>
    <body>
        <div class="container">
            <?php if(!empty($feedData)) ?>
            <?php
                // Get user info
                $profilePic = str_replace("normal", "400x400", $feedData[0]->user->profile_image_url_https);
                $userName = $feedData[0]->user->name;
                $userScreenName = $feedData[0]->user->screen_name;
                $tweetsNum = $feedData[0]->user->statuses_count;
                $followerNum = $feedData[0]->user->followers_count;
            ?>
            <div class="col-lg-4">
                <img src="<?php echo $profilePic; ?>" class="img-thumbnail" />
                <h2><?php echo $userName; ?></h2>
                <a href="https://twitter.com/<?php echo $userScreenName; ?>" target="_blank">@<?php echo $userScreenName; ?></a>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="tweet-info">
                <div class="fnum"><div>Tweets</div>
                <div class="badge"><?php echo $tweetsNum; ?></div>
            </div>
            <div class="fnum">
                <div>Followers</div>
                <div class="badge"><?php echo $followerNum; ?></div>
            </div> 
            </div><!--Extra div ending-->
            
            <div class="tweet-box">
                <h2>Latest Tweets</h2>
                <div class="tweets-widget">            
                    <ul class="tweet-list">
                    <?php
                    foreach($feedData as $tweet){
                        $latestTweet = $tweet->text;
                        $latestTweet = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<a href="https://$1" target="_blank">https://$1</a>', $latestTweet);
                        $latestTweet = preg_replace('/@([a-z0-9_]+)/i', '<a class="tweet-author" href="https://twitter.com/$1" target="_blank">@$1</a>', $latestTweet);
                        $tweetTime = date("D M d H:i:s",strtotime($tweet->created_at));
                    ?>
                        <li class="tweet-wrapper">
                            <div class="tweet-thumb">
                                <span><a href="<?php echo $tweet->user->url; ?>" title="<?php echo $tweet->user->name; ?>"><img alt="" src="<?php echo $tweet->user->profile_image_url; ?>"></a></span>
                            </div>
                            <div class="tweet-content">
                                <h3 class="title" title="<?php echo $tweet->text; ?>"><?php echo $latestTweet; ?></h3>
                                <span class="meta"><?php echo $tweetTime; ?> - <?php echo $tweet->favorite_count; ?> Favorite</span>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>

        </div> <!--div end for class="container"-->
    </body>
</html>