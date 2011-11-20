<?php include_once('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<title>Occupy <?= $occupation ?>: Media Base</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
 
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.ui.plupload.css" />
<link rel="stylesheet" type="text/css" href="css/shCore.css"/>
<link rel="stylesheet" type="text/css" href="css/shThemeDefault.css"/>

<script type="text/javascript" src="js/syntax/shCore.js"></script>
<script type="text/javascript" src="js/syntax/shBrushJScript.js"></script>
<script type="text/javascript" src="js/syntax/shBrushXml.js"></script>
<script type="text/javascript" src="js/jquery.1.4.4.min.js"></script>
</head>
<body>

<!-- Load the queue CSS -->
<style type="text/css">@import url(css/jquery.ui.plupload.css);</style>
<script type="text/javascript" src="js/browserplus.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plupload.full.js"></script>
<script type="text/javascript" src="js/jquery.ui.plupload/jquery.ui.plupload.js"></script>
<script type="text/javascript">
// Convert divs to queue widgets when the DOM is ready
$(function() {
	$("#uploader").plupload({
		// General settings
		runtimes : 'gears,flash,browserplus,html5',
		url : 'upload.php',
		max_file_size : '150mb',
		chunk_size : '1mb',
		unique_names : true,
		filters : [
			{title : "Image Files", extensions : "<?= $picture_formats ?>"},
			{title : "Document Files", extensions : "<?= $file_formats ?>"},
			{title : "Video Files", extensions : "<?= $video_formats ?>"}
		],
		flash_swf_url : 'js/plupload.flash.swf'
	});

	// Client side form validation
	$('form').submit(function(e) {
        var uploader = $('#uploader').plupload('getUploader');

        // Files in queue upload them first
        if (uploader.files.length > 0) {
            // When all files are uploaded submit form
            uploader.bind('StateChanged', function() {
                if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)) {
                    $('form')[0].submit();
                }
            });
                
            uploader.start();
        }
        else 
        {
            alert('You must at least upload one file.');
		}
        return false;
    });
});
</script>
<div id="header" class="center_wrapper">
	<h1><span class="red">Occupy</span> <?= $occupation ?>: <span class="normal_font">Media Base</span></h1>
	<h3>A Safe & Anonymous Way to Upload Media to an Occupation</h3>
</div>
<div id="main" class="center_wrapper">
	<div id="uploader">
		<p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or HTML5 support.</p>
	</div>
</div>
<div id="content" class="center_wrapper">
	<h3>What Is This Tool?</h3>
	<ul>
		<li>MediaBase is a simple anonymous file uploading tool for the Occupy Movement</li>
	</ul>
	<h3>Who Should Use This Tool?</h3>
	<ul>
		<li>People who consider themselves part of the Occupy Movement</li>
		<li>People who are on the fence about joining the Occupy Movement, but have some media</li>
		<li>People who who have media, but don't want to be connected to or associated with to Occupy</li>
	</ul>
	<h3>Is It Safe To Upload My Content?</h3>
	<ul>
		<li>We don't use any form of logging (not even Google Analytics)</li>
		<li>Content uploaded here will be reviewed by our legal team before being published</li>
	</ul>
	<h3>Having Issues Uploading?</h3>
	<ul>
		<li>Hit Us Up On Twitter <a href="http://twitter.com/occupylabs" target="_blank">@OccupyLabs</a> and tell us what occupation you were uploading to</li>
	</ul>
	<h3>Want To Install Your Own Media Base?</h3>
	<ul>
		<li>Do you help the media, legal, or press team of your local occupy?</li>
		<li>Great, point your clicker here and download the <a href="http://github.com/brennannovak/mediabase" target="_blank">source code</a> of this software</li>
	</ul>
</div>
<div id="footer" class="center_wrapper">
	<a href="http://twitter.com/occupylabs" target="_blank"><img src="images/Site-Footer-Credits.png"></a>
</div>
<script type="text/javascript">
	SyntaxHighlighter.config.clipboardSwf = 'js/syntax/clipboard.swf';
	SyntaxHighlighter.all();
</script>
</body>
</html>