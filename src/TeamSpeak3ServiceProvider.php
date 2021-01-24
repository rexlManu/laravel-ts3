<?php

namespace RexlManu\TeamSpeak3;

use Illuminate\Support\ServiceProvider;

class TeamSpeak3ServiceProvider extends ServiceProvider
{

    public function boot() {
        
    }
    public function register() {
        $this->app->bind('teamspeak', function($app) {
            return new TeamSpeak3QueryConnector();
        });
    }

}
