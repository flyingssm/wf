
<?php

class Controller_Api_Pet extends Controller_RestBase
{

	//ランダムで生成する
	public function get_mypet(){
        $okey=true;
        $res = [];
        $res['msgs']=[];
        $res['result'] = true;
        $room_no = Input::get('room_no',1);  
        if($okey){
           try{
            	$res['pet']=\Model_Pet::get_mypet($this->user_data['user_id'],$room_no);
            	$res['result']=true;
            }catch(Exception $e){
                $res['result'] = false;
            }
        }

        $this->response($res);	
    }
    public function post_generate()
    {
        $okey=true;
        $res = [];
        $res['msgs']=[];
        $res['result'] = true;
        $room_no = Input::post('room_no',1);
        $ex = \Model_Pet::query()->where('user_id',$this->user_data['user_id'])->where('room_no',$room_no)->get();
        if($ex){
        	$okey=false;
        	$res['result'] = false;
            $res['msgs'][]=['text'=>'既にペットがいます。','status'=>'danger'];
        }  
        if($okey){
            try{
            	$new_pet = \Model_Pet::create_random($this->user_data['user_id'],$room_no);
            	$res['pet']=$new_pet;
            	$res['result']=true;
                $res['msgs'][]=['text'=>"{$new_pet['life']['name_jp']}が誕生しました！大切に育ててくださいね。",'status'=>'success'];
            }catch(Exception $e){
                $res['result'] = false;
                $res['msgs'][]=['text'=>'ペット生成に失敗しました。','status'=>'danger'];
            }
        }
        $this->response($res);
    }

        public function post_release()
    {
        $okey=true;
        $res = [];
        $res['msgs']=[];
        $res['result'] = true;
        $room_no = Input::post('room_no',1);
 
        if($okey){
            try{
            	\Model_Pet::release($this->user_data['user_id'],$room_no);
            	$res['result']=true;
                $res['msgs'][]=['text'=>"ペットを逃しました！",'status'=>'success'];
            }catch(Exception $e){
                $res['result'] = false;
            }
        }
        $this->response($res);
    }
}