<?php
/*
 ________ ________  _______   _______           ________  ___  ___  ________ _________  ___  ________  ________   ________      
|\  _____\\   __  \|\  ___ \ |\  ___ \         |\   __  \|\  \|\  \|\   ____\\___   ___\\  \|\   __  \|\   ___  \|\   ____\     
\ \  \__/\ \  \|\  \ \   __/|\ \   __/|        \ \  \|\  \ \  \\\  \ \  \___\|___ \  \_\ \  \ \  \|\  \ \  \\ \  \ \  \___|_    
 \ \   __\\ \   _  _\ \  \_|/_\ \  \_|/__       \ \   __  \ \  \\\  \ \  \       \ \  \ \ \  \ \  \\\  \ \  \\ \  \ \_____  \   
  \ \  \_| \ \  \\  \\ \  \_|\ \ \  \_|\ \       \ \  \ \  \ \  \\\  \ \  \____   \ \  \ \ \  \ \  \\\  \ \  \\ \  \|____|\  \  
   \ \__\   \ \__\\ _\\ \_______\ \_______\       \ \__\ \__\ \_______\ \_______\  \ \__\ \ \__\ \_______\ \__\\ \__\____\_\  \ 
    \|__|    \|__|\|__|\|_______|\|_______|        \|__|\|__|\|_______|\|_______|   \|__|  \|__|\|_______|\|__| \|__|\_________\
                                                                                                                    \|_________|

    Author: James Schulze
    Email: schulze.james@protonmail.com
    License: MIT
*/
@session_start();
$force_ssl = 0;
if($force_ssl == 1) {
	if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
	    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
	    exit;
	}
}
if(isset($_REQUEST['logout']) && $_REQUEST['logout'] == '1') {
	session_destroy();
	echo('<meta http-equiv="refresh" content="0;'."$_SERVER[PHP_SELF]".'">');
}
$imglnk = array();
$scan = scandir('./www-img');
foreach($scan as $var => $val) {
	if(preg_match('/^WallpaperHD/',$val)) {
		$imglnk[$var] = './www-img/'.$val;
	}
}
$imgrnd = array_rand($imglnk,5);
if(!isset($_SESSION['tpl'])) {
	$_SESSION['tpl'] = rand(1,5);
}
if(!isset($_SESSION['adFeed'])) {
	$_SESSION['adFeed'] = '0';
}
switch($_SESSION['tpl']) {
	case '1':
		$tpl = $imglnk[$imgrnd['0']];
	break;
	case '2':
		$tpl = $imglnk[$imgrnd['1']];
	break;
	case '3':
		$tpl = $imglnk[$imgrnd['2']];
	break;
	case '4':
		$tpl = $imglnk[$imgrnd['3']];
	break;
	case '5':
		$tpl = $imglnk[$imgrnd['4']];
	break;
}
echo('<!DOCTYPE html>');
echo('<html>');
echo('<head>');
echo('<title>FREE AUCTIONS</title>');
$css = ('
::-webkit-scrollbar {
    height: 12px;
    width: 12px;
    background: #000;
}
::-webkit-scrollbar-thumb {
    background: #000000;
    -webkit-border-radius: 1ex;
    -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
    background: #000;
}
img {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px0px 0px;
	border: 0px;	
}
.input {
	font-family: Arial;
	font-size: 16px;
	font-color: #FFFFFF;		
}
html {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	height: 100%;
	min-height: 100%;
	background: #000000 url('.$tpl.') no-repeat center center fixed;
	background-color: #000000;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	text-align: center;
	scrollbar-color: #000000 #000000;
	scrollbar-arrow-color: #000;
	scrollbar-width: thin;
}
body {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 100%;
	z-index: 0;
	position: relative;
	text-align: center;
	scrollbar-color: #000000 #000000;
	scrollbar-width: thin;
	scrollbar-base-color: #000;
	scrollbar-face-color: #000;
	scrollbar-3dlight-color: #000;
	scrollbar-highlight-color: #000;
	scrollbar-track-color: #000;
	scrollbar-arrow-color: #000;
	scrollbar-shadow-color: #000;
	scrollbar-dark-shadow-color: #000;
}
div.nav {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 46px;
	top: 0px;
	border-width: 1px;
	border-color: #090909;
	border-style: solid;
	background-color: #000000;
	z-index: 333;
	position: fixed;
	text-align: left;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
}
div.navIcon {
	width: 45px;
	height: 45px;
	background-color: #000000;
	cursor: pointer;
}
div.AdFeed {
	margin: 1px 0px 1px 0px;
	padding: 0px 0px 0px 0px;
	width: 95px;
	height: 45px;
	top: 0px;
	right: 0px;
	z-index:669;
	position: fixed;
	float: right;
}
div.cloudMenu {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 45px;
	height: 45px;
	top: 0px;
	right: 101px;
	z-index: 669;
	position: fixed;
	float: right;
	cursor: pointer;
}
div.cloudMenuNav {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 175px;
	height: 100%;
	z-index: 89;
	text-align: left;
	position: fixed;
	top: 47px;
	border-width: 1px;
	border-color: #333333;
	border-style: solid;
	background-color: #000000;
	display: none;
	right: 0px;
	-webkit-opacity: 0.8;
	-moz-opacity: 0.8;
	-o-opacity: 0.8;
	opacity: 0.8;
}
div.page {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 100%;
	border-width: 0px;
	border-color: #FF0000;
	border-style: solid;
	z-index: 0;
	position: fixed;
	text-align: center;
	scrollbar-color: #000000 #000000;
	scrollbar-width: thin;
}
div.pageInner {
	margin: 46px 0px 0px 0px;
	padding: 45px 0px 0px 45px;
	width: 100%;
	height: 100%;
	border-width: 0px;
	border-color: #FF0000;
	border-style: solid;
	z-index: 0;
	position: fixed;
	text-align: center;
	scrollbar-color: #000000 #000000;
	scrollbar-width: thin;
	overflow-x: hidden;
	overflow-y: scroll;
}
div.Notify {
	margin: 1px 0px 0px 49px;
	padding: 0px 0px 0px 0px;
	width: 300px;
	height: 45px;
	top: 0px;
	z-index: 666;
	text-align: left;
	vertical-align: top;
	position: fixed;
	border-width: 0px;
	border-color: #333333;
	border-style: solid;
	background-color: #000000;
	font-family: Arial;
	font-size: 12px;
	color: #FFFFFF;
	display: none;
	left: 0px;
	-webkit-opacity: 0.8;
	-moz-opacity: 0.8;
	-o-opacity: 0.8;
	opacity: 0.8;
	-o-border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}
div.acontent {
	margin: 9px 9px 9px 9px;
	padding: 3px 3px 3px 3px;
	width: 300px;
	height: 300px;
	border-width: 1px;
	border-color: #333333;
	border-style: solid;
	background-color: #000000;
	position: relative;
	z-index: 2;
	float: left;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 15px;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	text-align: left;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.bcontent {
	margin: 9px 9px 9px 9px;
	padding: 3px 3px 3px 3px;
	width: 300px;
	height: 300px;
	border-width: 1px;
	border-color: #333333;
	border-style: solid;
	background-color: #000000;
	position: relative;
	z-index: 2;
	float: left;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 15px;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	text-align: left;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.ccontent {
	margin: 9px 9px 105px 9px;
	padding: 3px 3px 3px 3px;
	width: 300px;
	height: 300px;
	border-width: 1px;
	border-color: #333333;
	border-style: solid;
	background-color: #000000;
	position: relative;
	z-index: 1;
	float: left;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 15px;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	text-align: left;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.dcontent {
	margin: 9px 9px 9px 9px;
	padding: 3px 3px 3px 3px;
	width: 300px;
	height: 300px;
	border-width: 1px;
	border-color: #333333;
	border-style: solid;
	background-color: #000000;
	position: relative;
	z-index: 0;
	float: left;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 15px;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	text-align: left;
	overflow-x: hidden;
	overflow-y: hidden;
	display: none;
}
div.econtent {
	margin: 9px 9px 9px 9px;
	padding: 3px 3px 3px 3px;
	width: 300px;
	height: 300px;
	border-width: 1px;
	border-color: #333333;
	border-style: solid;
	background-color: #000000;
	position: relative;
	z-index: 0;
	float: left;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 15px;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	text-align: left;
	overflow-x: hidden;
	overflow-y: hidden;
	display: none;
}
div.EmailMe {
	margin: 0px 0px 0px 5px;
	padding: 3px 3px 3px 3px;
	width: 120px;
	height: 12px;
	top: 49px;
	vertical-align: top;
	text-align: center;
	position: fixed;
	z-index: 9;
	background-color: #000000;
	-webkit-opacity: 0.5;
	-moz-opacity: 0.5;
	-o-opacity: 0.5;
	opacity: 0.5;
}
div.SocialBar {
	margin: auto auto 5px 5px;
	padding: 0px 0px 0px 0px;
	width: 45px;
	height: 150px;
	left: 0px;
	bottom: 0px;
	z-index: 1;
	position: fixed;
}
div.Facebook {
	margin: 0px 0px 3px 0px;
	padding: 0px 0px 0px 0px;
	width: 45px;
	height: 45px;
	-o-border-radius: 6px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	z-index: 1;
	position: relative;
}
div.Twitter {
	margin: 0px 0px 3px 0px;
	padding: 0px 0px 0px 0px;
	width: 45px;
	height: 45px;
	z-index: 1;
	position: relative;
}
div.Instagram {
	margin: 0px 0px 3px 0px;
	padding: 0px 0px 0px 0px;
	width: 45px;
	height: 45px;
	z-index: 1;
	position: relative;
}
div.copyright {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	text-align: right;
	vertical-align: middle;
	width: 100%;
	height: 15px;
	z-index: 89;
}
span.f_arial10 {
	font-family: Arial;
	font-size: 10px;		
}
span.f_arial11 {
	font-family: Arial;
	font-size: 11px;		
}
span.f_arial12 {
	font-family: Arial;
	font-size: 12px;		
}
span.f_arial13 {
	font-family: Arial;
	font-size: 13px;		
}
span.f_arial14 {
	font-family: Arial;
	font-size: 14px;		
}
span.f_arial15 {
	font-family: Arial;
	font-size: 15px;		
}
span.f_arial16 {
	font-family: Arial;
	font-size: 16px;		
}
span.f_arial17 {
	font-family: Arial;
	font-size: 17px;		
}
span.f_arial18 {
	font-family: Arial;
	font-size: 18px;		
}
span.f_arial19 {
	font-family: Arial;
	font-size: 19px;		
}
span.f_arial20 {
	font-family: Arial;
	font-size: 20px;		
}
span.f_arial21 {
	font-family: Arial;
	font-size: 21px;		
}
span.f_arial22 {
	font-family: Arial;
	font-size: 22px;		
}
span.f_arial23 {
	font-family: Arial;
	font-size: 23px;		
}
span.f_bold {
	font-weight: bold;		
}
span.f_underline {
	text-decoration: underline;
}
span.c_ffffff {
	color: #FFFFFF;
}
span.c_000000 {
	color: #000000;
}
span.c_ff0000 {
	color: #FF0000;
}
span.c_ffff00 {
	color: #FFFF00;
}
span.c_00ffff {
	color: #00FFFF;
}
span.c_f32d40 {
	color: #F32D40;
}
span.c_ffffff {
	color: #FFFFFF;
}
span.c_4285f4 {
	color: #4285F4;
}
span.c_ea4335 {
	color: #EA4335;
}
span.c_fbbc05 {
	color: #FBBC05;
}
span.c_34a853 {
	color: #34A853;
}
div.Details {
	margin: 46px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 100%;
	z-index: 999;
	text-align: right;
	vertical-align: top;
	position: fixed;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
	font-family: Arial;
	font-size: 10px;
	color: #FFFFFF;
	top: 0%;
	left: 0%;
	right: 0%;
	bottom: 0%;
	-o-border-radius: 0px;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	overflow-x: hidden;
	overflow-y: hidden;
	display: none;
}
div.DetailsPage {
	margin: 0px auto 0px auto;
	padding: 0px 0px 0px 0px;
	width: 300px;
	height: 100%;
	z-index: 999;
	text-align: left;
	vertical-align: top;
	position: relative;
	right: 9px;
	bottom: 33px;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
	font-family: Arial;
	font-size: 13px;
	color: #FFFFFF;
	-o-border-radius: 0px;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	overflow-x: hidden;
	overflow-y: hidden;
	display: block;
}
div.ResultsPage {
	margin: 0px auto 0px auto;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 100%;
	z-index: 999;
	text-align: left;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #FF0000;
	font-family: Arial;
	font-size: 13px;
	color: #000000;
	-o-border-radius: 0px;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	overflow-x: hidden;
	overflow-y: hidden;
	display: none;
}
div.navBar {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 39px;
	height: 100%;
	z-index: 1000;
	position: fixed;
	right: 0px;
	overflow-x: hidden;
	overflow-y: hidden;
}
');
$css = str_replace(array("\t","\n","\r"),"",$css);
echo('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=100, viewport-fit=cover, user-scalable=yes, shrink-to-fit=no" />');
echo('<meta name="HandheldFriendly" content="true">');
//echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
//echo('<script src="./www-cgi/jquery-1.9.1.min.js"></script>');
//echo('<script src="./www-cgi/jquery-1.12.1.min.js"></script>');
//echo('<script src="./www-cgi/jquery-2.2.1.min.js"></script>');
echo('<script src="./www-cgi/jquery-3.5.1.min.js"></script>');
//echo('<script src="./www-cgi/jquery-ui.min.js"></script>');
//echo('<script src="./www-cgi/jquery-ui.min.css"></script>');
//echo('<script src="./www-cgi/jquery-ui.structure.min.css"></script>');
//echo('<script src="./www-cgi/jquery-ui.theme.min.css"></script>');
echo('<link rel="stylesheet" href="./www-cgi/vegas.min.css">');
echo('<link rel="icon" type="image/png" href="./favicon.png">');
echo('<script src="./www-cgi/vegas.min.js"></script>');
//echo(' <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>');
echo('<style type="text/css">'.$css.'</style>');
$scripts = ('
window.onload = function() {
	if(window.location.hash && window.location.hash !== "#777") {
		var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname + window.location.search;
		var id = window.location.hash;
		id = id.replace("#","");
		if(window.location.host === "localhost" || window.location.host === "45.93.137.180") {
			window.history.replaceState({}, document.title, "/auction/"  + window.location.hash);
		} else {
			window.history.replaceState({}, document.title, "/auction/"  + window.location.hash);
		}
		toggle(\'details\',id);
	} else {
		if(window.location.host === "localhost" || window.location.host === "45.93.137.180") {
			window.history.replaceState({}, document.title, "/auction/"  + window.location.hash);
		} else {
			window.history.replaceState({}, document.title, "/auction/"  + window.location.hash);
		}
		window.location.hash = "777";
		$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
	}
};
$(document).ready(function() {
	function loadAContent() {
		$("#acontent").empty();
		$("#acontent").load("./www-cgi/store.php");
		$("#acontent").show();
	}
	function loadBContent() {
		$("#bcontent").empty();
		$("#bcontent").load("./www-cgi/auctions.php");
		$("#bcontent").show();
	}
	function loadCContent() {
		$("#ccontent").empty();
		$("#ccontent").load("./www-cgi/chat.php");
		$("#ccontent").show();
	}
	function loadHelpDesk() {
		$("#HelpDesk").empty();
		$("#HelpDesk").load("./www-cgi/notify.php");
	}
	$("p").click(function() {
		$(this).hide();
	});
	setInterval(function() {
		$("#Notify").load("./www-cgi/ciri.php?p=msg");
		$("#AdFeed").load("./www-cgi/ciri.php?p=img");
		$("#chatLive").load("./www-cgi/chat.php?p=update");
	}, 9999);
	loadAContent();
	loadBContent();
	loadCContent();
	loadHelpDesk();
	$("#Notify").delay(5000).fadeIn(function() {
	});
	$("#navIcon").click(function() {
		$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
		window.location.hash = "777";
		window.location.reload();
	});
	$("#cloudMenu").click(function() {
		if($("#Details").css("display") == "none") {
			window.location.hash = "Menu";
		  	$("#DetailsPage").empty();
		  	$("#DetailsPage").load("./www-cgi/auctions.php?p=settings");
		  	$("#DetailsPage").show();
		  	$("#Details").show();
		} else {
			window.location.hash = "777";
			$("#DetailsPage").hide();
			$("#Details").hide();
		}
	});
	$("body").vegas( {
		overlay: "./www-cgi/overlays/666.png",
		animation: "random",
		transition: ["fade","fade2","slideLeft","slideLeft2","slideRight","slideRight2"],
		delay: 9999,
		slides: [{src: "'.$imglnk[$imgrnd['0']].'"},{src: "'.$imglnk[$imgrnd['1']].'"},{src: "'.$imglnk[$imgrnd['2']].'"},{src: "'.$imglnk[$imgrnd['3']].'"},{src: "'.$imglnk[$imgrnd['4']].'"}]
	});
});
function toggle(cmd1,cmd2) {
	if(cmd1 === "view") {
  		if(cmd2 === "Details") {
  			var x = document.getElementById(cmd2);
	  		if (x.style.display == "block") {
	  			window.location.hash = "777";
	    		x.style.display = "none";
	  		} else {
	  			window.location.hash = "Details";
	  			$("#DetailsPage").load("./www-cgi/auctions.php");
				x.style.display = "block";
	  		}
  		}
  	} else if (cmd1 === "page") {
  		if (cmd2 === "settings") {
  			var x = document.getElementById("Details");
  			if (x.style.display == "block") {
	    		x.style.display = "none";
	  		} else {
	  			$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=settings");
  				$("#DetailsPage").show();
				x.style.display = "block";
	  		}
  		} else if (cmd2 === "account") {
  				$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=account");
  				$("#DetailsPage").show();
  		} else if (cmd2 === "search") {
  				$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=search");
  				$("#DetailsPage").show();
  		} else if (cmd2 === "post") {
  				$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=post");
  				$("#DetailsPage").show();
  		} else if (cmd2 === "logout") {
  			  	$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=account&c=logout");
  				$("#DetailsPage").show();
				setTimeout(function() {
  			  		$("#DetailsPage").empty();
  					$("#DetailsPage").load("./www-cgi/auctions.php?p=account");
  					$("#DetailsPage").show();
				}, 3000);
  		} else if (cmd2 === "menu") {
  				window.location.hash = "Menu";
  				$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=settings");
  				$("#DetailsPage").show();
  		} else if (cmd2 === "ads") {
  				$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/adgenx.php");
  				$("#DetailsPage").show();
  		} else if (cmd2 === "chat") {
  				$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/chat.php");
  				$("#DetailsPage").show();
  		}
  	} else if (cmd1 === "details") {
  				var id = cmd2;
  				$("body, html").scrollTop(0);
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=details&c="+id);
  				$("#auctionDescription").scrollTop(0);
  				$("#DetailsPage").show();
  				$("#Details").show();
  	} else if (cmd1 === "bids") {
  				var id = cmd2;
  				$("#DetailsPage").empty();
  				$("#ResultsPage").load("./www-cgi/auctions.php?p=bids&c="+id);
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=details&c="+id);
  				$("#DetailsPage").show();
  				$("#Details").show();
  	} else if (cmd1 === "buys") {
				var id = cmd2;
  				$("#DetailsPage").empty();
  				$("#ResultsPage").load("./www-cgi/auctions.php?p=buys&c="+id);
  				$("#DetailsPage").load("./www-cgi/auctions.php?p=details&c="+id);
  				$("#DetailsPage").show();
  				$("#Details").show();
  	} else if (cmd1 === "search") {
				var id = cmd2;
				$("#bcontent").empty();
				$("#bcontent").load("./www-cgi/auctions.php?c="+id);
				$("#bcontent").show();
  	} else if (cmd1 ===  "advertise") {
  				var id = cmd2;
  				$("#DetailsPage").empty();
				$("#DetailsPage").load("./www-cgi/adgenx.php?p=activate&c="+id);
				$("#DetailsPage").show();
  	} else if (cmd1 === "chatroom") {
  				var id = cmd2;
  				$("#DetailsPage").empty();
  				$("#DetailsPage").load("./www-cgi/chat.php?p=details&c="+id);
  				$("#DetailsPage").show();
  				$("#Details").show();
  	}
}
');

$scripts = str_replace(array("\t","\n","\r"),"",$scripts);
echo('<script>'.$scripts.'</script>');

echo('</head>');
echo('<body>');




echo('<div class="nav"><div class="navIcon" id="navIcon"><img src="./www-img/StartHD1.png" width="45" height="45"></div>');

echo('<div class="Notify" id="Notify"></div>');

echo('<div id="AdFeed" class="AdFeed"><a href="https://www.hightimes.com" target="_blank"><img src="./www-img/droHighTimesBanner1tmb.jpg"></a></div>');

echo('<div class="cloudMenu" id="cloudMenu"><img src="./www-img/vipCheckMenu2.png"></div>');

echo('<div class="cloudMenuNav" id="cloudMenuNav"></div>');

echo('</div>');





echo('<div class="page">');

echo('<div class="EmailMe" id="emailMe"><a href="mailto:free.auctions@aol.com" style="color: #ffffff;font-size: 10px; vertical-align: top; text-decoration: none;">free.auctions@aol.com</a></div>');

echo('<div class="SocialBar">');

echo('<div class="Facebook"><a href="https://vanillagift.com" target="_blank"><img src="./www-img/visa-logo.png" width="49" height="43"></a></div>');

echo('<div class="Twitter"><a href="https://namecheap.com" target="_blank"><img src="./www-img/namecheap-logo2.png" width="43" height="43"></a></div>');

echo('<div class="Instagram"><a href="https://www.linkedin.com/in/james-schulze-216b311b8/" target="_blank"><img src="./www-img/linked-in2.png" width="43" height="43"></a></div>');

echo('</div>');

echo('<div class="pageInner">');

echo('<div class="acontent" id="acontent">');

echo('</div>');

echo('<div class="bcontent" id="bcontent">');

echo('</div>');

echo('<div class="ccontent" id="ccontent">');

echo('</div>');

echo('<div class="dcontent" id="dcontent">');

echo('</div>');

echo('<div class="econtent" id="econtent">');

echo('</div>');



echo('</div>');



echo('</div>');



echo('<div class="Details"  id="Details"><div class="navBar" id="navBar"><h1 onclick="toggle(\'view\',\'Details\');" style="cursor: pointer;">[ X ]</h1><h1 onclick="toggle(\'page\',\'menu\');" style="cursor: pointer;">[<img src="./www-img/navBlueLeftArrow2.png" style="margin: 0px 2px 0px 2px; padding: 0px 0px 0px 0px; vertical-align: middle;" width="20" height="20">]</h1><h1 onclick="brightness();" style="cursor: pointer;">[<img src="./www-img/brightness.png" style="margin: 0px 2px 0px 2px; padding: 0px 0px 0px 0px; vertical-align: middle;" width="20" height="20">]</h1></div><div class="DetailsPage" id="DetailsPage"></div></div><div class="ResultsPage" id="ResultsPage"></div><div class="detailsLoader"></div>');

for($i=0;$i<5;$i++) {
	echo('<br>');
}
echo('</body>');
echo('</html>');
$_SESSION['tpl']++;
if($_SESSION['tpl'] == '6') {
	$_SESSION['tpl'] = '1';
}
?>
