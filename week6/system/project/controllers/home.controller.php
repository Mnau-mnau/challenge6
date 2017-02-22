<?php

//header from wrapper

//page_layout: some news
$news = new view('home/news');
//you can put here some model if you decide to load it from the database

//movies
$movies = new view('home/movies');
//this could pick some random movies to present, for example latest movies as a carousel of links

//actors - select by? born today
$actors = new view('home/actors');
//this could select 2 random actors born today- but in that case they wouldn't have photo


//footer from wrapper

//page layout
$page_layout = new view('home/page_layout');
$page_layout->news = $news;
$page_layout->movies = $movies;
$page_layout->actors = $actors;

//set the title of this page
presenter::setTitle('THE MOVIE SPACE');

//give the layout to the presenter to present
presenter::present($page_layout);