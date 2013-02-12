<?php

/**
 * Outputs an iput element with the given attribute values
 * This function also examines SESSION data for previously
 * entered values with the smae name
 */
function input($name, $placeholder, $value=null) {
	if($value == null && isset($_SESSION['POST'][$name])) {
		$value = $_SESSION['POST'][$name] ;
		
		// Remove from session data
		unset($_SESSION['POST'][$name]);
		
		if($value =='') {
			$class = 'class="error"';
		} else {
			$class = '';
		}
	}elseif($value != null) {
		$class = '';
	}
	 else {
		$value = '';
		$class = '';
	}
	return "<input $class type=\"text\" name=\"$name\" placeholder=\"$placeholder\" value=\"$value\" />";
}
	

/**
 * Generates an HTML select element with the given name
 * attribute and option elements
 * this function also exam ines session data for previously
 * submitted value
 * @param unknown_type $name
 * @param unknown_type $options Array of options in the form value => text
 * HTML select element
 */
function dropdown($name, $options) {
	$select = "<select name=\"$name\">";
	
	// Add option elements to select element
	foreach($options as $value => $text) {
		if(isset($_SESSION['POST'][$name]) && $_SESSION['FORM'][$name] == $value) {
			unset($_SESSION['POST'][$name]);
			$selected = 'selected="selected"';
		} else {
			$selected = '';
		}
		$select .= "<option $selected value=\"$value\">$text</option>";
	}
	
	$select .= "</select>";
	return $select;
}


function radio($name, $options) {
	$radio = '';
	
	foreach($options as $value => $text) {
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value) {
			$checked = 'checked="checked"';
	} else {
		$checked = '';
	}
	$radio .="<label><input type=\"radio\" name=\"$name\" value=\"$value\" $checked />$text</label>";
	}
	
	return $radio;
}

?>