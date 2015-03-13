<?php


class Controller_Pet extends Controller_TemplateBase
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
        $this->display('pet/index.smarty');
    }

}
