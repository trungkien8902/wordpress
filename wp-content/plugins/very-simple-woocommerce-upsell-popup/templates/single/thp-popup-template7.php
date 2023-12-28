<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! defined( 'thp-wc-upsell-popup-frzn' ) ) {
   die('Undefined constant.');
}
?>
<!--Simple, No Variable Upsell - Previously Default Template-->
<style type="text/css">

.thp-dark-overlay {
    display: block;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index: 9999998;
    -moz-opacity: 0.7;
    opacity: .70;
    filter: alpha(opacity=70);
}

.thp-content-body {
    display: block;
    position: fixed;
    top: 3%;
    left: 30%;
	width: 40%;
	max-height: 95%;
    z-index: 9999999;
    overflow: auto;
    background: #fff;
	color: #333;
	border-radius: .3rem;
	/*font-family: 'Roboto', 'Lato', 'Open Sans', sans serif !important;*/
	font-weight: 300;
	font-size: 100%;
}

@media only screen and (max-width : 768px) {
	.thp-content-body {
		top: 5%;
		left: 10%;
		width: 80%;
		height: 90%;
		border-radius: 3px;
	}
}

@media only screen and (max-width : 480px) {
	.thp-content-body {
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100%;
		border-radius: 0;
	}
}

.thp-popup-container {
	padding: 0 20px 20px 20px;
    text-align: center;
	position: relative;
}

.thp-popup-header {
    font-weight: bold;
	color: #000;
	padding-top: 15px;
	padding-bottom: 15px;
	display: flex;
	align-items: center;
}

.thp-popup-line {
	border-bottom: 2px solid #eee;
	width: 100%;
	padding-bottom: 5px !important;
}

.thp-popup-line img {
	margin-right: 10px;
}

.thp-popup-content {
	background: #f1f1f1;
	padding: 10px 15%;
	font-weight: bold;
	color: #000;
	margin-bottom: 20px;
}

.thp-prod-container {
	padding: 10px 10%;
	background: #f9f9f9;
	border: 1px solid #e3e3e3;
	border-radius: 5px;
}

.thp-prod-container a {
    width: 100%;
	display: block;
}

.thp-inner-popup {
	padding: 0 20px 15px 20px;
}

.thp-placeholder-img {
	border-radius: 20px;
	border: 2px dotted #ccc;
	margin-bottom: 10px;
	max-width: 100%;
	max-height: 190px;
	height: 100%;
}

.thp-inner-img {
	max-height: 190px;
	border-radius: 2px;
	margin-bottom: 10px;
}

.thp-popup-button {
    text-align: center !important;
    margin:0 auto !important;
}

.thp-popup-button input[type=submit] {
	display: inline-block;
	cursor: pointer;
	border-radius: .125rem;
	text-transform: uppercase;
	line-height: 20px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
	padding: .70rem 2rem;
	font-size: 100%;
	margin-bottom: 0;
}

.thp-popup-button input[name=thp-popupbutton-yes] {
	display: inline-block;
	/*border: 2px solid #4285f4 !important;*/
}

.thp-popup-button input[name=thp-popupbutton-no] {
	display: inline-block;
	/*border: 2px solid #4285f4 !important;*/
}

#thp-popup-form {
	border-top: 1px solid #dee2e6;
	padding-top: 15px;
}

#thp-spinner-container {
	display: none;
}

#thp-spinner-overlay {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	z-index: 10000000;
	width: 100%;
	height:100%;
	background: rgba(0,0,0,0.3);
}
.thp-cv-spinner {
	height: 90%;
	display: flex;
	justify-content: center;
	align-items: center;  
}
.thp-spinner {
	width: 40px;
	height: 40px;
	border: 4px #fff solid;
	border-top: 4px #000 solid;
	border-radius: 50%;
	animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
	0% { 
		transform: rotate(0deg); 
	}
	100% { 
		transform: rotate(359deg); 
	}
}
.coupon_code {
    border: 1px dashed #000;
    margin: 0px 10px;
    padding: 3px;
    float: left;
}
.inner_coupon_code {
    background: #41ad49;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    float: left;
    font-size: 10px;
}

<?php 

if (@$wup_options['global_background_button_color']){ 

echo '.thp-addcheckedtocart-btn,.thp-button-no{ background-color:'.$wup_options['global_background_button_color'].' !important; }'; 

}else{} 

?>

<?php 

if (@$wup_options['global_hover_background_button_color']){ 

echo '.thp-addcheckedtocart-btn:hover,.thp-button-no:hover{ background-color:'.$wup_options['global_hover_background_button_color'].' !important; }'; 

}else{} 

?>

<?php 

if (@$wup_options['global_text_button_color']){ 

echo '.thp-addcheckedtocart-btn,.thp-button-no{ color:'.$wup_options['global_text_button_color'].' !important; }'; 

}else{} 

?>

<?php 

if (@$wup_options['global_coupon_text_color']){ 

echo '.inner_coupon_code{ color:'.$wup_options['global_coupon_text_color'].' !important; }'; 

}else{} 

?>

<?php 

if (@$wup_options['global_coupon_background_color']){ 

echo '.inner_coupon_code{ background-color:'.$wup_options['global_coupon_background_color'].' !important; }'; 

}else{} 

?>

<?php 

