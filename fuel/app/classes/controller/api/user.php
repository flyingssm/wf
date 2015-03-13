<?php

class Controller_Api_User extends Controller_RestBase
{

    public function post_register()
    {
        $okey=true;
        $res = [];
        $res['msgs']=[];
        $res['result'] = true;
        if($okey){
            try{
                Auth::create_user(Input::post('username',null),Input::post('password',null),Input::post('email',null));
                $res['msgs'][]=['text'=>'アカウントを作成しました。ログインします。','status'=>'success'];
            }catch(Exception $e){
                $res['result'] = false;
                $res['msgs'][]=['text'=>'アカウントが作成出来ませんでした。','status'=>'danger'];
            }
        }

        $this->response($res);
    }

    public function post_edit()
    {
        $okey=true;
        $res = [];
        $res['msgs']=[];
        $res['result'] = true;
        if(!empty($this->user_data)){
          $user = \Model_User::find($this->user_data['user_id']);
          $user->screen_name=Input::post('screen_name','Noname');
          $user->save();
          $res['msgs'][]=['text'=>'プロフィールを編集しました。','status'=>'success'];
        }else{
          $res['msgs'][]=['text'=>'ログインしていません。','status'=>'danger'];
        }


        $this->response($res);
    }
}
