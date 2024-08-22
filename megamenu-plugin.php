<?php

/**
 * Plugin Name: 3C Mega Menu
 * Description: Um plugin de mega menu customizado.
 * Version: 1.0
 * Author: Charles
 * License: GPL2
 * Text Domain: mega-menu-3c-plugin
 */

if (!defined('ABSPATH')) {
  exit; // Impede o acesso direto ao arquivo
}

// Função para enfileirar scripts e estilos
function megamenu_enqueue_scripts()
{
  // Estilos
  wp_enqueue_style('megamenu-styles', plugin_dir_url(__FILE__) . 'src/css/styles.css');

  // Scripts
  wp_enqueue_script('megamenu-script', plugin_dir_url(__FILE__) . 'src/js/script.js', array('jquery'), null, true);

  // FontAwesome e Google Fonts
  wp_enqueue_style('megamenu-fontawesome', 'https://kit.fontawesome.com/edefe71c53.css');
  wp_enqueue_style('megamenu-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'megamenu_enqueue_scripts');

// Função para adicionar o menu via shortcode
function megamenu_shortcode()
{
  ob_start();
  include plugin_dir_path(__FILE__) . 'megamenu-template.php'; // Inclui o arquivo HTML do menu
  return ob_get_clean();
}
add_shortcode('megamenu', 'megamenu_shortcode');
