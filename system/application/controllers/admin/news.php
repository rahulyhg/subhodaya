<?php
class News extends Controller {
	var $layout = 'admin'; 
	function News(){
		parent::Controller();
		$this->load->model('admin/News_Model');
		$this->Login_Model->login_validate();
	}
	function index(){
		$message = $this->session->flashdata('message');
		$details=$this->News_Model->get_newstype(1);
		$districs=$this->News_Model->get_newstype(0);
		foreach ($districs as $dis)
				{
					$disoption[0]='Select Districts';
					$disoption[$dis->id]=$dis->news_cat;
				}
		foreach ($details as $res )
				{
					$options[0] = 'Select news';
					$options[$res->id] = $res->news_cat;
				}
				//print_r($options);
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		$textarea[]= array('textarea' => 'summary',
						   'skin'	  => 'small');
		/*$textarea[]= array('textarea' => 'heading',
						   'skin'	  => 'small');*/
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
							'options'   => $options,
							'disoption'	=>	$disoption
		);
		//print_r($disoption);
		$this->load->view('admin/news_view',$data);
	}
	function insert(){
		
		if(!isset($_POST['breaking_news'])){
			
			$breaking_news=0;
		}else{
			$breaking_news=$_POST['breaking_news'];
		}
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
		}
		$type=$this->input->post('type');
		$distr=$this->input->post('distr');
		$heading=$this->input->post('heading');
		$summery=$this->input->post('summary');
		$description=$this->input->post('description');
		$eng_heading=$this->input->post('engheading');
		if($type!=0){
			$news='news';
		$data=array(
					'type'    => $type,
					'heading' => $heading,
					'summary' => $summery,
				'description' => $description,
				'breking_news'=> $breaking_news,
				'active'      => $active,
				'eng_heading' => $eng_heading
			);
		if(!empty($data))
		{
			$result=$this->db->insert('news',$data);
			$id=$this->db->insert_id();
		if($result==1){
		$config['upload_path'] ='assets/'.$news.'/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('news');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$oldname='assets/'.$news.'/'.$data['upload_data']['file_name'];
			rename($oldname,'assets/'.$news.'/news_img_main'.$id.'.jpg');
			$message='News Added Successfully';
			$this->session->set_flashdata('message',$message);
			$aspect_ratio = $data['upload_data']['image_height'] / $data['upload_data']['image_width'];
		}
		
		if($data['upload_data']['image_width'] >300 && $data['upload_data']['image_height'] > 300)
		  {
		  	$filename = 'news_img_main'.$id.'.jpg';
			$image_path='assets/'.$news.'/';
			$config['new_image'] = 'news_img_temp'.$id.'.jpg';
	    	$config['image_library'] = 'gd2';
	        $config['source_image'] = $image_path.$filename;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 300;
			$config['height'] =300;
			$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
			if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	rename('assets/'.$news.'/news_img_temp'.$id.'_thumb.jpg','assets/'.$news.'/news_img'.$id.'.jpg');
	    	unlink('assets/'.$news.'/news_img_main'.$id.'.jpg');
			$this->image_lib->clear();	
			}
		  else 
		  rename('assets/'.$news.'/news_img_main'.$id.'.jpg','assets/'.$news.'/news_img'.$id.'.jpg');	
			
	    	
			$height=$aspect_ratio * 100;
			$filename = 'news_img'.$id.'.jpg';
			$image_path='assets/'.$news.'/';
	    	$config2['image_library'] = 'gd2';
	    	$config2['source_image'] = $image_path.$filename;
			$config2['create_thumb'] = TRUE;
			$config2['maintain_ratio'] = TRUE;
			$config2['width'] = 100;
			$config2['height'] = $height;
			$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config2);
			if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	$this->image_lib->clear();
	    	
	    	$height=$aspect_ratio * 90;
			$filename1= 'news_img'.$id.'.jpg';
			$config=array();
	    	$config['image_library'] = 'gd2';
	    	$config['new_image']= "news_img".$id."_home.jpg";
	        $config['source_image'] = $image_path.$filename1;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 90;
			$config['height'] = $height;
	    	$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	$this->image_lib->clear();
			redirect(base_url().'admin/news',$message);
		}
		
		
		}
		}else{
			$news='districts';
			$data1=array(
					'dist_id'  => $distr,
					'heading' => $heading,
					'summary' => $summery,
				'description' => $description,
				'eng_heading' => $eng_heading
			);
			if(!empty($data1))
			{
			$result=$this->db->insert('districts_news',$data1);
			$id=$this->db->insert_id();
			}
			if($result==1){
				$message='District news add successfully';
				redirect(base_url().'admin/news',$message);
			}
			
		}
		
	}
	function getnews()
	{
		$id=$this->uri->segment(4,0);
		//$details=$this->News_Model->getnews_details($type);
		
		$query=$this->News_Model->get_news1($id);
		//print_r($query);
	    $a =base_url().'admin/news/getnews/'.$id;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =9;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->News_Model->count($id);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		// print_r($details);
  	    $paginate = $this->paginationnew->paginate1(); 
		$data=array(
					'details' => $details,
					'paginate'=> $paginate
		);
		$this->load->view('admin/news_edit',$data);
	}
	function delete()
	{
	$this->load->model('admin/News_Model');
	$id=$this->uri->segment(4,0);
	$result=$this->News_Model->delete($id);
	redirect(base_url()."admin/news/getnews");
	}
	function edit(){
	 $id =$this->uri->segment(4,0);
    $edit = $this->News_Model->getdetails($id);
   
    $message = $this->session->flashdata('message');
		$this->load->model('admin/Openwysiwyg_Model');
		$textarea[]= array('textarea' => 'description',
						   'skin'	  => 'full');
		$textarea[]= array('textarea' => 'summary',
						   'skin'	  => 'small');
		$links = $this->Openwysiwyg_Model->setEditor($enable=TRUE,$textarea);
		$data=array(
							'jslinks'   => $links,
							'message'	=> $message,
		                    'edit'      =>  $edit
		);
    $this->load->view('admin/editnews',$data);
	}
  function edit1()
   {
   		if(!isset($_POST['breaking_news']))
   	{
		$breaking=0;
   	}else{
   		$breaking=$_POST['breaking_news'];
   	}   	
	  $id=$_POST['id'];
   	 $this->News_Model->edit1($id,$breaking);
   	redirect(base_url().'admin/news/getnewstypes');
   }
   function getnewstypes(){
   $details=$this->News_Model->get_newstypes();
	$data=array('details'=>$details);
		$this->load->view('admin/getnewstypes',$data);
   }

}
?>