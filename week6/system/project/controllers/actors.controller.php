<?php

//movies listing will include img placeholder, name of the movie, year of first screening, main characters? rating

//here we need to define views for the page and define the model for the view 
$actors = new view('actors/actors');
$id = array($_GET['id']);

$actors->actors = Actors_Model::getActors($id);

//here you add your data preparation from the model object files

$page_layout = new view('actors/page_layout');
$page_layout->actors = $actors;

//set the title of this page
presenter::setTitle('THE MOVIE SPACE');

//give the layout to the presenter to present
presenter::present($page_layout);