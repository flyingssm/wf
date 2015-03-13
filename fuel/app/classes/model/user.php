<?php


class Model_User extends Orm\Model {

     //使用するフィールド名をセット
  protected static $_properties = array(
'id' ,
'username',
'screen_name',
'password',
'last_login',

  );
  //テーブル名がモデル名の複数形なら省略可
  protected static $_table_name = 'users';
  //プライマリーキーがidなら省略可
  protected static $_primariy = array('id');

}
