
	<div style="width:963px; background-color:#fff;border:0px dotted #000">
		<div id="header" style="border:1px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">
					
					
				<div style="width:100%; height:100%px; float:left">
					<div   style="float:right; height:100%;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					    <div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					    <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="243" height="268" /></div>
					   </div>
					  
					    <div style="float:left;width:715px;">
					    
					    <div  style="float:left; height:25px; width:700px; background-color:#EFE1E1; text-align:left; padding-top:4px; padding-left:5px;font-weight: bold;font-size: 13px;"><span><?=$cat_tit[0]->catname?></span><span style="padding-left:550px;"></span></div> 
					    <div  style="float:left; height:25px; width:700px; background-color:#EFE1E1; text-align:right; padding-top:4px; padding-right:6px; border-top:1px solid #999;"><?echo $paginate; ?></div>
					      <table width="95%">
					      	<tr>
					      	<?php $count=1;
					      	 foreach ($result as $row):?>
					      		<td><a href="<?=base_url()?>newsletter/gallery/<?=$row->folder_path?>/<?=$row->image_path?>" class="pagelink" target="_blank">
					      		<img src="<?=base_url()?>assets/gallery/thumbnail_images/<?=$row->folder_path?>/<?=$row->image_path?>.jpg" id="img3" >
					      		</a>
					      		</td>
					      		<?php if($count==5){
					      			$count=0;
					      			echo '</tr></tr>';
					      		}
					      		$count++;
					      		endforeach;
					      		?>
					      	</tr>
					      </table>
						 <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1;margin-top:20px;text-align:right;padding-top:4px; padding-right:5px;font-size: 13px;font-weight: bold;"><?=$cat_tit[0]->catname?></div>
						 <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1; text-align:left; padding-top:4px; padding-left:5px; border-top:1px solid #999;"><?echo $paginate; ?> </div>
					   </div>
				  </div>
			</div>								
	</div>