<?php


class Controller_Logout extends Controller_TemplateBase
{


    public function before()
    {
        parent::before();

    }


    public function after($response)
    {
        $response = parent::after($response); 
        return $response;
    }

    public function action_index()
    {
		Auth::logout();
    	Response::redirect('/');
    }
}
