<?php add_action( 'init', 'custom_posttype_loop' );
function custom_posttype_loop(){
  $cptarray=array(
    "products"=>array("type"),
     "adventures" => array(),
   );
  foreach ($cptarray as $key => $value){
    if(is_array($value)){
      create_posttype($key);
      foreach($value as $tax){
        create_taxonomy($tax, $key);
      }
    }
    else{
    create_posttype($value);
    }
  }
}

function create_posttype($key) {
  $new_name = str_replace(['/','.','-',':'], '', $key);
  register_post_type( $new_name,
  		array(
  			'labels' => array(
  				'name' => __( $key ),
  				'singular_name' => __( $key )
  			),
  			'public' => true,
  			'has_archive' => true,
  			'rewrite' => array('slug' => $new_name),
  		)
  	);
}


function create_taxonomy($tax, $key){
  $new_name = str_replace(['/','.','-',':'], '', $key);
  register_taxonomy($tax, $new_name, array(
			'label' => __( $tax ),
			));
}
?>
