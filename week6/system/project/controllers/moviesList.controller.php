<?php
//set some details to page layout, such as header

$moviesList = new view('moviesList/moviesList');
$moviesList->moviesList = MoviesList_Model::getMoviesList();
//prepare details of data load header_register_callback

$page_layout = new view('moviesList/page_layout');
$page_layout->moviesList = $moviesList;

presenter::setTitle('List of all movies');
presenter::present($page_layout);