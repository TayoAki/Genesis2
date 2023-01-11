<?php
if ( ! function_exists( 'genesis_2_setup' ) ) :

function genesis_2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'genesis_2', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'genesis_2' ),
        'social'  => __( 'Social Links Menu', 'genesis_2' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // genesis_2_setup

add_action( 'after_setup_theme', 'genesis_2_setup' );


if ( ! function_exists( 'genesis_2_init' ) ) :

function genesis_2_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // genesis_2_setup

add_action( 'init', 'genesis_2_init' );


if ( ! function_exists( 'genesis_2_custom_image_sizes_names' ) ) :

function genesis_2_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'genesis_2_custom_image_sizes_names' );
endif;// genesis_2_custom_image_sizes_names



if ( ! function_exists( 'genesis_2_widgets_init' ) ) :

function genesis_2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'genesis_2_widgets_init' );
endif;// genesis_2_widgets_init



if ( ! function_exists( 'genesis_2_customize_register' ) ) :

function genesis_2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'genesis_2_customize_register' );
endif;// genesis_2_customize_register


if ( ! function_exists( 'genesis_2_enqueue_scripts' ) ) :
    function genesis_2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'bsinit' );
    wp_enqueue_script( 'bsinit', get_template_directory_uri() . '/assets/js/bs-init.js', false, null, true);

    wp_deregister_script( 'baguettebox' );
    wp_enqueue_script( 'baguettebox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js', false, null, true);

    wp_deregister_script( 'swiperbundle' );
    wp_enqueue_script( 'swiperbundle', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, null, true);

    wp_deregister_script( 'lightboxgallery' );
    wp_enqueue_script( 'lightboxgallery', get_template_directory_uri() . '/assets/js/Lightbox-Gallery.js', false, null, true);

    wp_deregister_script( 'simpleslider' );
    wp_enqueue_script( 'simpleslider', get_template_directory_uri() . '/assets/js/Simple-Slider.js', false, null, true);

    wp_deregister_script( 'untitled' );
    wp_enqueue_script( 'untitled', get_template_directory_uri() . '/assets/js/untitled.js', false, null, true);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://www.paypal.com/sdk/js?client-id=AXN-IY1Nutvm6yVDSh9Iu1XpF_zmFGZEip1Xj8WKipugihWxXmM2GbO6B04hBf-1ooqdAHsMdW-veHFx&currency=USD', false, null, true);

    wp_register_script( 'inline-script-2', '', [], '', true );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', 'function initPayPalButton() {
    var description = document.querySelector(\'#smart-button-container #description\');
    var amount = document.querySelector(\'#smart-button-container #amount\');
    var descriptionError = document.querySelector(\'#smart-button-container #descriptionError\');
    var priceError = document.querySelector(\'#smart-button-container #priceLabelError\');
    var invoiceid = document.querySelector(\'#smart-button-container #invoiceid\');
    var invoiceidError = document.querySelector(\'#smart-button-container #invoiceidError\');
    var invoiceidDiv = document.querySelector(\'#smart-button-container #invoiceidDiv\');

    var elArr = [description, amount];

    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: \'silver\',
        shape: \'pill\',
        label: \'pay\',
        layout: \'vertical\',
        
      },

      onInit: function (data, actions) {
        actions.disable();

        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }

        elArr.forEach(function (item) {
          item.addEventListener(\'keyup\', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },

      onClick: function () {
        if (description.value.length < 1) {
          descriptionError.style.visibility = "visible";
        } else {
          descriptionError.style.visibility = "hidden";
        }

        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }

        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }

        purchase_units[0].description = description.value;
        purchase_units[0].amount.value = amount.value;

        if(invoiceid.value !== \'\') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },

      onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
          alert(\'Transaction completed by \' + details.payer.name.given_name + \'!\');
        });
      },

      onError: function (err) {
        console.log(err);
      }
    }).render(\'#paypal-button-container\');
  }
  initPayPalButton();');

    wp_deregister_script( 'script-3' );
    wp_enqueue_script( 'script-3', 'https://www.paypal.com/sdk/js?client-id=AXN-IY1Nutvm6yVDSh9Iu1XpF_zmFGZEip1Xj8WKipugihWxXmM2GbO6B04hBf-1ooqdAHsMdW-veHFx&enable-funding=venmo&currency=USD', false, null, true);

    wp_register_script( 'inline-script-4', '', [], '', true );
    wp_enqueue_script( 'inline-script-4' );
    wp_add_inline_script( 'inline-script-4', 'function initPayPalButton() {
    var description = document.querySelector(\'#smart-button-container #description\');
    var amount = document.querySelector(\'#smart-button-container #amount\');
    var descriptionError = document.querySelector(\'#smart-button-container #descriptionError\');
    var priceError = document.querySelector(\'#smart-button-container #priceLabelError\');
    var invoiceid = document.querySelector(\'#smart-button-container #invoiceid\');
    var invoiceidError = document.querySelector(\'#smart-button-container #invoiceidError\');
    var invoiceidDiv = document.querySelector(\'#smart-button-container #invoiceidDiv\');

    var elArr = [description, amount];

    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: \'gold\',
        shape: \'pill\',
        label: \'paypal\',
        layout: \'vertical\',
        
      },

      onInit: function (data, actions) {
        actions.disable();

        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }

        elArr.forEach(function (item) {
          item.addEventListener(\'keyup\', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },

      onClick: function () {
        if (description.value.length < 1) {
          descriptionError.style.visibility = "visible";
        } else {
          descriptionError.style.visibility = "hidden";
        }

        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }

        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }

        purchase_units[0].description = description.value;
        purchase_units[0].amount.value = amount.value;

        if(invoiceid.value !== \'\') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },

      onApprove: function (data, actions) {
        return actions.order.capture().then(function (orderData) {

          // Full available details
          console.log(\'Capture result\', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById(\'paypal-button-container\');
          element.innerHTML = \'\';
          element.innerHTML = \'<h3>Thank you for your payment!</h3>\';

          // Or go to another URL:  actions.redirect(\'thank_you.html\');
          
        });
      },

      onError: function (err) {
        console.log(err);
      }
    }).render(\'#paypal-button-container\');
  }
  initPayPalButton();');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'articlescardsimages' );
    wp_enqueue_style( 'articlescardsimages', get_template_directory_uri() . '/assets/css/Articles-Cards-images.css', false, null, 'all');

    wp_deregister_style( 'featuresimageicons' );
    wp_enqueue_style( 'featuresimageicons', get_template_directory_uri() . '/assets/css/Features-Image-icons.css', false, null, 'all');

    wp_deregister_style( 'herofeaturesicons' );
    wp_enqueue_style( 'herofeaturesicons', get_template_directory_uri() . '/assets/css/Hero-Features-icons.css', false, null, 'all');

    wp_deregister_style( 'baguettebox' );
    wp_enqueue_style( 'baguettebox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css', false, null, 'all');

    wp_deregister_style( 'swiperbundle' );
    wp_enqueue_style( 'swiperbundle', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css', false, null, 'all');

    wp_deregister_style( 'navbar' );
    wp_enqueue_style( 'navbar', get_template_directory_uri() . '/assets/css/navbar.css', false, null, 'all');

    wp_deregister_style( 'payment' );
    wp_enqueue_style( 'payment', get_template_directory_uri() . '/assets/css/payment.css', false, null, 'all');

    wp_deregister_style( 'pricingyearlymonthlybadges' );
    wp_enqueue_style( 'pricingyearlymonthlybadges', get_template_directory_uri() . '/assets/css/Pricing-Yearly--Monthly-badges.css', false, null, 'all');

    wp_deregister_style( 'primarycompiled' );
    wp_enqueue_style( 'primarycompiled', get_template_directory_uri() . '/assets/css/primary.compiled.css', false, null, 'all');

    wp_deregister_style( 'simpleslidersimpleslider' );
    wp_enqueue_style( 'simpleslidersimpleslider', get_template_directory_uri() . '/assets/css/Simple-Slider-Simple-Slider.css', false, null, 'all');

    wp_deregister_style( 'styles' );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css', false, null, 'all');

    wp_deregister_style( 'timeline' );
    wp_enqueue_style( 'timeline', get_template_directory_uri() . '/assets/css/timeline.css', false, null, 'all');

    wp_deregister_style( 'untitled' );
    wp_enqueue_style( 'untitled', get_template_directory_uri() . '/assets/css/untitled.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'genesis_2_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>