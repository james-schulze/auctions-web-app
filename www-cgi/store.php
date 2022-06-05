<?php
error_reporting(E_ALL);
@session_start();
include('./database.php');
/*
$dx = dbi('1','SELECT COUNT(*) FROM auctions');
$dxc = mysqli_fetch_row($dx);
$grp = random_int(1,$dxc['0']);
$rnd = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE auctions.mcat = 1 AND (auctions.start + auctions.duration) > \''.time().'\' ORDER BY auctions.created DESC LIMIT '.$grp.',1 ');
while(mysqli_num_rows($rnd) == 0) {
	$grp = random_int(1,$dxc['0']);
	$rnd = dbi('1', 'SELECT auctions.aid AS xid, auctions.title, auctions.price, imglnk.imglnk1 FROM auctions  LEFT JOIN imglnk ON imglnk.aid = auctions.aid WHERE auctions.mcat = 1 AND (auctions.start + auctions.duration) > \''.time().'\' ORDER BY auctions.created DESC LIMIT '.$grp.',1 ');
}
*/
$rnd = dbi('1','SELECT * FROM auctions ORDER BY rand() LIMIT 1');
//echo('<a href="https://www.rockstargames.com/V/" target="_blank"><img src="./www-img/adGTAV1.jpg" width="299" height="171"></a>');
	while($row_rnd = mysqli_fetch_array($rnd)) {
		$rni = dbi('1','SELECT * FROM imglnk WHERE aid = '.$row_rnd['aid'].' LIMIT 1');
		while($row_rni = mysqli_fetch_array($rni)) {
			$img = $row_rni['imglnk1'];
		}
		if($img == '') {
			$imgloc = './www-img/noImage2.jpg';
		} else {
			$imgloc = explode('www-bin',$img);
			$imgloc = './www-bin'.$imgloc['1'];
		}
		echo('<div style="position: absolute; z-index: 29;background-color: #000000;width: 100%;margin: 0px 0px 0px 0px;"><span class="c_ffffff"><span class="f_arial18"><span class="f_bold">#FREE_AUCTIONS</span></span><br></span><span class="f_arial12"><span class="c_ffffff">featured: <span class="f_bold">'.substr($row_rnd['title'],0,69).'</span></span></span><a href="#Details"  onclick="toggle(\'details\',\''.$row_rnd['aid'].'\');" style="color: #ffffff;"><img src="'.$imgloc.'" width="299" height="171"></a>');
}
echo('<br><span class="c_ffffff"><em>#FreeAuctions!</em>&nbsp;<em>#FreeChat!</em><br><em>#OrderOnline!</em><br><em><span id="InquireToday" style="color:#FFFF00;">#ChatBuyPickupLocal!</span></em></span></div>');
?>
