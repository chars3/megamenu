<?php

/**
 * Plugin Name: Mega Menu Plugin
 * Plugin URI: https://yourwebsite.com/
 * Description: Um plugin de mega menu customizado. Insira o shortcode [megamenu] onde deseja que o menu apareça (por exemplo, no cabeçalho ou rodapé do site).
 * Version: 1.0
 * Author: Seu Nome
 * Author URI: https://yourwebsite.com/
 * License: GPL2
 */

if (!defined('ABSPATH')) {
  exit; // Impede o acesso direto ao arquivo
}



// Enqueue scripts and styles
function megamenu_enqueue_scripts()
{
  // Estilos
  wp_enqueue_style('megamenu-styles', plugin_dir_url(__FILE__) . 'public/css/styles.css');

  // Scripts
  wp_enqueue_script('megamenu-script', plugin_dir_url(__FILE__) . 'public/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'megamenu_enqueue_scripts');


// Shortcode to display the menu
function megamenu_shortcode()
{
  ob_start();
  include plugin_dir_path(__FILE__) . 'index.html';
  return ob_get_clean();
}

add_shortcode('megamenu', 'megamenu_shortcode');
