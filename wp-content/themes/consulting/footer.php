<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id="main-core".
 *
 * @package ThinkUpThemes
 */
?>
<?php
$translationsArr = get_custom_translation();
?>
		</div><!-- #main-core -->
		</div><!-- #main -->
		<?php /* Sidebar */ consulting_thinkup_sidebar_html(); ?>
	</div>
	</div><!-- #content -->
	
	<?php if(!is_home()){ ?>
	<div id="homepage-return-button">
		<a href ="<?php echo get_home_url(); ?>" >
		<img src="<?php echo get_template_directory_uri(); ?>/images/home_icon.png" />
		<div id="homepage-return-button-text"><?php echo $translationsArr[9] ?></div>
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
				<div>+38 099 617 29 30</div>
				
				<div>
					<span style="margin-right: 5px; color: white"><b id="news_subscribe_news_text"><?php echo $translationsArr[10] ?></b></span>
					<input type="text" placeholder="   e-mail" id="es_txt_email_pg" class="subscribe-email es_textbox_class" name="es_txt_email_pg" onkeypress="if(event.keyCode==13) es_submit_pages(event, 'https://finansova-gramota.com.ua')" value="" maxlength="225">
					<input type="button" id="es_txt_button_pg" class="subscribe-button es_textbox_button es_submit_button" name="es_txt_button_pg" onclick="return es_submit_pages(event, 'https://finansova-gramota.com.ua')" value="<?php echo $translationsArr[11]  ?>">
				</div>
				
				<div>
					<a href="https://www.facebook.com/SozdavaiteCapital" target="_blank" >
					<img class="facebook-footer" src="<?php echo get_template_directory_uri(); ?>/images/facebook-1174810_1920_50.png" />
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
				<div>
					<img class="mobile-phone-call" style="vertical-align: middle;"  src="<?php echo get_template_directory_uri(); ?>/images/blue-2024619_1280_50.png" />
					<a href="tel:+38 067 408 98 10">(067) 408 98 10  </a>
					<a href="tel:+38 099 617 29 30">  (099) 617 29 30</a>
				</div>

				<!-- The Modal -->
				<div id="phone-modal" class="phone-modal">

					<!-- Modal content -->
					<div class="modal-content">
						<p><?php echo $translationsArr[12] ?><span class="pm-close">&times;</span></p>
						<p><a href="tel:+38 067 408 98 10">(067) 408 98 10</a></p>
						<p><a href="tel:+38 099 617 29 30">(099) 617 29 30</a></p>
					</div>

				</div>
				
				<div>
					
					<input type="text" placeholder="<?php echo $translationsArr[7] ?>"
					id="es_txt_email_pg" class="subscribe-email es_textbox_class" name="es_txt_email_pg" onkeypress="if(event.keyCode==13) es_submit_pages(event, 'https://finansova-gramota.com.ua')" value="" maxlength="225">
					<input type="button" id="es_txt_button_pg" class="subscribe-button es_textbox_button es_submit_button" name="es_txt_button_pg" onclick="return es_submit_pages(event, 'https://finansova-gramota.com.ua')"
					 value="<?php echo $translationsArr[8]  ?>">
					<a href="https://www.facebook.com/SozdavaiteCapital/" target="_blank" >
					<img class="facebook-footer"  style="vertical-align: bottom" src="<?php echo get_template_directory_uri(); ?>/images/facebook-1174810_1920_50.png" />
					</a>
				</div>				

			</div>

		</div>
		</form>
	</footer>
	<?php } ?>

</div><!-- #body-core -->

<?php wp_footer(); ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109194860-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109194860-1');
</script>

</body>
</html>