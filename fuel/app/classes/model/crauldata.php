<?php


class Model_CraulData extends Orm\Model {

     //使用するフィールド名をセット
  protected static $_properties = array(
'id' ,
'kingdom_jp',
'phylum_jp',
'class_jp' ,
'order_jp' ,
'family_jp' ,
'genus_jp' ,
'species_jp',
'created_date',
'updated_date',
'url',
'page_title',
'text',
'html',
'kingdom_en',
'phylum_en' ,
'class_en' ,
'order_en' ,
'family_en' ,
'genus_en' ,
'species_en',
'img_url' ,
'name_jp' ,
'name_en' ,
  );
  //テーブル名がモデル名の複数形なら省略可
  protected static $_table_name = 'biological_encyclopedia';
  //プライマリーキーがidなら省略可
  protected static $_primariy = array('id');

}
