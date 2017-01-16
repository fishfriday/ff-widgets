<?php

// Social links widget
class Social_links extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'social-links',
			'description' => 'Links naar social media',
		);
		parent::__construct( 'social_links', 'Social links', $widget_ops );
	}
	
	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		$facebook = isset( $instance[ 'facebook' ] ) ? esc_attr( $instance[ 'facebook' ] ) : '';
		$twitter = isset( $instance[ 'twitter' ] ) ? esc_attr( $instance[ 'twitter' ] ) : '';
		$instagram = isset( $instance[ 'instagram' ] ) ? esc_attr( $instance[ 'instagram' ] ) : '';
		$pinterest = isset( $instance[ 'pinterest' ] ) ? esc_attr( $instance[ 'pinterest' ] ) : '';
		$google = isset( $instance[ 'google' ] ) ? esc_attr( $instance[ 'google' ] ) : '';
		$linkedin = isset( $instance[ 'linkedin' ] ) ? esc_attr( $instance[ 'linkedin' ] ) : '';
		$youtube = isset( $instance[ 'youtube' ] ) ? esc_attr( $instance[ 'youtube' ] ) : '';
		
		echo $args['before_widget']; 
		echo '<ul class="social-links-list">';
		
		if( $facebook ) { echo '<li><a href="' . $facebook . '" class="social-links-item"><i class="fa fa-facebook-square"></i></a></li>'; }
		if( $twitter ) { echo '<li><a href="' . $twitter . '" class="social-links-item"><i class="fa fa-twitter-square"></i></a></li>'; }
		if( $instagram ) { echo '<li><a href="' . $instagram . '" class="social-links-item"><i class="fa fa-instagram"></i></a></li>'; }
		if( $pinterest ) { echo '<li><a href="' . $pinterest . '" class="social-links-item"><i class="fa fa-pinterest-square"></i></a></li>'; }
		if( $google ) { echo '<li><a href="' . $google . '" class="social-links-item"><i class="fa fa-google-plus"></i></a></li>'; }
		if( $linkedin ) { echo '<li><a href="' . $linkedin . '" class="social-links-item"><i class="fa fa-linkedin-square"></i></a></li>'; }
		if( $youtube ) { echo '<li><a href="' . $youtube . '" class="social-links-item"><i class="fa fa-youtube"></i></a></li>'; }
		
		echo '</ul>';
		echo $args['after_widget'];
	}
	
	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$facebook = ! empty( $instance[ 'facebook' ] ) ? $instance[ 'facebook' ] : '';
		$twitter = ! empty( $instance[ 'twitter' ] ) ? $instance[ 'twitter' ] : '';
		$instagram = ! empty( $instance[ 'instagram' ] ) ? $instance[ 'instagram' ] : '';
		$pinterest = ! empty( $instance[ 'pinterest' ] ) ? $instance[ 'pinterest' ] : '';
		$google = ! empty( $instance[ 'google' ] ) ? $instance[ 'google' ] : '';
		$linkedin = ! empty( $instance[ 'linkedin' ] ) ? $instance[ 'linkedin' ] : '';
		$youtube = ! empty( $instance[ 'youtube' ] ) ? $instance[ 'youtube' ] : '';?>
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Facebook</label>
			<input type="url" class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo esc_attr( $facebook ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Twitter</label>
			<input type="url" class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo esc_attr( $twitter ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>">Instagram</label>
			<input type="url" class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo esc_attr( $instagram ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>">Pinterest</label>
			<input type="url" class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo esc_attr( $pinterest ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'google' ); ?>">Google+</label>
			<input type="url" class="widefat" id="<?php echo $this->get_field_id( 'google' ); ?>" name="<?php echo $this->get_field_name( 'google' ); ?>" value="<?php echo esc_attr( $google ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>">LinkedIn</label>
			<input type="url" class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo esc_attr( $linkedin ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>">Youtube</label>
			<input type="url" class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo esc_attr( $youtube ); ?>" />
		</p>
		<?php 

	}
	
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance = $old_instance;
		$instance[ 'facebook' ] = strip_tags( $new_instance[ 'facebook' ] );
		$instance[ 'twitter' ] = strip_tags( $new_instance[ 'twitter' ] );
		$instance[ 'instagram' ] = strip_tags( $new_instance[ 'instagram' ] );
		$instance[ 'pinterest' ] = strip_tags( $new_instance[ 'pinterest' ] );
		$instance[ 'google' ] = strip_tags( $new_instance[ 'google' ] );
		$instance[ 'linkedin' ] = strip_tags( $new_instance[ 'linkedin' ] );
		$instance[ 'youtube' ] = strip_tags( $new_instance[ 'youtube' ] );
		return $instance;
	}
}


?>
