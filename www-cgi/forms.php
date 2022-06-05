<?php
@session_start();
function form($data) {
	$build  = '';
	$cform = count($data);
	$elements = array(//array('element'=>'', 'html'=>'')
		array('element'=>'pform', 'html'=>'<form name="[name]"  id="[name]" method="post" action="[value]">'),
		array('element'=>'gform', 'html'=>'<form name="[name]"  id="[name]" method="get" action="[value]">'),
		array('element'=>'fform', 'html'=>'<form name="[name]"  id="[name]" method="post" action="[value]" enctype="multipart/form-data">'),
		array('element'=>'hinput', 'html'=>'<input type="hidden" name="[name]" id="[name]" value="[value]" maxlength="[size]" style="[style]">'),
		array('element'=>'tinput', 'html'=>'<input type="text" name="[name]" id="[name]" value="[value]" maxlength="[size]" style="[style]">'),
		array('element'=>'pinput', 'html'=>'<input type="password" name="[name]" id="[name]" value="[value]" maxlength="[size]" style="[style]">'),
		array('element'=>'finput', 'html'=>'<input type="file" name="[name]" id="[name]" style="[style]">'),
		array('element'=>'txarea', 'html'=>'<textarea name="[name]" id="[name]" maxlength="[size]" style="[style]">[value]</textarea>'),
		array('element'=>'select', 'html'=>'<select name="[name]" id="[name]" style="[style]">[value]</select>'),
		array('element'=>'sinput', 'html'=>'<input name="[name]" id="[name]" type="submit" value="[value]">'),
		array('element'=>'iinput', 'html'=>'<input type="image" name="[name]" id="[name]" src="[value]" style="[style]">'),
		array('element'=>'binput', 'html'=>'<input type="button" name="[name]" id="[name]" value="[value]" style="[style]">')
	);
	for($i=0;$i<=$cform;$i++) {
		if(isset($data[$i]['element'])) {
			switch($data[$i]['element']) {
				case 'pform':
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build .= '<table style="width: 100%;">';
				break;
				case 'gform':
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build .= '<table style="width: 100%;">';
				break;
				case 'fform':
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build .= '<table style="width: 100%;">';
				break;
				case 'hinput':
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
				break;
				case 'tinput':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
				case 'pinput':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
				case 'finput':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
				case 'txarea':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -19);
						$build .= ' '.$data[$i]['js'].'>[value]</textarea>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
				case 'select':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -17);
						$build .= ' '.$data[$i]['js'].'>[value]</select>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
				case 'sinput':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
				case 'iinput':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -1);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
				case 'binput':
					$build .= '<tr><td style="width: 30%; text-align: left;">';
					$build .= $data[$i]['text'];
					$build .= '</td><td style="width: 70%; text-align: right;">';
					foreach($elements as ['element' => $element, 'html' => $html]) {
						if($data[$i]['element'] == $element) {
							$build .= $html;
						}
					}
					if($data[$i]['js'] != null) {
						$build = substr($build, 0, -11);
						$build .= ' '.$data[$i]['js'].'>';
					}
					$build = str_replace('[name]',$data[$i]['name'],$build);
					$build = str_replace('[value]',$data[$i]['value'],$build);
					$build = str_replace('[size]',$data[$i]['size'],$build);
					$build = str_replace('[style]',$data[$i]['style'],$build);
					$build .= '</td></tr>';
				break;
			}
			if($i == $cform-1) {
				$build .= '</form></table>';
			}
		}
	}
	return $build;
}
?>
