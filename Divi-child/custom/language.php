<?php
/* languages customizations
*/
	if ( !function_exists('reach_change_theme_text') ){
		function reach_change_theme_text( $translated_text, $text, $domain ) {
			 /* if ( is_singular() ) { */
			    switch ($domain) {
					/* case 'woocommerce':
						switch ( $translated_text ) {
				            case 'Place order' :
				                $translated_text = __( 'Make Payment',  'woocommerce'  );
				                break;
				           case 'Add to cart':
				            	$translated_text = __( 'Continue to Checkout',  'woocommerce'  );
				            	break;
				        }
						break; */
					case 'Divi': 
						switch ( $translated_text ) {
								case 'Category: ' : // remove Category: from front of blog archives.
										$translated_text =  '';
									break;
								case 'Submit a Comment':
										$translated_text = "Add Condolence.";
									break;
							}
						break;					
					case "et_builder" : 
						switch ( $translated_text ) {
							case 'read more' :
								$translated_text = "Read life story";
								break;
							case 'Submit a Comment':
								$translated_text = "Add Condolence";
								break;
							case '1 Comment': 
								$translated_text = "1 Condolence";
								break;
							case '0 Comments':
								$translated_text = "";
								break;	
							case 'Comments':
								$translated_text = "Condolences";
								break;
							// form
							case 'Message Field':   // for comment form
								$translated_text = "Condolence";
								break;	

							case 'Submit Comment':   // for comment form
								$translated_text = "Post Condolence";
								break;	
							// navigation
							case '<span class="meta-nav">&larr;</span> Older Comments':
								$translated_text = '<span class="meta-nav">&larr;</span> Older Condolences';
								break;	
							case 'Newer Comments <span class="meta-nav">&rarr;</span>':
								$translated_text = 'Newer Condolences <span class="meta-nav">&rarr;</span>';
								break;								
						}
						break; 
					 //
					default:
						/* switch ( $translated_text ) {
				            case 'Category' :
				                $translated_text = __( '',  $domain  );
				                break;
				         	case 'Type here...':
				            	$translated_text = __( 'Search...',  $domain  );
				            	break;
				            case 'BLOG CATEGORIES':
				            	$translated_text = __( 'Found in',  $domain  );
				            	break;
				            case 'Share this post:':
				            	$translated_text = __('Share', ' $domain );
				            	break;
				        } */

				}


	    	return $translated_text;
		} // end function reach_change_theme_text
		add_filter( 'gettext', 'reach_change_theme_text', 20, 3 );
	} // end if not exists reach_change_theme_text
?>
