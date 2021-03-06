<?php
class Cinema extends Controller {
	var $layout='admin';
	function Cinema(){
		parent::Controller();
		$this->Login_Model->login_validate();
		$this->load->helper(array('form','url','file'));
		$this->load->model('admin/Cinema_Model');
	}
	function index(){
		$message = $this->session->flashdata('message');
		$details=$this->Cinema_Model->get_cinemanewstype();
		foreach ($details as $res )
				{
					$options[$res->id] = $res->cinema_type;
				}
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
							'options'   => $options
		);

		$this->load->view('admin/cinema_view',$data);
	}
	function insert(){
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
			
		}
		$type=$this->input->post('type');
		$heading=$this->input->post('heading');
		$summery=$this->input->post('summary');
		$description=$this->input->post('description');
		$eng_heading=$this->input->post('engheading');
		$data=array('type'    => $type,
					'heading' => $heading,
					'summary' => $summery,
				'description' => $description,
				'active'	  => $active,
				'eng_heading' => $eng_heading
		);
		if(!empty($data))
		{
		$result=$this->db->insert('cinema',$data);
		$id=$this->db->insert_id();
		}
		if($result==1){
		$config['upload_path'] ='assets/cinema/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('cinema');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$oldname='assets/cinema/'.$data['upload_data']['file_name'];
			rename($oldname,'assets/cinema/news_img_main'.$id.'.jpg');
			$message='CinemaNews Added Successfully';
			$this->session->set_flashdata('message',$message);
			$aspect_ratio = $data['upload_data']['image_height'] / $data['upload_data']['image_width'];
	
		}
		if($data['upload_data']['image_width'] >300 && $data['upload_data']['image_height'] > 300)
		  {
			$filename = 'news_img_main'.$id.'.jpg';
			$image_path='assets/cinema/';
	    	$config['image_library'] = 'gd2';
	    	$config['new_image'] = 'news_img_temp'.$id.'.jpg';
	        $config['source_image'] = $image_path.$filename;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 300;
			$config['height'] = 300;
	    	$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	rename('assets/cinema/news_img_temp'.$id.'_thumb.jpg','assets/cinema/news_img'.$id.'.jpg');
	    	unlink('assets/cinema/news_img_main'.$id.'.jpg');
			
	    	$this->image_lib->clear();
		  }
		  else 
		  rename('assets/cinema/news_img_main'.$id.'.jpg','assets/cinema/news_img'.$id.'.jpg');	
		
		    $height=$aspect_ratio * 110;
			$filename = 'news_img'.$id.'.jpg'; 
			$image_path='assets/cinema/';
	    	$config1['image_library'] = 'gd2';
	        $config1['source_image'] = $image_path.$filename;
			$config1['create_thumb'] = TRUE;
			$config1['maintain_ratio'] = TRUE;
			$config1['width'] = 140;
			$config1['height'] =$height;
			$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config1);
			if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
			
	    	$this->image_lib->clear();
	    	
	    	$height=$aspect_ratio * 60;
			$filename1= 'news_img'.$id.'.jpg';
			$config=array();
	    	$config['image_library'] = 'gd2';
	    	$config['new_image']= "news_img".$id."_home.jpg";
	        $config['source_image'] = $image_path.$filename1;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 60;
			$config['height'] = $height;
	    	$this->load->library('image_lib');      
	    	$this->image_lib->initialize($config);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());	
	    	}
	    	$this->image_lib->clear();
	    	
			redirect(base_url().'admin/cinema',$message);
		}
		
	}
	function getcinema(){
		$id=$this->uri->segment(4,0);
		//$details=$this->Cinema_Model->getcinema_details($type);
		$query=$this->Cinema_Model->get_cinema1($id);
		//print_r($query);
	    $a =base_url().'admin/cinema/getcinema/'.$id;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =9;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Cinema_Model->count($id);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		// print_r($details);
  	    $paginate = $this->paginationnew->paginate1(); 
		
		$data=array(
				'details'	=>	$details,
				'pagination'=>  $paginate
		);
		$this->load->view('admin/cinema_edit',$data);
	}
	function edit(){
	 $id =$this->uri->segment(4,0);
    $edit = $this->Cinema_Model->cinemadetails($id);
   
    $message = $this->session->flashdata('message');
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
		                    'edit'      =>  $edit
		);
    $this->load->view('admin/editcinema',$data);
	}
	function edit1()
   	{
	   $id=$_POST['id'];
   	 $this->Cinema_Model->edit1($id);
   	 redirect(base_url().'admin/cinema/getcinema');
   }
	function delete(){
	$this->load->model('admin/Cinema_Model');
	$id=$this->uri->segment(4,0);
	$result=$this->Cinema_Model->delete($id);
	redirect(base_url()."admin/cinema/getcinema");
	}
	function getcinematype(){
		$details=$this->Cinema_Model->get_cinemanewstype();
		$data=array('details'=>$details);
		$this->load->view('admin/getcinematype',$data);
	}
	
	
}
?>