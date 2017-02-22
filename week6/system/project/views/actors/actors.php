<?php 
//here should be the movie detail
//after creating models and objects for actors and actorsList var_dump data to read correct keys


?>

<div class="actor_profile  effect2">  
    <?php foreach($actors as $actor):?>
        <h2 class="catcher"><?php echo $actor->fullname;?></h2>  
        <div class="profile">
            <div class="main_pict">
                <img src="../images/felicity-jones.jpg" alt="Felicity Jones portrait"/>
            </div>
            <div class="article">
                <p>In full name <?php echo $actor->first_name.' '.(isset($actor->middle_name)?$actor->middle_name:'').' '.$actor->last_name; ?>
                <p> Born on <?php echo isset($actor->birth_date)? $actor->birth_date:'unknown; in'.$actor->birth_location; ?></p>
                <h3 class="catcher">Biography</h3>
                <p>
                We don't have any personal data about this actor. Maybe later.
                </p>
            </div>
        </div>
  <!--     This is a programming game for those who are crazy enough to pull out data about linked movies, good luck, not me tonite
      
       <div class="catcher">
                        <h3>Filmography</h3>
                    </div>
                    
                    <div class="page effect2 links">
                        <div class="row">
                            <div class="movie effect8" >
                                <img src="../images/the-amazing-spider-man-2.jpg"/>
                                <a href="http://www.imdb.com/title/tt1872181/?ref_=nv_sr_1">The Amazing Spider-Man 2 (2014) </a>
                            </div>
                            <div class="movie effect8">
                                <img src="../images/theory-of-everything.jpg"/>
                                <a href="http://www.imdb.com/title/tt2980516/?ref_=nv_sr_2">The Theory of Everything (2014)</a>
                            </div>
                            <div class="movie effect8">
                                <img src="../images/inferno.jpg"/>
                                <a href="http://www.imdb.com/title/tt3062096/?ref_=nv_sr_1">Inferno (2016)</a>
                            </div>
                            <div class="movie effect8">
                                <img src="../images/Rogue-one.jpg"/>
                                <a href="movie.html">Rogue One (2016)</a>
                            </div>
                        </div>
                    </div> -->
</div>
<?php endforeach;?>