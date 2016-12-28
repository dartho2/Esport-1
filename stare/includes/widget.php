<?php
/** klassa widgetu */
	Class widget extends WP_Widget
	{
		function __construct(){
				parent :: __construct(
				'widget',
				'Es WG',
				array( 
				'descriptopn' => 'dupa1'
				));
		}
		function widget($args, $instance ){
		
				echo 'pokaz';
		}
	}


	Function Esports_load_widget()
	{
		register_widget( 'widget' );
	}

	add_action( 'widgets_init' , 'Esports_load_widget' );


?>