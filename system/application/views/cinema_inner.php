<table width="99%">
	<tr>
		<td width="185" height="100%" valign="top" ><div id="newsinnerleft" ></div></td>
		<td valign="top" >
			<div><table cellpadding="1px" width="100%">
			<tr><td><div id="news_heading" class="heading"><span id="newsheading"><?php if(isset($result['0'])){echo $result['0']->heading;}?></span></div></td></tr>
			<tr><td align="center"><div  id="maindiv-news">
			<div class="help"></div>
			<div class="content" >
			<img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($result['0'])){echo $result['0']->id;}?>.jpg" style="float: left;padding:2px 2px 2px 2px;border: 1px solid  #9FA0A0; margin: 10px 0px 0px 10px;" ></img>
			<?php if(isset($result['0'])){echo $result['0']->description;}?></div>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading"><span id="newsheading">Rate this Article</span></div></td></tr>
			<tr><td align="center"><div style="border:1px solid #9FA0A0;">
			<form>
			<table id="formdiv">
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td width="150px" align="left">Name</td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td width="150px" align="left">Email</td><td><input type="text" name="uname" size="30"></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
				<tr><td colspan="2" align="left"><input type="checkbox">type in english</td></tr>
				<tr><td colspan="2" align="center"><textarea style="height: 190px;width: 95%"></textarea></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" name="send" value="Send"><input type="reset" ></td></tr>
				<tr><td valign="top" colspan="2"><div style="background-color: #B5E8FD;height:20px;"></div></td></tr>
			</table>
			</form>
			</div></td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"><span id="newsheading">More...</span></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					</ul>
				</div>
			</td></tr>
			<tr><td><div id="news_heading" class="heading" style="height: 23px"></div></td></tr>
			<tr><td>
				<div style="border:1px solid #9FA0A0;">
					<ul>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					<li>asfsfdgfgf</li>
					</ul>
				</div>
			</td></tr>
		</table>
		</div>
		</td>
		 <td width="185" align="center" valign="top">
			<table width="100%" style="border:1px solid #3789C3;">
			<tr>
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
			</table>
			<div style="padding-top: 5px">
			<table style="border:1px solid #3789C3;" bgcolor="#9CB8FB" width="100%">
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
			<div style="width:100%"></div>
          </td>
	</tr>
</table>