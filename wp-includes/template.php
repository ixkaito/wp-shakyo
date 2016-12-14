<?php
/**
 * Template loading functions.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Echoes a submit button, with provided text and appropriate class(es).
 *
 * @since 3.1.0
 *
 * @see get_submit_button()
 *
 * @param string       $text             The text of the button (defaults to 'Save Changes')
 * @param string       $type             Optional. The type and CSS class(es) of the button. Core values
 *                                       include 'primary', 'secondary', 'delete'. Default 'primary'
 * @param string       $name             The HTML name of the submit button. Defaults to "submit". If no
 *                                       id attribute is given in $other_attributes below, $name will be
 *                                       used as the button's id.
 * @param bool         $wrap             True if the output button should be wrapped in a paragraph tag,
 *                                       false otherwise. Defaults to true
 * @param array|string $other_attributes Other attributes that should be output with the button, mapping
 *                                       attributes to their values, such as setting tabindex to 1, etc.
 *                                       These key/value attribute pairs will be output as attribute="value",
 *                                       where attribute is the key. Other attributes can also be provided
 *                                       as a string such as 'tabindex="1"', though the array format is
 *                                       preferred. Default null.
 */
function submit_button( $text = null, $type = 'primary', $name = 'submit', $wrap = true, $other_attributes = null ) {
	echo get_submit_button( $text, $type, $name, $wrap, $other_attributes );
}

/**
 * Returns a submit button, with provided text and appropriate class
 *
 * @since 3.1.0
 *
 * @param string $text The text of the button (defaults to 'Save Changes')
 * @param string $type The type of button. One of: primary, secondary, delete
 * @param string $name The HTML name of the submit button. Defaults to "submit". If no id attribute
 *               is given in $other_attributes below, $name will be used as the button's id.
 * @param bool $wrap True if the output button should be wrapped in a paragraph tag,
 * 			   false otherwise. Defaults to true
 * @param array|string $other_attributes Other attributes that should be output with the button,
 *                     mapping attributes to their values, such as array( 'tabindex' => '1' ).
 *                     These attributes will be output as attribute="value", such as tabindex="1".
 *                     Defaults to no other attributes. Other attributes can also be provided as a
 *                     string such as 'tabindex="1"', though the array format is typically cleaner.
 */
function get_submit_button( $text = null, $type = 'primary large', $name = 'submit', $wrap = true, $other_attributes = null ) {
	if ( ! is_array( $type ) )
		$type = explode( ' ', $type );

	$button_shorthand = array( 'primary', 'small', 'large' );
	$classes = array( 'button' );
	foreach ( $type as $t ) {
		if ( 'secondary' === $t || 'button-secondary' === $t )
			continue;
		$classes[] = in_array( $t, $button_shorthand ) ? 'button-' . $t : $t;
	}
	$class = implode( ' ', array_unique( $classes ) );

	if ( 'delete' === $type )
		$class = 'button-secondary delete';

	$text = $text ? $text : __( 'Save Changes' );

	// Default the id attribute to $name unless an id was specifically provided in $other_attributes
	$id = $name;
	if ( is_array( $other_attributes ) && isset( $other_attributes['id'] ) ) {
		$id = $other_attributes['id'];
		unset( $other_attributes['id'] );
	}

	$attributes = '';
	if ( is_array( $other_attributes ) ) {
		foreach ( $other_attributes as $attribute => $value ) {
			$attributes .= $attribute . '="' . esc_attr( $value ) . '" '; // Trailing space is important
		}
	} else if ( !empty( $other_attributes ) ) { // Attributes provided as a string
		$attributes = $other_attributes;
	}

	$button = '<input type="submit" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" class="' . esc_attr( $class );
	$button	.= '" value="' . esc_attr( $text ) . '" ' . $attributes . ' />';

	if ( $wrap ) {
		$button = '<p class="submit">' . $button . '</p>';
	}

	return $button;
}
