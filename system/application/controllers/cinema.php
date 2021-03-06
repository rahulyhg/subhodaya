<?php
class Cinema extends Controller {
	var $layout='default';
	function Cinema()
	{
		parent::Controller();
	}
	function index()
	{
		$breaking=$this->News_Model->breaking_news1();
		$more=$this->News_Model->more_news();
		$title=$this->lang->line('cinema_title').$more['4']->matter;
		$description=$this->lang->line('cinema_descrip'); 
		$query=$this->Flash_model->get_flash_images();
		$img=$query->result();
		$newscss=array();
		$cinemarss=array();
		$cine_news=$this->cinema_lib->cinema_block($this->lang->line('cini_news'));
		$cin_pukarlu=$this->cinema_lib->cinema_block($this->lang->line('cini_pukarlu'));
		$cin_riviews=$this->cinema_lib->cinema_block($this->lang->line('reviews'));
		$cin_shedule=$this->cinema_lib->cinema_block($this->lang->line('cini_shedul'));
		$cin_interviews=$this->cinema_lib->cinema_block($this->lang->line('interviews'));
		$cin_therachatu=$this->cinema_lib->cinema_block($this->lang->line('therachatu'));
		$cinemapoll=$this->Poll_Model->get_newspolls($type=5,0);
		/*$more=$this->News_Model->more_news();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$cinema_type3=$this->Cinema_Model->get_cinematype(3);
		$cinema_type4=$this->Cinema_Model->get_cinematype(4);
		$cinema_type5=$this->Cinema_Model->get_cinematype(5);
		$cinema_type6=$this->Cinema_Model->get_cinematype(6);
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=5);
	$images=array();
		$gallery_maincategeories = $this->Gallery_Model->get_categeory($active=1);
		
		if(!empty($gallery_maincategeories))//if atleast one main categeory exists..
		{
			
		  foreach($gallery_maincategeories as $item)
		  {
			$subcategeories[$item->id]=$this->Gallery_Model->subcat($item->id);
		  }
		//  print_r($subcategeories);
		 	$count = 1;
	       foreach($subcategeories as $item)
	       {  
	       	$eachone=$item->result();
	    	if(!empty($eachone))
	    	{
	    		foreach ($eachone as $row){
	    			//print_r($row);
	    			
	 				$images[$row->id]=$this->Gallery_Model->getimage1($row->id);
	 				
	 				
	    		}
	 		
	    	}
	    	if($count >=3)
	 				break;
	 				$count++;
		   }
	    }
	   // print_r($images);
	    $this->load->Model('Video_Model');
	    $videos=$this->Video_Model->get_videos('latest',4);
	   	$video_result=$videos->result();
	    $gall_topviews=$this->Gallery_Model->top_views();
	    $sprytabs=array();
	    $tabs=array();*/
	    
	   /* $current_url = current_url();
		//$navigation = array ($current_url);
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['4']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);*/
		//print_r($bread_crumb);
		$data=array(
						'onload' 		=> 	"display_text_1()",
						'img'			=> $img,
						'newscss'		=>	$newscss,
						'cin_pukarlu'	=>	$cin_pukarlu,
						'cine_news'		=>	$cine_news,
						'cin_riviews'	=>	$cin_riviews,
						'cin_shedule'	=>	$cin_shedule,
						'cin_interviews'=>	$cin_interviews,
						'cin_therachatu'=>	$cin_therachatu,
						'cine_news'		=>	$cine_news,
						'cinemapoll'	=>	$cinemapoll,
						'title'			=>	$title,
						'description'	=>	$description,
						'breaking'		=>	$breaking,
						'cinemarss'		=>	$cinemarss
						//'bread_crumb'  => $bread_crumb 
		);
		$this->load->view('cinema_view',$data);
	}
	function details()
	{
		$breaking=$this->News_Model->breaking_news1();
		$newscss=array();
		$type=$this->uri->segment(3);
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
	
		$result=$this->Cinema_Model->get_all($id);
		if(empty($result)){
			redirect(base_url().'cinema');
		}
		$cinema_content=$this->news_lib->cinema_content($type);
		$title=$this->lang->line('cine_cat'.$type);
		$cinemarss=array();
		/*//active news for side heaidngs
		$active_news=$this->Cinema_Model->get_activenews();
		//active news for tabs
		$active_news1=$this->Cinema_Model->get_activenews1(1);
		$active_news2=$this->Cinema_Model->get_activenews1(5);
		$active_news3=$this->Cinema_Model->get_activenews1(3);
		$active_news4=$this->Cinema_Model->get_activenews1(4);
		//print_r($active_news2);
		//greetings
		$greetings4=$this->Greeting_Model->get_main_greetings(4);
		//sahithi 
		$sahithi=$this->Sahithi_Model->get_home_stories(2);
		$sahithi1=$this->Sahithi_Model->get_home_stories(4);
		$sahithi_cat=$this->Sahithi_Model->get_sahithitype();
		//print_r($sahithi);
		$tabs=array();
		//$current_url = current_url();
		//$navigation = array ($current_url);*/
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'main' => $more['4']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		$data=array('more'			=>	$more,
					'result'		=>	$result,
					'news_content'	=>	$cinema_content,
					'newscss'		=>	$newscss,
					'bread_crumb'	=>	$bread_crumb,
					'title'			=>	$title,
					'breaking'		=>	$breaking,
					'cinemarss'		=>	$cinemarss
		);
		$this->load->view('news_content',$data);
	}
	function inner()
	{
		$breaking=$this->News_Model->breaking_news1();
		$more=$this->News_Model->more_news();
		$id=$this->uri->segment(3,0);
		$type=$this->uri->segment(4,0);
		$cinema_inner=$this->news_lib->cinema_inner($id,$type);
		$newscss=array();
		$result=$this->Cinema_Model->inner($id);
		$cinemarss=array();
	/*	
		$news_type4=$this->News_Model->get_newstype1(4);
		$result1=$this->Cinema_Model->get_all($type);
		
		if(empty($result)){
			redirect(base_url().'cinema');
		}
		$engheading=$result['0']->eng_heading;
		$mahila_details=$this->Mahila_Model->active_mahila(6);
		//print_r($mahila_details);
		$news_type2=$this->News_Model->get_newstype1(2);
		$mahila_details1=$this->Mahila_Model->active_mahila(8);
		$cinema_cat=$this->Cinema_Model->get_cinemanewstype();
		
		$this->load->Model('Video_Model');
	    $videos=$this->Video_Model->get_videos('active',2);
	   	$video_result=$videos->result();
		$telegu_typing=array();
			$current_url = current_url();
		//$navigation = array ($current_url);

		$cate=$this->db->get_where('cinema_cat',array('id'=>$type));
		$cinemacate=$cate->result();
		if(empty($cinemacate)){
			redirect(base_url().'cinema');
		}*/
		$title=$result[0]->eng_heading. ' | '. $result[0]->heading;
		$segments = array(	'seg1' => $this->uri->segment(1,0),
						   	'seg2' => $this->uri->segment(2,0),
							'seg3' => $this->uri->segment(3,0),
							'seg4' => $this->uri->segment(4,0),
							'seg5' => $this->uri->segment(5,0),
							'heading' => $result[0]->heading,
							'main' => $more['4']->matter,
							'home' => $more['2']->matter,
		); 
		$bread_crumb = $this->bread_crumb->get_code($segments);
		$data=array(
					'bread_crumb'	 => $bread_crumb,
					'news_inner'	 =>	$cinema_inner,
					'newscss'		 =>	$newscss,
					'title'			 =>	$title,	
					'breaking'		 =>	$breaking,
					'cinemarss'		 =>	$cinemarss
					);
		$this->load->view('news_inner',$data);
	}
	
    function mail_box(){
	 	$this->load->view('mail_box');	
	 }
}
?>