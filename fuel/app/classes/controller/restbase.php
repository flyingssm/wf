<?php

class Controller_RestBase extends Controller_Rest
{
    protected $format = 'json';
    public $user_data=[];
    public $payload=[];
        public function before()
    {
        $this->payload=[];
        $this->user_data=[];
        if (Auth::check()){
            $this->user_data['screen_name']=Auth::get('screen_name');
            $this->user_data['user_id']=Auth::get('id');
            $this->user_data['username']=Auth::get('username');
        }
        $this->payload['user_data'] = $this->user_data;
        parent::before();

    }
}