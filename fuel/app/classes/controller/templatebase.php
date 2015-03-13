<?php

class Controller_TemplateBase extends Controller_Template
{

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
        }else{
            if(Uri::create('/login')!=Uri::current()){
                Response::redirect('/login');
                return;
            }


        }
        $this->payload['user_data'] = $this->user_data;
        parent::before();
        $this->template->title = 'みじんこプロジェクト';
    }

    public function after($response)
    {
        $response = parent::after($response);
        return $response;
    }

    public function display($html = null,$data =[]){
        $this->template->content = View::forge($html,array_merge($this->payload,$data));
    }


}
