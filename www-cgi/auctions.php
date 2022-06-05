<?php
@session_start();
$css = ('
div.AuctionListing {
	margin: 3px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 289px;
	height: 45px;
	z-index: 8;
	text-align: left;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #333333;
	border-style: solid;
	background-color: #0D954D;
	font-family: Arial;
	font-size: 16px;
	color: #FFFFFF;
	display: block;
	left: 0px;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.AuctionListingAlert {
	margin: 3px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 289px;
	height: 45px;
	z-index: 8;
	text-align: left;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #333333;
	border-style: solid;
	background-color: #FF0000;
	font-family: Arial;
	font-size: 16px;
	color: #FFFFFF;
	display: block;
	left: 0px;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.AuctionListingEnded {
	margin: 3px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 289px;
	height: 45px;
	z-index: 8;
	text-align: left;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #333333;
	border-style: solid;
	background-color: #0000FF;
	font-family: Arial;
	font-size: 16px;
	color: #FFFFFF;
	display: block;
	left: 0px;
	-webkit-opacity: 1.0;
	-moz-opacity: 1.0;
	-o-opacity: 1.0;
	opacity: 1.0;
	-o-border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.auctionDetails {
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
div.auctionDetailsPage {
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
div.auctionResultsPage {
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
div.auctionNavBar {
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
div.auctionContainer {
	margin: 0px auto 0px auto;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 100%;
	z-index: 15;
	text-align: left;
	position: relative;
	background-color: #000000;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	scrollbar-width: thin;
	overflow-x: hidden;
	overflow-y: hidden;
	direction: ltr;
}
div.AuctionTV {
	margin: 0px 0px 0px 0px;
	padding: 3px 0px 0px 0px;
	width: 300px;
	height: 100%;
	z-index: 9;
	text-align: right;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	overflow-x: hidden;
	overflow-y: scroll;
	scrollbar-width: thin;
	display: block;
	direction: ltr;
}
div.AuctionTVtitle {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 20px;
	font-family: Arial;
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
}
div.AuctionTVmenu {
	margin: 2px 2px 2px 2px;
	padding: 0px 0px 0px 0px;
	width: 20px;
	height: 20px;
	border-width: 0px;
	border-color: #0000FF;
	border-style: solid;
	color: #0000FF;
	right: 0px;
	position: relative;
	z-index: 13;
	float: right;
	cursor: pointer;
	overflow-x: none;
	overflow-y: none;
	display: block;
}
div.auctionTitle {
	margin: 0px 0px 9px 0px;
	padding: 0px 0px 0px 0px;
	width: 99%;
	height: 33px;
	font-family: Arial;
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
	align: center;
	text-align: left;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 15;
	position: absolute;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.auctionImageNav {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 315px;
	font-family: Arial;
	font-size: 16px;
	font-weight: bold;
	border-width: 0px;
	border-color: #FF0000;
	border-style: solid;
	top: 57px;
	text-align: left;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-opacity: 0.9;
	-moz-opacity: 0.9;
	-o-opacity: 0.9;
	opacity: 0.9;
	z-index: 16;
	position: absolute;
	scroll-x: none;
	scroll-y: none;
}
div.auctionImageNavLeft {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 33px;
	height: 33px;
	top: 123px;
	left: 5px;
	vertical-align: middle;
	border-width: 0px;
	border-color: #0000FF;
	border-style: solid;
	z-index: 16;
	position: absolute;
	cursor: pointer;
}
div.auctionImageNavRight {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 33px;
	height: 33px;
	top: 123px;
	right: 5px;
	border-width: 0px;
	border-color: #0000FF;
	border-style: solid;
	z-index: 16;
	position: absolute;
	cursor: pointer;
}
div.auctionImage {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 315px;
	font-family: Arial;
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
	border-width: 0px;
	border-color: #FF0000;
	border-style: solid;
	background-color: #0000FF;
	top: 40px;
	text-align: left;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 15;
	position: absolute;
}
div.auctionDescriptionW {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 99%;
	height: 66px;
	font-family: Arial;
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #000000;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	top: 380px;
	text-align: left;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	overflow-x: hidden;
	overflow-y: hidden;
	z-index: 15;
	position: absolute;
}
div.auctionDescription {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 97%;
	height: 64px;
	font-family: Arial;
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
	top: 382px;
	left: 3px;
	text-align: left;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	overflow-x: hidden;
	overflow-y: scroll;
	z-index: 16;
	position: absolute;
	direction: rtl;
}
div.auctionInfo1 {
	margin: 9px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 99%;
	height: 20px;
	font-family: Arial;
	font-size: 13px;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #000000;
	float: right;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	top: 443px;
	white-space: nowrap;
	text-align: right;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 15;
	position: absolute;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.auctionInfo2 {
	margin: 9px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 99%;
	height: 20px;
	font-family: Arial;
	font-size: 13px;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #000000;
	float: right;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	top: 467px;
	white-space: nowrap;
	text-align: right;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 15;
	position: absolute;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.auctionButtonBid {
	margin: 9px 0px 0px 0px;
	padding: 6px 6px 6px 6px;
	float: left;
	color: #FFFFFF;
	background-color: #000000;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	top: 493px;
	left: 0px;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 15;
	position: absolute;
	cursor: pointer;
}
div.auctionButtonBuy {
	margin: 9px 0px 0px 0px;
	padding: 6px 6px 6px 6px;
	float: right;
	color: #FFFFFF;
	background-color: #000000;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	top: 493px;
	right: 0px;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 15;
	position: absolute;
	cursor: pointer;
}
div.auctionWinnerIcon {
	margin: 0px 0px 0px 0px;
	padding: 6px 6px 6px 6px;
	float: left;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	top: 29px;
	left: 0px;
	z-index: 17;
	position: absolute;
	cursor: pointer;
}
div.auctionWinnerBar {
	margin: 9px 0px 0px 0px;
	padding: 3px 0px 0px 0px;
	width: 257px;
	height: 20px;
	font-family: Arial;
	font-size: 13px;
	font-weight: bold;
	color: #FFFFFF;
	float: right;
	top: 37px;
	left: 19px;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
	white-space: nowrap;
	text-align: right;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 16;
	position: absolute;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.auctionInfoWindow {
	margin: 0px auto 0px auto;
	padding: 0px 0px 0px 0px;
	width: 95%;
	height: 265px;
	font-family: Arial;
	font-size: 13px;
	font-weight: bold;
	color: #FFFFFF;
	float: right;
	left: 6px;
	right: 6px;
	bottom: 5px;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 16;
	position: absolute;
	overflow-x: hidden;
	overflow-y: hidden;
	display: block;
}
div.auctionInfo {
	margin: 0px auto 0px auto;
	padding: 0px 0px 0px 0px;
	width: 95%;
	height: 45px;
	font-family: Arial;
	font-size: 13px;
	font-weight: bold;
	color: #FFFFFF;
	float: right;
	left: 6px;
	right: 6px;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
	top: 300px;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 16;
	position: absolute;
	overflow-x: hidden;
	overflow-y: hidden;
	display: block;
}
div.auctionInput {
	margin: 0px auto 5px auto;
	padding: 0px 0px 0px 0px;
	width: 95%;
	height: 75px;
	font-family: Arial;
	font-size: 13px;
	font-weight: bold;
	color: #FFFFFF;
	float: right;
	left: 6px;
	right: 6px;
	border-width: 1px;
	border-color: #FFFFFF;
	border-style: solid;
	background-color: #000000;
	top: 219px;
	-o-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	z-index: 16;
	position: absolute;
	overflow-x: hidden;
	overflow-y: hidden;
	display: block;
}
span.auctionInfoStatus {
	font-family: Arial;
	font-size: 10px;
	color: #FFFFFF;
}
div.containWScroll {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 300px;
	height: 140px;
	vertical-align: top;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	overflow-x: hidden;
	overflow-y: scroll;
	position: relative;
	z-index: 9;
}
');
$scripts = ( '
	$(document).ready(function() { 
		$(\'input[name=dbq1]\').change(function(){
	    	$("#postDbq").submit();
		});
		$(\'input[name=dbq3]\').change(function(){
	    	$("#postAli").submit();
		});
		$(\'input[name=dbq4]\').change(function(){
	    	$("#postDbqRelist").submit();
		});
		$("#post").click(function() {
			setTimeout(submitFalse,250);
			setTimeout(submitTrue,9999);
		});
	});
	function submitFalse() {
		$("#post").prop("disabled",true);
	}
	function submitTrue() {
		$("#post").prop("disabled",false);
	}
	function addImageSubmit() {
		$("#addImages").submit();
	}
	function selectMcatSubmit() {
		var id = $("#mcat").val();
		$("#bcontent").load("./www-cgi/auctions.php?c="+id);
		$("#selectMcat").submit();
	}
	function selectScatSubmit() {
		var id = $("#mcat").val();
		var sid = $("#scat").val();
		$("#Details").hide();
		$("#bcontent").load("./www-cgi/auctions.php?c="+id+"&d="+sid);
		$("#selectScat").submit();
	}
	function search() {
		$("#Details").show();
		$("#DetailsPage").empty();
		$("#DetailsPage").load("./www-cgi/auctions.php?p=search");
		$("#DetailsPage").show();
	}
	function postAuctionSubmit() {
		$("#postAuction").submit();
	}
	function brightness() {
		if($("#auctionTitle").css("background-color") === "rgb(0, 0, 0)") {
			$("#auctionTitle").css("background-color","rgb(255, 255, 255)");
			$("#auctionTitle").css("color","rgb(0, 0, 0)");
		} else {
			$("#auctionTitle").css("background-color","rgb(0, 0, 0)");
			$("#auctionTitle").css("color","rgb(255, 255, 255)");
		}
		if($("#auctionWinnerBar").css("background-color") === "rgb(0, 0, 0)") {
			$("#auctionWinnerBar").css("background-color","rgb(255, 255, 255)");
			$("#auctionWinnerBar").css("color","rgb(0, 0, 0)");
		} else {
			$("#auctionWinnerBar").css("background-color","rgb(0, 0, 0)");
			$("#auctionWinnerBar").css("color","rgb(255, 255, 255)");
		}
		if($("#auctionDescription").css("background-color") === "rgb(0, 0, 0)") {
			$("#auctionDescriptionW").css("background-color","rgb(255, 255, 255)");
			$("#auctionDescription").css("background-color","rgb(255, 255, 255)");
			$("#auctionDescription").css("color","rgb(0, 0, 0)");
		} else {
			$("#auctionDescriptionW").css("background-color","rgb(0, 0, 0)");
			$("#auctionDescription").css("background-color","rgb(0, 0, 0)");
			$("#auctionDescription").css("color","rgb(255, 255, 255)");
		}
		if($("#auctionInfo1").css("background-color") === "rgb(0, 0, 0)") {
			$("#auctionInfo1").css("background-color","rgb(255, 255, 255)");
			$("#auctionInfo1").css("color","rgb(0, 0, 0)");
		} else {
			$("#auctionInfo1").css("background-color","rgb(0, 0, 0)");
			$("#auctionInfo1").css("color","rgb(255, 255, 255)");
		}
		if($("#auctionInfo2").css("background-color") === "rgb(0, 0, 0)") {
			$("#auctionInfo2").css("background-color","rgb(255, 255, 255)");
			$("#auctionInfo2").css("color","rgb(0, 0, 0)");
		} else {
			$("#auctionInfo2").css("background-color","rgb(0, 0, 0)");
			$("#auctionInfo2").css("color","rgb(255, 255, 255)");
		}
		if($("#auctionButtonBid").css("background-color") === "rgb(0, 0, 0)") {
			$("#auctionButtonBid").css("background-color","rgb(255, 255, 255)");
			$("#auctionButtonBid").css("color","rgb(0, 0, 0)");
		} else {
			$("#auctionButtonBid").css("background-color","rgb(0, 0, 0)");
			$("#auctionButtonBid").css("color","rgb(255, 255, 255)");
		}
		if($("#auctionButtonBuy").css("background-color") === "rgb(0, 0, 0)") {
			$("#auctionButtonBuy").css("background-color","rgb(255, 255, 255)");
			$("#auctionButtonBuy").css("color","rgb(0, 0, 0)");
		} else {
			$("#auctionButtonBuy").css("background-color","rgb(0, 0, 0)");
			$("#auctionButtonBuy").css("color","rgb(255, 255, 255)");
		}
	}
	function navLeft() {
		if($("#auctionImage1").css("display") === "block") {
			if($("#auctionImage5").length > 0) {
				$("#auctionImage1").css("display","none");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","block");
			} else if($("#auctionImage4").length > 0) {
				$("#auctionImage1").css("display","none");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","block");
				$("#auctionImage5").css("display","none");
			} else if($("#auctionImage3").length > 0) {
				$("#auctionImage1").css("display","none");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","block");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","none");
			} else if($("#auctionImage2").length > 0) {
				$("#auctionImage1").css("display","none");
				$("#auctionImage2").css("display","block");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","none");
			}
		} else if($("#auctionImage5").css("display") === "block") {
			$("#auctionImage1").css("display","none");
			$("#auctionImage2").css("display","none");
			$("#auctionImage3").css("display","none");
			$("#auctionImage4").css("display","block");
			$("#auctionImage5").css("display","none");
		} else if($("#auctionImage4").css("display") === "block") {
			$("#auctionImage1").css("display","none");
			$("#auctionImage2").css("display","none");
			$("#auctionImage3").css("display","block");
			$("#auctionImage4").css("display","none");
			$("#auctionImage5").css("display","none");
		} else if($("#auctionImage3").css("display") === "block") {
			$("#auctionImage1").css("display","none");
			$("#auctionImage2").css("display","block");
			$("#auctionImage3").css("display","none");
			$("#auctionImage4").css("display","none");
			$("#auctionImage5").css("display","none");
		} else if($("#auctionImage2").css("display") === "block") {
			$("#auctionImage1").css("display","block");
			$("#auctionImage2").css("display","none");
			$("#auctionImage3").css("display","none");
			$("#auctionImage4").css("display","none");
			$("#auctionImage5").css("display","none");
		}
	}
	function navRight() {
		if($("#auctionImage1").css("display") === "block") {
			$("#auctionImage1").css("display","none");
			$("#auctionImage2").css("display","block");
			$("#auctionImage3").css("display","none");
			$("#auctionImage4").css("display","none");
			$("#auctionImage5").css("display","none");
		} else if($("#auctionImage2").css("display") === "block") {
			if($("#auctionImage3").length > 0) {
				$("#auctionImage1").css("display","none");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","block");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","none");
			} else {
				$("#auctionImage1").css("display","block");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","none");
			}
		} else if($("#auctionImage3").css("display") === "block") {
			if($("#auctionImage4").length > 0) {
				$("#auctionImage1").css("display","none");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","block");
				$("#auctionImage5").css("display","none");
			} else {
				$("#auctionImage1").css("display","block");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","none");
			}
		} else if($("#auctionImage4").css("display") === "block") {
			if($("#auctionImage5").length > 0) {
				$("#auctionImage1").css("display","none");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","block");
			} else {
				$("#auctionImage1").css("display","block");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","none");
			}
		} else if($("#auctionImage5").css("display") === "block") {
				$("#auctionImage1").css("display","block");
				$("#auctionImage2").css("display","none");
				$("#auctionImage3").css("display","none");
				$("#auctionImage4").css("display","none");
				$("#auctionImage5").css("display","none");
		}
	}
	function zoom() {
		if($("#auctionImage1").css("background-position") === "0% 0%") {
			$("#auctionImage1").css("background-position","25% 25%");
		} else if($("#auctionImage1").css("background-position") === "25% 25%") {
			$("#auctionImage1").css("background-position","50% 50%");
		} else if($("#auctionImage1").css("background-position") === "50% 50%") {
			$("#auctionImage1").css("background-position","75% 75%");
		} else if($("#auctionImage1").css("background-position") === "75% 75%") {
			$("#auctionImage1").css("background-position","100% 100%");
			$("#auctionImage1").css("background-size","100% 100%");
		} else if($("#auctionImage1").css("background-position") === "100% 100%") {
			$("#auctionImage1").css("background-position","0% 0%");
			$("#auctionImage1").css("background-size","auto auto");
		}
		if($("#auctionImage2").css("background-position") === "0% 0%") {
			$("#auctionImage2").css("background-position","25% 25%");
		} else if($("#auctionImage2").css("background-position") === "25% 25%") {
			$("#auctionImage2").css("background-position","50% 50%");
		} else if($("#auctionImage2").css("background-position") === "50% 50%") {
			$("#auctionImage2").css("background-position","75% 75%");
		} else if($("#auctionImage2").css("background-position") === "75% 75%") {
			$("#auctionImage2").css("background-position","100% 100%");
			$("#auctionImage2").css("background-size","100% 100%");
		} else if($("#auctionImage2").css("background-position") === "100% 100%") {
			$("#auctionImage2").css("background-position","0% 0%");
			$("#auctionImage2").css("background-size","auto auto");
		}
		if($("#auctionImage3").css("background-position") === "0% 0%") {
			$("#auctionImage3").css("background-position","25% 25%");
		} else if($("#auctionImage3").css("background-position") === "25% 25%") {
			$("#auctionImage3").css("background-position","50% 50%");
		} else if($("#auctionImage3").css("background-position") === "50% 50%") {
			$("#auctionImage3").css("background-position","75% 75%");
		} else if($("#auctionImage3").css("background-position") === "75% 75%") {
			$("#auctionImage3").css("background-position","100% 100%");
			$("#auctionImage3").css("background-size","100% 100%");
		} else if($("#auctionImage3").css("background-position") === "100% 100%") {
			$("#auctionImage3").css("background-position","0% 0%");
			$("#auctionImage3").css("background-size","auto auto");
		}
		if($("#auctionImage4").css("background-position") === "0% 0%") {
			$("#auctionImage4").css("background-position","25% 25%");
		} else if($("#auctionImage4").css("background-position") === "25% 25%") {
			$("#auctionImage4").css("background-position","50% 50%");
		} else if($("#auctionImage4").css("background-position") === "50% 50%") {
			$("#auctionImage4").css("background-position","75% 75%");
		} else if($("#auctionImage4").css("background-position") === "75% 75%") {
			$("#auctionImage4").css("background-position","100% 100%");
			$("#auctionImage4").css("background-size","100% 100%");
		} else if($("#auctionImage4").css("background-position") === "100% 100%") {
			$("#auctionImage4").css("background-position","0% 0%");
			$("#auctionImage4").css("background-size","auto auto");
		}
		if($("#auctionImage5").css("background-position") === "0% 0%") {
			$("#auctionImage5").css("background-position","25% 25%");
		} else if($("#auctionImage5").css("background-position") === "25% 25%") {
			$("#auctionImage5").css("background-position","50% 50%");
		} else if($("#auctionImage5").css("background-position") === "50% 50%") {
			$("#auctionImage5").css("background-position","75% 75%");
		} else if($("#auctionImage5").css("background-position") === "75% 75%") {
			$("#auctionImage5").css("background-position","100% 100%");
			$("#auctionImage5").css("background-size","100% 100%");
		} else if($("#auctionImage5").css("background-position") === "100% 100%") {
			$("#auctionImage5").css("background-position","0% 0%");
			$("#auctionImage5").css("background-size","auto auto");
		}
	}
	function loadAuctions(id) {
		var cat = id;
		if(cat === "0") {
			window.location.hash = "777";
			$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
			$("#bcontent").load("./www-cgi/auctions.php");
			$("#Details").hide();
		} else if(cat === "1") {
			$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
			$("#bcontent").load("./www-cgi/auctions.php?c=1");
			$("#Details").hide();
		} else if(cat === "2") {
			$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
			$("#bcontent").load("./www-cgi/auctions.php?c=2");
			$("#Details").hide();
		} else if(cat === "3") {
			$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
			$("#bcontent").load("./www-cgi/auctions.php?c=3");
			$("#Details").hide();
		} else if(cat === "4") {
			$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
			$("#bcontent").load("./www-cgi/auctions.php?c=4");
			$("#Details").hide();
		} else if(cat === "5") {
			$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
			$("#bcontent").load("./www-cgi/auctions.php?c=5");
			$("#Details").hide();
		} else {
			window.location.hash = "777";
			$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
			$("#bcontent").load("./www-cgi/auctions.php");
			$("#Details").hide();
		}
	}
	$("#AuctionTV").scroll(function() {
	    if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
	        $.get(\'./www-cgi/auctions.php\', function(data){ 
  				$(data).find("#AuctionListing").appendTo("#AuctionTV");
			});
	    }
	});
	$("#login").on("submit",  function(e){
		e.preventDefault();
		$.ajax({
			data: $(this).serialize(),
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			success: function(response) {
				$("#DetailsPage").empty();
				$("#DetailsPage").html(response);
				$("#DetailsPage").delay(1999).fadeOut(function() {
					$("#DetailsPage").empty();
					$("#DetailsPage").load("./www-cgi/auctions.php?p=account");
					$("#DetailsPage").show();
				});
			}
		});
		$("#login").unbind(this.submit);
		return false;
	});
	$("#signUp").on("submit",  function(e){
		e.preventDefault();
		$.ajax({
			data: $(this).serialize(),
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			success: function(response) {
				$("#DetailsPage").empty();
				$("#DetailsPage").html(response);
				$("#DetailsPage").delay(1999).fadeOut(function() {
					$("#DetailsPage").empty();
					$("#DetailsPage").load("./www-cgi/auctions.php?p=account&c=signup");
					$("#DetailsPage").show();
				});
			}
		});
		$("#signUp").unbind(this.submit);
		return false;
	});
	$("#postAuction").on("submit",  function(e) {
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
				$("#DetailsPage").delay(1999).fadeOut(function() {
					$("#DetailsPage").empty();
					$("#DetailsPage").load("./www-cgi/auctions.php?p=post");
					$("#DetailsPage").show();
					$("#ResultsPage").load("./www-cgi/auctions.php?p=reset&c=1");
					$("#bcontent").load("./www-cgi/auctions.php");
				});
			}
		});
		$("#postAuction").unbind(this.submit);
		return false;
	});
	$("#postAlias").on("submit",  function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
			}
		});
		$("#postAlias").unbind(this.submit);
		return false;
	});
	$("#postDbq").on("submit",  function(e){
		e.preventDefault();
		var id = document.getElementById("c").value;
		var formData = new FormData(this);
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#DetailsPage").empty();
				$("#DetailsPage").html(response);
				$("#DetailsPage").delay(001).fadeOut(function() {
					$("#DetailsPage").empty();
					$("#DetailsPage").load("./www-cgi/auctions.php?p=details&c="+id);
					$("#DetailsPage").show();
				});
			}
		});
		$("#postDbq").unbind(this.submit);
		return false;
	});
	$("#postDbqRelist").on("submit",  function(e){
		e.preventDefault();
		var id = document.getElementById("c").value;
		var formData = new FormData(this);
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
			}
		});
		$("#postDbqRelist").unbind(this.submit);
		return false;
	});
	$("#postAli").on("submit",  function(e){
		e.preventDefault();
		var id = document.getElementById("c").value;
		var formData = new FormData(this);
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
			}
		});
		$("#postAli").unbind(this.submit);
		return false;
	});
	$("#postInfo").on("submit",  function(e){
		e.preventDefault();
		var id = document.getElementById("c").value;
		var formData = new FormData(this);
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#DetailsPage").empty();
				$("#DetailsPage").html(response);
				$("#DetailsPage").delay(001).fadeOut(function() {
	  				$("#DetailsPage").empty();
	  				$("#ResultsPage").load("./www-cgi/auctions.php?p=buys&c="+id);
	  				$("#DetailsPage").load("./www-cgi/auctions.php?p=details&c="+id);
	  				$("#DetailsPage").show();
	  				$("#Details").show();
				});
			}
		});
		$("#postInfo").unbind(this.submit);
		return false;
	});
	$("#postKeyword").on("submit",  function(e){
		e.preventDefault();
		var keyword = document.getElementById("keyword").value;
		var formData = new FormData(this);
		keyword = keyword.replace("#","");
		keyword = keyword.replace(" ","%20");
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#Details").hide();
				$("#bcontent").load("./www-cgi/auctions.php?e="+keyword);
			}
		});
		$("#posKeyword").unbind(this.submit);
		return false;
	});
	$("#postKeyword2").on("submit",  function(e){
		e.preventDefault();
		var keyword2 = document.getElementById("keyword2").value;
		var formData = new FormData(this);
		keyword2 = keyword2.replace("#","");
		keyword2 = keyword2.replace(" ","%20");
		$.ajax({
	        type: \'POST\',
	        url: $(this).attr(\'action\'),
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
			success: function(response) {
				$("#Details").hide();
				$("#bcontent").load("./www-cgi/auctions.php?e="+keyword2);
			}
		});
		$("#posKeyword2").unbind(this.submit);
		return false;
	});
	$("#activateAli").on("submit",  function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
            type: \'POST\',
            url: $(this).attr(\'action\'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
			success: function(response) {
				$("#DetailsPage").empty();
				$("#DetailsPage").html(response);
				$("#DetailsPage").delay(1999).fadeOut(function() {
					$("#DetailsPage").empty();
					$("#DetailsPage").load("./www-cgi/auctions.php?p=account");
					$("#DetailsPage").show();
				});
			}
		});
		$("#activateAli").unbind(this.submit);
		return false;
	});
	$("#addImages").on("submit",  function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
            type: \'POST\',
            url: $(this).attr(\'action\'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
			}
		});
		$("#addImages").unbind(this.submit);
		return false;
	});
	$("#imageBuy").on("submit",  function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
            type: \'POST\',
            url: $(this).attr(\'action\'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
				$("#DetailsPage").delay(1999).fadeOut(function() {
					$("#DetailsPage").empty();
					$("#DetailsPage").load("./www-cgi/auctions.php?p=post");
					$("#DetailsPage").show();
				});
			}
		});
		$("#imageBuy").unbind(this.submit);
		return false;
	});
	$("#selectMcat").on("submit",  function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
            type: \'POST\',
            url: $(this).attr(\'action\'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
			}
		});
		$("#selectMcat").unbind(this.submit);
		return false;
	});
	$("#selectScat").on("submit",  function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
            type: \'POST\',
            url: $(this).attr(\'action\'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
			success: function(response) {
				$("#DetailsPage").html(response);
			}
		});
		$("#selectScat").unbind(this.submit);
		return false;
	});
