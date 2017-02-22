<?php
//set some details to page layout, such as header

$actorsList = new view('actorsList/actorsList');
$actorsList->actorsList = ActorsList_Model::getActorsList();
//prepare details of data load header_register_callback

$page_layout = new view('actorsList/page_layout');
$page_layout->actorsList = $actorsList;

presenter::setTitle('List of all actors');
presenter::present($page_layout);