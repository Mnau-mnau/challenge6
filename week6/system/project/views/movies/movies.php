<?php 
//here should be the movie detail


?>

<div class="selection effect2">
    <?php foreach($movies as $movie):?>
    <div class="page plot">
        <div class="catcher detail">
            <h2><?php echo $movie->name;?></h2>
            <div class="rating margin_r_10">
                <img class="icon margin_r_10" src="../images/star-icon-32.png"/>
                <p class="margin_r_10"><?php echo $movie->rating; ?>/10</p>
                <progress value="<?php echo ($movie->rating)*10; ?>" max="100"></progress>
            </div>
        </div>
        
        <h3>Plot</h3>
        <article>
        We don't have any details about this movie here. Ouch.
        </article>
        <h3 class="h2-right">Year: <?php echo $movie->year;?></h3>
        <h3 class="h2-right">Number of votes: <?php echo $movie->votes_nr;?></h3>
    </div>
    <div class="page main_pict">
        <img src="../images/movie.jpg"/>
    </div>   
</div>
<?php endforeach; ?>
