<?php


class Controller_Profile extends Controller_TemplateBase
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

    public function get_index(){
      $this->display('profile.smarty');

    }

    public function post_index()
    {

    	$this->get_index();
    }
}
