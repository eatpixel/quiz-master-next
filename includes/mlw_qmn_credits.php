<?php
/*
This page shows the about page
*/
/* 
Copyright 2014, My Local Webstop (email : fpcorso@mylocalwebstop.com)
*/

function mlw_generate_about_page()
{
	//Page Variables
	$mlw_quiz_version = get_option('mlw_quiz_master_version');
	
	
	?>
	<!-- css -->
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" />
	<!-- jquery scripts -->
	<?php
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-dialog' );
	wp_enqueue_script( 'jquery-ui-button' );
	wp_enqueue_script( 'jquery-effects-blind' );
	wp_enqueue_script( 'jquery-effects-explode' );
	?>
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
	<script type="text/javascript">
		var $j = jQuery.noConflict();
		// increase the default animation speed to exaggerate the effect
		$j.fx.speeds._default = 1000;
		function mlw_qmn_setTab(tab) {
			jQuery("a.nav-tab-active").toggleClass("nav-tab-active");
			if (tab == 1)
			{
				jQuery("#mlw_quiz_what_new").show();
				jQuery("#mlw_quiz_changelog").hide();
				jQuery("#mlw_quiz_requested").hide();
				jQuery("#mlw_qmn_tab_1").toggleClass("nav-tab-active");
			}
			if (tab == 2)
			{
				jQuery("#mlw_quiz_what_new").hide();
				jQuery("#mlw_quiz_changelog").show();
				jQuery("#mlw_quiz_requested").hide();
				jQuery("#mlw_qmn_tab_2").toggleClass("nav-tab-active");
			}
			if (tab == 3)
			{
				jQuery("#mlw_quiz_what_new").hide();
				jQuery("#mlw_quiz_changelog").hide();
				jQuery("#mlw_quiz_requested").show();
				jQuery("#mlw_qmn_tab_3").toggleClass("nav-tab-active");
			}
		}
	</script>
	<style>
		div.mlw_qmn_icon_wrap
		{
			background: <?php echo 'url("'.plugins_url( 'images/quiz_icon.png' , __FILE__ ).'")'; ?> no-repeat;
			background: none, <?php echo 'url("'.plugins_url( 'images/quiz_icon.png' , __FILE__ ).'")'; ?> no-repeat;
			position: absolute; 
			top: 0; 
			right: 0; 
			background-color: #0d97d8;
			color: yellow;
			background-position: center 24px;
			background-size: 85px 85px;
			font-size: 14px;
			text-align: center;
			font-weight: 600;
			margin: 5px 0 0;
			padding-top: 120px;
			height: 40px;
			display: inline-block;
			width: 150px;
			text-rendering: optimizeLegibility;
			border: 5px solid #106daa;
			-moz-border-radius: 20px;
			-webkit-border-radius: 20px;
			-khtml-border-radius: 20px;
			border-radius: 20px;
		}
	</style>
	<div class="wrap about-wrap">
	<h1>Welcome To Quiz Master Next <?php echo $mlw_quiz_version; ?></h1>
	<div class="about-text">Thank you for updating!</div>
	<div class="mlw_qmn_icon_wrap">Version <?php echo $mlw_quiz_version; ?></div>
	<h2 class="nav-tab-wrapper">
		<a href="javascript:mlw_qmn_setTab(1);" id="mlw_qmn_tab_1" class="nav-tab nav-tab-active">
			What&#8217;s New In 3.0</a>
		<a href="javascript:mlw_qmn_setTab(2);" id="mlw_qmn_tab_2" class="nav-tab">
			Changelog For <?php echo $mlw_quiz_version; ?>	</a>
		<a href="javascript:mlw_qmn_setTab(3);" id="mlw_qmn_tab_3" class="nav-tab">
			Requested Features</a>
	</h2>
	<div id="mlw_quiz_what_new">
	<h2 style="margin: 1.1em 0 .2em;font-size: 2.4em;font-weight: 300;line-height: 1.3;text-align: center;">New Style Manager</h2>
	<p style="text-align: center;">I just finished the basics of the new style manager. On the Quiz Styling tab, you will see the style you have currently selected. The new style manager makes it easier to shares styles. In future versions, I will add ability to import and export the styles to make this process even easier.</p>
	<br />
	<h2 style="margin: 1.1em 0 .2em;font-size: 2.4em;font-weight: 300;line-height: 1.3;text-align: center;">Quiz Master Next Can Now Handle Non-Question Question Types</h2>
	<p style="text-align: center;">In previous versions, to add elements to your quiz in the questions that are not part of the question was very difficult. I have changed the way the plugin handles the question types so that I can create question types that are not questions. In future versions, you will be able to add a video, images, and more using the new question type system. These non-questions will not be part of the quiz but will be able to be placed between questions!</p>
	<br />
	<h2 style="margin: 1.1em 0 .2em;font-size: 2.4em;font-weight: 300;line-height: 1.3;text-align: center;">New Question Type</h2>
	<p style="text-align: center;">The first of the non-question question types is the new Text Block. With this type, you can create a block of text that supports HTML and have it inbetween your questions!</p>
	<br />
	<h2 style="margin: 1.1em 0 .2em;font-size: 2.4em;font-weight: 300;line-height: 1.3;text-align: center;">Our Premium Add-Ons!</h2>
	<p style="text-align: center;">We have several new premium add-ons in our WordPress Store: MailChimp Integration (subscribes users to your Mailchimp list), Export Results (exports your quiz results), Extra Shortcodes (gives you extra shortcodes to use), User Dashboard (allow users to see the results from all the quizzes they have taken), and Advertisement Be Gone (gets rid of blue-border ads). Visit our <a href="http://mylocalwebstop.com/shop/">WordPress Store</a> for details! </p>
	</div>
	<div id="mlw_quiz_changelog" style="display: none;">
	<h3><?php echo $mlw_quiz_version; ?> (August 28, 2014)</h3>
	<ul>
		<li>* Added New Style Manager</li>
		<li>* Added Ability For Non-Question Question Types</li>
		<li>* Added New Text Block Question Type</li>
		<li>* Added Question Type Column To Question List</li>
		<li>* Minor Design Changes To Quiz Questions Tab</li>
		<li>* Fixed Results Delete Link Not Working Bug</li>
		<li>* Fixed Quiz Name Showing Escaped Values Bug</li>
	</ul>
	</div>
	<div id="mlw_quiz_requested" style="display: none;">
	<h3>Requested Features For Future Updates By Premium Support Users</h3>
	<ul>
		<li>None</li>
	</ul>
	<h3>Requested Features For Future Updates By Non-Premium Support Users</h3>
	<ul>
		<li>Importing Questions</li>
		<li>Stats For Each Quiz</li>
		<li>Force Login/Register Option</li>
		<li>Categories</li>
		<li>More Social Media Integration</li>
		<li>Show Question Amount On Pagination</li>
		<li>Required Questions</li>
		<li>Duplicate Question</li>
		<li>Allow Quiz To Not Show Start Page</li>
		<li>Progress Bar For Timer</li>
		<li>Ability To Redirect User Instead Of Showing Results Page</li>
		<li>Multi-Delete Option For Quiz Results</li>
		<li>Spam Prevention</li>
		<li>Graphical Click Aware Questions</li>
		<li>Results Bar Graph For Users Taking Polls</li>
		<li>Head To Head Comparison Questions</li>
		<li>Enhanced Leaderboard</li>
	</ul>
	</div>
	</div>
<?php
}
?>