<?php


class Model_Pet extends Orm\Model {
  protected static $_properties = array(
  'id',
  'user_id' ,
  'life_id',
  'strength',
  'inteligence',
  'fertility' ,
  'lifespan' ,
  'ability1' ,
  'ability2' ,
  'ability3' ,
  'ability4' ,
  'ability5' ,
  'level' ,
  'room_no' ,
  );

  protected static $_table_name = 'pets';

  public static function get_by_user_id($user_id){
  	$result = \DB::query("

SELECT * FROM pets
INNER JOIN lifes
ON lifes.id = life_id
WHERE user_id = :id

")->bind('id',$user_id)->execute()->as_array();
  	return $result;
  }
  public static function release($user_id,$room_no){
  		\DB::query(
"DELETE FROM pets WHERE user_id = $user_id AND room_no = $room_no"
  			)->execute();
  }

  public static function get_mypet($user_id,$room_no){
  	$data = static::query()->where('user_id',$user_id)->where('room_no',$room_no)->get_one();
  	$lifeid=$data['life_id'];
  	$life = \DB::query("
  		SELECT * FROM life WHERE id = :id
  		")->bind('id',$lifeid)->execute()->current();
  	$result=[
  	'pet' =>$data,
  	'life'=>$life,
  	];
  	return $result; 
  }
  public static function get_challenger($user_id){
    $data = static::query()->where('user_id','!=',$user_id)->get();
    $_data=[];
    $i=0;
    foreach($data as $d){
      $_data[]=$d;
      $i++;
    }

    $data = $_data[mt_rand(0,count($_data)-1)];
    $lifeid=$data['life_id'];
    $life = \DB::query("
      SELECT * FROM life WHERE id = :id
      ")->bind('id',$lifeid)->execute()->current();
    $result=[
    'pet' =>$data,
    'life'=>$life,
    ];
    return $result; 
  }
  public static function create_random($user_id,$room_no){
  	$life=\DB::query("
  		SELECT * FROM life ORDER BY RAND() LIMIT 1
  		")->execute()->current();
  	$level=mt_rand(1,5);
  	$data=[
  	'user_id'=>$user_id,
  	'life_id'=>$life['id'],
  	'room_no'=>$room_no,
  	'strength'=>mt_rand(5+$level,10+($level*3)),
  	'inteligence'=>mt_rand(5+$level,10+($level*3)),
  	'fertility'=>mt_rand(5+$level,10+($level*3)),
  	'lifespan'=>mt_rand(5+$level,10+($level*3)),
  	'level'=>$level,
  	];

  	$pet = static::forge($data)->save();
  	$result=[
  	'pet' =>$data,
  	'life'=>$life,
  	];
  	

  	return $result;
  }
}
