<?php 
class Greeting_Model extends Model {
	function get_type()
	{
		$this->db->select('id,gree_cat');
		$result=$this->db->get('greeting_cat');
		return $result->result();
	}
	function get_gre_type($id)
	{
		$this->db->select('id,gree_cat');
		$this->db->where('id',$id);
		$result=$this->db->get('greeting_cat');
		return $result->result();
	}
	function rename($data,$id)
	{
		$oldname='assets/greetings/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/greetings/gree_img'.$id.'.jpg');
	}
 	function get_greetings($type="")
 	{
   		$this->db->select('*');
   		$this->db->order_by("greetings.insert_date", "desc");
   		$this->db->where('type',$type);
		$this->db->from('greeting_cat');
		$this->db->join('greetings','greetings.type=greeting_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_details($id){
    	$this->db->select('*');
   		$this->db->where('greetings.id',$id);
		$this->db->from('greeting_cat');
		$this->db->join('greetings','greetings.type=greeting_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
    function get_main_greetings($type,$limit){
    	$this->db->select('*');
   		$this->db->order_by("greetings.insert_date", "desc");
   		$array=array('type'=>$type);
   		$this->db->where($array);
   		$this->db->limit($limit);
		$this->db->from('greeting_cat');
		$this->db->join('greetings','greetings.type=greeting_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
    }
	function greeings_pagi($type)
	{
		$query="from greetings where type=$type order by greetings.insert_date desc";
		return $query;
	}
	function count($type)
	{
    	$this->db->where('type',$type);
		$this->db->from('greetings');
		$count =$this->db->count_all_results();
		return $count;
	}
	function greeting_details($type){
		$this->db->order_by("greetings.insert_date", "desc");
		$array=array('type'=>$type);
   		$this->db->where($array);
		$result=$this->db->get('greetings');
		return $result->result();
	}
	function delete($id)
	{
	$remove=array();
    	if(isset($_POST['remove']))
    	{
    		$remove = $_POST['removeid'];
    	}
    	else {
    		$remove = array($id);
    	}
    	foreach($remove as $item)
    	{
    		$this->db->where('id',$item);
    		$this->db->delete('greetings');
    		unlink('./assets/greetings/gree_img'.$item.'.jpg');
    		unlink('./assets/greetings/gree_img'.$item.'_thumb.jpg');
    	}
	}
    function edit1($id,$active)
    {
    	$data=array('name'=>$_POST['name'],
  					'summery'=>$_POST["summery"],
  					'active'=>$active
  					);
  		$this->db->where('id',$id);	
  		$this->db->update('greetings',$data);		
    }
   function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('greeting_cat');
    	print_r($rs->result());
    	$result = $rs->row();
    	return $result->gree_cat;
    }
	function get_views($id)
	{
		$this->db->where('id',$id);
  		$this->db->select('id, views');
  		$query=$this->db->get_where('greetings');
  		$result=$query->result();
		//print_r($result);
		 $pre_views=$result['0']->views;
				 $id=$result['0']->id;
		$this->insert_views($id,$pre_views);
	
	}
	function insert_views($id,$pre_views)
	{
		$this->db->where('id', $id);
		$views=$pre_views+1;
		$data=array(
				'greetings.views'	=>	$views
			);
		$this->db->update('greetings', $data);
	}
	function get_active()
	{
		$this->db->select('*');
		$this->db->order_by("greetings.id", "desc");
   		$this->db->order_by("greetings.insert_date", "desc");
   		$array=array('greetings.active'=>1);
   		$this->db->where($array);
   		$this->db->limit(4);
		$this->db->from('greeting_cat');
		$this->db->join('greetings','greetings.type=greeting_cat.id');
		$details = $this->db->get_where();
    	return $details->result();
	}
}
?>