<?php


class Controller_Book_Write extends Controller_TemplateBase
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

    public function post_index(){
    	$payload=[];
    	$name = Input::post('name','');
    	
    	$exist = \DB::query('SELECT * FROM life WHERE name_jp = :name')->bind('name',$name)->execute()->current();
    	if($exist){
    		$payload['msgs']=[[
    			'text' =>'['.Input::post('name','').']は既に登録されています。',
    			'status' =>'danger',
    		]];
    		$this->display('book/write.smarty',$payload);
    		return;
    	}

    	$rand_num =str_pad("".mt_rand(0,999), 3, "0", STR_PAD_LEFT);

            $config = array(
            'path' => DOCROOT.DS.'imgs'.DS.$rand_num,
            'randomize' => true,
            'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
        );
        Upload::process($config);
        	$data=[];
        	foreach(Input::post() as $key => $param){
        		$data[$key.'_jp'] = $param;
        	}
        // 検証
        if (Upload::is_valid())
        {	Upload::save();
        	$data['img_src']=$rand_num.DS.(Upload::get_files()[0]['saved_as']);
        }

        	$new=Model_life::forge($data)->save();
        	$payload['msgs']=[[
    			'text' =>'['.Input::post('name','').']を登録しました。',
    			'status' =>'success',
    		]];
	$this->display('book/write.smarty',$payload);
    }

    public function action_index()
    {





        $this->display('book/write.smarty');
    }
    
}
