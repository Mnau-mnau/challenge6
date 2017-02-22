<?php

//movies listing will include img placeholder, name of the movie, year of first screening, main characters? rating

//here we need to define views for the page and define the model for the view 
$movies = new view('movies/movies');
$id = array($_GET['id']);

$movies->movies = Movies_Model::getMovies($id);

//here you add your data preparation from the model object files

$page_layout = new view('movies/page_layout');
$page_layout->movies = $movies;

//set the title of this page
presenter::setTitle('THE MOVIE SPACE');

//give the layout to the presenter to present
presenter::present($page_layout);