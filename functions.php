<?php
// Theme setup
function apex_hospital_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'apex_hospital_theme_setup');

// Enqueue CSS and JS
function apex_hospital_enqueue_assets() {

    // Google Fonts
    wp_enqueue_style(
        'apex-google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Lato:wght@100;300;400;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap',
        false
    );

    // Vendor CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');

    // Main CSS
    wp_enqueue_style('apex-main', get_template_directory_uri() . '/assets/css/main.css');

    // JS Files
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), null, true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true);

    // Main JS
    wp_enqueue_script('apex-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'apex_hospital_enqueue_assets');



function apex_hospital_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'apex-hospital'),
    ));
}
add_action('after_setup_theme', 'apex_hospital_register_menus');

// 
// // Custom walker to add your template classes
class Custom_Nav_Walker extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = null ) {
      $output .= '<ul>';
  }

  function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
      $classes = (array) $item->classes;
      $has_children = in_array('menu-item-has-children', $classes);
      
      $output .= '<li class="'. ($has_children ? 'dropdown' : '') .'">';

      $output .= '<a href="'. esc_attr($item->url) .'">';
      $output .= esc_html($item->title);
      if ($has_children && $depth === 0) {
          $output .= ' <i class="bi bi-chevron-down toggle-dropdown"></i>';
      }
      $output .= '</a>';
  }

  function end_el( &$output, $item, $depth = 0, $args = null ) {
      $output .= '</li>';
  }
}

/**
 * GitHub Theme Updater for Apex Hospital
 */

add_filter('pre_set_site_transient_update_themes', 'apex_hospital_github_update');

function apex_hospital_github_update($transient) {
    if (empty($transient->checked)) {
        return $transient;
    }

    $theme_slug = 'apex-hospital'; // Theme folder name
    $github_api = 'https://api.github.com/repos/sksinghofficial/apex-hospital/releases/latest';

    // GitHub API request
    $response = wp_remote_get($github_api, array(
        'headers' => array('Accept' => 'application/vnd.github.v3+json')
    ));

    if (is_wp_error($response)) {
        return $transient;
    }

    $release = json_decode(wp_remote_retrieve_body($response));

    if (!empty($release->tag_name)) {
        $new_version = ltrim($release->tag_name, 'v'); // e.g., v1.0.1 → 1.0.1
        $current_version = wp_get_theme($theme_slug)->get('Version');

        if (version_compare($current_version, $new_version, '<')) {
            $transient->response[$theme_slug] = array(
                'theme'       => $theme_slug,
                'new_version' => $new_version,
                'url'         => $release->html_url,
                'package'     => $release->zipball_url
            );
        }
    }

    return $transient;
}
