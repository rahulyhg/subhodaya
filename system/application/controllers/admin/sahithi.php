<?php
class Sahithi extends Controller {
	var $layout='admin';
	function Sahithi(){
		parent::Controller();
		$this->load->model('admin/Sahithi_Model');
		$this->Login_Model->login_validate();
	}
	function index(){
			$message = $this->session->flashdata('message');
	$details=$this->Sahithi_Model->get_sahithitype();
		foreach ($details as $res )
				{
					$options[$res->id] = $res->cat_name;
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
		
		$this->load->view('admin/sahithi_view',$data);
	}
    function insert(){
    	//echo "hello";
		if(!isset($_POST['homepage'])){
			
			$homepage=0;
		}else{
			$homepage=$_POST['homepage'];
		}
		if(!isset($_POST['active'])){
			
			$active=0;
		}else{
			$active=$_POST['active'];
		}
		$type=$this->input->post('type');
		$heading=$this->input->post('heading');
		$eng_heading=$this->input->post('engheading');
		$summary=$this->input->post('summary');
		$description=$this->input->post('description');
		$data=array('cat_id'    => $type,
					'heading' => $heading,
		            'eng_heading' => $eng_heading,
					'summary' => $summary,
				'description' => $description,
				'homepage'=> $homepage,
				'active'      =>$active
		);
		$message="";
		if(!empty($data))
		{
		$result=$this->db->insert('sahithi',$data);
		$id=$this->db->insert_id();
		}
		if($result==1 && $_FILES['image']['name']!=""){
		$config['upload_path'] ='assets/sahithi/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	    $this->load->library('image_lib');
		if (! $this->upload->do_upload('image'))
		{
			$this->db->where('id',$id);
			$this->db->delete('sahithi');
			$error[]= array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message',$error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$oldname='assets/sahithi/'.$data['upload_data']['file_name'];
		    rename($oldname,'assets/sahithi/news_img_main'.$id.'.jpg');	
		    $message='Sahithi Added Successfully';
			$this->session->set_flashdata('message',$message);
			$aspect_ratio = $data['upload_data']['image_height'] / $data['upload_data']['image_width'];
		  	
			
		}
		
		 if($data['upload_data']['image_width'] >300 && $data['upload_data']['image_height'] > 300)
		  {
		  	$filename = 'news_img_main'.$id.'.jpg';
			$image_path='assets/sahithi/';
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
	    	rename('assets/sahithi/news_img_temp'.$id.'_thumb.jpg','assets/sahithi/news_img'.$id.'.jpg');
	    	unlink('assets/sahithi/news_img_main'.$id.'.jpg');
			$this->image_lib->clear();
				
		 }
		  else 
		  rename('assets/sahithi/news_img_main'.$id.'.jpg','assets/sahithi/news_img'.$id.'.jpg');	
		
		    $height=$aspect_ratio * 100;
			$filename = 'news_img'.$id.'.jpg';
			$image_path='assets/sahithi/';
	    	$filename= 'news_img'.$id.'.jpg';
	    	$config1['image_library'] = 'gd2';
	        $config1['source_image'] = $image_path.$filename;
			$config1['create_thumb'] = TRUE;
			$config1['maintain_ratio'] = TRUE;
			$config1['width'] = 100;
			$config1['height'] = $height;
	    	
	    	$this->image_lib->initialize($config1);
	    	if(!$this->image_lib->resize())
	    	{
	    		$error = array('error' => $this->image_lib->display_errors());
	    		print_r($error);	
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
	    	
		}
		 //  redirect(base_url().'admin/sahithi',$message);
	}
   function getsahithitype(){
   		
		$details=$this->Sahithi_Model-> get_sahithitype();
		$data=array('details'=>$details);
		//print_r($deatails);
		$this->load->view('admin/sahithitypes',$data);
	}
   function getsahithi()
   {
   		
		//$details=$this->Sahithi_Model->getdetails($this->uri->segment(4),'no','');
		$id=$this->uri->segment(4,0);
		$query=$this->Sahithi_Model->get_sahithi1($id);
		//print_r($query);
	    $a =base_url().'admin/sahithi/getsahithi/'.$id;
		 //pagination
    	$this->load->library('paginationnew');
    	
    	$this->paginationnew->start = ($this->uri->segment(5)) ? $this->uri->segment(5) : '0';
    	$this->paginationnew->limit =9;
        $this->paginationnew->filePath =$a;
      
        $this->paginationnew->select_what = '*';
        $this->paginationnew->nbItems = $this->Sahithi_Model->count($id);
        $this->paginationnew->add_query = $query;
        
   		$result = $this->paginationnew->getQuery(TRUE);
   		$details=$result->result();
   		// print_r($details);
  	    $paginate = $this->paginationnew->paginate1(); 	 	
		$data=array('details' => $details,
					'paginate'=> $paginate,
		              'cat_id' =>$this->uri->segment(4));
		//print_r($deatails);
		$this->load->view('admin/sahithi_edit',$data);
	}
	
	function delete(){
	$this->load->model('admin/Sahithi_Model');
	$id=$this->uri->segment(4,0);
	$cat_id=$this->uri->segment(5);
	$result=$this->Sahithi_Model->delete($id);
	redirect(base_url()."admin/sahithi/getsahithi/".$cat_id);
	}
	
	function edit(){
	 $id =$this->uri->segment(4,0);
	  $edit = $this->Sahithi_Model->get_sahithi_details($id);
        
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
		                    'edit'      => $edit
		);
		$this->load->view('admin/editsahithi',$data);
	}
	
  function edit1()
   {
   	if(!isset($_POST['homepage']))
   	{
		$homepage=0;
   	}else{
   		$homepage=$_POST['homepage'];
   	}
   	 $cat_id =$_POST['cat_id'];
	 $id=$_POST['id'];
   	 $this->Sahithi_Model->edit1($id,$homepage);
  	redirect(base_url().'admin/sahithi/getsahithi/'.$cat_id);
   }
	
}
?>