if (@$wup_options['global_coupon_border_color']){ 

echo '.coupon_code{ border:1px dashed '.$wup_options['global_coupon_border_color'].' !important; }'; 

}else{} 

?>

</style>

<?php $thp_wuppro_options = get_option( 'thp_wuppro_options' ); ?>

<div class="thp-dark-overlay"></div>

<div class="thp-content-body">

		<div class="thp-popup-container">
		
		    <div class="thp-popup-header thp-popup-line">
				<img src="<?php echo plugin_dir_url( __DIR__ ).'images/tick-mark.png' ?>" />
				<?php _e( "The item has been added to cart. Thank you!", 'very-simple-woocommerce-upsell-popup' ); ?>
			</div>
			
			<?php if((!empty(get_post_meta($single_upsell_id, 'thp_wc_offer_upsell_on_product',true))) && (get_post_meta($single_upsell_id, 'thp_wc_offer_upsell_on_product',true)==1)){ ?> 
			<div class="thp-popup-header thp-popup-line">
				<?php if(!empty(get_post_meta($single_upsell_id, 'offer_coupon_code',true))){ echo '<span class="coupon_code"><span class="inner_coupon_code">'.get_post_meta($single_upsell_id, 'offer_coupon_code',true).'</span></span>'; } ?> <?php if(!empty(get_post_meta($single_upsell_id, 'offer_heading',true))){ echo get_post_meta($single_upsell_id, 'offer_heading',true); } ?> 
			</div>
			<?php }else{ ?>
			
			<?php if(!empty($wup_options['global_offer_on'])){  ?> 
			<div class="thp-popup-header thp-popup-line">
				<?php if(!empty($wup_options['global_coupon_code'])){ echo '<span class="coupon_code"><span class="inner_coupon_code">'.$wup_options['global_coupon_code'].'</span></span>'; } ?> <?php if(!empty($wup_options['global_offer_heading'])){ echo $wup_options['global_offer_heading']; } ?> 
			</div>
			<?php } ?>
			
			<?php } ?>
			
			<div class="thp-inner-popup">
			
			<div class="thp-popup-header"><?php _e( "Would you also be interested in this item?", 'very-simple-woocommerce-upsell-popup' ); ?> :</div>
			
			<div class="thp-popup-content">
				<div class="thp-prod-container">
				
				<?php
				$img_url = get_the_post_thumbnail_url($single_upsell_id,'medium');
				if ($img_url != '') {
				?>
					<a target="_blank" rel="noopener noreferrer" href="<?php echo get_the_permalink( $single_upsell_id ); ?>">
						<img class="thp-inner-img" src="<?php echo esc_url( $img_url ); ?>" alt="product image" />
					</a>
				<?php } else { ?>
					<a target="_blank" rel="noopener noreferrer" href="<?php echo get_the_permalink( $single_upsell_id ); ?>">
						<img class="thp-placeholder-img" src="<?php echo plugin_dir_url( __DIR__ ).'images/placeholder.png' ?>" alt="placeholder" />
					</a>
				<?php } ?>
				
				<?php
				$p_permalink = get_the_permalink( $single_upsell_id );
				$p_title = get_the_title( $single_upsell_id );
				$_product = wc_get_product( $single_upsell_id );
				$formattedprice = $_product->get_price_html();
				
				$pop_string = sprintf( wp_kses( __( '<a href="%1$s" target="_blank" rel="noopener noreferrer"><span>%2$s</span></a>', 'very-simple-woocommerce-upsell-popup' ), array(  'a' => array( 'href' => array(), 'target' => array(), 'rel' => array() ) ) ), esc_url( $p_permalink ), $p_title );
				
				echo $pop_string;
				echo $formattedprice;
				?>
				</div>
			</div>
		
			<form id="thp-popup-form" method=post>
				<div class="thp-popup-button">
				
					<input class="thp-button-yes" name="thp-popupbutton-yes" type="submit" value="<?php if(thp_wuppro_active()){ if (@$thp_wuppro_options['cust_txt_atc_btn']){ echo @$thp_wuppro_options['cust_txt_atc_btn']; }else{ _e( "Yes", 'very-simple-woocommerce-upsell-popup' ); } }else{ _e( "Yes", 'very-simple-woocommerce-upsell-popup' ); } ?>" />
					
					<input class="thp-button-no" name="thp-popupbutton-no" type="submit" value="<?php if(thp_wuppro_active()){ if (@$thp_wuppro_options['cust_txt_no_btn']){ echo @$thp_wuppro_options['cust_txt_no_btn']; }else{ _e( "No", 'very-simple-woocommerce-upsell-popup' ); } }else{ _e( "No", 'very-simple-woocommerce-upsell-popup' ); } ?>" />
					
					<input id="thp-hidden-prod-id" name="thp-upsell-pid" type="hidden" value="<?php echo esc_html($single_upsell_id); ?>">
					<input id="thp-hidden-orig-prod-id" name="thp-upsell-orig-pid" type="hidden" value="<?php echo esc_html($product_id); ?>">
				</div>
			</form>
			</div>
			
			<div id="thp-spinner-container">
				<div id="thp-spinner-overlay">
					<div class="thp-cv-spinner">
						<span class="thp-spinner"></span>
					</div>
				</div>
			</div>

		</div>
		
</div>