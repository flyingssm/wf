<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Tasks;

/**
 * Robot example task
 *
 * Ruthlessly stolen from the beareded Canadian sexy symbol:
 *
 *		Derek Allard: http://derekallard.com/
 *
 * @package		Fuel
 * @version		1.0
 * @author		Phil Sturgeon
 */

$foo = new Foo();
set_exception_handler(array($foo, 'bar'));


class Foo{
    function bar()
    {
        echo 'ERROR!!';
    }
}


ini_set("memory_limit", "-1");
set_time_limit(0);
class Crawl
{

  public static function run($speech = null)
  {
  }

  private static $category = [
  "界" =>"kingdom",
  "門" =>"phylum",
  "綱" =>"class",
  "目" =>"order",
  "科" =>"family",
  "属" =>"genus",
  "種" =>"species"
];
  private static $url_prefix ="http://ja.wikipedia.org";

  public static function wikipedia()
  {
    while(true){
      $conti = static::start_root();
      //$conti =false;
      if(!$conti){
        break;
      }
    }

    return "Finished!";
  }

  //捜索済みページリストから探しなおす
  public static function start_root(){
$searches = \DB::query("
SELECT * FROM visited_page
WHERE
is_life = 1
AND
complete =0
")->execute()->as_array();
    //基点生物ページが無くなったらおわり。
shuffle($searches);
$search = $searches[0];

    if(!$search){
      return false;
    }

    //基点ページの全リンクを取得
    $url =  static::$url_prefix . $search["url"];
    $client = new \Goutte\Client();
    $crawler = $client->request('GET',$url);
    $link_list =$crawler->filter('#bodyContent a')->each(function ($node, $i) {
      return $node->attr('href');
    });
    //訪問済みならパス、行ったことなければ探す。
    foreach($link_list as $link){
      if($link[0]==="/"&&$link[1]==="w"&&$link[2]==="i"&&strpos($link,".jpg")===false&&strpos($link,".JPG")===false){
        $visited = \DB::query("
SELECT * FROM visited_page
WHERE
 url LIKE :url
      ")->bind('url',$link)->execute()->current();
        if($visited){
          continue;
        }

        static::find($link);
      }
    }
//complete
    $search = \DB::query("
UPDATE visited_page
SET
complete = 1
WHERE
id = :id
")->bind('id',$search["id"])->execute();
    return true;
  }

  public static function find($url_suffix){
    $url =  static::$url_prefix . $url_suffix;

    $success = false;
    try{
  $client = new \Goutte\Client();
$crawler = $client->request('GET',$url);
$record=[];
$record["url"] = $url;
$record["name_jp"] = $crawler->filter('h1#firstHeading')->text();
$record["page_title"] = $crawler->filter('title')->text();
$lists=$crawler->filter('#mw-content-text > .infobox > *')->each(function ($node, $i) {
  return $node->text();
});
for($i=0;$i<count($lists);$i++){
  if(strpos($lists[$i],'英名')!== false){
    $record["name_en"] = $lists[$i+1];
  }
}

//分類取得

$lists =$crawler->filter('#mw-content-text > .infobox .borderless > *')->each(function ($node, $i) {


  $result=[];

  try{
  $categ =$node->filter('td')->each(function ($node_c, $j) {
    return $node_c->text();
  });

    try{
    if(isset($categ[0])&&isset(static::$category[$categ[0]])){
      $name = explode(' ',$categ[2]);

      $result[static::$category[$categ[0]] . '_jp'] = $name[0];
      $result[static::$category[$categ[0]] . '_en']='';
      for($k=1;$k<count($name);$k++){
        $result[static::$category[$categ[0]] . '_en'] .=$name[$k];
      }

    }
  }catch(Exception $e){

  }

    }catch(Exception $e){
      
    }
  return $result;

});
  foreach($lists as $c){
    $record = array_merge($record,$c);
  }

  //サムネイル抽出
  if($crawler->filter('#mw-content-text > .infobox a.image')->count()){
    $record["img_url"] =(string)$crawler->filter('#mw-content-text > .infobox a.image')->attr("href");
  }
  //本分
  $record["text"] =$crawler->filter('#bodyContent')->text();
  $record["text"]= preg_replace(array('/\r\n/','/\r/','/\n/'), '', $record["text"] );
  $record["html"] =$crawler->filter('#bodyContent')->html();
  $is_life=false;
  if( count($record)>=7){
    //動物である.
    $success = true;
    $is_life = true;
  }
  $query = \DB::query("
  INSERT INTO visited_page (
	url,
	is_life,
	complete,
	title,
  error
)
VALUES
(  :url,
   :is_life,
   :complete,
   :title,
   :error
)
  ");
  if($is_life){
    @\Model_CraulData::forge($record)->save();
    $query->parameters([
      "url" =>$url_suffix,
      "is_life" => 1,
      "complete" =>0,
      "title" => $record["page_title"],
      "error" => 0
      ])->execute();
  }else{
    $error= 0;
    try{
  \Cli::write($record["page_title"]);
    }catch(Exception $e){
  $error = 1;
    }
$query->parameters([
  "url" =>$url_suffix,
  "is_life" => 0,
  "complete" =>1,
  "title" => $record["page_title"],
  "error" => $error
  ])->execute();
  }

  return true;
     }catch(Exception $e){
      $query = \DB::query("
  INSERT INTO visited_page (
  url,
  is_life,
  complete,
  title,
  error
)
VALUES
(  :url,
   0,
   1,
   '',
   1
)
  ")->bind('url',$url_suffix)->execute();
      return false;
   }
  }
  public static function mkdir(){
    for($i=0;$i<1000;$i++){
      $dir_name = str_pad("".$i, 3, "0", STR_PAD_LEFT);
      mkdir(DOCROOT.'public'.DS.'imgs'.DS.$dir_name,0755,true);
    }
  }

  public static function set(){


    $result = \DB::select()->from('lifes')->
    where('kingdom_jp','!=',null)->
    where('phylum_jp','!=',null)->
    where('class_jp','!=',null)->
    where('order_jp','!=',null)->
    where('family_jp','!=',null)->
    where('genus_jp','!=',null)->
    where('species_jp','!=',null)->
    where('name_jp','!=',null)->
    execute()->as_array();
  
    foreach($result as $r){
      $img_src=null;
      try{
      if(!is_null($r['img_url'])){
      $client = new \Goutte\Client();
      $crawler = $client->request('GET','http://ja.wikipedia.org'.$r['img_url']);
      $url ='http:'.$crawler->filter('#file a')->attr('href');
      $yahoo = curl_init();
      curl_setopt( $yahoo, CURLOPT_URL, $url );
      curl_setopt( $yahoo, CURLOPT_RETURNTRANSFER, true );
      $data = curl_exec( $yahoo );
      $rand_num =str_pad("".mt_rand(0,999), 3, "0", STR_PAD_LEFT);
      $file_name=md5(microtime().uniqid(mt_rand(), TRUE) . "f0s]j9w309fj");
      $img_src = $rand_num.DS.$file_name.'.'.(new \SplFileInfo($url))->getExtension();

      file_put_contents(DOCROOT.'public'.DS.'imgs'.DS.$img_src,$data);
      curl_close($yahoo);
      }
      $r['html']=null;
      $r['text'] = null;
      $r['id'] = null;
      $r['img_src']=$img_src;
      unset($r['id']);
      $exist = \DB::query('SELECT * FROM life WHERE name_jp = :name')->bind('name',$r['name_jp'])->execute()->current();
      if(!$exist){
        $new=\Model_life::forge($r)->save();
      }
      

      }catch(Exception $e){
        continue;
      }
    }
;
    return 'fin';
  }
}