');
include('./database.php');
include('./forms.php');
include('./dbq.php');
include('./curl.php');
include('./data_classifieds.php');
if(!isset($_SESSION['seclvl'])) {
	$_SESSION['seclvl'] = 0;
}
$css = str_replace(array("\t","\n","\r"),"",$css);
$scripts = str_replace(array("\t","\n","\r"),"",$scripts);
echo('<style>'.$css.'</style>');
echo('<script>'.$scripts.'</script>');
$ai = '<img src="./www-img/vipNotSiri.jpg" width="45" height="45" style="padding: 0px 2px 0px 0px;float: left;">@Ciri Says::&nbsp;';
echo('<div class="AuctionTVtitle" id="AuctionTVtitle">#Auctions<div class="AuctionTVmenu" id="AuctionTVmenu"><img src="./www-img/zoom.png" width="20" height="20" onclick="search();"></div><div class="AuctionTVmenu" id="AuctionTVmenu"><img src="./www-img/refresh1.png" width="20" height="20" onclick="loadAuctions(\'0\');"></div></div>');
echo('<div class="AuctionTV" id="AuctionTV">');

if(isset($_REQUEST['p'])) { $p = $_REQUEST['p']; } else { $p = ''; }
if(isset($_REQUEST['c'])) { $c = $_REQUEST['c']; } else { $c = ''; }
if(isset($_REQUEST['d'])) { $d = $_REQUEST['d']; } else { $d = ''; }
if(isset($_REQUEST['e'])) { $e = $_REQUEST['e']; } else { $e = ''; }

