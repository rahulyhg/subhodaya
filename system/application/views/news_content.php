<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
padding-left: 20px;
}
</style>
<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="430" valign="top"  align="left">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
       		<td  valign="top">
	       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	     			<tr><td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="510" height="4" /></td></tr>
	            </table>
                 <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;"cellpadding="0" cellspacing="0">
                    <tr><td  valign="top" align="left" class=" yui-skin-sam" >
                          <div class=" yui-skin-sam" style="width: 508px;  height: 100%" >
                      		<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 90px;"><?php if(isset($active_news1['0'])){echo $active_news1['0']->news_cat;}?></em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em style="width: 95px;"><span id="telugufont"><?php if(isset($active_news2['0'])){echo $active_news2['0']->news_cat;}?></span></em></a></li>
							        <li style="text-align: center;"><a href="#tab3"><em style="width: 123px;"><span id="telugufont"><?php if(isset($active_news3['0'])){echo $active_news3['0']->news_cat;}?></span></em></a></li>
									<li style="text-align: center;"><a href="#tab4"><em style="width: 90px;"><span id="telugufont"><?php if(isset($active_news4['0'])){echo $active_news4['0']->news_cat;}?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" >
							        <div id="tab1"><p>
							        		<div style="height:235px;" id="telugufont1">
							        		<? if(!empty($active_news1)){
												if(file_exists("./assets/news/news_img".$active_news1['0']->id."_thumb.jpg")){ ?>
          				 						<a href="<?=base_url();?>news/newsdetails/<?=$active_news1['0']->id?>/<?=$active_news1['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news1['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;"  border="0"></img></a>
          				 						<?} ?>
          				 						<font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news1['0']->id?>/<?=$active_news1['0']->type?>"><?php echo $active_news1['0']->heading;?></a></font><br>
          				 						<?php echo $active_news1['0']->summary;?>
          				 						<ul id="mainnews">
          				 						<?
          											$count=0; foreach($active_news1 as $row):
          						 					 if($count==0)
          											{
	          											$count++;
	          											continue;
          											} ?>
          											<li style="padding: 2px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading ?></a></li>
          				 							<? if($count==9){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}
														}
							          					?>
							          				 </ul>
          				 						</div>
          				 						<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($active_news1['0'])){ echo $active_news1['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
							        	</p></div>
							        <div id="tab2"><p>
							        		<div style="height:235px;" id="telugufont1">
							        		<? if(!empty($active_news2)){
											if(file_exists("./assets/news/news_img".$active_news2['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>news/newsdetails/<?=$active_news2['0']->id?>/<?=$active_news2['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news2['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;"  border="0"></img></a>
							        		<?} ?>
							        		<div id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news2['0']->id?>/<?=$active_news2['0']->type?>"><?=$active_news2['0']->heading?></a></div>
							        		<?php echo $active_news2['0']->summary;?>
							        			<ul id="mainnews">
							        			<?php
							        			$count=0;
							        			 foreach ($active_news2 as $row):
							        			 if($count==0){
							        			 	$count++;
							        			 	continue;
							        			 }
							        			 ?>
							        				<li style="padding: 1px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							        			<? if($count==9){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}}
							          			?>
							        			</ul>
							        		</div>
							        		<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($active_news2['0'])){ echo $active_news2['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
							        </p></div>
							        <div id="tab3"><p>
							        	<div style="height:235px;" id="telugufont1">
							        	<? if(!empty($active_news3)){
											if(file_exists("./assets/news/news_img".$active_news3['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>news/newsdetails/<?=$active_news3['0']->id?>/<?=$active_news3['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news3['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;" border="0"></img></a>
							        		<?} ?>
							        		<div id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news3['0']->id?>/<?=$active_news3['0']->type?>"><?=$active_news3['0']->heading?></a></div>
							        		<?php echo $active_news3['0']->summary;?>
							        			<ul id="mainnews">
							        			<?php
							        			$count=0;
							        			 foreach ($active_news3 as $row):
							        			 if($count==0){
							        			 	$count++;
							        			 	continue;
							        			 }
							        			 ?>
							        				<li style="padding: 1px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							        			<? if($count==9){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}}
							          			?>
							        			</ul>
							        		</div>
							        		<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($active_news3['0'])){ echo $active_news3['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
							        </p></div>
									<div id="tab4"><p>
										<div style="height:235px;" id="telugufont1">
										<? if(!empty($active_news1)){
										if(file_exists("./assets/news/news_img".$active_news1['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>news/newsdetails/<?=$active_news4['0']->id?>/<?=$active_news4['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news4['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;"  border="0"></img></a>
							        		<?} ?>
							        		<div id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news4['0']->id?>/<?=$active_news4['0']->type?>"><?=$active_news4['0']->heading?></a></div>
							        		<?php echo $active_news4['0']->summary;?>
							        			<ul id="mainnews">
							        			<?php
							        			$count=0;
							        			 foreach ($active_news4 as $row):
							        			 if($count==0){
							        			 	$count++;
							        			 	continue;
							        			 }
							        			 ?>
							        				<li style="padding: 1px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							        			<? if($count==9){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}}
							          			?>
							        			</ul>
							        		</div>
							        		<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($active_news4['0'])){ echo $active_news4['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
									</p></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div> 
							</table>
                      <img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="510"/></td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
          <td width="245" valign="top"><img src="<?=base_url();?>assets/imgs/add-img.jpg"></img></td>
          <td width="185" align="center" valign="top" rowspan="2" >
			<div width="100%" style="height:830px;border:1px solid #FF0000;background-color:#808080;">Google Adds
			   <!--  <tr>
				<td style="border:1px solid #3789C3;height: 25px;" id="news_heading">Latest Gallery</td>
			     </tr>
			 <tr>
				<td align="center">
						<table style="padding-left: 5px" >
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					</table>
				</td>
			</tr>
			--></div>
			<!--<div style="padding-top: 5px">
			<table style="border:1px solid #3789C3;" bgcolor="#9CD8FC" width="100%">
				<tr>
					<td align="center">
					<div><img src="<?=base_url();?>assets/imgs/add-img1.jpg"></div>
					</td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/add-img2.jpg"></div></td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/2.jpg"></div></td>
				</tr>
			</table>
			</div>
			--><div style=""></div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
        
          		<table width="100%" cellspacing="10" height="520px" >
          			<tr>
          				<td width="450" style="border: 1px solid #3789C3;"  valign="top">
          				 <div style="width:100%;"id="news_heading"><div id="newsheading" style="width:250px;float: left;padding-top: 4px; "><?=$news['0']->news_cat?></div>
          				 <? $count=1; foreach($news as $row): ?>
          				 <div id="more-news-div" style="float: left;font-size: 12px;font-weight: bold;text-align: center;" >Change View:<img src="<?=base_url();?>assets/imgs/LIN.png" style="cursor: pointer" onclick="loadNews('content','<?=base_url()?>newslist/listview/<?=$row->type?>')"/>
          				<img style="cursor: pointer; " src="<?=base_url();?>assets/imgs/FUL.png" onclick="loadNews('content','<?=base_url()?>newslist/thumbview/<?=$row->type ?>')"/></div>
          				 <? if($count==1){
          				 	break;
          				 }
          				 endforeach;	 
          				 	?>
          				 </div>
          				 <div id="divcontent">
          				  <img src="<?=base_url();?>assets/imgs/loadingAnimation.gif" align="middle" style="padding: 200px 0px 0px 80px;"></img>
    					</div>
          				</td>
          				<td style="border: 1px solid #3789C3;" valign="top">
          				 <div style="width:100%;padding-top: 4px;" id="news_heading" align="center"><span id="newsheading"><?=$more['29']->matter?></span></div>
          				  <div>
          				 	<ul id="mainnews">
          				 	<?php 
          				 	$count=0;
          				 	foreach ($active_news as $row):?>
          						<li style="padding: 2px;"><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
          						<?php
          						if($count==19){
          							break; 
          						}else {
          							$count++;
          						}
          						if($count==0)
          						echo 'NO data found';
          						endforeach;?>
          				 	</ul>
          				 </div>

          				</td>
          			</tr>
          		</table>
          	</td>
          </tr>
          <table width="99%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="5" valign="top" id="botomtop"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="middle" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" align="middle"></img><span id="newsheading"><?if(isset($mahila_details['0'])){ echo $mahila_details['0']->cat_name;}?></span></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="middle" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" align="middle"></img><span id="newsheading"><?if(isset($mahila_details1['0'])){ echo $mahila_details1['0']->cat_name;}?></span></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="middle"  id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" align="middle"></img><span id="newsheading"><?if(isset($mahila_details2['0'])){ echo $mahila_details2['0']->cat_name;}?></span></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
        </tr>
        <tr>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="150" /></td>
          <td valign="top" id="botom-ser">
          <div id="telugufont1" style="height: 120px;padding-top: 4px;">
          	<? if(isset($mahila_details['0'])){
          	if(file_exists("./assets/mahila/news_img".$mahila_details['0']->id."_thumb.jpg")){?>  
          	<a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details['0']->id?>/<?=$mahila_details['0']->cat_id?>"><img border="0px" id="img" src="<?=base_url();?>/assets/mahila/news_img<?=$mahila_details['0']->id?>_thumb.jpg" style="float: left;margin: 2px 20px 2px 1px;"></a>
          	<?} ?>
	               <div id="mainnews"> <a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details['0']->id?>/<?=$mahila_details['0']->cat_id?>"><? echo $mahila_details['0']->heading;?></a></div>
	               <?=$mahila_details['0']->summary?>
	               <ul id="mainnews">
	               <? 	$count=0;
	               foreach ($mahila_details as $row):
 					if($count==0)
          			{
		          		$count++;
		          		continue;
          			}
	                ?>
	               	<li><a href="<?=base_url();?>mahila/mahiladetails/<?=$row->id?>/<?=$row->cat_id?>"><?=$row->heading?></a></li>
	               	<?if($count==3){
						break;
					}else{
					$count++;
					} 
	               	endforeach; ?>
	               </ul>
	               <?} ?>
	          </div>
	          <div id="more-news-div"><a href="<?=base_url()?>mahila/details/<?=$mahila_details['0']->cat_id?>"><?=$more['0']->matter?></a></div>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="150" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="150" /></td>
          <td valign="top" id="botom-ser">
          <div id="telugufont1" style="height: 120px;padding-top: 4px;">
          	<? if(isset($mahila_details1['0'])){
          	if(file_exists("./assets/mahila/news_img".$mahila_details1['0']->id."_thumb.jpg")){
          		?>  
          	<a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details1['0']->id?>/<?=$mahila_details1['0']->cat_id?>"><img border="0px" id="img" src="<?=base_url();?>assets/mahila/news_img<?=$mahila_details1['0']->id?>_thumb.jpg" style="float: left;margin: 2px 20px 2px 1px;"></a>
          	<?} ?>
	               <span id="mainnews"> <a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details1['0']->id?>/<?=$mahila_details1['0']->cat_id?>"><? echo $mahila_details1['0']->heading;?></a></span><br>
	               <?=$mahila_details1['0']->summary?>
	                <ul id="mainnews">
	               <? 	$count=0;
	               foreach ($mahila_details1 as $row):
 					if($count==0)
          			{
		          		$count++;
		          		continue;
          			}
	                ?>
	               	<li><a href="<?=base_url();?>mahila/mahiladetails/<?=$row->id?>/<?=$row->cat_id?>"><?=$row->heading?></a></li>
	               	<?if($count==3){
						break;
					}else{
					$count++;
					} 
	               	endforeach; ?>
	               </ul>
	               <?} ?>
	          </div>
	          <div id="more-news-div"><a href="<?=base_url()?>mahila/details/<?if(isset($mahila_details1['0'])){ echo $mahila_details1['0']->cat_id;}?>"><?=$more['0']->matter?></a></div>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="150" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="150" /></td>
          <td valign="top" id="botom-ser"> <div id="telugufont1" style="height: 120px;padding-top: 4px">
          	<? if(isset($mahila_details2['0'])){ 
				if(file_exists("./assets/mahila/news_img".$mahila_details2['0']->id."_thumb.jpg")){ ?>  
          	<a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details2['0']->id?>/<?=$mahila_details2['0']->cat_id?>"><img border="0px" id="img" src="<?=base_url();?>assets/mahila/news_img<?=$mahila_details2['0']->id?>_thumb.jpg" style="float: left;margin: 2px 20px 2px 1px;"></a>
          	<?} ?>
	                <span id="mainnews"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details2['0']->id?>/<?=$mahila_details2['0']->cat_id?>"><? echo $mahila_details2['0']->heading;?></a></span>
	               <?=$mahila_details2['0']->summary?></p>
	               <ul id="mainnews">
	               <? 	$count=0;
	               foreach ($mahila_details2 as $row):
 					if($count==0)
          			{
		          		$count++;
		          		continue;
          			}
	                ?>
	               	<li><a href="<?=base_url();?>mahila/mahiladetails/<?=$row->id?>/<?=$row->cat_id?>"><?=$row->heading?></a></li>
	               	<?if($count==3){
						break;
					}else{
					$count++;
					} 
	               	endforeach; ?>
	               </ul>
	               <?} ?>
	          </div>
	          <div id="more-news-div"><a href="<?=base_url()?>mahila/details/<?if(isset($mahila_details2['0'])){ echo $mahila_details2['0']->cat_id;}?>"><?=$more['0']->matter?></a></div></td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="150" /></td>
        </tr>
    </table>