<?php
/**
 * The template for displaying ILI: Greeting
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>


<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-' .  $tt_data_recommendations[0]->category . '.svg';
?>" width="110" height="110" class="icon">

<p class="lead <?php echo $tt_data_recommendations[0]->category; ?>"><?php echo str_replace( '_', '<br>', $tt_data_recommendations[0]->action_msg ); ?></p>