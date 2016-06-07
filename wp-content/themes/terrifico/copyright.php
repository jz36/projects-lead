<?php
/**
 * @package Terrifico
 */  
$terrifico_theme_options = terrifico_get_options( 'terrifico_theme_options' );
?>
<div id="copyright">
	<div class="copyright-wrap">
		<span class="left"><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php echo esc_attr($terrifico_theme_options['footer_copyright_text']);?></a></span>
		<span class="right"><a href="http://wp-templates.ru/" title="Шаблоны WordPress">WordPress</a> - <a href="http://builderbody.ru/dzheff-sejd-jeff-seid-biografiya-i-programma-trenirovok/" title="Биография и программа тренировок">Джефф Сейд</a></span>
	</div>
</div><!--copyright-->