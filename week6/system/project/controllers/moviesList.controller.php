<?php
//set some details to page layout, such as header

 $moviesList = new view('moviesList/moviesList');
// $conn = new PDO('mysql:host=localhost;dbname=imdb_challenge;charset=utf8', 'root', '');
// $limit = (isset($_GET['limit']))?$_GET['limit']:50;
// $page = (isset($_GET['page']))?$_GET['page']:1;
// $links = (isset($_GET['links']))?$_GET['links']:10;
// $query = "
//         SELECT *
//         FROM `imdb_movie`
//         WHERE 1
//         LIMIT 0, 50";
// $paginator = new paginator($conn, $query);
// $moviesList = $paginator->getData($page, $limit);

//if paginator doesn't work uncomment following
$moviesList->moviesList = MoviesList_Model::getMoviesList();

$page_layout = new view('moviesList/page_layout');
$page_layout->moviesList = $moviesList;

presenter::setTitle('List of all movies');
presenter::present($page_layout);