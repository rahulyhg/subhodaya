<script language="javascript">
//<!--
function telugu_typing()
{
	if(document.telugu_send.telugu_type.checked == true)
	{
		window.location="javascript:(t13nb=window.t13nb||function(l){var%20t=t13nb,d=document,o=d.body,c=\"createElement\",a=\"appendChild\",w=\"clientWidth\",i=d[c](\"span\"),s=i.style,x=o[a](d[c](\"script\"));if(o){if(!t.l){t.l=x.id=\"t13ns\";o[a](i).id=\"t13n\";i.innerHTML=\"Loading%20transliteration\";s.cssText=\"z-index:99;font-size:18px;background:#FFF1A8;top:0\";s.position=d.all?\"absolute\":\"fixed\";s.left=((o[w]-i[w])/2)+\"px\";x.src=\"http://t13n.googlecode.com/svn/trunk/blet/rt13n.js?l=\"+l}}else%20setTimeout(t,500)})('te')";

	}
	else

	{
		window.location="javascript:(t13nb=window.t13nb||function(l){var%20t=t13nb,d=document,o=d.body,c=\"createElement\",a=\"appendChild\",w=\"clientWidth\",i=d[c](\"span\"),s=i.style,x=o[a](d[c](\"script\"));if(o){if(!t.l){t.l=x.id=\"t13ns\";o[a](i).id=\"t13n\";i.innerHTML=\"Loading%20transliteration\";s.cssText=\"z-index:99;font-size:18px;background:#FFF1A8;top:0\";s.position=d.all?\"absolute\":\"fixed\";s.left=((o[w]-i[w])/2)+\"px\";x.src=\"http://t13n.googlecode.com/svn/trunk/blet/rt13n.js?l=\"+l}}else%20setTimeout(t,500)})('te')";
	}
}
//-->
</script> 
<table cellpadding="0" cellspacing="5px;" width="926">
	<tr>
		<td  height="93" align="left" valign="top"><div style="width: 742px;height: 93px;border: 1px solid red;background-color: gray;">your adds here</div></td>
		<td rowspan="2" width="180" align="center" valign="top"><div style="width: 180px;height: 740px;border: 1px solid red;"></div></td>
	</tr>
	<tr>
		<td valign="top" height="600">
		<div style="margin-top: 5px;">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen">
					
					</td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr>
					<td colspan="3"  id="gal_center1"  width="742" align="center" height="590" >
					<? if(file_exists("./assets/gallery/imge".$image['0']->id.".jpg")){ ?>
					<img src="<?=base_url()?>assets/gallery/image<?=$image['0']->id?>.jpg"  border="0">
					<? } ?>
					</td>
				</tr>
				 <tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen">
					</td>
					<td id="gal_rightslide"></td>
				</tr>
				
				<tr>
					<td valign="top" colspan="3">
					<form name="telugu_send" method="post" action="<?=base_url();?>subhodaya/sendmail">
					<input type="hidden" name="url" value="<?=base_url()?>gallery/content/<?=$image['0']->id?>">
			
						<table align="center" width="550px" border="0">
							<tr>
								<td colspan='2' align="center"><div  id="gree_bar1"><?=$more['25']->matter?></div></td>
							</tr>
							<tr>
								<td align="left" width="30%"><?=$more['27']->matter?></td><td align="left" width="70%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td align="left"><?=$more['28']->matter?></td><td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr><td colspan="2" align="left"><input type="checkbox" onclick="telugu_typing()" id="telugu_type" name="telugu_type">Type in telugu</td></tr>
				            <tr>
							<td align="center" colspan="2"><textarea style="height: 190px;width: 95%" name="description"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="send" value="Send"><input type="reset" ></td>
							</tr>
							</table>
						</form>
			 
							
						</table>
						</form>
					</td>
				</tr>
				<tr><td id="gal_bottom" colspan="3"></td></tr>
			</table>
		</div>
			
	</td>
	</tr>
	<tr>
		<td width="925" height="156" style="border: 1px solid red;background-color: gray;" colspan="2" >
		</td>
	</tr>
</table>