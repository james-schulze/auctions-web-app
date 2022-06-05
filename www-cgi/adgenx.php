<?php
@session_start();
$css = ('
div.adTv {
	margin: 29px 0px 0px 0px;
	padding: 19px 0px 0px 0px;
	width: 100%;
	height: 100%;
	z-index: 9;
	text-align: left;
	vertical-align: top;
	position: relative;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	scrollbar-color: #000000 #000000;
	scrollbar-width: thin;
	overflow-x: hidden;
	overflow-y: scroll;
	display: block;
}
div.adListing {
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
div.adContainer {
	margin: 59px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 300px;
	height: 100%;
	overflow-x: hidden;
	overflow-y: scroll;
}
div.adContainWScroll {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	height: 250px;
	vertical-align: top;
	border-width: 0px;
	border-color: #FFFFFF;
	border-style: solid;
	overflow-x: hidden;
	overflow-y: scroll;
}
');
$scripts = ('
	$("#postAd").on("submit",  function(e){
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
					$("#DetailsPage").load("./www-cgi/adgenx.php");
					$("#DetailsPage").show();
				});
			}
		});
		$("#postAd").unbind(this.submit);
		return false;
	});
	$("#activateAd").on("submit",  function(e){
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
				$("#DetailsPage").delay(1999).fadeOut(function() {
					$("#DetailsPage").empty();
					$("#DetailsPage").load("./www-cgi/adgenx.php?p=activate&c="+id);
					$("#DetailsPage").show();
				});
			}
		});
		$("#activateAd").unbind(this.submit);
		return false;
	});
');
include('./database.php');
include('./forms.php');
include('./paypal.php');
$css = str_replace(array("\t","\n","\r"),"",$css);
$scripts = str_replace(array("\t","\n","\r"),"",$scripts);
echo('<style>'.$css.'</style>');
echo('<script>'.$scripts.'</script>');
echo('<div class="adTv">');

