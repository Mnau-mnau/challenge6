<?php

class ActorsList_Object
{
    public function getUrl()
    {
        return url::to('actorsList', array(
            'id'=> $this->id
        ));
    }
}