/** 
* Gravity forms HTML output Change.
* This allows for a complete change of other the other input text field will function
* The original HTML output allows the text box to hole a Value. 
* For a specifc instance we want to utilize this HTML output to hold a placeholder for the user to input extra text.
*
* @param placeholder  add amd instantiated from other_value determined in the theme/functions.php file 
* @path               public_html/wp-content/plugins/gravityforms/fields/class-gf-field-radio.php
* @line               287
*/

$label .= "<br />
<input id='input_{$this->formId}_{$this->id}_other' 
name='input_{$this->id}_other' 
type='text' 
placeholder='" . esc_attr( $other_value ) . "' 
aria-label='" . esc_attr__( 'Other Choice, please specify', 'gravityforms' ) . "' 
$tabindex $input_disabled_text />";
		}
    
    
/**
* Add the function below to change the value of the other_value for the function above
*/

add_filter( 'gform_other_choice_value', 'set_other_choice_value', 10, 2 );
function set_other_choice_value( $placeholder, $field ) {
    if ( is_object( $field ) && 36 === $field->id && 2 === $field->formId ){ // 6 and 25 to your field id and form id number.
        $placeholder = 'Company';
    }
    return $placeholder;
}