if(isset($_REQUEST['p'])) { $p = $_REQUEST['p']; } else { $p = ''; }
if(isset($_REQUEST['c'])) { $c = $_REQUEST['c']; } else { $c = ''; }
if($p == 'activate') {
	//echo('<br><br><br><h2>#Activate</h2>');
	//echo('<div class="adContainer" id="adContainer">');
	if($_SESSION['seclvl'] == 1) {
		if(isset($_POST['c'])) {
			//PAYMENT OPTIONS
			$payment = 'fail';
			if($payment == 'success') {
				$qd = dbi('1', 'SELECT * FROM adbuys WHERE adi = \''.$c.'\' LIMIT 1');
				if(mysqli_num_rows($qd)) {
					$adi = $c;
					$response = '';
					$start = time();
					$duration = 86400*30;
					$end = $start+$duration;
					dbi('1', 'UPDATE adbuy SET response = \''.$response.'\', start = \''.$start.'\', end = \''.$end.'\' WHERE adi = \''.$adi.'\' LIMIT 1 ');
				} else {
					//dbi('1', 'INSERT INTO test (data) values (\'3\') ');
					$adi = $c;
					$uid = $_SESSION['secact'];
					$response = 'rsxcode::0923476';
					$start = time();
					$duration = 86400*30;
					$end = $start+$duration;
					$created = date("Y-m-d H:i:s");
					dbi('1', 'INSERT INTO adbuy (adi,uid,response,start,end,created) values (\''.$adi.'\', \''.$uid.'\', \''.$response.'\', \''.$start.'\', \''.$end.'\', \''.$created.'\') ');
				}
			} else {
				echo('your payment was declined, please try again...<br><br>');
			}
		}
		$qb = dbi('1', 'SELECT ads.adi, ads.uid, ads.ciri, ads.imglnk1, adbuy.start, adbuy.end FROM ads LEFT JOIN adbuy ON adbuy.adi = ads.adi WHERE ads.adi = \''.$c.'\' LIMIT 1 ');
		if(mysqli_num_rows($qb)) {
			while($row_qc = mysqli_fetch_array($qb)) {
				if($row_qc['imglnk1'] == '') {
					$imgloc = './www-img/noImage2.jpg';
				} else {
					if(preg_match('/www-img/',$row_qc['imglnk1'])) {
						$imgloc = explode('www-img',$row_qc['imglnk1']);
						$imgloc = './www-img'.$imgloc['1'];
					} else {
						$imgloc = explode('www-bin',$row_qc['imglnk1']);
						$imgloc = './www-bin'.$imgloc['1'];
					}
				}
				$start = $row_qc['start'];
				$end = $row_qc['end'];
				if($end > time()) {
					echo('Valid from '.date("Y-m-d H:i:s", $start).' to '.date("Y-m-d H:i:s", $end).'...');
					echo('<div class="adListing" id="adListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AdDetails_link"  href="#Details"  onclick="toggle(\'advertise\',\''.$row_qc['adi'].'\');" style="color: #ffffff;"><span class="c_fbbc05"></span>&nbsp;'.$row_qc['ciri'].'</a></span></div>');
				} else {
					echo('Expired, click Activate...');
					echo('<div class="adListing" id="adListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AdDetails_link"  href="#Details"  onclick="toggle(\'advertise\',\''.$row_qc['adi'].'\');" style="color: #ffffff;"><span class="c_fbbc05"></span>&nbsp;'.$row_qc['ciri'].'</a></span></div>');
				
					$form1 = array(
						array('element'=>'pform', 'name'=>'activateAd', 'value'=>'./www-cgi/adgenx.php?p=activate', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
						array('element'=>'hinput', 'name'=>'c', 'value'=>$c, 'js'=>'', 'text'=>'', 'size'=>'199', 'style'=>''),
						array('element'=>'tinput', 'name'=>'name', 'value'=>'As appears on card...', 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Name:', 'size'=>'199', 'style'=>'width: 199px;'),
						array('element'=>'tinput', 'name'=>'number', 'value'=>'No dashes or spaces...', 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Number:', 'size'=>'19', 'style'=>'width: 199px;'),
						array('element'=>'tinput', 'name'=>'exmo', 'value'=>date("m"), 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Month:', 'size'=>'2', 'style'=>'width: 49px;'),
						array('element'=>'tinput', 'name'=>'exyr', 'value'=>date("Y")+6, 'js'=>'onfocus="this.value=\'\';"', 'text'=>'Year:', 'size'=>'4', 'style'=>'width: 49px;'),
						array('element'=>'tinput', 'name'=>'cvv', 'value'=>rand(111,999), 'js'=>'onfocus="this.value=\'\';"', 'text'=>'CVV:', 'size'=>'4', 'style'=>'width: 49px;'),
						array('element'=>'sinput', 'name'=>'post', 'value'=>'activate', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
					);
					echo('<div style="width: 100%; text-align: left;"><h3>Activate $99</h3>*30 days unlimited ad rotation...<br><br><br></div>');
					echo(form($form1));
					
					//echo(paypal('2'));
					
				}
			}
		} else {
			echo('<div style="width: 100%; text-align: left;"><h3>Ad*</h3></div>');
			echo('<div class="adContainWScroll">');
			$qa = dbi('1', 'SELECT * FROM ads WHERE adi = \''.$c.'\' ');
			if(mysqli_num_rows($qa)) {
				$qc = dbi('1', 'SELECT * FROM ads WHERE adi = \''.$c.'\' LIMIT 1 ');
				while($row_qc = mysqli_fetch_array($qc)) {
					if($row_qc['imglnk1'] == '') {
						$imgloc = './www-img/noImage2.jpg';
					} else {
						if(preg_match('/www-img/',$row_qc['imglnk1'])) {
							$imgloc = explode('www-img',$row_qc['imglnk1']);
							$imgloc = './www-img'.$imgloc['1'];
						} else {
							$imgloc = explode('www-bin',$row_qc['imglnk1']);
							$imgloc = './www-bin'.$imgloc['1'];
						}
					}
					$start = $row_qc['start'];
					$end = $row_qc['end'];
					if($start == null) {
						$start = 'never';
					} else {
						$start = date("Y-m-d H:i:s", $start);
					}
					if($end == null) {
						$end = 'never';
					} else {
						$end = date("Y-m-d H:i:s", $end);
					}
					echo('Valid from '.$start.' to '.$end.', click Activate...');
					echo('<div class="adListing" id="adListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AdDetails_link"  href="#Details"  onclick="toggle(\'advertise\',\''.$row_qc['adi'].'\');" style="color: #ffffff;"><span class="c_fbbc05"></span>&nbsp;'.$row_qc['ciri'].'</a></span></div>');
				
					$form1 = array(
						array('element'=>'pform', 'name'=>'activateAd', 'value'=>'./www-cgi/ads.php?p=activate', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
						array('element'=>'hinput', 'name'=>'c', 'value'=>$c, 'js'=>'', 'text'=>'', 'size'=>'199', 'style'=>'width: 100%;'),
						array('element'=>'sinput', 'name'=>'post', 'value'=>'activate', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
					);
					echo('<div style="width: 100%; text-align: left;"><h3>Activate</h3></div>');
					echo(form($form1));
				}
			}
		}
	}
	//echo('</div>');
} else {
	//echo('<br><br><br>');
	//echo('<div class="adContainer" id="adContainer">');
	if(isset($_SESSION['seclvl']) && $_SESSION['seclvl'] == 1) {
		if(isset($_POST['adUrl']) && isset($_POST['adText'])) {
			$url = htmlentities($_POST['adUrl'], ENT_QUOTES, 'UTF-8');
			$ciri = htmlentities($_POST['adText'], ENT_QUOTES, 'UTF-8');
			$image = htmlentities($_POST['image1'], ENT_QUOTES, 'UTF-8');
			$start = time();
			$duration = 86400*30;
			$end = $start+$duration;
			$created = date("Y-m-d H:i:s");
			if($url == null) {
				echo('Url can not be left blank...');
			} elseif($ciri == null) {
				echo('Ciri says can not be left blank...');
			} else {
				$imgxfer = 3;//IMAGE STORAGE TYPE	1:Both base64 & Local	2:base64		3:local
				$img = array();
				if(!empty($_FILES['image1']['name'])) { $img[] = array('name'=>$_FILES['image1']['name'],'tmp_name'=>$_FILES['image1']['tmp_name']); }
				if(!empty($_FILES['image2']['name'])) { $img[] = array('name'=>$_FILES['image2']['name'],'tmp_name'=>$_FILES['image2']['tmp_name']); }
				if(!empty($_FILES['image3']['name'])) { $img[] = array('name'=>$_FILES['image3']['name'],'tmp_name'=>$_FILES['image3']['tmp_name']); }
				if(!empty($_FILES['image4']['name'])) { $img[] = array('name'=>$_FILES['image4']['name'],'tmp_name'=>$_FILES['image4']['tmp_name']); }
				if(!empty($_FILES['image5']['name'])) { $img[] = array('name'=>$_FILES['image5']['name'],'tmp_name'=>$_FILES['image5']['tmp_name']); }
				$imgc = count($img);
				if($imgc > 0) {
					for($i=0;$i<$imgc;$i++) {
						$path = explode('www-cgi/adgenx.php',$_SERVER['SCRIPT_FILENAME']);
						$path = $path[0].'www-bin/img/'.$_SESSION['secact'].'/';
						if(!is_dir($path)) {
							mkdir($path, 0755, true);
						}
						$move1  = $img[$i]['tmp_name'];
						$move2  = $path.$img[$i]['name'];
						move_uploaded_file($move1,$move2);
						if($imgxfer == 1 || $imgxfer == 2) {
							$image  = file_get_contents($move2);
							$image  = base64_encode($image);
						}
						$imglnk = $move2;
						$ix = ($i+1);
						dbi('1', 'INSERT INTO ads (uid,ciri,url,imglnk'.$ix.',created) values (\''.$_SESSION['secact'].'\', \''.$ciri.'\', \''.$url.'\', \''.$imglnk.'\', \''.$created.'\') ');
					}
				}
				echo('Thank you, your ad has been uploaded...');
			}
		}
		$form1 = array(
			array('element'=>'pform', 'name'=>'postAd', 'value'=>'./www-cgi/adgenx.php', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>''),
			array('element'=>'finput', 'name'=>'image1', 'value'=>'', 'js'=>'', 'text'=>'Ad Image:', 'size'=>'199', 'style'=>'width: 100%'),
			array('element'=>'tinput', 'name'=>'adUrl', 'value'=>'', 'js'=>'', 'text'=>'Ad Url:', 'size'=>'199', 'style'=>'width: 100%;'),
			array('element'=>'tinput', 'name'=>'adText', 'value'=>'', 'js'=>'', 'text'=>'Ciri says:', 'size'=>'199', 'style'=>'width: 100%;'),
			array('element'=>'sinput', 'name'=>'post', 'value'=>'post', 'js'=>'', 'text'=>'', 'size'=>'', 'style'=>'')
		);
		echo('<div style="width: 100%; text-align: left;"><h3>Advertise</h3></div>');
		echo(form($form1));
		echo('<div style="width: 100%; text-align: left;"><h3>Ads</h3></div>');
		echo('<div class="adContainWScroll">');
		$qa = dbi('1', 'SELECT * FROM ads WHERE uid = \''.$_SESSION['secact'].'\' ORDER BY created DESC ');
		if(mysqli_num_rows($qa)) {
			while($row_qa = mysqli_fetch_array($qa)) {
				if($row_qa['imglnk1'] == '') {
					$imgloc = './www-img/noImage2.jpg';
				} else {
					if(preg_match('/www-img/',$row_qa['imglnk1'])) {
						$imgloc = explode('www-img',$row_qa['imglnk1']);
						$imgloc = './www-img'.$imgloc['1'];
					} else {
						$imgloc = explode('www-bin',$row_qa['imglnk1']);
						$imgloc = './www-bin'.$imgloc['1'];
					}
				}
				echo('<div class="adListing" id="adListing"><img src="'.$imgloc.'" style="padding: 0px 2px 0px 0px;float: left;" width="45px" height="45px"><span id="status"><a  class="AdDetails_link"  href="#Details"  onclick="toggle(\'advertise\',\''.$row_qa['adi'].'\');" style="color: #ffffff;"><span class="c_fbbc05"></span>&nbsp;'.$row_qa['ciri'].'</a></span></div>');
			}

		} else {
			echo('you have not posted any ads...');
		}
		echo('</div>');
	} else {
		echo('you need to be logged in to advertise...');
	}
	//echo('</div>');
}
for($i=0;$i<4;$i++) {
	echo('<br>');
}
echo('</div>');
?>