if($p == 'settings') {//SETTINGS VIEW
	
	echo('<br><br>');
	echo('<a href="#Account" onclick="toggle(\'page\',\'account\');"><img src="./www-img/droAccountIcon.png"></a>');
	echo('<a href="#Ads" onclick="toggle(\'page\',\'ads\');"><img src="./www-img/droAds.png"></a>');
	echo('<a href="#Search" onclick="toggle(\'page\',\'search\');"><img src="./www-img/droSearchIcon.png"></a>');
	echo('<a href="#Auction" onclick="toggle(\'page\',\'post\');"><img src="./www-img/droPostIcon.png"></a>');
	echo('<a href="#Chat" onclick="toggle(\'page\',\'chat\');"><img src="./www-img/droChat.png"></a>');
	for($i=0;$i<4;$i++) {
		echo('<br>');
	}
	
} elseif ($p == 'account') {//ACCOUNT VIEW

	echo('<div style="margin: 3px 0px 0px 0px; text-align: left;">');
	
	if($_SESSION['seclvl'] == 1) {//logged in
	
		if(!isset($_SESSION['ali'])) {
			$_SESSION['ali'] = 'anonymous';
		}
	
		echo('<br>logged in! / <a href="#Logout" id="logout" onclick="toggle(\'page\',\'logout\');">log out</a>?<br>');
		if($c == 'logout') {
			echo('<br>logging you out...<br>');
			session_destroy();
		}
		
		if(!isset($_REQUEST['dbq3'])) {
		
			if(isset($_POST['alias'])) {
				$_SESSION['ali'] = htmlentities($_POST['alias'], ENT_QUOTES, 'UTF-8');
				$ali = $_SESSION['ali'];
				$qd = dbi('1', 'SELECT COUNT(*) FROM users WHERE users.ali = \''.$ali.'\' ');
				$qd_c = mysqli_fetch_row($qd);
				if($qd_c['0'] == 0) {//AVAILABLE
					echo('<br>the alias '.$ali.' is available for $0.99, would you like to buy it?<br>');
					echo(dbq('3',$ai.'<span class="auctionInfoStatus">Would you like this name for FREE?</span>', ''));
				} else {//TAKEN
					echo('<br>that name is taken...<br>');
				}
			}
		
		} else {
			if($_REQUEST['dbq3'] == 1) {
				
				$form1 = array(
					array('element'=>'pform', 'name'=>'activateAli', 'value'=>'./www-cgi/auctions.php?p=checkout&c=1', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
					array('element'=>'hinput', 'name'=>'dbq3', 'value'=>'1', 'js'=>'', 'text'=>'', 'size'=>'199', 'style'=>''),
					array('element'=>'tinput', 'name'=>'name', 'value'=>'As appears on card...', 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Name:', 'size'=>'199', 'style'=>'width: 199px;'),
					array('element'=>'tinput', 'name'=>'number', 'value'=>'No dashes or spaces...', 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Number:', 'size'=>'19', 'style'=>'width: 199px;'),
					array('element'=>'tinput', 'name'=>'exmo', 'value'=>date("m"), 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Month:', 'size'=>'2', 'style'=>'width: 49px;'),
					array('element'=>'tinput', 'name'=>'exyr', 'value'=>date("Y")+6, 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Year:', 'size'=>'4', 'style'=>'width: 49px;'),
					array('element'=>'tinput', 'name'=>'cvv', 'value'=>rand(111,999), 'js'=>'onfocus="this.value=\'\';"', 'text'=>'CVV:', 'size'=>'4', 'style'=>'width: 49px;'),
					array('element'=>'sinput', 'name'=>'post', 'value'=>'activate', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				);
				//echo('<div style="width: 100%; text-align: left;"><h3>Activate FREE</h3>*Activate the alias "'.$_SESSION['ali'].'"...<br><br><br></div>');
				//echo(form($form1));

				//echo(paypal('1'));
				
				dbi('1', 'UPDATE users SET ali = \''.$_SESSION['ali'].'\' WHERE id = \''.$_SESSION['secact'].'\' LIMIT 1');
				$_SESSION['secali'] = $_SESSION['ali'];
				unset($_SESSION['ali']);
				
			}
		}
		
		if(isset($_REQUEST['dbq3']) && $_REQUEST['dbq3'] == 3) {
		
		} else {

			$alertCount = 0;
			$qc_ali = '';
			$qc = dbi('1', 'SELECT users.ali FROM users WHERE id = \''.$_SESSION['secact'].'\'');
			while($qc_row = mysqli_fetch_array($qc)) {
				if($qc_row['ali'] == null) {
					$qc_ali = 'anonymous';
				} else {
					$qc_ali = $qc_row['ali'];
				}
			}
			if($qc_ali == null) {
					$qc_ali = 'anonymous';
			}
			
			$form1 = array(
				array('element'=>'pform', 'name'=>'postAlias', 'value'=>'./www-cgi/auctions.php?p=account', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
				array('element'=>'tinput', 'name'=>'alias', 'value'=>$qc_ali, 'js'=>'', 'text'=>'Alias:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'sinput', 'name'=>'post', 'value'=>'update', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			);
			echo('<div style="width: 100%; text-align: left;"><h3>Auction Alias</h3></div>');
			echo(form($form1));
			
			$qd = dbi('1','SELECT aid FROM buys WHERE sid = \''.$_SESSION['secact'].'\' ');
			if(mysqli_num_rows($qd)) {
				$alerts = array();
				while($row_qd = mysqli_fetch_array($qd)) {
					$alerts[] = $row_qd['aid'];
				}
				$alertCount = count($alerts);
				echo('<div style="width: 100%; text-align: left;"><h3>Selling <span class="c_ff0000">&#9888;&nbsp;'.$alertCount.'</span></h3></div>');
			} else {
				echo('<div style="width: 100%; text-align: left;"><h3>Selling</h3></div>');
			}
			echo('<div class="containWScroll">');
			$qa = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, auctions.duration, auctions.start, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid  WHERE auctions.uid = \''.$_SESSION['secact'].'\' ORDER BY created DESC ');
			$qa_c = dbi('1', 'SELECT COUNT(*) FROM auctions WHERE auctions.uid = \''.$_SESSION['secact'].'\' ');
			$qa_c = mysqli_fetch_row($qa_c);
			$xtime = time();
			if($qa_c['0'] == 0) {
				echo('you have posted no auctions...');
			} else {
				while($row_qa = mysqli_fetch_array($qa)) {
					if($row_qa['imglnk1'] == '') {
						$imgloc = './www-img/noImage2.jpg';
					} else {
						$imgloc = explode('www-bin',$row_qa['imglnk1']);
						$imgloc = './www-bin'.$imgloc['1'];
					}
					if($alertCount > 0) {
						$found = false;
						for($i=0;$i<$alertCount;$i++) {
							if($row_qa['xid'] == $alerts[$i]) {
								echo('<div class="AuctionListingAlert" id="AuctionListingAlert"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qa['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qa['price'].'</span></span>&nbsp;'.$row_qa['title'].'</a></span></div>');
								$found = true;
							}
						}
						if($found == false) {
							if(($row_qa['start']+$row_qa['duration']) < $xtime) {
								echo('<div class="AuctionListingEnded" id="AuctionListingEnded"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qa['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qa['price'].'</span></span>&nbsp;'.$row_qa['title'].'</a></span></div>');
							} else {
								echo('<div class="AuctionListing" id="AuctionListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qa['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qa['price'].'</span></span>&nbsp;'.$row_qa['title'].'</a></span></div>');
							}
						}
					} else {
						if(($row_qa['start']+$row_qa['duration']) < $xtime) {
							echo('<div class="AuctionListingEnded" id="AuctionListingEnded"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qa['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qa['price'].'</span></span>&nbsp;'.$row_qa['title'].'</a></span></div>');
						} else {
							echo('<div class="AuctionListing" id="AuctionListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qa['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qa['price'].'</span></span>&nbsp;'.$row_qa['title'].'</a></span></div>');
						}
					}
				}
			}
			echo('</div>');
			
			$qd = dbi('1','SELECT aid FROM buychat WHERE uid = \''.$_SESSION['secact'].'\' AND  mssgsid != \'2\' ');
			if(mysqli_num_rows($qd)) {
				$alerts = array();
				while($row_qd = mysqli_fetch_array($qd)) {
					$alerts[] = $row_qd['aid'];
				}
				$alertCount = count($alerts);
				echo('<div style="width: 100%; text-align: left;"><h3>Buying <span class="c_ff0000">&#9888;&nbsp;'.$alertCount.'</span></h3></div>');
			} else {
				echo('<div style="width: 100%; text-align: left;"><h3>Buying</h3></div>');
			}
			echo('<div class="containWScroll">');
			$qb = dbi('1', 'SELECT DISTINCT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid  LEFT JOIN bids ON bids.aid = auctions.aid LEFT JOIN buys ON buys.aid = auctions.aid WHERE (bids.uid = \''.$_SESSION['secact'].'\' OR buys.uid = \''.$_SESSION['secact'].'\') ');
			$qb_c = dbi('1', 'SELECT COUNT(*) FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid  LEFT JOIN bids ON bids.aid = auctions.aid LEFT JOIN buys ON buys.aid = auctions.aid WHERE (bids.uid = \''.$_SESSION['secact'].'\' OR buys.uid = \''.$_SESSION['secact'].'\') ');
			$qb_c = mysqli_fetch_row($qb_c);
			if ($qb_c['0'] == 0) {
				echo('you are not bidding on anything...');
			} else {
				while($row_qb = mysqli_fetch_array($qb)) {
					if($row_qb['imglnk1'] == '') {
						$imgloc = './www-img/noImage2.jpg';
					} else {
						$imgloc = explode('www-bin',$row_qb['imglnk1']);
						$imgloc = './www-bin'.$imgloc['1'];
					}
					if($alertCount > 0) {
						$found = false;
						for($i=0;$i<$alertCount;$i++) {
							if($row_qb['xid'] == $alerts[$i]) {
								echo('<div class="AuctionListingAlert" id="AuctionListingAlert"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qb['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qb['price'].'</span></span>&nbsp;'.$row_qb['title'].'</a></span></div>');
								$found = true;
							}
						}
						if($found == false) {
							echo('<div class="AuctionListing" id="AuctionListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qb['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qb['price'].'</span></span>&nbsp;'.$row_qb['title'].'</a></span></div>');
						}
					} else {
						echo('<div class="AuctionListing" id="AuctionListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qb['xid'].'\');" style="color: #ffffff;">$<span class="c_fbbc05"><span class="f_bold">'.$row_qb['price'].'</span></span>&nbsp;'.$row_qb['title'].'</a></span></div>');
					}
				}
			}
			echo('</div>');
			
			echo('<br><br><br>');
		
		}
		
	} else {//not logged in
		
		if(isset($_POST['user']) && isset($_POST['pass'])) {
			$user = htmlentities($_POST['user'], ENT_QUOTES, 'UTF-8');
			$pass = htmlentities($_POST['pass'], ENT_QUOTES, 'UTF-8');
			$qq = dbi('1','SELECT * FROM users WHERE BINARY user = \''.$user.'\' ');
			if(mysqli_num_rows($qq) > 0) {
				while($row = mysqli_fetch_array($qq)) {
					if(password_verify($pass,$row['passwd'])) {
						if($_POST['user'] == $row['user'] && $_POST['passwd'] == $row['pass']) {
							$rev1 = dbi('1', 'SELECT COUNT(*) FROM reviews WHERE uid = \''.$row['id'].'\' OR sid = \''.$row['id'].'\' ');
							$rev2 = mysqli_fetch_row($rev1);
							dbi('1', 'UPDATE users SET rev = \''.$rev2['0'].'\' WHERE id = \''.$row['id'].'\' ');
							$_SESSION['secali'] = $row['ali'].'('.$rev2['0'].')';
							$_SESSION['secact'] = $row['id'];
							$_SESSION['seclvl'] = 1;
							echo('<br>logging you in...<br>');
						}
					} else {
						echo('<br>your user id or password were incorrect...<br>');
					}
					
				}
			} else {
				echo('<br>your user id or password were incorrect...<br>');
			}
		}
		
		if(isset($_POST['user']) && isset($_POST['pass1']) && isset($_POST['pass2'])) {
			$user = htmlentities($_POST['user'], ENT_QUOTES, 'UTF-8');
			$pass1 = htmlentities($_POST['pass1'], ENT_QUOTES, 'UTF-8');
			$pass2 = htmlentities($_POST['pass2'], ENT_QUOTES, 'UTF-8');
			$mtime = time();
			$qq = dbi('1', 'SELECT COUNT(*) AS total FROM users WHERE BINARY user = \''.$user.'\'');
			$rr = mysqli_fetch_array($qq);
			if($user == null) {
				echo('<br>your user id can not be blank...<br>');
			} elseif($pass1 == null) {
				echo('<br>your password can not be blank...');
			} elseif($pass2 == null) {
				echo('<br>you must verify your password...<br>');
			} elseif($pass1 != $pass2) {
				echo('<br>your passwords do not match...<br>');
			} else {
				if($rr['total'] > 0) {
					echo('<br>that user id is in use...<br>');
				} else {
					$pass1 = password_hash($pass1, PASSWORD_DEFAULT);
					$date = date("Y-m-d H:m:s");
					$qq = dbi('1', 'INSERT INTO users (user,ali,rev,passwd,mtime,created) values (\''.$user.'\',\'anonymous\',\'0\',\''.$pass1.'\',\''.$mtime.'\',\''.$date.'\')');
					$qa = dbi('1', 'SELECT id FROM users WHERE user=\''.$user.'\' LIMIT 1');
					while($row_qa = mysqli_fetch_array($qa)) {
						$_SESSION['secact'] = $row_qa['id'];
					}
					echo('<br>thank you for signing up...<br>');
					$_SESSION['seclvl'] = 1;
					$_SESSION['secali'] = 'anonymous(0)';
				}
			}
		}
		
		$form1 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			array('element'=>'pform', 'name'=>'login', 'value'=>'./www-cgi/auctions.php?p=account', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
			array('element'=>'tinput', 'name'=>'user', 'value'=>'', 'js'=>'', 'text'=>'User ID:', 'size'=>'199', 'style'=>'width: 199px;'),
			array('element'=>'pinput', 'name'=>'pass', 'value'=>'', 'js'=>'', 'text'=>'Password', 'size'=>'199', 'style'=>'width: 199px;'),
			array('element'=>'sinput', 'name'=>'login', 'value'=>'sign in', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
		);
		$form2 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			array('element'=>'pform', 'name'=>'signUp', 'value'=>'./www-cgi/auctions.php?p=account&c=signup', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
			array('element'=>'tinput', 'name'=>'user', 'value'=>'', 'js'=>'', 'text'=>'User ID:', 'size'=>'199', 'style'=>'width: 199px;'),
			array('element'=>'pinput', 'name'=>'pass1', 'value'=>'', 'js'=>'', 'text'=>'Password', 'size'=>'199', 'style'=>'width: 199px;'),
			array('element'=>'pinput', 'name'=>'pass2', 'value'=>'', 'js'=>'', 'text'=>'Verify', 'size'=>'199', 'style'=>'width: 199px;'),
			array('element'=>'sinput', 'name'=>'signUp', 'value'=>'sign up', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
		);
		echo('<div style="width: 100%; text-align: left;"><h1>sign in</h1></div>');
		echo(form($form1));
		echo('<div style="width: 100%; text-align: center;"><h1>or</h1></div>');
		echo('<div style="margin: 15px 0px 0px 0px;width: 100%; text-align: left;"><h1>sign up</h1></div>');
		echo(form($form2));
		
	}
	
	echo('</div>');
	
} elseif($p == 'search') {//SEARCH VIEW
		
		$tmcat = count($_SESSION['m_cat_data']);
		$tscat = count($_SESSION['s_cat_data']);
		
		if(!isset($_SESSION['mcat_select'])) {
			$_SESSION['mcat_select'] = 1;
		} else {
			if(isset($_POST['mcat']) && is_numeric($_POST['mcat'])) {
				$_SESSION['mcat_select'] = $_POST['mcat'];
				$tscat_c = 0;
				for($i=0;$i<$tscat;$i++) {
					if($_SESSION['s_cat_data'][$i]['m_cat_uid'] == $_SESSION['mcat_select']) {
						$tscat_c++;
					}
				}
				$_SESSION['scat_select'] = rand(1,$tscat_c);
			}
		}
		
		if(!isset($_SESSION['scat_select'])) {
			$_SESSION['scat_select'] = 1;
		} else {
			if(isset($_POST['scat'])) {
				if(is_numeric($_POST['scat'])) {
					$_SESSION['scat_select'] = $_POST['scat'];
				} else {
					$_SESSION['scat_select'] = '';
				}
			}
		}

		$optionsMcats = '';
		for($i=0;$i<$tmcat;$i++) {
			if(isset($_SESSION['m_cat_data']) && $_SESSION['m_cat_data'][$i]['m_cat_uid'] == $_SESSION['mcat_select']) {
				$optionsMcats .= '<option value="'.$_SESSION['m_cat_data'][$i]['m_cat_uid'].'" selected>'.ucwords($_SESSION['m_cat_data'][$i]['m_cat']).'</option>';
			} else {
				$optionsMcats .= '<option  value="'.$_SESSION['m_cat_data'][$i]['m_cat_uid'].'">'.ucwords($_SESSION['m_cat_data'][$i]['m_cat']).'</option>';
			}
		}
		
		$optionsScats = '';
		for($i=0;$i<$tscat;$i++) {
			if(isset($_SESSION['s_cat_data']) && $_SESSION['s_cat_data'][$i]['m_cat_uid'] == $_SESSION['mcat_select'] ) {
				if(isset($_SESSION['s_cat_data']) && $_SESSION['s_cat_data'][$i]['s_cat_uid'] == $_SESSION['scat_select']) {
					$optionsScats .= '<option value="'.$_SESSION['s_cat_data'][$i]['s_cat_uid'].'" selected>'.ucwords($_SESSION['s_cat_data'][$i]['s_cat']).'</option>';
				} else {
					$optionsScats .= '<option value="'.$_SESSION['s_cat_data'][$i]['s_cat_uid'].'">'.ucwords($_SESSION['s_cat_data'][$i]['s_cat']).'</option>';
				}
			}
		}
		$form1 = array(
			array('element'=>'pform', 'name'=>'selectMcat', 'value'=>'./www-cgi/auctions.php?p=search', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
			array('element'=>'select', 'name'=>'mcat', 'value'=>''.$optionsMcats.'', 'js'=>'onchange="selectMcatSubmit();"', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;')
		);
		echo('<div style="width: 100%; text-align: left;"><h3>Category</h3></div>');
		echo(form($form1));
		
		$form2 = array(
			array('element'=>'pform', 'name'=>'selectScat', 'value'=>'./www-cgi/auctions.php?p=search', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
			array('element'=>'select', 'name'=>'scat', 'value'=>''.$optionsScats.'', 'js'=>'onchange="selectScatSubmit();"', 'text'=>'Sub Category:', 'size'=>'199', 'style'=>'width: 100%;')
		);
		echo('<div style="width: 100%; text-align: left;"><h3>Sub Category</h3></div>');
		echo(form($form2));
		
		$form3 = array(
			array('element'=>'pform', 'name'=>'postKeyword', 'value'=>'./www-cgi/auctions.php', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
			array('element'=>'tinput', 'name'=>'keyword', 'value'=>'', 'js'=>'', 'text'=>'#Keyword:', 'size'=>'199', 'style'=>'width: 100%;'),
			array('element'=>'sinput', 'name'=>'postKeywordSubmit', 'value'=>'update', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
		);
		echo('<div style="width: 100%; text-align: left;"><h3>Search by #Keyword</h3></div>');
		echo(form($form3));

} elseif($p == 'post') {//POST VIEW
	
	echo('<br>');
	
	if($_SESSION['seclvl'] == 0) {//not logged in
	
		echo('<br>you need to be logged in to post auctions...<br>');
		
	} elseif($_SESSION['seclvl'] == 1) {//logged in
		
		if(isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['price']) && isset($_POST['buyit']) && isset($_POST['time']) && isset($_POST['mcat']) && isset($_POST['scat']) ) {
			$imgxfer = 3;//IMAGE STORAGE TYPE	1:Both base64 & Local	2:base64		3:local
			$title = htmlentities($_POST['title'], ENT_QUOTES, 'UTF-8');
			$desc = htmlentities($_POST['desc'], ENT_QUOTES, 'UTF-8');
			$price = htmlentities($_POST['price'], ENT_QUOTES, 'UTF-8');
			$buyit = htmlentities($_POST['buyit'], ENT_QUOTES, 'UTF-8');
			$reserve = htmlentities($_POST['reser'], ENT_QUOTES, 'UTF-8');
			$time = htmlentities($_POST['time'], ENT_QUOTES, 'UTF-8');
			$mcat = htmlentities($_POST['mcat'], ENT_QUOTES, 'UTF-8');
			$scat = htmlentities($_POST['scat'], ENT_QUOTES, 'UTF-8');
			$bids = '0.00';
			$created = date("Y-m-d H:i:s");
			$start = time();
			if(empty($buyit)) { $buyit = '0.00'; }
			if(empty($reserve)) { $reserve = '0.00'; }

			if($title == null) {
				echo('<br>Auction title can not be blank...<br>');
			} elseif($desc == null) {
				echo('<br>Auction description can not be blank...<br>');
			} elseif($price == null) {
				echo('<br>Auction price can not be blank...<br>');
			} elseif($time == null) {
				echo('<br>Auction time must be selected...<br>');
			} else {
				
				$id = array(
					array('account'=>random_int('999999','9999999999999')),
					array('account'=>random_int('999999','9999999999999')),
					array('account'=>random_int('999999','9999999999999')),
					array('account'=>random_int('999999','9999999999999')),
					array('account'=>random_int('999999','9999999999999'))
				);
				$cid = count($id);
				
				for($i=0;$i<$cid;$i++) {
					$qq = dbi('1', 'SELECT COUNT(*) AS total FROM auctions WHERE aid='.$id[$i]['account'].'');
					$rr = mysqli_fetch_array($qq);
					if($rr['total'] == 0) {
						$qq = dbi('1', 'INSERT INTO auctions (uid,aid,title,description,price,bids,buyit,reserve,duration,mcat,scat,start,created) values (\''.$_SESSION['secact'].'\',\''.$id[$i]['account'].'\',\''.$title.'\',\''.$desc.'\',\''.$price.'\',\''.$bids.'\',\''.$buyit.'\',\''.$reserve.'\',\''.$time.'\',\''.$mcat.'\',\''.$scat.'\',\''.$start.'\',\''.$created.'\')  ');
						$img = array();
						if(!empty($_FILES['image1']['name'])) { $img[] = array('name'=>$_FILES['image1']['name'],'tmp_name'=>$_FILES['image1']['tmp_name']); }
						if(!empty($_FILES['image2']['name'])) { $img[] = array('name'=>$_FILES['image2']['name'],'tmp_name'=>$_FILES['image2']['tmp_name']); }
						if(!empty($_FILES['image3']['name'])) { $img[] = array('name'=>$_FILES['image3']['name'],'tmp_name'=>$_FILES['image3']['tmp_name']); }
						if(!empty($_FILES['image4']['name'])) { $img[] = array('name'=>$_FILES['image4']['name'],'tmp_name'=>$_FILES['image4']['tmp_name']); }
						if(!empty($_FILES['image5']['name'])) { $img[] = array('name'=>$_FILES['image5']['name'],'tmp_name'=>$_FILES['image5']['tmp_name']); }
						$imgc = count($img);
						
						if($imgc > 0) {
							for($ii=0;$ii<$imgc;$ii++) {
								$path = explode('www-cgi/auctions.php',$_SERVER['SCRIPT_FILENAME']);
								$path = $path[0].'www-bin/img/'.$_SESSION['secact'].'/';
    							if(!is_dir($path)) {
    								mkdir($path, 0755, true);
    							}
								$move1  = $img[$ii]['tmp_name'];
								$move2  = $path.$img[$ii]['name'];
								move_uploaded_file($move1,$move2);
								if($imgxfer == 1 || $imgxfer == 2) {
									$image  = file_get_contents($move2);
									$image  = base64_encode($image);
								}
								$imglnk = $move2;
								$ix = ($ii+1);
								$rx = dbi('1', 'SELECT COUNT(*) AS total FROM imglnk WHERE aid='.$id[$i]['account'].'');
								$ry = mysqli_fetch_array($rx);
								
								if($ry['total'] == 0) {
									dbi('1', 'INSERT INTO imglnk (aid,imglnk'.$ix.') values (\''.$id[$i]['account'].'\',\''.$imglnk.'\') ');
									if($imgxfer == 1 || $imgxfer == 2) {	dbi('1', 'INSERT INTO images (aid,image'.$ix.') values (\''.$id[$i]['account'].'\',\''.$image.'\') ');	}
								} else {
									dbi('1', 'UPDATE imglnk SET imglnk'.$ix.' = \''.$imglnk.'\' WHERE aid='.$id[$i]['account'].'');
									if($imgxfer == 1 || $imgxfer == 2) {	dbi('1', 'UPDATE images SET image'.$ix.' = \''.$image.'\' WHERE aid='.$id[$i]['account'].'');	}
								}
							}
						}
						$formVars = array('title','desc','price','buyit','reser','time','mcat','scat','image1','image2','image3','image4','image5');
						foreach($formVars as $var => $val) {
							if($var == '') {  }
							if(isset($_SESSION[$val])) {
								unset($_SESSION[$val]);
							}
							if(isset($_SESSION['ttlPaid'])) {
								unset($_SESSION['ttlPaid']);
							}
						}
						echo('<br>Thank you, your auction is now live...<br>');
						break;
					} else {//AID EXISTED
						break;	
					}
					
				}
								
			}

		}
		
		$formVars = array('title','desc','price','buyit','reser','time','mcat','scat','image1','image2','image3','image4','image5');
		foreach($formVars as $var => $val) {
			if($var == '') {
			  }
			if(!isset($_SESSION[$val])) {
				$_SESSION[$val] = '';
			} else {
				if(isset($_POST[$val])) {
					$_SESSION[$val] = $_POST[$val];
				}
			}
		}
		
		$day1 = 60 * 60 * 24;
		$optionsDays = '';
		for($i=1;$i<31;$i++) {
			if(isset($_SESSION['time']) && $_SESSION['time'] == $day1*$i) {
			
				$optionsDays .= '<option value="'.$day1*$i.'" selected>'.$i.' Day Auction</option>';
			} else {
				$optionsDays .= '<option value="'.$day1*$i.'">'.$i.' Day Auction</option>';
			}
		}

		if(isset($_SESSION['mcat']) && $_SESSION['mcat'] == null) {
			$_SESSION['mcat'] = 1;
		}
		if(isset($_SESSION['scat']) && $_SESSION['scat'] == null) {
			$_SESSION['scat'] = 1;
		}

		$tmcat = count($_SESSION['m_cat_data']);
		$tscat = count($_SESSION['s_cat_data']);
		
		$optionsMcats = '';
		for($i=0;$i<$tmcat;$i++) {
			if(isset($_SESSION['m_cat_data']) && $_SESSION['m_cat_data'][$i]['m_cat_uid'] == $_SESSION['mcat']) {
				$optionsMcats .= '<option value="'.$_SESSION['m_cat_data'][$i]['m_cat_uid'].'" selected>'.ucwords($_SESSION['m_cat_data'][$i]['m_cat']).'</option>';
			} else {
				$optionsMcats .= '<option  value="'.$_SESSION['m_cat_data'][$i]['m_cat_uid'].'">'.ucwords($_SESSION['m_cat_data'][$i]['m_cat']).'</option>';
			}
		}
		
		$optionsScats = '';
		for($i=0;$i<$tscat;$i++) {
			if(isset($_SESSION['s_cat_data']) && $_SESSION['s_cat_data'][$i]['m_cat_uid'] == $_SESSION['mcat'] ) {
				if(isset($_SESSION['s_cat_data']) && $_SESSION['s_cat_data'][$i]['s_cat_uid'] == $_SESSION['scat']) {
					$optionsScats .= '<option value="'.$_SESSION['s_cat_data'][$i]['s_cat_uid'].'" selected>'.ucwords($_SESSION['s_cat_data'][$i]['s_cat']).'</option>';
				} else {
					$optionsScats .= '<option value="'.$_SESSION['s_cat_data'][$i]['s_cat_uid'].'">'.ucwords($_SESSION['s_cat_data'][$i]['s_cat']).'</option>';
				}
			}
		}
		
		if(!isset($_SESSION['ttlPaid'])) {
			$_SESSION['ttlPaid'] = 0;
		}
		
		if(isset($_REQUEST['addImage'])) {
			//PAYMENT OPTIONS
			$payment = 'fail';
			$form3 = array(
				array('element'=>'pform', 'name'=>'imageBuy', 'value'=>'./www-cgi/auctions.php?p=checkout&c=2', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
				array('element'=>'hinput', 'name'=>'dbq4', 'value'=>'1', 'js'=>'', 'text'=>'', 'size'=>'199', 'style'=>''),
				array('element'=>'tinput', 'name'=>'name', 'value'=>'As appears on card...', 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Name:', 'size'=>'199', 'style'=>'width: 199px;'),
				array('element'=>'tinput', 'name'=>'number', 'value'=>'No dashes or spaces...', 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Number:', 'size'=>'19', 'style'=>'width: 199px;'),
				array('element'=>'tinput', 'name'=>'exmo', 'value'=>date("m"), 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Month:', 'size'=>'2', 'style'=>'width: 49px;'),
				array('element'=>'tinput', 'name'=>'exyr', 'value'=>date("Y")+6, 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Year:', 'size'=>'4', 'style'=>'width: 49px;'),
				array('element'=>'tinput', 'name'=>'cvv', 'value'=>rand(111,999), 'js'=>'onfocus="this.value=\'\';"', 'text'=>'CVV:', 'size'=>'4', 'style'=>'width: 49px;'),
				array('element'=>'sinput', 'name'=>'post', 'value'=>'activate', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			);
			//echo('<div style="width: 100%; text-align: left;"><h3>Activate $0.99</h3>*Add additional image...<br><br><br></div>');
			//count($form3);
			//echo(form($form3));
			
			//echo(paypal('1'));
			$payment = 'success';
			
			if($payment == 'success') {
				if($_SESSION['ttlPaid'] < 4) {
					$_SESSION['ttlPaid']++;
					$payment = 'fail';
				}
			}
		}
		
		if($_SESSION['ttlPaid'] == 0) {
			$form1 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				array('element'=>'fform', 'name'=>'postAuction', 'value'=>'./www-cgi/auctions.php?p=post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
				array('element'=>'tinput', 'name'=>'title', 'value'=>$_SESSION['title'], 'js'=>'', 'text'=>'Title:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'txarea', 'name'=>'desc', 'value'=>$_SESSION['desc'], 'js'=>'', 'text'=>'Desc:', 'size'=>'9999', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'price', 'value'=>$_SESSION['price'], 'js'=>'', 'text'=>'Price:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'buyit', 'value'=>$_SESSION['buyit'], 'js'=>'', 'text'=>'BuyIt:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'reser', 'value'=>'', 'js'=>$_SESSION['reser'], 'text'=>'Reserve:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'time', 'value'=>''.$optionsDays.'', 'js'=>'', 'text'=>'Duration:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'mcat', 'value'=>''.$optionsMcats.'', 'js'=>'onchange="postAuctionSubmit();"', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'scat', 'value'=>''.$optionsScats.'', 'js'=>'', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'finput', 'name'=>'image1', 'value'=>$_SESSION['image1'], 'js'=>'', 'text'=>'Image1:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'binput', 'name'=>'addImage', 'value'=>'FREE Additional Image', 'js'=>'onclick="addImageSubmit();"', 'text'=>'', 'size'=>'', 'style'=>'width: 100%;'),
				array('element'=>'sinput', 'name'=>'post', 'value'=>'post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			);
		} elseif($_SESSION['ttlPaid'] == 1) {
			$form1 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				array('element'=>'fform', 'name'=>'postAuction', 'value'=>'./www-cgi/auctions.php?p=post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
				array('element'=>'tinput', 'name'=>'title', 'value'=>$_SESSION['title'], 'js'=>'', 'text'=>'Title:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'txarea', 'name'=>'desc', 'value'=>$_SESSION['desc'], 'js'=>'', 'text'=>'Desc:', 'size'=>'9999', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'price', 'value'=>$_SESSION['price'], 'js'=>'', 'text'=>'Price:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'buyit', 'value'=>$_SESSION['buyit'], 'js'=>'', 'text'=>'BuyIt:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'reser', 'value'=>$_SESSION['reser'], 'js'=>'', 'text'=>'Reserve:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'time', 'value'=>''.$optionsDays.'', 'js'=>'', 'text'=>'Duration:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'mcat', 'value'=>''.$optionsMcats.'', 'js'=>'postAuctionSubmit();', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'scat', 'value'=>''.$optionsScats.'', 'js'=>'', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'finput', 'name'=>'image1', 'value'=>$_SESSION['image1'], 'js'=>'', 'text'=>'Image1:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image2', 'value'=>$_SESSION['image2'], 'js'=>'', 'text'=>'Image2:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'binput', 'name'=>'addImage', 'value'=>'FREE Additional Image', 'js'=>'onclick="addImageSubmit();"', 'text'=>'', 'size'=>'', 'style'=>'width: 100%;'),
				array('element'=>'sinput', 'name'=>'post', 'value'=>'post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			);
		} elseif($_SESSION['ttlPaid'] == 2) {
			$form1 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				array('element'=>'fform', 'name'=>'postAuction', 'value'=>'./www-cgi/auctions.php?p=post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
				array('element'=>'tinput', 'name'=>'title', 'value'=>$_SESSION['title'], 'js'=>'', 'text'=>'Title:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'txarea', 'name'=>'desc', 'value'=>$_SESSION['desc'], 'js'=>'', 'text'=>'Desc:', 'size'=>'9999', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'price', 'value'=>$_SESSION['price'], 'js'=>'', 'text'=>'Price:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'buyit', 'value'=>$_SESSION['buyit'], 'js'=>'', 'text'=>'BuyIt:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'reser', 'value'=>$_SESSION['reser'], 'js'=>'', 'text'=>'Reserve:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'time', 'value'=>''.$optionsDays.'', 'js'=>'', 'text'=>'Duration:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'mcat', 'value'=>''.$optionsMcats.'', 'js'=>'postAuctionSubmit();', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'scat', 'value'=>''.$optionsScats.'', 'js'=>'', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'finput', 'name'=>'image1', 'value'=>$_SESSION['image1'], 'js'=>'', 'text'=>'Image1:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image2', 'value'=>$_SESSION['image2'], 'js'=>'', 'text'=>'Image2:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image3', 'value'=>$_SESSION['image3'], 'js'=>'', 'text'=>'Image3:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'binput', 'name'=>'addImage', 'value'=>'FREE Additional Image', 'js'=>'onclick="addImageSubmit();"', 'text'=>'', 'size'=>'', 'style'=>'width: 100%;'),
				array('element'=>'sinput', 'name'=>'post', 'value'=>'post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			);
		} elseif($_SESSION['ttlPaid'] == 3) {
				$form1 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				array('element'=>'fform', 'name'=>'postAuction', 'value'=>'./www-cgi/auctions.php?p=post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
				array('element'=>'tinput', 'name'=>'title', 'value'=>$_SESSION['title'], 'js'=>'', 'text'=>'Title:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'txarea', 'name'=>'desc', 'value'=>$_SESSION['desc'], 'js'=>'', 'text'=>'Desc:', 'size'=>'9999', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'price', 'value'=>$_SESSION['price'], 'js'=>'', 'text'=>'Price:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'buyit', 'value'=>$_SESSION['buyit'], 'js'=>'', 'text'=>'BuyIt:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'reser', 'value'=>$_SESSION['reser'], 'js'=>'', 'text'=>'Reserve:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'time', 'value'=>''.$optionsDays.'', 'js'=>'', 'text'=>'Duration:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'mcat', 'value'=>''.$optionsMcats.'', 'js'=>'postAuctionSubmit();', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'scat', 'value'=>''.$optionsScats.'', 'js'=>'', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'finput', 'name'=>'image1', 'value'=>$_SESSION['image1'], 'js'=>'', 'text'=>'Image1:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image2', 'value'=>$_SESSION['image2'], 'js'=>'', 'text'=>'Image2:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image3', 'value'=>$_SESSION['image3'], 'js'=>'', 'text'=>'Image3:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image4', 'value'=>$_SESSION['image4'], 'js'=>'', 'text'=>'Image4:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'binput', 'name'=>'addImage', 'value'=>'FREE Additional Image', 'js'=>'onclick="addImageSubmit();"', 'text'=>'', 'size'=>'', 'style'=>'width: 100%;'),
				array('element'=>'sinput', 'name'=>'post', 'value'=>'post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			);
		} elseif($_SESSION['ttlPaid'] == 4) {
				$form1 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				array('element'=>'fform', 'name'=>'postAuction', 'value'=>'./www-cgi/auctions.php?p=post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
				array('element'=>'tinput', 'name'=>'title', 'value'=>$_SESSION['title'], 'js'=>'', 'text'=>'Title:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'txarea', 'name'=>'desc', 'value'=>$_SESSION['desc'], 'js'=>'', 'text'=>'Desc:', 'size'=>'9999', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'price', 'value'=>$_SESSION['price'], 'js'=>'', 'text'=>'Price:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'buyit', 'value'=>$_SESSION['buyit'], 'js'=>'', 'text'=>'BuyIt:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'tinput', 'name'=>'reser', 'value'=>$_SESSION['reser'], 'js'=>'', 'text'=>'Reserve:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'time', 'value'=>''.$optionsDays.'', 'js'=>'', 'text'=>'Duration:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'mcat', 'value'=>''.$optionsMcats.'', 'js'=>'postAuctionSubmit();', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'select', 'name'=>'scat', 'value'=>''.$optionsScats.'', 'js'=>'', 'text'=>'Category:', 'size'=>'199', 'style'=>'width: 100%;'),
				array('element'=>'finput', 'name'=>'image1', 'value'=>$_SESSION['image1'], 'js'=>'', 'text'=>'Image1:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image2', 'value'=>$_SESSION['image2'], 'js'=>'', 'text'=>'Image2:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image3', 'value'=>$_SESSION['image3'], 'js'=>'', 'text'=>'Image3:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image4', 'value'=>$_SESSION['image4'], 'js'=>'', 'text'=>'Image4:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'finput', 'name'=>'image5', 'value'=>$_SESSION['image5'], 'js'=>'', 'text'=>'Image5:', 'size'=>'199', 'style'=>'width: 100%'),
				array('element'=>'binput', 'name'=>'addImage', 'value'=>'FREE Additional Image', 'js'=>'onclick="addImageSubmit();"', 'text'=>'', 'size'=>'', 'style'=>'width: 100%;'),
				array('element'=>'sinput', 'name'=>'post', 'value'=>'post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			);
		}

		$form2 = array(//array('element'=>'', 'name'=>'', 'value'=>'', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
			array('element'=>'pform', 'name'=>'addImages', 'value'=>'./www-cgi/auctions.php?p=post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
			array('element'=>'hinput', 'name'=>'addImage', 'value'=>'1', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
		);
		echo('<div style="width: 100%; text-align: left;"><h3>New Auction</h3></div>');
		echo(form($form1));
		echo(form($form2));
		
	}
	
	for($i=0;$i<4;$i++) {
		echo('<br>');
	}
	
} elseif($p == 'bids') {//BIDS VIEW
	
	if($_SESSION['seclvl'] == 1) {
		if (is_numeric($c)) {
			$bid = 1.00;
			$qq = dbi('1', 'SELECT * FROM auctions WHERE aid = \''.$c.'\' LIMIT 1');
			while ($row_qq = mysqli_fetch_array($qq)) {
			
				$start = $row_qq['start'];
				$duration = $row_qq['duration'];
				$time = $start+$duration-time();
				$time = $time/86400;
				if ($time <= 0) {
					$timeLeft = 'ended';
				} elseif($time <= 2) { 
					$timeLeft = 'short';
				} elseif($time <= 4) {
					$timeLeft = 'medium';
				} else {
					$timeLeft = 'long';
				}
				if($timeLeft != 'ended') {
					if ($row_qq['bids'] == null) { $bids = 0.00; } else { $bids = $row_qq['bids']; }
					$bidttl = $bids+$bid;
					//ALLOW ASB $row_qq[\'wid\'] != $_SESSION[\'secact\']      BLOCK ASB  ($row_qq[\'uid\'] != $_SESSION[\'secact\']) && ($row_qq[\'wid\'] != $_SESSION[\'secact\'])
					if(($row_qq['uid'] != $_SESSION['secact']) && ($row_qq['wid'] != $_SESSION['secact'])) {
						dbi('1', 'INSERT INTO bids (aid,uid,bidamt,bidttl) values (\''.$c.'\', \''.$_SESSION['secact'].'\', \''.$bid.'\', \''.$bidttl.'\')');
						dbi('1', 'UPDATE auctions SET bids = \''.$bidttl.'\', wid = \''.$_SESSION['secact'].'\' WHERE auctions.aid = \''.$c.'\' LIMIT 1');
					}
				}
			}
		}
	}
	
} elseif($p == 'buys') {//BUYS VIEW

	if($_SESSION['seclvl'] == 1) {
		if (is_numeric($c)) {
			if(isset($_POST['PayLink'])) {
				$PayLink = htmlentities($_POST['PayLink'],ENT_QUOTES,'UTF-8');
				dbi('1', 'UPDATE buychat SET plink = \''.$PayLink.'\' WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
			}
			if(isset($_POST['ShipLink'])) {
				$ShipLink = htmlentities($_POST['ShipLink'],ENT_QUOTES,'UTF-8');
				dbi('1', 'UPDATE buychat SET slink = \''.$ShipLink.'\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
			}
			if(isset($_POST['FeedBack'])) {
				$FeedBack = htmlentities($_POST['FeedBack'],ENT_QUOTES,'UTF-8');
				$qg = dbi('1','SELECT * FROM buychat WHERE buychat.aid = \''.$c.'\' LIMIT 1 ');
				while($row_qg = mysqli_fetch_array($qg)) {
					if($_SESSION['secact'] == $row_qg['uid']) {
						dbi('1','UPDATE buychat, reviews SET buychat.sfeed = \''.$FeedBack.'\', reviews.sreview = \''.$FeedBack.'\' WHERE buychat.aid = \''.$c.'\' AND reviews.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
					} elseif($_SESSION['secact'] == $row_qg['sid']) {
						dbi('1','UPDATE buychat, reviews SET buychat.bfeed = \''.$FeedBack.'\', reviews.breview = \''.$FeedBack.'\' WHERE buychat.aid = \''.$c.'\' AND reviews.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
					}
				}
			}
			$qa = dbi('1', 'SELECT COUNT(*) FROM buys WHERE buys.aid = \''.$c.'\' AND (buys.uid = \''.$_SESSION['secact'].'\' OR buys.sid = \''.$_SESSION['secact'].'\') ');
			$row_qa = mysqli_fetch_row($qa);
			$qf = dbi('1', 'SELECT buyit FROM auctions  WHERE auctions.aid = \''.$c.'\' LIMIT 1 ');
			while($row_qf = mysqli_fetch_array($qf)) {
				$buyit = $row_qf['buyit'];
			}
			$mssg = array(//array('mssgId'=>'', 'yes'=>'', 'no'=>'', 'mssgb'=>'', 'mssgs'=>'')
				array('mssgId'=>'1', 'yes'=>'101,2', 'no'=>'103,4', 'mssgb'=>'waiting on seller to accept your offer...', 'mssgs'=>'you are being offered '.$buyit.' from '.$_SESSION['secali'].', accept?'),
				array('mssgId'=>'2', 'yes'=>'201,6', 'no'=>'104,5', 'mssgb'=>'waiting on seller to accept your offer...', 'mssgs'=>'you are being offered '.$buyit.' from '.$_SESSION['secali'].', accept?'),
				array('mssgId'=>'101', 'yes'=>'1,0', 'no'=>'103,4', 'mssgb'=>'your offer should be accepted shortly...', 'mssgs'=>'you are being offered '.$buyit.' from '.$_SESSION['secali'].', accept?'),
				array('mssgId'=>'102', 'yes'=>'', 'no'=>'', 'mssgb'=>'your offer is now cancelled...', 'mssgs'=>'buyer has cancelled their offer...'),
				array('mssgId'=>'103', 'yes'=>'206,11', 'no'=>'1,0', 'mssgb'=>'are you sure you want to cancel this offer?', 'mssgs'=>'you are being offered '.$buyit.' from '.$_SESSION['secali'].', accept?'),
				array('mssgId'=>'104', 'yes'=>'206,11', 'no'=>'2,1', 'mssgb'=>'waiting on seller to accept your offer...', 'mssgs'=>'are you sure you want to cancel this offer?'),
				array('mssgId'=>'201', 'yes'=>'203,8', 'no'=>'204,9', 'mssgb'=>'seller will post link for online payment...', 'mssgs'=>'post link to online payment (ie. wester union, paypal, firepay)...'),
				array('mssgId'=>'202', 'yes'=>'', 'no'=>'', 'mssgb'=>'your offer was cancelled...', 'mssgs'=>'this offer is now cancelled...'),
				array('mssgId'=>'203', 'yes'=>'205,10', 'no'=>'201,6', 'mssgb'=>'where would you like this shipped (ie. Jim.com, 666 5th Ave, New York, NY 10019)...', 'mssgs'=>'buyer will post link for shipping...'),
				array('mssgId'=>'204', 'yes'=>'206,11', 'no'=>'201,6', 'mssgb'=>'are you sure you want to cancel this offer?', 'mssgs'=>'are you sure you want to cancel this offer?'),
				array('mssgId'=>'205', 'yes'=>'205,10', 'no'=>'203,8', 'mssgb'=>'leave feedback to complete this transaction...', 'mssgs'=>'leave feedback to complete this transaction...'),
				array('mssgId'=>'206', 'yes'=>'', 'no'=>'', 'mssgb'=>'your offer was cancelled...', 'mssgs'=>'this offer is now cancelled...')
			);
			$ciri = array(//array('mssg'=>'')
				array('mssg'=>'<a href="https://www.youtube.com/watch?v=RkkdYdWMfQ0" target="_blank" style="color: #0000EE;">driving music **BASS BOOSTED**...</a>'),
				array('mssg'=>'<a href="http://www.lucchese.com" target="_blank" style="color: #0000EE;">try handmade boots by Lucchese</a>'),
				array('mssg'=>'<a href="http://www.monsterenergy.com" target="_blank" style="color: #0000EE;">try a Monster Energy Ultra Sunrise today...</a>'),
				array('mssg'=>'<a href="http://www.tacobell.com" target="_blank" style="color: #0000EE;">try a Taco Bell Grande Stacker Box...</a>'),
				array('mssg'=>'have you advertised yet?'),
				array('mssg'=>'<a href="http://www.callofduty.com" target="_blank" style="color: #0000EE;">checkout Call of Duty mobile!</a>'),
				array('mssg'=>'<a href="https://www.amazon.com/Terminator-Dark-Fate-Linda-Hamilton/dp/B07ZP8J83T" target="_blank" style="color: #0000EE;">I\'ll be back...</a>'),
				array('mssg'=>'<a href="http://www.mcdonalds.com" target="_blank" style="color: #0000EE;">da da da dat da...</a>'),
				array('mssg'=>'<a href="http://www.hertz.com" target="_blank" style="color: #0000EE;">call hertz, we\'ll pick you up...</a>'),
				array('mssg'=>'have you advertised yet?'),
				array('mssg'=>'<a href="http://www.myfamilymobile.com" target="_blank" style="color: #0000EE;">you have voicemail...</a>'),
				array('mssg'=>'<a href="http://www.starwars.com" target="_blank" style="color: #0000EE;">the force is with you...</a>'),
				array('mssg'=>'<a href="http://www.pizzahut.com" target="_blank" style="color: #0000EE;">try a Pizza Hut \'The Original Pan\' today...</a>'),
				array('mssg'=>'<a href="http://www.popeyes.com" target="_blank" style="color: #0000EE;">try Popeye\'s new chicken sandwich!</a>'),
				array('mssg'=>'have you advertised yet?'),
				array('mssg'=>'<a href="http://www.paramount.com" target="_blank" style="color: #0000EE;">run forest...</a>'),
				array('mssg'=>'<a href="https://www.youtube.com/watch?v=ODuKIpDRcXI" target="_blank" style="color: #0000EE;">slow your roll...</a>'),
				array('mssg'=>'<a href="http://www.dollargeneral.com" target="_blank" style="color: #0000EE;">another day, another dollar...</a>'),
				array('mssg'=>'have you advertised yet?')
			);
			if($row_qa['0'] == 0) {
				$qc = dbi('1', 'SELECT * FROM auctions WHERE auctions.aid = \''.$c.'\' LIMIT 1');
				while($row_qc = mysqli_fetch_array($qc)) {
					if($row_qc['uid'] != $_SESSION['secact']) {
						$mssgb = $mssg['0']['mssgb'];
						$mssgs = $mssg['1']['mssgs'];
						$mssgs = str_replace('[buyit]',$row_qc['buyit'],$mssgs);
						$mssgs = str_replace('[buyer]',$_SESSION['secali'],$mssgs);
						dbi('1', 'INSERT INTO buys (aid,uid,sid,buyamt) values (\''.$row_qc['aid'].'\', \''.$_SESSION['secact'].'\', \''.$row_qc['uid'].'\', \''.$row_qc['buyit'].'\') ');
						dbi('1', 'INSERT INTO buychat (aid,uid,sid,mssgb,mssgbid,mssgs,mssgsid) values (\''.$row_qc['aid'].'\', \''.$_SESSION['secact'].'\', \''.$row_qc['uid'].'\', \''.$mssgb.'\', \''.$mssg['0']['mssgId'].'\', \''.$mssgs.'\', \''.$mssg['1']['mssgId'].'\') ');
						dbi('1', 'INSERT INTO reviews (aid,uid,sid) values (\''.$row_qc['aid'].'\',\''.$_SESSION['secact'].'\',\''.$row_qc['uid'].'\') ');
					}
				}
			} else {
				if(isset($_POST['dbq1'])) {
					if(is_numeric($_POST['dbq1'])) {
						$qd = dbi('1', 'SELECT * FROM buychat WHERE buychat.aid = \''.$c.'\' AND (buychat.uid = \''.$_SESSION['secact'].'\' OR buychat.sid = \''.$_SESSION['secact'].'\') LIMIT 1 ');
						while($row_qd = mysqli_fetch_array($qd)) {
							if($row_qd['uid'] == $_SESSION['secact']) {//BUYER
								$mc = count($mssg);
								if($row_qd['mssgbid'] == 999) {
									$cm = random_int(0,18);
									dbi('1', 'UPDATE buychat SET mssgb = \''.$ciri[$cm]['mssg'].'\', mssgbid = \'999\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
								} else {
									for($i=0;$i<$mc;$i++) {
										if($mssg[$i]['mssgId'] == $row_qd['mssgbid']) {
										
											if($_POST['dbq1'] == 1) {
												$update = explode(',',$mssg[$i]['yes']);
												if(!isset($update['0']) || !isset($update['1'])) {
													$cm = random_int(0,18);
													dbi('1', 'UPDATE buychat SET mssgb = \''.$ciri[$cm]['mssg'].'\', mssgbid = \'999\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
												} else {
													if($update['0'] < 200) {
														dbi('1', 'UPDATE buychat SET mssgb = \''.$mssg[$update['1']]['mssgb'].'\', mssgbid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
													} else {
														dbi('1', 'UPDATE buychat SET mssgb = \''.$mssg[$update['1']]['mssgb'].'\', mssgbid = \''.$update['0'].'\', mssgs = \''.$mssg[$update['1']]['mssgs'].'\', mssgsid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
													}
												}
											} elseif($_POST['dbq1'] == 2) {
												$update = explode(',',$mssg[$i]['no']);
												if(!isset($update['0']) || !isset($update['1'])) {
													$cm = random_int(0,18);
													dbi('1', 'UPDATE buychat SET mssgb = \''.$ciri[$cm]['mssg'].'\', mssgbid = \'999\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
												} else {
													if($update['0'] < 200) {
														dbi('1', 'UPDATE buychat SET mssgb = \''.$mssg[$update['1']]['mssgb'].'\', mssgbid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
													} else {
														dbi('1', 'UPDATE buychat SET mssgb = \''.$mssg[$update['1']]['mssgb'].'\', mssgbid = \''.$update['0'].'\', mssgs = \''.$mssg[$update['1']]['mssgs'].'\', mssgsid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.uid = \''.$_SESSION['secact'].'\' ');
													}
												}
											}
										}
									}
								}
							} elseif($row_qd['sid'] == $_SESSION['secact']) {//SELLER
								$mc = count($mssg);
								if($row_qd['mssgsid'] == 999) {
									$cm = random_int(0,18);
									dbi('1', 'UPDATE buychat SET mssgs = \''.$ciri[$cm]['mssg'].'\', mssgsid = \'999\'  WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
								} else {
									for($i=0;$i<$mc;$i++) {
										if($mssg[$i]['mssgId'] == $row_qd['mssgsid']) {
											if($_POST['dbq1'] == 1) {
												$update = explode(',',$mssg[$i]['yes']);
												if(!isset($update['0']) || !isset($update['1'])) {
													$cm = random_int(0,18);
													dbi('1', 'UPDATE buychat SET mssgs = \''.$ciri[$cm]['mssg'].'\', mssgsid = \'999\' WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
												} else {
													if($update['0'] < 200) {
														dbi('1', 'UPDATE buychat SET mssgs = \''.$mssg[$update['1']]['mssgs'].'\', mssgsid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
													} else {
														dbi('1', 'UPDATE buychat SET mssgb = \''.$mssg[$update['1']]['mssgb'].'\', mssgbid = \''.$update['0'].'\', mssgs = \''.$mssg[$update['1']]['mssgs'].'\', mssgsid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
													}
												}
											} elseif($_POST['dbq1'] == 2) {
												$update = explode(',',$mssg[$i]['no']);
												if(!isset($update['0']) || !isset($update['1'])) {
													$cm = random_int(0,18);
													dbi('1', 'UPDATE buychat SET mssgs = \''.$ciri[$cm]['mssg'].'\', mssgsid = \'999\' WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
												} else {
													if($update['0'] < 200) {
														dbi('1', 'UPDATE buychat SET mssgs = \''.$mssg[$update['1']]['mssgs'].'\', mssgsid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
													} else {
														dbi('1', 'UPDATE buychat SET mssgb = \''.$mssg[$update['1']]['mssgb'].'\', mssgbid = \''.$update['0'].'\', mssgs = \''.$mssg[$update['1']]['mssgs'].'\', mssgsid = \''.$update['0'].'\' WHERE buychat.aid = \''.$c.'\' AND buychat.sid = \''.$_SESSION['secact'].'\' ');
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}

} elseif($p == 'details') {//DETAILS VIEW
	
	echo('<br>');
	
	if(is_numeric($c)) {
	
		if(isset($_SESSION['seclvl']) && $_SESSION['seclvl'] == 1) {
			if(isset($_POST['dbq4'])) {
				if($_POST['dbq4'] == 1) {
					$start = time();
					$created = date("Y-m-d H:i:s");
					dbi('1', 'UPDATE auctions SET start = \''.$start.'\', created = \''.$created.'\' WHERE auctions.aid = \''.$c.'\' AND auctions.uid = \''.$_SESSION['secact'].'\'');
				} elseif($_POST['dbq4'] == 2) {
					dbi('1', 'DELETE FROM auctions WHERE auctions.aid = \''.$c.'\' AND auctions.uid = \''.$_SESSION['secact'].'\'');
				}
			}
		}
		
		$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.uid, auctions.wid, auctions.title, auctions.description, auctions.price, auctions.bids, auctions.buyit, auctions.reserve, auctions.duration, auctions.start, auctions.mcat, auctions.scat, auctions.updated, auctions.created, imglnk.imglnk1, imglnk.imglnk2, imglnk.imglnk3, imglnk.imglnk4, imglnk.imglnk5 FROM auctions LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE auctions.aid = \''.$c.'\' LIMIT 1');
		if(mysqli_num_rows($qq) == 0) {
			echo('<div style="width: 100%; text-align: left;"><h3>Nothing to see here ... move along... move along.</h3></div>');
		}
		while($row_qq = mysqli_fetch_array($qq)) {
		
			echo('<div class="auctionContainer">');
			$imgloc = array($row_qq['imglnk1'],$row_qq['imglnk2'],$row_qq['imglnk3'],$row_qq['imglnk4'],$row_qq['imglnk5']);
			$start = $row_qq['start'];
			$duration = $row_qq['duration'];
			$time = $start+$duration-time();
			$time = $time/86400;
			$xtime = time();
			if ($time <= 0) {
				$timeLeft = 'ended';
			} elseif($time <= 2) { 
				$timeLeft = 'short';
			} elseif($time <= 4) {
				$timeLeft = 'medium';
			} else {
				$timeLeft = 'long';
			}
			if($row_qq['wid'] != (null || 0)) {
				$qa = dbi('1', 'SELECT users.ali, users.rev FROM users WHERE users.id = \''.$row_qq['wid'].'\' ');
				while($row_qa = mysqli_fetch_array($qa)) {
					if($row_qa['ali'] == null) {
						$usrali = 'anonymous';
					} else {
						$usrali = $row_qa['ali'];
					}
					if($row_qa['rev'] == null) {
						$usrrev = 0;
					} else {
						$usrrev = $row_qa['rev'];
					}
				}
			} else {
				$usrali = 'no bids';
			}
			if($row_qq['xid'] != (null || 0)) {
				$qc = dbi('1', 'SELECT users.ali, users.rev FROM users WHERE users.id = \''.$row_qq['uid'].'\' ');
				while($row_qc = mysqli_fetch_array($qc)) {
					if($row_qc['ali'] == null) {
						$slrali = 'anonymous';
					} else {
						$slrali = $row_qc['ali'];
					}
					if($row_qc['rev'] == null) {
						$slrrev = 0;
					} else {
						$slrrev = $row_qc['rev'];
					}
				}
			} else {
				$slrali = 'anonymous';
			}
			if($row_qq['bids'] == null) { $bids = 0.00+$row_qq['price']; } else { $bids = $row_qq['price']+$row_qq['bids']; }
			
			echo('<div class="auctionWinnerIcon" onclick="zoom();"><img src="./www-img/zoom.png" width="55" height="55"></div>');
			if($usrali != 'no bids') {
				echo('<div class="auctionWinnerBar" id="auctionWinnerBar">current winner: '.$usrali.'('.$usrrev.')</div>');
			} else {
				echo('<div class="auctionWinnerBar" id="auctionWinnerBar">current winner: '.$usrali.'</div>');
			}
			echo('<div class="auctionTitle" id="auctionTitle">'.substr($row_qq['title'],0,99).'</div>');//<img src="'.$imgloc.'" width="300" height="300"></div>');
			
			
			for($i=0;$i<5;$i++) {
				$ii = $i+1;
				if($ii == 1) {
					if($imgloc[$i] == '') {
						$image = './www-img/noImage2.jpg';
						echo('<div class="auctionImage" style="background: url('.$image.') no-repeat center center; display: block;"></div>');
					} else {
						$image = explode('www-bin',$imgloc[$i]);
						$image = './www-bin'.$image['1'];
						echo('<div class="auctionImage" id="auctionImage'.$ii.'" style="background: url('.$image.') no-repeat center center; display: block;"></div>');
					}
				} else {
					if($imgloc[$i] != '') {
						$image = explode('www-bin',$imgloc[$i]);
						$image = './www-bin'.$image['1'];
						echo('<div class="auctionImage" id="auctionImage'.$ii.'" style="background: url('.$image.') no-repeat center center; display: none;"></div>');
					}
				}
			}
			if($imgloc['1'] != '' || $imgloc['2'] != '' || $imgloc['3'] != '' || $imgloc['4'] != '') {
				echo('<div class="auctionImageNav" id="auctionImageNav"><div class="auctionImageNavLeft" id="auctionImageNavLeft" onclick="navLeft();"><img src="./www-img/navLeftArrow.png"></div><div class="auctionImageNavRight" id="auctionImageNavRight" onclick="navRight();"><img src="./www-img/navRightArrow.png"></div></div>');
			}
			
			
			
			$qd = dbi('1', 'SELECT COUNT(*) FROM buys WHERE buys.aid = \''.$c.'\' AND (buys.uid = \''.$_SESSION['secact'].'\' OR buys.sid = \''.$_SESSION['secact'].'\') ');
			$qd_row = mysqli_fetch_row($qd);
			if($qd_row['0'] == 0) {
				if(($row_qq['start']+$row_qq['duration']) < $xtime) {
					if(($row_qq['price']+$row_qq['bids']) > $row_qq['reserve']) {
						$bid = $row_qq['price']+$row_qq['bids'];
						$bidm = number_format($row_qq['price']+$row_qq['bids'],2,'.',',');
						$uid = $row_qq['wid'];
						$sid = $row_qq['uid'];
						$qf = dbi('1','SELECT * FROM users WHERE users.id = \''.$uid.'\' LIMIT 1');
						while($row_qf = mysqli_fetch_array($qf)) {
							$uidali = $row_qf['ali'].'('.$row_qf['rev'].')';
						}
						$mssgb = 'waiting on seller to accept your offer...';
						$mssgbid = '1';
						$mssgs = 'you are being offered $'.$bidm.' from '.$uidali.', accept?';
						$mssgsid = '2';
						dbi('1', 'INSERT INTO buys (aid,uid,sid,buyamt) values (\''.$c.'\', \''.$uid.'\', \''.$sid.'\', \''.$bid.'\') ');
						dbi('1', 'INSERT INTO buychat (aid,uid,sid,mssgb,mssgbid,mssgs,mssgsid) values (\''.$c.'\', \''.$uid.'\', \''.$sid.'\', \''.$mssgb.'\', \''.$mssgbid.'\', \''.$mssgs.'\', \''.$mssgsid.'\') ');
						dbi('1', 'INSERT INTO reviews (aid,uid,sid) values (\''.$c.'\',\''.$uid.'\',\''.$sid.'\') ');
						$qd_row['0'] = 1;
					} else {
						echo('<div class="auctionInfo">');
						echo(dbq('4',$ai.'<span class="auctionInfoStatus">Auction Ended, Would you like to relist this item?</span>', $c));
						echo('</div>');	
					}
				}
			 }
			 
			 if($qd_row['0'] > 0) {
				$qe = dbi('1', 'SELECT * FROM buychat WHERE buychat.aid = \''.$c.'\' AND (buychat.uid = \''.$_SESSION['secact'].'\' OR buychat.sid = \''.$_SESSION['secact'].'\') ');
				while($row_qe = mysqli_fetch_array($qe)) {
				
					if($row_qe['mssgbid'] == 201 || $row_qe['mssgsid'] == 201) {
						echo('<div class="auctionInput">');
						$form1 = array(
							array('element'=>'pform', 'name'=>'postInfo', 'value'=>'./www-cgi/auctions.php?p=buys', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
							array('element'=>'hinput', 'name'=>'c', 'value'=>$c, 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
							array('element'=>'tinput', 'name'=>'PayLink', 'value'=>$row_qe['plink'], 'js'=>'', 'text'=>'PayLink:', 'size'=>'199', 'style'=>'margin: 0px 0px -3px 0px; width: 90%;'),
							array('element'=>'iinput', 'name'=>'post', 'value'=>'./www-img/refresh3.png', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
						);
						echo(form($form1));
						echo('</div>');
					}
					
					if($row_qe['mssgbid'] == 203 || $row_qe['mssgsid'] == 203) {
						echo('<div class="auctionInput">');
						$form1 = array(
							array('element'=>'pform', 'name'=>'postInfo', 'value'=>'./www-cgi/auctions.php?p=buys', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
							array('element'=>'hinput', 'name'=>'c', 'value'=>$c, 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
							array('element'=>'tinput', 'name'=>'ShipLink', 'value'=>$row_qe['slink'], 'js'=>'', 'text'=>'Ship2Address:', 'size'=>'199', 'style'=>'margin: 0px 0px -3px 0px; width: 90%;'),
							array('element'=>'iinput', 'name'=>'post', 'value'=>'./www-img/refresh3.png', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
						);
						echo(form($form1));
						echo('</div>');
					}
					
					if($row_qe['mssgbid'] == 205 || $row_qe['mssgsid'] == 205) {
						echo('<div class="auctionInput">');
						if($_SESSION['secact'] == $row_qe['uid']) {
							$fback = $row_qe['sfeed'];
						} elseif($_SESSION['secact'] == $row_qe['sid']) {
							$fback = $row_qe['bfeed'];
						}
						$form1 = array(
							array('element'=>'pform', 'name'=>'postInfo', 'value'=>'./www-cgi/auctions.php?p=buys', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
							array('element'=>'hinput', 'name'=>'c', 'value'=>$c, 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
							array('element'=>'tinput', 'name'=>'FeedBack', 'value'=>$fback, 'js'=>'', 'text'=>'Feedback:', 'size'=>'199', 'style'=>'margin: 0px 0px -3px 0px; width: 90%;'),
							array('element'=>'iinput', 'name'=>'post', 'value'=>'./www-img/refresh3.png', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
						);
						echo(form($form1));
						echo('</div>');
					}
					
					echo('<div class="auctionInfo">');
					if($_SESSION['secact'] == $row_qe['uid']) {
						echo(dbq('1',$ai.'<span class="auctionInfoStatus">'.$row_qe['mssgb'].'</span>', $c));
					} elseif($_SESSION['secact'] == $row_qe['sid']) {
						echo(dbq('1',$ai.'<span class="auctionInfoStatus">'.$row_qe['mssgs'].'</span>', $c));
					}
					echo('</div>');
				}
			}
			
			echo('</div>');
			echo('<div class="auctionDescriptionW" id="auctionDescriptionW"></div>');
			echo('<div class="auctionDescription" id="auctionDescription"><a href="https://freeauctions.co#'.$row_qq['xid'].'" target="_blank" style="color: #0000EE;">freeauctions.co#'.$row_qq['xid'].'</a><br>'.$row_qq['description'].'</div>');
			
			echo('<div class="auctionInfo1" id="auctionInfo1">time:&nbsp;'.$timeLeft.'&nbsp;&nbsp;seller:&nbsp;'.$slrali.'('.$slrrev.')&nbsp;&nbsp;&nbsp;</div>');
			$bids = number_format($bids,2,'.',',');
			$row_qq['buyit'] = number_format($row_qq['buyit'],2,'.',',');
			if($row_qq['buyit'] != 0.00) {
				echo('<div class="auctionInfo2" id="auctionInfo2">bid:&nbsp;$'.$bids.'&nbsp;.&nbsp;buy:&nbsp;$'.$row_qq['buyit'].'&nbsp;&nbsp;&nbsp;</div>');
			} else {
				echo('<div class="auctionInfo2" id="auctionInfo2">bid:&nbsp;$'.$bids.'&nbsp;.&nbsp;buy:&nbsp;auction only&nbsp;&nbsp;&nbsp;</div>');
			}
			
			if($_SESSION['seclvl'] == 1 && $timeLeft != 'ended') {
				echo('<div class="auctionButtonBid" id="auctionButtonBid" onclick="toggle(\'bids\',\''.$row_qq['xid'].'\');">BID NOW</div>');
			} else {
				echo('<div class="auctionButtonBid" id="auctionButtonBid" onclick="toggle(\'page\',\'account\');">BID NOW</div>');
			}
			if($_SESSION['seclvl'] == 1 && $timeLeft != 'ended' && $row_qq['buyit'] != 0.00) {
				echo('<div class="auctionButtonBuy" id="auctionButtonBuy" onclick="toggle(\'buys\',\''.$row_qq['xid'].'\');">BUY NOW</div>');
			} else {
				echo('<div class="auctionButtonBuy" id="auctionButtonBuy" onclick="toggle(\'page\',\'account\');">BUY NOW</div>');
			}
		
			for($i=0;$i<19;$i++) {
				echo('<br>');
			}
			echo('</div>');
		}	
	
	}
	
} elseif($p == 'checkout') {

	if($_SESSION['seclvl'] == 1) {
	
		if(is_numeric($c)) {
		
			switch($c) {
				case '1'://.99 ALIAS
					if(isset($_POST['name']) && isset($_POST['number']) && isset($_POST['exmo']) && isset($_POST['exyr']) && isset($_POST['cvv'])) {
						//PAYMENT OPTIONS
						$payment = 'fail';
						if($payment == 'success') {
							dbi('1', 'UPDATE users SET ali = \''.$_SESSION['ali'].'\' WHERE id = \''.$_SESSION['secact'].'\' LIMIT 1');
							$_SESSION['secali'] = $ali;
							echo('<br>payment successful, your alias has been updated...<br><br>');
						} else {
							echo('<br>your payment was declined, please try again...<br><br>');
						}
					}
				break;
				case '2'://.99 IMAGES 2-5
					if(isset($_POST['name']) && isset($_POST['number']) && isset($_POST['exmo']) && isset($_POST['exyr']) && isset($_POST['cvv'])) {
						//PAYMENT OPTIONS
						$payment = 'fail';
						if($payment == 'success') {
							echo('<br>payment successful, your extra image has been added...<br><br>');
						} else {
							echo('<br>your payment was declined, please try again...<br><br>');
						}
					}
				break;
				case '3'://.99 ERASE COMMENT
				
				break;
				case '4'://.99 CUSTOM EMOTE
				
				break;
				case '101'://$99 BANNER ADS
				
				break;
				case '102'://$99 CHATROOMS
				
				break;
			}
		
		}
	
	}

} elseif($p == 'reset') {
	if($c == 1) {
		unset($_SESSION['dbgroup']);
		unset($_SESSION['c']);
	}
} else {//DEFAULT VIEW
	
	echo('<span class="c_ffffff">');
	
	if(!isset($_SESSION['dbgroup'])) {
		$dx = dbi('1','SELECT COUNT(*) FROM auctions');
		$dxc = mysqli_fetch_row($dx);
		$grp = random_int(1,$dxc['0']);
		$_SESSION['dbgroup'] = $grp;
	}
	if($_SESSION['dbgroup'] < 7) {
		$_SESSION['dbgroup'] = 0;
	}
	if(!isset($_SESSION['dbmax'])) {
		$_SESSION['dbmax'] = 7;
	}
	if(!isset($_SESSION['c'])) {
		$_SESSION['c'] = 666;
		if(!empty($c) && $_SESSION['c'] != $c) {
			$_SESSION['c'] = $c;
		}
	} else {
		if(!empty($c) && $_SESSION['c'] != $c) {
			$_SESSION['c'] = $c;
		}
	}
	$c = $_SESSION['c'];
	if($c == '1') {
		$_SESSION['dbgroup'] = 0;
		if($d == '') {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'1\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		} else {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'1\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		}
	} elseif($c == '2') {
		$_SESSION['dbgroup'] = 0;
		if($d == '') {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'2\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		} else {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'2\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		}
	} elseif($c == '3') {
		$_SESSION['dbgroup'] = 0;
		if($d == '') {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'3\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		} else {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'3\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		}
	} elseif($c == '4') {
		$_SESSION['dbgroup'] = 0;
		if($d == '') {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'4\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		} else {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'4\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		}
	} elseif($c == '5') {
		$_SESSION['dbgroup'] = 0;
		if($d == '') {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'5\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		} else {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'5\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		}
	} else {
		if($e == '') {
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
		} else {
			$_SESSION['dbgroup'] = 0;
			$e = htmlentities($e,ENT_QUOTES);
			$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE auctions.title LIKE \'%'.$e.'%\' OR auctions.description LIKE \'%'.$e.'%\' AND (auctions.start + auctions.duration) > \''.time().'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');

		}
	}
	 
	if(mysqli_num_rows($qq) == $_SESSION['dbmax']) {
		$_SESSION['dbgroup'] = $_SESSION['dbgroup']+$_SESSION['dbmax'];
	} elseif(mysqli_num_rows($qq) == 0) {
		$_SESSION['dbgroup'] = $_SESSION['dbgroup']-$_SESSION['dbmax'];
		if($c == '1') {
			$_SESSION['dbgroup'] = 0;
			if($d == '') {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'1\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			} else {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'1\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			}
		} elseif($c == '2') {
			$_SESSION['dbgroup'] = 0;
			if($d == '') {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'2\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			} else {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'2\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			}
		} elseif($c == '3') {
			$_SESSION['dbgroup'] = 0;
			if($d == '') {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'3\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			} else {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'3\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			}
		} elseif($c == '4') {
			$_SESSION['dbgroup'] = 0;
			if($d == '') {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'4\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			} else {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'4\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			}
		} elseif($c == '5') {
			$_SESSION['dbgroup'] = 0;
			if($d == '') {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'5\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			} else {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' AND auctions.mcat = \'5\' AND auctions.scat = \''.$d.'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			}
		} else {
			if($e == '') {
				$qq = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE (auctions.start + auctions.duration) > \''.time().'\' ORDER BY auctions.created DESC LIMIT '.$_SESSION['dbgroup'].','.$_SESSION['dbmax'].' ');
			} else {
				$_SESSION['dbgroup'] = 0;
				echo('<div style="width: 100%; text-align: left;">Nothing to see here ... move along... move along.</div>');
				$form3 = array(
					array('element'=>'pform', 'name'=>'postKeyword2', 'value'=>'./www-cgi/auctions.php', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
					array('element'=>'tinput', 'name'=>'keyword2', 'value'=>'', 'js'=>'', 'text'=>'#Keyword:', 'size'=>'199', 'style'=>'width: 100%;'),
					array('element'=>'sinput', 'name'=>'postKeywordSubmit2', 'value'=>'update', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				);
				echo('<div style="width: 100%; text-align: left;"><h3>Search by #Keyword</h3></div>');
				echo(form($form3));
			}
		}
	}
	while($row_qq = mysqli_fetch_array($qq)) {
		if($row_qq['imglnk1'] == '') {
			$imgloc = './www-img/noImage2.jpg';
		} else {
			$imgloc = explode('www-bin',$row_qq['imglnk1']);
			$imgloc = './www-bin'.$imgloc['1'];
		}
		$row_qq['price'] = number_format($row_qq['price'],2,'.',',');
		echo('<div class="AuctionListing" id="AuctionListing"><a  class="AuctionDetails_link"  href="#Details"  onclick="toggle(\'details\',\''.$row_qq['xid'].'\');" style="color: #ffffff;"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status">$<span class="c_fbbc05"><span class="f_bold">'.$row_qq['price'].'</span></span>&nbsp;'.$row_qq['title'].'</span></a></div>');
	}
	
	echo('</span>');
	
}
echo('</div>');
?>
