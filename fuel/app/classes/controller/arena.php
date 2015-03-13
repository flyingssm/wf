<?php


class Controller_Arena extends Controller_TemplateBase
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

    public function action_index()
    {
    	$payload = [];
    	$mypets = [];
    	for($i=1;$i<=3;$i++){
    		           try{
            	$mypets[]=\Model_Pet::get_mypet($this->user_data['user_id'],$i);
            	
            }catch(Exception $e){
            }
    	}
    	$payload['mypets'] = $mypets;
        $this->display('arena/index.smarty',$payload);
        
    }


        public function action_result()
    {
    	$payload = [];
       	$mypet=\Model_Pet::get_mypet($this->user_data['user_id'],(int)Input::get('room_no',1));
       	$enemypet = \Model_pet::get_challenger($this->user_data['user_id']);
 		$payload['battle_log'] = $this->_battle($mypet,$enemypet);
    	 $payload['mypet'] = $mypet;
    	 $payload['enemypet'] = $enemypet;
        $this->display('arena/result.smarty',$payload);
        
    }








    //ここに戦闘ロジックを書く
    
    private function _battle($player,$enemy){
    	$player['hp']=$player['pet']['fertility']+ $player['pet']['lifespan'];
    	$enemy['hp']=$enemy['pet']['fertility']+ $enemy['pet']['lifespan'];
    // 					<p class='pet-status-strength'></p>
				// <p class='pet-status-inteligence'></p>

    	$event_log=[];
    	$winner;
    	$event_log[]=["type"=>'','text'=>'戦闘開始！'];
    	$limit = 20;
    	$offense;
    	$defense;
    	if(mt_rand(0,1)){
    		$event_log[]=["type"=>'','text'=>'自分が先行'];
    	$offense = $player;
    	$defense = $enemy;
    	}else{
    		$event_log[]=["type"=>'','text'=>'相手が先行'];
    	$offense = $enemy;
    	$defense = $player;		
    	}
    	$t;
    	while(1){
    		$ap;
    		$dp;
    		if(mt_rand(0,1)){
    			$ap=mt_rand(1,$offense['pet']['strength']);
    		}else{
    			$ap=mt_rand(1,$offense['pet']['inteligence']);
    		}
    		if(mt_rand(0,1)){
    			$dp=mt_rand(1,$defense['pet']['fertility']);
    		}else{
    			$dp=mt_rand(1,$defense['pet']['lifespan']);
    		}
    		$damage = $ap-$dp;
			$event_log[]=["type"=>'','text'=>"{$offense['life']['name_jp']}の攻撃"];

			if($damage>0){
				$defense['hp'] -=$damage;
				$event_log[]=["type"=>'','text'=>"{$defense['life']['name_jp']}に{$damage}のダメージ！"];
			}else{
					$event_log[]=["type"=>'','text'=>"{$defense['life']['name_jp']}は攻撃を躱した"];
			}

			

			$t = $defense;
			$defense = $offense;
			$offense = $t;


    		if($defense['hp']<=0){
    			$event_log[]=["type"=>'','text'=>"{$defense['life']['name_jp']}は力尽きた..."];
    			$event_log[]=["type"=>'','text'=>"{$offense['life']['name_jp']}の勝利！"];
    			$winner = $offense;
    			break;
    		}
    		$defense['hp']-=1;

    	}

    	if($player['pet']['user_id']==$winner['pet']['user_id']){
    		$gain1 = mt_rand(0,3);
    		$gain2 = mt_rand(0,3);
    		$gain3 = mt_rand(0,3);
    		$gain4 = mt_rand(0,3);
			$pet = Model_Pet::find('first', array(
			'where' => array(
			array('user_id', $player['pet']['user_id']),array('room_no', $player['pet']['room_no'])
			,
			),
			));
			$pet->strength = $player['pet']['strength']+$gain1;
			$pet->inteligence = $player['pet']['inteligence']+$gain2;
			$pet->fertility = $player['pet']['fertility']+$gain3;
			$pet->lifespan = $player['pet']['lifespan']+$gain4;
			$pet->level =ceil(($player['pet']['strength']+$gain1+ $player['pet']['inteligence']+$gain2+$player['pet']['fertility']+$gain3+ $player['pet']['lifespan']+$gain4)/10);
			$pet->save();
			$event_log[]=["type"=>'','text'=>"{$player['life']['name_jp']}の強さが{$gain1}上がった"];
			$event_log[]=["type"=>'','text'=>"{$player['life']['name_jp']}の賢さが{$gain2}上がった"];
			$event_log[]=["type"=>'','text'=>"{$player['life']['name_jp']}の繁殖力が{$gain3}上がった"];
			$event_log[]=["type"=>'','text'=>"{$player['life']['name_jp']}の寿命が{$gain4}上がった"];
    	}
    	return $event_log;
    }

}
