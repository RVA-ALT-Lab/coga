<?php
/**
 * Vertical Progression block
 *
 * @package      COGA
 * @author       
 * @since        1.0.0
 * @license      GPL-2.0+
**/

if( have_rows('progression') ):
	echo '<div class="progression-holder">';
 	// loop through the rows of data 	
    while ( have_rows('progression') ) : the_row();
    	$total = count(get_field('progression'));
    	$row = get_row_index();
    	if ($row == 1){
    		$css = 'progression-top arrow';
    	} else if ($row % 2 == 0){
    		$css = 'white';
    		$css = $css . ' ' . notEnd($row, $total);
    	} else {
    		$css ='blue';
    		$css = $css . ' ' . notEnd($row, $total);
    	}
    	echo '<div class="progression-item ' . $css . '">';
    	echo '<h3>' . get_sub_field('progression_title') . '</h3>';
        // display a sub field value
        echo '<p>' . get_sub_field('progression_text') . '</p>';
        echo '</div>';

    endwhile;
    echo '</div>';
else :

    // no rows found

endif;


function notEnd($row, $total){
	if($row != $total){
		return 'arrow';
	} else {
		return 'final';
	}
}