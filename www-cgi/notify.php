<?php
@session_start();
If(!isset($_SESSION['notify'])) {
	$_SESSION['notify'] = '1';
	//header('Location:'. $_SERVER['PHP_SELF']);
}

$aa = '1';

switch($aa) {
	case '1':
		echo('<form name="dbq_f" id="dbq_f" action="'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'" method="post">');
		echo('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
		echo('<tr><td style="vertical-align: top; text-align: left; width: 75%;">');
		
		$ai = '<img src="./www-img/droWeedIconTmb2.jpg" style="padding: 0px 2px 0px 0px;float: left;">@Rina Says::&#160;';
		echo("$ai".'<span id="status">"Would you like to smoke some weed?"</span>');
		
		echo('</td><td style="vertical-align: middle; text-align: right; width:25%">');
		switch($_SESSION['dbq']) {
			case '1':
				echo('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
				echo('<tr>');
				echo('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
				echo('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq" id="dbq" value="1" style="border:0px;" checked></td>');
				echo('</tr><tr>');
				echo('<td style="vertical-align: middle; text-align: center;">&#160;No&#160;&#160;&#160;</td>');
				echo('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq" id="dbq" value="2" style="border:0px;"></td>');
				echo('</tr>');
				echo('</table>');
			break;
			case '2':
				echo('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
				echo('<tr>');
				echo('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
				echo('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq" id="dbq" value="1" style="border:0px;"></td>');
				echo('</tr><tr>');
				echo('<td style="vertical-align: middle; text-align: center;">No&#160;&#160;&#160;</td>');
				echo('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq" id="dbq" value="2" style="border:0px;" checked></td>');
				echo('</tr>');
				echo('</table>');
			break;
			default:
				echo('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
				echo('<tr>');
				echo('<td style="vertical-align: middle; text-align: center;">&#160;Yes&#160;&#160;&#160;</td>');
				echo('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq" id="dbq" value="1" style="border:0px;"></td>');
				echo('</tr><tr>');
				echo('<td style="vertical-align: middle; text-align: center;">&#160;No</span>&#160;&#160;&#160;</td>');
				echo('<td style="vertical-align: middle; text-align: center;"><input type="radio" name="dbq" id="dbq" value="2" style="border:0px;"></td>');
				echo('</tr>');	
				echo('</table>');
			break;
		}
		echo('</td></tr>');
		echo('</table>');
		echo('</form>');
	break;
}

switch($_SESSION['notify']) {
	case '1':
		//echo("$ai".'<span id="status">"Would you like to smoke some weed?"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '2';
    	} elseif ($_SESSION['notify'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '3';
    	}
	break;
	case '2':
    	$this->dbq('1',$ai.'"<span id="status">"Great, are you ready to begin?"</span>');
    	//$this->dbq('1',$ai.'"<span id="status">'.'<meta http-equiv="refresh" content="0;URL= http://www.opentable.com">'.'</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '4';
    	} elseif ($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	}
    break;
    case '3':
    	$this->dbq('1',$ai.'<span id="status">"How about another time?"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	} elseif ($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '4';
    	}
    break;
    case '4':
    	$this->dbq('1',$ai.'<span id="status">"Is this an app you\'ve seen before?"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '5';
    	} elseif($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '6';
    	}
    break;
    case '5':
    	$this->dbq('1',$ai.'<span id="status">"Can you provide a link?"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '7';
    	} elseif($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '8';
    	}
    break;
    case '6':
    	$this->dbq('1',$ai.'<span id="status">"Can you describe it?"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '9';
    	} elseif($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '10';
    	}
    break;
    case '7':
    	$this->dbq('1',$ai.'<span id="status">"Great! contact <a href="mailto://italian.bistro@aol.com" class="phone">vipstudios@gmx.com</a> or refer someone to get FREE cash!"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	} elseif($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	}
    break;
    case '8':				
    	$this->dbq('1',$ai.'<span id="status">"Great! contact <a href="mailto://italian.bistro@aol.com" class="phone">vipstudios@gmx.com</a> or refer someone to get FREE cash!"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	} elseif($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	}
    break;
    case '9':
    	$this->dbq('1',$ai.'<span id="status">"Great! contact <a href="mailto://italian.bistro@aol.com" class="phone">bistro.italiano@aol.com</a> or refer someone to get FREE cash!"</span>');
    	if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	} elseif($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	}
    break;
    case '10':
    	$this->dbq('1',$ai.'<span id="status">"Great! contact <a href="mailto://italian.bistro@aol.com" class="phone">italian.bistro@aol.com</a> or refer someone to get FREE cash!"</span>');
    	 if($_SESSION['dbq'] == '1') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	} elseif($_SESSION['dbq'] == '2') {
    		$_SESSION['dbq'] = '0';
    		$_SESSION['d08_data_1_1_999_1_2_1'] = '1';
    	}
	break;
}
?>