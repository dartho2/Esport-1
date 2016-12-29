<?php
class ES_admin_event {

public function __construct() {
		$this->type = 'esport-event';

		add_filter( 'enter_title_here', array( $this, 'enter_title_here' ), 1, 2 );
		// Call SP_Admin_CPT constructor
		add_filter( 'wp_insert_post_data', array( $this, 'wp_insert_post_data' ), 99, 2 );
		
	
	}
	
public function enter_title_here( $text, $post ) {
		if ( $post->post_type == 'esport-event' )
			return __( '(Dont touch)', 'esport' );

		return $text;
	}
	
public function wp_insert_post_data( $data, $postarr ) {
		if ( $data['post_type'] == 'esport-event' && $data['post_title'] == '' ):

			$teams = sp_array_value( $postarr, 'esport-teams', array() );
			$teams = array_filter( $teams );

			$team_names = array();
			foreach ( $teams as $team ):
				while ( is_array( $team ) ) {
					$team = array_shift( array_filter( $team ) );
				}
				if ( $team > 0 ) $team_names[] = get_the_title( $team );
			endforeach;

			$team_names = array_unique( $team_names );

			$data['post_title'] = implode( ' ' . get_option( 'sportspress_event_teams_delimiter', 'vs' ) . ' ', $team_names );

		endif;

		return $data;
}
		

}
return new ES_admin_event();





?>