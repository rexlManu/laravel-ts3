<?php

namespace RexlManu\TeamSpeak3;

class TeamSpeak3QueryConnector
{
    private $instance;

    public function connect($host, $queryport, $username, $password, $timeout = 2) {
        if($this->instance) return $this->instance;
        $this->instance = new TeamSpeak3Admin($host, $queryport, $timeout);
        $this->instance->connect();
        $this->instance->login($username, $password);

        return $this->instance;
    }

    public function reconnect($host, $queryport, $username, $password, $timeout = 2) {
        $this->instance = null;
        return $this->connect($host, $queryport, $username, $password, $timeout);
    }

}
