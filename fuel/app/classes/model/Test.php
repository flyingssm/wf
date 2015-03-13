<?php


class Model_Test extends \Model {

    public static function get_results()
    {
      var_dump("ok");
      $result = DB::query('SELECT * FROM users')->execute()->as_array();
      var_dump($result);
    }

}