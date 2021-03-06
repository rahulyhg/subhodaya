<?php
class Greetings extends Controller {
	var $layout = 'default'; 
	function greetings()
	{
		parent::Controller();
	}
	function index()
	{
		$type=$this->Greeting_Model->get_type();
		$newscss=array();
		$greetings1=$this->Greeting_Model->get_main_greetings($type[9]->id,8);
		$greetings2=$this->Greeting_Model->get_main_greetings($type[17]->id,8);
		$greetings3=$this->Greeting_Model->get_main_greetings($type[16]->id,8);
		$more=$this->News_Model->more_news();
		$title=$this->lang->line('gree_title').$more['7']->matter;
		$description=$this->lang->line('gree_descrip');
		$breaking=$this->News_Model->breaking_news1();
		//print_r($cat_id);
		/*$greetings1=$this->Greeting_Model->get_main_greetings(1);
		$greetings2=$this->Greeting_Model->get_main_greetings(2);
		$greetings12=$this->Greeting_Model->get_main_greetings(12);
		$greetings10=$this->Greeting_Model->get_main_greetings(10);
		$greetings9=$this->Greeting_Model->get_main_greetings(9);
		$greetings8=$this->Greeting_Model->get_main_greetings(8);
		$greetings4=$this->Greeting_Model->get_main_greetings(4);
		$greetings6=$this->Greeting_Model->get_main_greetings(6);
		//print_r($greetings9);
		$greetings7=$this->Greeting_Model->get_main_greetings(7);
		
		$tabs=array();
		$query=$this->Flash_model->flash_greetings();*/
		
		$current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['7']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		
		$data=array(/*
					'onload' 		=> 	"display_text_1()",
					'tabs'			=> $tabs,*/
					'newscss'		=>	$newscss,
					'greetings1'	=>	$greetings1,
					'greetings3'	=>	$greetings3,
					'greetings2'	=>	$greetings2,
					'type'			=>	$type,
					'bread_crumb'   =>  $bread_crumb,
					'title'			=>	$title,
					'description'	=>	$description,
					'breaking'		=>	$breaking
			);
		$this->load->view('greetings_content',$data);
  }
  function content()
  {
  	$breaking=$this->News_Model->breaking_news1();
  	$newscss=array();
  	$cat=$this->Greeting_Model->get_type();
  	$more=$this->News_Model->more_news();
  	$type=$this->uri->segment(3,0);
  	$title=$this->lang->line('gree_cat'.$type);
  	$greet_cat=$this->Greeting_Model->get_gre_type($type);
  	//$greetings1=$this->Greeting_Model->get_main_greetings($type,8);
  	$greetings=$this->Greeting_Model->get_greetings($type);
  	if(empty($greetings)){
  		redirect(base_url().'greetings');
  	}
  	$query=$this->Greeting_Model->greeings_pagi($type);
  	if(empty($query)){
  		redirect(base_url().'greetings');
  	}
	$a =base_url().'greetings/content/'.$type;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(4)) ? $this->uri->segment(4) : '0';
    	$this->paginationnew->limit =20;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Greeting_Model->count($type);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		 
  	    $paginate = $this->paginationnew->paginate1(); 
  	    
  	    $current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(3,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['7']->matter,
							'home' => $more['2']->matter,
		); 
		//print_r($segments);
		$bread_crumb = $this->bread_crumb->get_code($segments);
		//print_r($details);
  	    $data=array('greetings'  	=>  $details,
  					'more'   	 	=>  $more,
  				'pagination'   		=>  $paginate,
  	    		'bread_crumb'		=>  $bread_crumb,
  	    		'type'				=>	$cat,
  	    		'newscss'			=>	$newscss,
  	    		'greet_cat'			=>	$greet_cat,
  	    		'title'				=>	$title,
  	    		'breaking'			=>	$breaking
  	    );
  	$this->load->view('greetings_view',$data);
  }
  function inner()
  {
  	$breaking=$this->News_Model->breaking_news1();
  	$cat=$this->Greeting_Model->get_type();
  	$id=$this->uri->segment(3,0);
  	$type=$this->uri->segment(4,0);
  	$this->Greeting_Model->get_views($id);
  	$cate=$this->db->get_where('greeting_cat',array('id'=>$type));
  	$greetingcate=$cate->result();
  	if(empty($greetingcate)){
  		redirect(base_url().'greetings');
  	}
  	$result=$this->Greeting_Model->get_details($id);
  	if(empty($result)){
  		redirect(base_url().'greetings');
  	}
  	$more=$this->News_Model->more_news();
  	$telegu_typing=array();
  	
  	//print_r($result);
  	$current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
						  'heading'=> $result[0]->name,
							'main' => $more['7']->matter,
							'home' => $more['2']->matter,
		); 
	$bread_crumb = $this->bread_crumb->get_code($segments);
	
  	$data=array('more'			=>	$more,
  				'result'		=>	$result,
  				'telegu_typing'	=>	$telegu_typing,
  				'bread_crumb'	=>  $bread_crumb,
  				'cat'			=>	$cat,
  				'breaking'		=>	$breaking
  	);
  	$this->load->view('greetings_inner',$data);
  }


}
?>