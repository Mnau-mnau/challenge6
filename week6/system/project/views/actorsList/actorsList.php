<?php

//some desperate try to make pagination from online tutorial
// $conn = new mysqli ('127.0.0.1', 'root','','imdb_challenge');
// $limit = (isset($_GET['limit']))? $_GET['limit']: 30;
// $page = (isset($_GET['page']))? $_GET['page']:1;
// $links = (isset($_GET['links']))?$_GET['links']:7;
// $query = "SELECT * FROM `imdb_movie` WHERE 1";
// $paginator = new paginator ($conn, $query);
// $results = $paginator->getData($page,$limit);
?>
<div class="news">
    <?php foreach($actorsList as $actor):?>
    
    <div class="movieDetail effect8">
        <div class="catcher">
           <a href="?page=actors&id=<?php echo $actor->imdb_id;?>" style="color:black; text-decoration:none"><h2><?php echo $actor->fullname;?></h2></a>
            
        </div>
        
        <div class="news_article movieList">
            <div class="thumb">
                <img src="images/star-icon-32.png" alt="Image placeholder" style="height:100px;"/>
            </div>
            <div class="title">
                <h3 class="h2-right">Name: <?php echo $actor->fullname;?></h3>
                <h3 class="h2-right">Movie rating: <?php //echo $actor->rating;?></h3>
                <h3 class="h2-right">Number of votes: <?php //echo $actor->votes_nr;?></h3>
                <p></p>
            </div>
        </div>
    
    </div>
    <?php endforeach; ?>
</div>