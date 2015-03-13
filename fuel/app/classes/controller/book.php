<?php


class Controller_Book extends Controller_TemplateBase
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

    public function action_index()
    {
        $this->display('book/index.smarty');
    }


    public function action_list(){
        $payload=[];
        $payload['count_all'] =\Model_Life::query()->count();

    $pagination = Pagination::forge('lifes', [
        'total_items' => $payload['count_all'],
        'per_page'    => 20,
        'uri_segment' => 'page',
        'name'           => 'bootstrap3',
        'num_links' =>10,
        'show_first' => true,
        'show_last' => true,
    ]);
    $payload['pagination'] = $pagination;
        $payload['lifes']=\Model_Life::query()->order_by('img_src', 'desc')
        ->limit($pagination->per_page)
        ->offset($pagination->offset)
        ->get();

        $this->display('book/list.smarty',$payload);
    }
}
