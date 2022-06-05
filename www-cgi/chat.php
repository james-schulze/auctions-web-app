<?php
@session_start();
$css = ('
div.chatListing {
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
	font-family: Arial;
	font-size: 16px;
	color: #FFFFFF;
	background-color: #000000;
	display: block;
	left: 0px;
	-webkit-opacity: 0.5;
	-moz-opacity: 0.5;
	-o-opacity: 0.5;
	opacity: 0.5;
	-o-border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	overflow-x: hidden;
	overflow-y: hidden;
}
div.chatRoom {
	margin: 0px 0px 3px 0px;
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
div.chatTv {
	margin: 0px 0px 0px 0px;
	padding: 3px 0px 0px 0px;
	width: 100%;
	height: 100%;
	z-index: 9;
	text-align: right;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	display: block;
	scrollbar-color: #000000 #000000;
	scrollbar-width: thin;
	overflow-x: hidden;
	overflow-y: hidden;
	direction: ltr;
}
div.chatScroll {
	margin: 0px 0px 0px 0px;
	padding: 3px 0px 0px 0px;
	width: 100%;
	height: 100%;
	z-index: 9;
	text-align: right;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	display: block;
	scrollbar-color: #000000 #000000;
	scrollbar-width: thin;
	overflow-x: hidden;
	overflow-y: scroll;
	direction: ltr;
}
div.chatTvTitle {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 20px;
	font-family: Arial;
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #000000;
	-webkit-opacity: 0.9;
	-moz-opacity: 0.9;
	-o-opacity: 0.9;
	opacity: 0.9;
}
div.chatTvMenu {
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
div.chatTitle {
	margin: 0px 0px 0px 45px;
	width: 244px;
	background-color: #000000;
	-webkit-opacity: 0.6;
	-moz-opacity: 0.6;
	-o-opacity: 0.6;
	opacity: 0.6;
}
div.chatContainer {
	margin: 9px 0px 0px 0px;
	padding: 9px 0px 0px 0px;
	width: 99%;
	height: 100%;
	position: relative;
	z-index: 10;
	border-width: 0px;
	border-color: #0000FF;
	border-style: solid;
	color: #FFFFFF;
}
div.chatLive {
	margin: 9px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 99%;
	height: 75%;
	top: 139px;
	bottom: 0px;
	position: absolute;
	z-index: 666;
	border-width: 0px;
	border-color: #0000FF;
	border-style: solid;
	color: #FFFFFF;
	scrollbar-color: #000000 #000000;
	scrollbar-width: thin;
	overflow-x: hidden;
	overflow-y: scroll;
}
');
$scripts = ('
	function emoji(id) {
		var emoji = id;
		$("#mssg").val($("#mssg").val() + $("#emoji"+id).html());
	}
	function loadChat() {
		window.location.hash = "420";
		$("#ccontent").load("./www-cgi/chat.php");
	}
	$("#chatMssg").on("submit",  function(e){
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
				$("input[name=mssg]").val("");
				$("#chatLive").load("./www-cgi/chat.php?p=update");
			}
		});
		$("#chatMssg").unbind(this.submit);
		return false;
	});
');
include('./database.php');
include('./forms.php');
$css = str_replace(array("\t","\n","\r"),"",$css);
$scripts = str_replace(array("\t","\n","\r"),"",$scripts);
echo('<style>'.$css.'</style>');
echo('<script>'.$scripts.'</script>');
if(!isset($_SESSION['seclvl'])) {
	$_SESSION['seclvl'] = 0;
}
if(!isset($_SESSION['p']) || !isset($_SESSION['c'])) {
	$_SESSION['p'] = '';
	$_SESSION['c'] = '';
}
if(isset($_REQUEST['p'])) { $_SESSION['p'] = $_REQUEST['p']; }
if(isset($_REQUEST['c'])) { $_SESSION['c'] = $_REQUEST['c']; }
if(isset($_REQUEST['p'])) { $p = $_REQUEST['p']; } else { $p = ''; }
if(isset($_REQUEST['c'])) { $c = $_REQUEST['c']; } else { $c = ''; }
if($p == 'update') {
		
	$qb = dbi('1', 'SELECT chatrooms.img, chat.mssg FROM chatrooms LEFT JOIN chat ON chat.cid = chatrooms.cid WHERE chatrooms.cid = \''.$_SESSION['c'].'\' ORDER BY chat.created DESC ');
	while($row_qb = mysqli_fetch_array($qb)) {
		if($row_qb['mssg'] != '') {
			echo('<div class="chatListing">'.$row_qb['mssg'].'</div>');
		}
	}

} elseif($p == 'buy') {//SETTINGS VIEW

	echo('<div class="chatContainer" id="chatContainer">');

	if($_SESSION['seclvl'] == 1) {
		echo('buy chatrooms here...');
	} else {
		echo('you need to be logged in 2buy chatrooms...');
	}
	
	echo('</div>');

} elseif($p == 'details') {//DETAILS VIEW

	//echo('<div class="chatTvTitle" id="chatTvTitle">#Chat<div class="chatTvMenu" id="chatTvMenu"><img src="./www-img/GearIcon2.png" width="20" height="20" onclick="toggle(\'page\',\'settings\');"></div></div>');
	echo('<div class="chatTv">');

	if(is_numeric($c)) {
	
		if(isset($_SESSION['seclvl'])) {
	
			$qa = dbi('1', 'SELECT chatrooms.room, chatrooms.img FROM chatrooms WHERE chatrooms.cid = \''.$c.'\' LIMIT 1 ');
			while($row_qa = mysqli_fetch_array($qa)) {
				$chatrm = $row_qa['room'];
				$chatbg = $row_qa['img'];
			}
			$qb = dbi('1', 'SELECT chatrooms.img, chat.mssg FROM chatrooms LEFT JOIN chat ON chat.cid = chatrooms.cid WHERE chatrooms.cid = \''.$c.'\' ORDER BY chat.created DESC');
			
			if(mysqli_num_rows($qb)) {
			
				if(isset($_REQUEST['c']) && isset($_REQUEST['mssg']) && $_REQUEST['mssg'] != '' && $_REQUEST['mssg'] != 'What would you like to say...') {
					if(is_numeric($_REQUEST['c'])) {
						$mid = $_REQUEST['c'];
						$chatColor = array('FF0000','0000FF','FF00FF','FF9900','00CC00');
						$colorPick = array_rand($chatColor,1);
						$mssg = '<span style="color: #'.$chatColor[$colorPick].';">'.$_SESSION['secali'].'</span>'.htmlentities($_REQUEST['mssg'], ENT_QUOTES, 'UTF-8');
						dbi('1', 'INSERT INTO chat (cid,uid,mssg) values (\''.$mid.'\', \''.$_SESSION['secact'].'\', \''.$mssg.'\') ');
					}
				}
	
				echo('<div class="chatContainer" id="chatContainer" style="background: #000000 url('.$chatbg.') no-repeat; background-size: 100% 100%; ">');
			
				$form1 = array(
					array('element'=>'pform', 'name'=>'chatMssg', 'value'=>'./www-cgi/chat.php?p=details', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
					array('element'=>'hinput', 'name'=>'c', 'value'=>$c, 'js'=>'', 'text'=>'', 'size'=>'199', 'style'=>''),
					array('element'=>'tinput', 'name'=>'mssg', 'value'=>'What would you like to say...', 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Say:', 'size'=>'199', 'style'=>'width: 199px;'),
					array('element'=>'iinput', 'name'=>'post', 'value'=>'./www-img/refresh3.png', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
				);
				echo('<div style="margin-top: 13px; width: 100%; text-align: left;"><span class="f_arial16"><span class="f_bold">'.$chatrm.'&nbsp;::&nbsp;</span></span>');
				$emoji = array(//array('id'=>'', 'emoji=>'')
					array('id'=>'1', 'emoji'=>'😀'),
					array('id'=>'2', 'emoji'=>'😁'),
					array('id'=>'3', 'emoji'=>'😆'),
					array('id'=>'4', 'emoji'=>'😅'),
					array('id'=>'5', 'emoji'=>'😂'),
					array('id'=>'6', 'emoji'=>'🤣'),
					//array('id'=>'7', 'emoji'=>'☺️'),
					//array('id'=>'8', 'emoji'=>'😊'),
					array('id'=>'9', 'emoji'=>'😇'),
					array('id'=>'10', 'emoji'=>'👹'),
					array('id'=>'11', 'emoji'=>'😱'),
					array('id'=>'12', 'emoji'=>'😛'),
					array('id'=>'13', 'emoji'=>'😝'),
					array('id'=>'14', 'emoji'=>'😜'),
					array('id'=>'15', 'emoji'=>'🤪'),
					array('id'=>'16', 'emoji'=>'😍'),
					array('id'=>'17', 'emoji'=>'😘'),
					array('id'=>'18', 'emoji'=>'🤩'),
					array('id'=>'19', 'emoji'=>'😡'),
					array('id'=>'20', 'emoji'=>'🤬'),
					array('id'=>'21', 'emoji'=>'🤯'),
					array('id'=>'22', 'emoji'=>'😳'),
					array('id'=>'23', 'emoji'=>'🤭'),
					array('id'=>'24', 'emoji'=>'🤥'),
					array('id'=>'25', 'emoji'=>'😮'),
					array('id'=>'26', 'emoji'=>'😲'),
					array('id'=>'27', 'emoji'=>'😴'),
					array('id'=>'28', 'emoji'=>'👽'),
					array('id'=>'29', 'emoji'=>'👾'),
					array('id'=>'30', 'emoji'=>'🤖'),
					array('id'=>'31', 'emoji'=>'🎃'),
					array('id'=>'32', 'emoji'=>'😺'),
					array('id'=>'33', 'emoji'=>'😸'),
					array('id'=>'34', 'emoji'=>'💀'),
					array('id'=>'35', 'emoji'=>'☠️'),
					array('id'=>'36', 'emoji'=>'👺'),
					array('id'=>'37', 'emoji'=>'🤑'),
					array('id'=>'38', 'emoji'=>'🙀')
				);
				$emojic = count($emoji);
				for($i=0;$i<$emojic;$i++) {
					echo('<span id="emoji'.$emoji[$i]['id'].'" style="cursor: pointer;" onclick="emoji('.$emoji[$i]['id'].');"> '.$emoji[$i]['emoji'].' </span>');
				}
				
				echo('</div>');
				if($_SESSION['seclvl'] == 1) {
					echo(form($form1));
				} else {
					echo('<br><br>you must be logged in to chat...<br>');
				}
				
				echo('<div class="chatLive" id="chatLive">');
			
				while($row_qb = mysqli_fetch_array($qb)) {
					if($row_qb['mssg'] != '') {
						echo('<div class="chatListing">'.$row_qb['mssg'].'</div>');
					}
				}
				
				echo('</div>');
		
				echo('</div>');
			
			} else {
			
				echo('<div class="chatContainer" id="chatContainer">');
				
				echo('<br><br>connection failed...<br>');
				
				echo('</div>');
			
			}
		
		} else {
		
				echo('<div class="chatContainer" id="chatContainer">');
				
				echo('<br><br>you must be logged in to chat...<br>');
				
				echo('</div>');
		
		}
	
	} else {
	
		echo('<div class="chatContainer" id="chatContainer">');
		
		echo('<br><br>connection failed...<br>');
		
		echo('</div>');
		
	}
	
	echo('</div>');

} else {//DEFAULT VIEW
	echo('<div class="chatTvTitle" id="chatTvTitle">#Chat<div class="chatTvMenu" id="chatTvMenu"><img src="./www-img/refresh1.png" width="20" height="20" onclick="loadChat();"></div></div>');
	echo('<div class="chatTv">');
	echo('<div class="chatScroll">');
	//background: #000000 url('.$tpl.') no-repeat center center fixed;
	//background-color: #000000;
	$qa = dbi('1', 'SELECT * FROM chatrooms WHERE cat = \'13\' OR cat = \'666\' ');
	while($row_qa = mysqli_fetch_array($qa)) {
		if($row_qa['img'] == '') {
			$imgloc = './www-img/noImage2.jpg';
		} else {
			$imgloc = $row_qa['img'];
		}
		echo('<div class="chatRoom" id="chatRoom" style="background: #000000 url('.$imgloc.') no-repeat center center;"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="chatRoom_link"  href="#Details"  onclick="toggle(\'chatroom\',\''.$row_qa['cid'].'\');" style="color: #ffffff;"><div class="chatTitle"><span class="f_bold"><span class="c_fbbc05">Chatroom</span></span>::&nbsp;'.$row_qa['room'].'</div></a></div>');
	}
	
	echo('</span>');
	for($i=0;$i<4;$i++) {
		echo('<br>');
	}
	echo('</span>');
	echo('</div>');
	echo('</div>');
}
?>
