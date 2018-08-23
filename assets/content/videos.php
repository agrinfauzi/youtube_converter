<?php
require_once('config.php');
$youtube_id = $_GET['id'];
$object = new youtube_iframe();
$response = $object->generate($youtube_id);
?>
<?php if($youtube_id == null): header('location: /youtubeconvert');?>
<?php else:?>
<?php if(isset($youtube_id)&&($response)):?>
<div class="page-header clear-filter section-examples">
	<div class="page-header-image" style="background-image: url('fungsi/assets/img/bg.png');background-color: red;"></div>
	<div class="container text-center">
		<div class="container text-center">
			<div class="row" style="margin-bottom: -20px;align-items: center;">
				<div class="col-md-12">
					<h1>Convert into Videos</h1>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<iframe src='https://yt-mp3s.com/videos/<?php echo $youtube_id ?>' allowtransparency='true' scrolling='no' style='border:none'></iframe>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</div>
</div>
<?php endif;?>
<?php endif;?>