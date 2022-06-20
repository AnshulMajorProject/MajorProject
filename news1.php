<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Business News</title>
        <link href="css/bootstrap.css" rel="stylesheet" />
        <script src="js/bootstrap.js"></script>
        <link href="news1.css" rel="stylesheet">

    </head>
    <body>
        <?php 
            $url='https://newsapi.org/v2/top-headlines?sources=google-news&apiKey=7304724bfe214486afe70cdb4f69f439';
            $response =  file_get_contents($url);
            $NewsData = json_decode($response);
        ?>

        <div class="jumbotron">
            <h1>Business News</h1>
        </div>
        <div class="container-fluid">
            <?php 
                foreach($NewsData->articles as $News)
                {
            ?>
            <div class="row">
                <div class="col-md-3">
                     <img src="<?php echo $News->urlToImage?>" alt="News Thumbnail">
                </div>
                <div class="col-md-9">
                    <h2>Title:<?php echo $News->title?></h1>
                    <h5>Description: <?php echo $News->description?></h5>
                    <p>Content: <?php echo $News->content?> </p>
                    <h6>Author: <?php echo $News->author?></h6>
                    <h6>Published: <?php echo $News->publishedAt?></h6>
                </div>

            </div>
            <?php 
                }
            ?>
        </div>

    </body>
</html>