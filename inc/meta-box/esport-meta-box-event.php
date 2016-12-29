<?php
/*
	===============================
		EVENT TYPE - MB 
	=============================== */
function team_event_add_meta_box(){
	
	add_meta_box(
		'esport',
		'team',
		'team_event_callback',
		'esport-event'
	);	
}

function team_event_callback( $post){
	$limit = get_option( 'esport-teams', 2 );
	$teams = (array) get_post_meta( $post->ID, 'esport-teams', true );
	
	print_r ($limit);

					?>
				<div class="sp-instance">
					<p class="sp-tab-select sp-title-generator"></p>
					<p><strong><?php printf( __( 'Select %s:', 'esport' ), __( 'Teams', 'esport' ) ); ?></strong></p><?php
					if ( $limit ) {
			for ( $i = 0; $i < $limit; $i ++ ):
				$team = array_shift( $teams );
				print_r ($team);
				?>
				<div class="sp-instance">
					<p class="sp-tab-select sp-title-generator">
					<?php
					
					$args = array(
						'post_type' => 'esport-teams',
						'name' => 'esport-teams[]',
						'class' => 'esport-pages',
						'show_option_none' => __( '&mdash; None &mdash;', 'esport' ),
						'values' => 'ID',
						'selected' => $team,
						'chosen' => true,
						'tax_query' => array(),
					);
				
					if ( ! sp_dropdown_pages( $args ) ) {
						unset( $args['tax_query'] );
						sp_dropdown_pages( $args );
					}
					?>
					</p>
					
	
				
				</div>
				<?php
			endfor;
		} else {
				
		}
		
	}

	/**
	 * Save meta box data
	 */
	

				
				
					


add_action('add_meta_boxes', 'team_event_add_meta_box');



?>
