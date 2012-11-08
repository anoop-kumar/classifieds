<?php global $custom;  ?>
<div class="create_post_row clearfix">
	<label> Location : <span class="indicates">*</span>
	</label> <input name="post_location" id="post_location"
		value="<?php echo isset($custom['post_location'])?$custom['post_location']:''; ?>"
		type="text" class="textfield" /> <span id="post_locationInfo"></span>
</div>

<div class="create_post_row clearfix">
	<label> Owner Name : <span class="indicates">*</span></label> <input
		name="owner_name" id="owner_name"
		value="<?php echo isset($custom['owner_name'])?$custom['owner_name']:''; ?>"
		type="text" class="textfield" /> <span id="owner_nameInfo"></span>
</div>

<div class="create_post_row clearfix">
	<label>Email ID : <span class="indicates">*</span>
	</label> <input name="owner_email" id="owner_email"
		value="<?php echo isset($custom['owner_email'])?$custom['owner_email']:''; ?>"
		type="text" class="textfield" /> <span class="note">Inquiry will be
		send to this email address </span> <span id="owner_emailInfo"></span>
</div>

<div class="create_post_row clearfix">
	<label>Phone : </label> <input name="owner_phone" id="owner_phone"
		value="<?php echo isset($custom['owner_phone'])?$custom['owner_phone']:''; ?>"
		type="text" class="textfield" />
</div>

<div class="create_post_row clearfix">
	<label> URL : </label> <input name="post_url" value=""
		<?php echo isset($custom['post_url'])?$custom['post_url']:''; ?>
		type="text" class="textfield" /> <span class="note"> i.e.
		http://www.mysite.com </span>
</div>

<div class="rows clearfix"></div>

<div class="create_post_row clearfix">
	<label> Upload Image </label>
	<div class="upload">
		<img
			src="<?php isset($custom['post_image'])?$custom['post_image']:PQ_PLUGIN_URL.'/images/no-image.png' ?>"
			id="ads_img" alt="Ads image" hspace="15" /> <input type="hidden"
			name="post_image" id="post_image">
		<div id="file_name_div" class="iframe">
			<iframe name="mktlogoframe" id="upload_target"	style="border: none; width: 100%; height: 75px;" frameborder="0"	marginheight="0" marginwidth="0" scrolling="no"
				src="<?php echo PQ_PLUGIN_URL;?>/upload/index.php?img=post_image&nonce=mktnonce&imgid=ads_img"></iframe>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>