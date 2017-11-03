<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id="main-core".
 *
 * @package ThinkUpThemes
 */
?>

		</div><!-- #main-core -->
		</div><!-- #main -->
		<?php /* Sidebar */ consulting_thinkup_sidebar_html(); ?>
	</div>
	</div><!-- #content -->
	
	<?php if(!is_home()){ ?>
	<div id="homepage-return-button">
		<a href ="<?php echo get_home_url(); ?>" >
		<img src="<?php echo get_template_directory_uri(); ?>/images/arrow_50.png" />
		<div>To Homepage</div>
		</a>
	</div>
	<?php } ?>
	
	<?php if(!wp_is_mobile()){ ?>
	<footer>		
		<form class="es_shortcode_form" data-es_form_id="es_shortcode_form">
		<div id="sub-footer">

			<div id="news_subscribe">
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/blue-2024619_1280_50.png" /></div>				
				<div>+38 067 408 98 10</div>
				<div style="width:253px;">+38 099 617 29 30</div>
				
				<div>
					<span style="margin-right: 5px; color: white"><b><?php echo iconv(mb_detect_encoding("Новости", mb_detect_order(), true), "UTF-8", "Новости") ?></b></span>
					<input type="text" placeholder="   e-mail" id="es_txt_email_pg" class="subscribe-email es_textbox_class" name="es_txt_email_pg" onkeypress="if(event.keyCode==13) es_submit_pages(event, 'http://www.finansova-gramota.com.ua')" value="" maxlength="225">
					<input type="button" id="es_txt_button_pg" class="subscribe-button es_textbox_button es_submit_button" name="es_txt_button_pg" onclick="return es_submit_pages(event, 'http://www.finansova-gramota.com.ua')" value="<?php echo iconv(mb_detect_encoding("Подписаться", mb_detect_order(), true), "UTF-8", "Подписаться")  ?>">
				</div>
				
				<div>
					<a href="https://www.facebook.com/alex.prutyan" target="_blank" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-1174810_1920_50.png" />
					</a>
				</div>

			</div>

		</div>
		</form>
	</footer>
	<?php } else { ?>
		<footer>		
		<form class="es_shortcode_form" data-es_form_id="es_shortcode_form">
		<div id="sub-footer">

			<div id="news_subscribe_mobile">
				<div><img style="vertical-align: middle;"  src="<?php echo get_template_directory_uri(); ?>/images/blue-2024619_1280_50.png" />				
				<span><a href="tel:+38 067 408 98 10">+38 067 408 98 10</a></span>
				<div style="margin-left: 52px;"><a href="tel:+38 099 617 29 30">+38 099 617 29 30</a></div>
				
				<div>
					
					<input type="text" placeholder="<?php echo iconv(mb_detect_encoding(" @ Новости", mb_detect_order(), true), "UTF-8", " @ Новости") ?>" 
					id="es_txt_email_pg" class="subscribe-email es_textbox_class" name="es_txt_email_pg" onkeypress="if(event.keyCode==13) es_submit_pages(event, 'http://www.finansova-gramota.com.ua')" value="" maxlength="225">
					<input type="button" id="es_txt_button_pg" class="subscribe-button es_textbox_button es_submit_button" name="es_txt_button_pg" onclick="return es_submit_pages(event, 'http://www.finansova-gramota.com.ua')"
					 value="<?php echo iconv(mb_detect_encoding("Подписаться", mb_detect_order(), true), "UTF-8", "Подписаться")  ?>">
					<a href="https://www.facebook.com/alex.prutyan" target="_blank" >
					<img style="vertical-align: bottom" src="<?php echo get_template_directory_uri(); ?>/images/facebook-1174810_1920_50.png" />
					</a>
				</div>				

			</div>

		</div>
		</form>
	</footer>
	<?php } ?>

</div><!-- #body-core -->

<?php wp_footer(); ?>

</body>
</html>