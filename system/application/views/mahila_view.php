<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
}
#tdmahila
{
padding-left:5px;
background-image:url(<?=base_url();?>assets/imgs/sahithi-top.gif);
background-repeat-x;
padding-top:0px;
}
</style>
<table width="99%"  border="0" cellpadding="0" cellspacing="0" style="padding-bottom:20px">
<tr>
        <td  valign="top">
	       		
	     			<img src="<?=base_url();?>assets/imgs/sahithi1.jpg" width="680" height="96" />
					</td>
					<td rowspan="5" valign="top" style="padding-left:10px";> 
					<table cellpadding="0" cellspacing="0">
					<tr>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-left.gif" width="8" height="23" /></td>
					<td width="208px" style="background-image:url(<?=base_url();?>assets/imgs/beauty-top-center.gif);background-repeat-x;"><?=$details['8']->cat_name?></td>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-right.gif" width="8" height="23" alt="gg" /></td>
					</tr>
					<tr>
					<td height="151px" valign="top" colspan="3" style="background-image:url(<?=base_url();?>assets/imgs/KitchenTips-cr.gif);background-repeat-x;border:1px solid #0A70BB;border-bottom:0px;"><ul>
	              <?if(!empty($details_more['8'])){
	              foreach($details_more['8'] as $item) {?>

	              <li><?=$item->heading?></li>
	              <?}} ?>
	                 </ul>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['8'])){ echo $types['8']; }?>"><?=$more['0']->matter?></a></span></div></td>
					</tr>
					<tr>
					<td colspan="3" width="224" height="7"><img src="<?=base_url();?>assets/imgs/beauty-bottom-img.gif" width="224px" height="7px "  /></td>
					</tr>
					</table>
					<table cellpadding="0" cellspacing="0" style="margin:7px 0px 7px 0px;">
					<tr>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-left.gif" width="8" height="23" /></td>
					<td width="208px" style="background-image:url(<?=base_url();?>assets/imgs/beauty-top-center.gif);background-repeat-x;"><?=$details['9']->cat_name?></td>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-right.gif" width="8" height="23" alt="gg" /></td>
					</tr>
					<tr>
					<td height="151px" valign="top" colspan="3" style="background-image:url(<?=base_url();?>assets/imgs/KitchenTips-cr.gif);background-repeat-x;border: 1px solid #0A70BB;border-bottom: 0px;"><ul>
	              <?if(!empty($details_more['9'])){
	              foreach($details_more['9'] as $row) {?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$row->id?>"><?=$row->heading ?></a></li>
	              <?}} ?>
	                 </ul>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['9'])){ echo $types['9']; }?>"><?=$more['0']->matter?></a></span></div></td>
					</tr>
					<tr>
					<td colspan="3" width="224" height="7"><img src="<?=base_url();?>assets/imgs/beauty-bottom-img.gif" width="224px" height="7px "  /></td>
					</tr>
					</table>
					<img src="<?=base_url();?>assets/imgs/mahila3.jpg" width="221px" height="132px" style="padding-bottom:7px;" />
					<img src="<?=base_url();?>assets/imgs/mahila4.jpg" width="221px" height="132px" style="padding-bottom:6px;" />
					<img src="<?=base_url();?>assets/imgs/mahila5.jpg" width="224px" height="227px"/>
					
					</td>
					</tr>
	     			<tr>
	     			<td style="padding-top:7px">
	            <img src="<?=base_url();?>assets/imgs/top-cru.gif" width="681px" height="11" /></td></tr>
	                        
	            <tr> 
	            <td valign="top" style="border: 1px solid #0A70BB;
 border-top: 0px;
 border-bottom: 0px;">
	            <table id="sahithi-table" cellpadding="0" cellspacing="5px"  width="675px" >
	            <tr>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['0']->cat_name?></td>
	           
	            </tr>
	            <tr>
	             <td width="50%" valign="top" height="219px" style="background-image:url(<?=base_url();?>assets/imgs/Pandugalu-cr.gif);background-repeat-y;">
	              <img src="<?=base_url();?>assets/imgs/sahithi2.jpg" style="float:left;padding:4px 15px 4px 4px;text-align: justify;" width="105px" height="113px" align="top"  />
	             <?=$more['25']->matter?>    <ul>
	              <?if(!empty($details_more['1'])){
	              foreach($details_more['1'] as $item) {?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading ?></a></li>
	                <?}} ?>
	                 </ul>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['0'])){ echo $types['0']; }?>"><?=$more['0']->matter?></a></span></div>
	                  </td>
	            </tr>
	            </table>
	            </td>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['1']->cat_name?>
	            </td>
	           
	            </tr>
	            <tr>
	             <td width="50%" valign="top" height="219px" style="background-image:url(<?=base_url();?>assets/imgs/Pandugalu-cr.gif);background-repeat-y;">
	              <img src="<?=base_url();?>assets/imgs/sahithi2.jpg" style="float:left;padding:4px 15px 4px 4px;text-align: justify;" width="105px" height="113px" align="top" /><?=$more['26']->matter?>
	               <ul>
	             <?if(!empty($details_more['2'])){
	              foreach($details_more['2'] as $item) {?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading ?></a></li>
	              <?}} ?>
	                 </ul>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['1'])){ echo $types['1']; }?>"><?=$more['0']->matter?></a></span></div>
	            </td>
	            </tr>
	            </table>
	            </td>
	           </tr>
	            <tr>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['2']->cat_name?>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Mathru Basha-cr.gif);background-repeat-y;">
	              <ul>
	              <?if(!empty($details_more['3'])){
	              foreach($details_more['3'] as $item) {?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading ?></a></li>
	               <?}} ?>
	                 </ul>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['2'])){ echo $types['2']; }?>"><?=$more['0']->matter?></a></span></div>
	                   </td>
	            </tr>
	            </table>
	            </td>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['3']->cat_name?>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Mathru Basha-cr.gif);background-repeat-y;">
	              
	             <ul>
	              <?if(!empty($details_more['4'])){
	              foreach($details_more['4'] as $item) {?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading ?></a></li>
	              <?}} ?>	                 </ul> 
	             <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['3'])){ echo $types['3']; }?>"><?=$more['0']->matter?></a></span></div> 
	                  </td>
	            </tr>
	            </table>
	            </td>
	           </tr>
	           
	            <tr>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['4']->cat_name?>
	            </td>
	           
	            </tr>
	            <tr>
	             <td  height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Mathru Basha-cr.gif);background-repeat-y;">
	              <ul>
	             <?if(!empty($details_more['5'])){
	              foreach($details_more['5'] as $item) {?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading ?></a></li>
	              <?}} ?>
	                 </ul>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['4'])){ echo $types['4']; }?>"><?=$more['0']->matter?></a></span></div>
	                   </td>
	            </tr>
	            </table>
	            </td>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['5']->cat_name?>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Mathru Basha-cr.gif);background-repeat-y;">
	              
	             <ul>
	              <?if(!empty($details_more['6'])){
	              foreach($details_more['6'] as $item) {?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading ?></a></li>
	              <?}} ?>
	                 </ul> 
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['5'])){ echo $types['5']; }?>"><?=$more['0']->matter?></a></span></div>
	                   </td>
	            </tr>
	            </table>
	            </td>
	           </tr>
			   
	            <tr>
	            <td colspan="2">
				<div style="float:left;padding-right:4px;">
	            <table width="450px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['6']->cat_name?>
	            </td>
	           
	            </tr>
	            <tr>
	             <td  height="163px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Janapadalu-cr.gif);background-repeat-x;">
	              <ul>
	             <?if(!empty($details_more['7'])){
	              foreach($details_more['7'] as $item) {?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading ?></a></li>
	             <?}} ?>
	                 </ul>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['6'])){ echo $types['6']; }?>"><?=$more['0']->matter?></a></span></div>
	               
	                   </td>
	            </tr>
	            </table>
	           </div>
	           
	            <table width="213px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><?=$details['7']->cat_name?>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="163px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Janapadalu-cr.gif);background-repeat-x;">
	              
	             <ul>
	             <?if(!empty($details_more['8'])){
	              foreach($details_more['8'] as $item) {?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading?></a></li>
	              <?}} ?>
	                 </ul>  
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['7'])){ echo $types['7']; }?>"><?=$more['0']->matter?></a></span></div>
	                  </td>
	            </tr>
	            </table>
	            </td>
	           </tr>
	           
	            </table>
	              </td>
				  </tr>
				 <tr>
	     			<td><img src="<?=base_url();?>assets/imgs/bottm-cru.gif" width="681px" height="11" /><td></tr>
	            </table>