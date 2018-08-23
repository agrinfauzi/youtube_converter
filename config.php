<?php
class youtube_iframe {
	public $code;
	public function generate($youtube_id) {
		// OPTIONS
		$domain = "https://redirects.coolguruji.com/";
		$width = "100%";
		$height = "150";
		$path = "&id=";
		$color = "background: #fff;min-height:135px;min-width:320px";
		if($youtube_id != null) {
			$code = '<script type="text/javascript">document.writeln(" <iframe style=\"'.$color.'\" src=\"'.$domain.$path.$youtube_id.'\" width=\"'.$width.'\" height=\"'.$height.'\" marginheight=\"0\" marginwidth=\"0\" noresize=\"\" scrolling=\"No\" frameborder=\"0\"></iframe> "); </script><noscript>Your browser dont support javascript please click to download from legacy version - <a href="http://redirects.coolguruji.com/direct.php?i='.$youtube_id.'&t=file.mp3"></a></noscript>';
		}else {
			$code = "<div class='error'><center><h2><font color='#ff0000'>Error!</font></h2>You've not entered any youtube video id correctly.</center><br/></div>";
		}
		return($code);
		}
	}
?>