<?php
@session_start();
if(!isset($_SESSION['dbq'])) {
	$_SESSION['dbq'] = 0;
}
function dbq($aa,$bb,$cc) {
	$build = '';
	switch($aa) {
		case '1':
			$build .= ('<form name="postDbq" id="postDbq" action="./www-cgi/auctions.php?p=buys" method="post">');
			$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
			$build .= ('<input type="hidden" name="c" id="c" value="'.$cc.'">');
			$build .= ('<tr><td style="vertical-align: top; text-align: left; width: 95%;">');
			$build .= ($bb);
			$build .= ('</td><td style="vertical-align: middle; text-align: right; width:5%">');
			switch($_SESSION['dbq1']) {
				case '1':
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq1" id="dbq1" value="1" onchange="this.form.submit();" style="border:0px;" checked></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;No&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq1" id="dbq1" value="2" onchange="this.form.submit();" style="border:0px;"></td>');
					$build .= ('</tr>');
					$build .= ('</table>');
				break;
				case '2':
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq1" id="dbq1" value="1" onchange="this.form.submit();" style="border:0px;"></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">No&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq1" id="dbq1" value="2" onchange="this.form.submit();" style="border:0px;" checked></td>');
					$build .= ('</tr>');
					$build .= ('</table>');
				break;
				default:
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq1" id="dbq1" value="1" style="border:0px;"></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;No</span>&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq1" id="dbq1" value="2" style="border:0px;"></td>');
					$build .= ('</tr>');	
					$build .= ('</table>');
				break;
			}
			$build .= ('</td></tr>');
			$build .= ('</table>');
			$build .= ('</form>');
		break;
		case '2':
			$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
			$build .= ('<form name="postDbq" id="postDbq" action="'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'" method="post">');
			$build .= ('<input type="hidden" name="xid" value="'.$cc.'">');
			$build .= ('<tr><td valign="top" align="left" style="width:95%;">');
			$build .= ('&#160;*&#160;'."$bb".'');
			$build .= ('</td><td valign="top" align="right" style="width:5%">');
			switch($_SESSION['dbq1']) {
				case '1':
					$build .= ('&#160;Yes&#160;&#160;&#160;');
					$build .= ('<input type="radio" name="dbq1" id="dbq1" value="1" onDblCLick="javascript:switch(this.checked){case true:this.checked=false;break;case false:this.checked=true;break;};" style="border:0px;" checked><br>');
					$build .= ('&#160;No&#160;&#160;&#160;');
					$build .= ('<input type="radio" name="dbq1" id="dbq1" value="2" onDblCLick="javascript:switch(this.checked){case true:this.checked=false;break;case false:this.checked=true;break;};" style="border:0px;"><br>');
					break;
				case '2':
					$build .= ('&#160;Yes&#160;&#160;&#160;');
					$build .= ('<input type="radio" name="dbq1" id="dbq1" value="1" onDblCLick="javascript:switch(this.checked){case true:this.checked=false;break;case false:this.checked=true;break;};" style="border:0px;"><br>');
					$build .= ('No&#160;&#160;&#160;');
					$build .= ('<input type="radio" name="dbq1" id="dbq1" value="2" onDblCLick="javascript:switch(this.checked){case true:this.checked=false;break;case false:this.checked=true;break;};" style="border:0px;" checked><br>');
					break;
				default:
					$build .= ('&#160;Yes&#160;&#160;&#160;');
					$build .= ('<input type="radio" name="dbq1" id="dbq1" value="1" onDblCLick="javascript:switch(this.checked){case true:this.checked=false;break;case false:this.checked=true;break;};" style="border:0px;"><br>');
					$build .= ('&#160;No</span>&#160;&#160;&#160;');
					$build .= ('<input type="radio" name="dbq1" id="dbq1" value="2" onDblCLick="javascript:switch(this.checked){case true:this.checked=false;break;case false:this.checked=true;break;};" style="border:0px;"><br>');
					break;
			}
			$build .= ('</td></tr>');
			$build .= ('<tr><td colspan="2" align="right">&#160;*&#160;Required Fields</td></tr>');
			$build .= ('<tr><td colspan="2" align="right"><table border="0" cellpadding="0" cellspacing="0"><tr><td align="center" valign="top"><input type="submit" value="submit"></form></td><td align="center" valign="top"><form name="recycle_dbq" id="recycle_dbq" action="'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'" method="post"><input type="hidden" name="recycle_dbq" value="1"><input type="submit" value="clear"></form></td></tr></table></td></tr>');
			$build .= ('</form>');
			$build .= ('</tr></tr>');
			$build .= ('</table>');
		break;
		case '3':
			$build .= ('<form name="postAli" id="postAli" action="./www-cgi/auctions.php?p=account" method="post">');
			$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
			$build .= ('<input type="hidden" name="c" id="c" value="'.$cc.'">');
			$build .= ('<tr><td style="vertical-align: top; text-align: left; width: 95%;">');
			$build .= ($bb);
			$build .= ('</td><td style="vertical-align: middle; text-align: right; width:5%">');
			switch($_SESSION['dbq3']) {
				case '1':
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq3" id="dbq3" value="1" onchange="this.form.submit();" style="border:0px;" checked></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;No&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq3" id="dbq3" value="2" onchange="this.form.submit();" style="border:0px;"></td>');
					$build .= ('</tr>');
					$build .= ('</table>');
				break;
				case '2':
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq3" id="dbq3" value="1" onchange="this.form.submit();" style="border:0px;"></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">No&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq3" id="dbq3" value="2" onchange="this.form.submit();" style="border:0px;" checked></td>');
					$build .= ('</tr>');
					$build .= ('</table>');
				break;
				default:
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq3" id="dbq3" value="1" style="border:0px;"></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;No</span>&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq3" id="dbq3" value="2" style="border:0px;"></td>');
					$build .= ('</tr>');	
					$build .= ('</table>');
				break;
			}
			$build .= ('</td></tr>');
			$build .= ('</table>');
			$build .= ('</form>');
		break;
		case '4':
			$build .= ('<form name="postDbqRelist" id="postDbqRelist" action="./www-cgi/auctions.php?p=details" method="post">');
			$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
			$build .= ('<input type="hidden" name="c" id="c" value="'.$cc.'">');
			$build .= ('<tr><td style="vertical-align: top; text-align: left; width: 95%;">');
			$build .= ($bb);
			$build .= ('</td><td style="vertical-align: middle; text-align: right; width:5%">');
			switch($_SESSION['dbq4']) {
				case '1':
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq4" id="dbq4" value="1" onchange="this.form.submit();" style="border:0px;" checked></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;No&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq4" id="dbq4" value="2" onchange="this.form.submit();" style="border:0px;"></td>');
					$build .= ('</tr>');
					$build .= ('</table>');
				break;
				case '2':
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq4" id="dbq4" value="1" onchange="this.form.submit();" style="border:0px;"></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">No&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq4" id="dbq4" value="2" onchange="this.form.submit();" style="border:0px;" checked></td>');
					$build .= ('</tr>');
					$build .= ('</table>');
				break;
				default:
					$build .= ('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
					$build .= ('<tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq4" id="dbq4" value="1" style="border:0px;"></td>');
					$build .= ('</tr><tr>');
					$build .= ('<td style="vertical-align: middle; text-align: center;">&#160;No</span>&#160;&#160;&#160;</td>');
					$build .= ('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq4" id="dbq4" value="2" style="border:0px;"></td>');
					$build .= ('</tr>');	
					$build .= ('</table>');
				break;
			}
			$build .= ('</td></tr>');
			$build .= ('</table>');
			$build .= ('</form>');
		break;
	}
	return $build;
}
?>