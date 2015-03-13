<?php


class Controller_Login extends Controller_TemplateBase
{


    public function before()
    {
        parent::before();

    }

    /**
     * $response をパラメータとして追加し、after() を Controller_Template 互換にする
     */
    public function after($response)
    {
        $response = parent::after($response); // あなた自身のレスポンスオブジェクトを作成する場合は必要ありません。

        // do stuff

        return $response; // after() は確実に Response オブジェクトを返すように
    }

    public function get_index(){
    	$this->template->content = View::forge('login.smarty',[]);
    }


    public function post_index()
    {

    	if (Auth::login(Input::post('username'), Input::post('password')))
		{

		}

    	Response::redirect('/');
    }
}
