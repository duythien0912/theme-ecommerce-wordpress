<?php

if (!function_exists('shop_menus')):
    function shop_menus()
    {
        $labels = array(
            'name' => 'Shop menu',
            'singular_name' => 'Shop menu',
            'menu_name' => 'Shop menu',
            'name_admin_bar' => 'Shop menu'
        );
        
        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 26,
        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<?xml version="1.0" encoding="utf-8"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path fill ="#ff9700" d="M480.451,40.081H31.549C14.152,40.081,0,54.233,0,71.629v304.613c0,17.396,14.152,31.548,31.549,31.548h151.826 l-6.141,49.129H151.79c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h208.42c4.143,0,7.5-3.358,7.5-7.5 c0-4.142-3.357-7.5-7.5-7.5h-25.443l-6.142-49.129h151.826c17.396,0,31.549-14.152,31.549-31.548V71.629 C512,54.233,497.848,40.081,480.451,40.081z M192.351,456.919l6.142-49.129h27.603l2.708,10.83 c3.126,12.503,14.31,21.234,27.197,21.234c12.887,0,24.071-8.731,27.197-21.234l2.708-10.83h27.603l6.14,49.129H192.351z M241.557,407.79h28.885l-1.798,7.192c-1.453,5.813-6.652,9.872-12.645,9.872s-11.191-4.06-12.645-9.872L241.557,407.79z M497,376.242L497,376.242c0,9.125-7.424,16.548-16.549,16.548H31.549c-9.125,0-16.549-7.423-16.549-16.548V71.629 c0-9.125,7.424-16.548,16.549-16.548h448.902c9.125,0,16.549,7.423,16.549,16.548V376.242z"/> </g> </g> <g> <g> <path d="M424.338,72.146H39.564c-4.143,0-7.5,3.357-7.5,7.5v288.58c0,4.143,3.357,7.5,7.5,7.5h16.033c4.143,0,7.5-3.357,7.5-7.5 c0.001-4.142-3.357-7.5-7.499-7.5h-8.533V87.146h377.273c4.143,0,7.5-3.358,7.5-7.5C431.838,75.503,428.481,72.146,424.338,72.146 z"/> </g> </g> <g> <g> <path d="M472.436,72.146h-16.033c-4.143,0-7.5,3.357-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h8.533v273.58H87.662 c-4.143,0-7.5,3.358-7.5,7.5c0,4.143,3.357,7.5,7.5,7.5h384.773c4.143,0,7.5-3.357,7.5-7.5V79.646 C479.936,75.503,476.578,72.146,472.436,72.146z"/> </g> </g> <g> <g> <path d="M358.1,155.184c-1.348-1.723-3.381-2.771-5.565-2.87l-176.354-8.017c-0.138-0.006-0.273-0.009-0.412-0.007 c-1.044-3.427-3.25-6.399-6.236-8.391l-21.597-14.398c-3.446-2.297-8.103-1.366-10.4,2.081c-2.297,3.447-1.366,8.103,2.08,10.4 l21.596,14.396c0.102,0.068,0.177,0.171,0.211,0.289l27.509,96.281c0.858,3.002,2.27,5.7,4.083,8.03l-10.065,20.13 c-2.423,4.845-2.169,10.488,0.679,15.096c1.033,1.671,2.343,3.094,3.848,4.234c-1.97,3.439-3.103,7.417-3.103,11.657 c0,12.976,10.557,23.532,23.532,23.532c12.975,0,23.532-10.557,23.532-23.532c0-3.009-0.574-5.885-1.608-8.532h68.377 c-1.034,2.647-1.608,5.523-1.608,8.532c0,12.976,10.557,23.532,23.532,23.532c12.975,0,23.532-10.557,23.532-23.532 c0-3.764-0.893-7.321-2.471-10.479c1.514-1.372,2.471-3.348,2.471-5.553c0-4.142-3.357-7.5-7.5-7.5H196.825 c-0.107,0-0.288,0-0.439-0.245c-0.151-0.244-0.07-0.405-0.022-0.502l9.272-18.543c1.887,0.485,3.853,0.747,5.865,0.747 c0.927,0,1.863-0.055,2.805-0.165l105.386-12.398c13.611-1.602,24.562-11.706,27.25-25.146l12.606-63.034 C359.977,159.132,359.448,156.907,358.1,155.184z M320.129,295.565c4.705,0,8.532,3.828,8.532,8.532 c0,4.705-3.827,8.532-8.532,8.532s-8.532-3.827-8.532-8.532S315.424,295.565,320.129,295.565z M207.904,295.565 c4.705,0,8.532,3.827,8.532,8.532c0,4.705-3.827,8.532-8.532,8.532c-4.705,0-8.532-3.827-8.532-8.532 S203.199,295.565,207.904,295.565z M189.512,192.387l-9.399-32.895l29.985,1.363l5.199,31.532H189.512z M212.554,246.958 c-4.182,0.492-8.047-2.087-9.201-6.13l-9.555-33.441h23.972l6.301,38.216L212.554,246.958z M256.517,241.786l-17.532,2.063 l-6.011-36.461h23.543V241.786z M256.517,192.387H230.5l-5.084-30.835l31.101,1.414V192.387z M294.499,237.317l-22.982,2.704 v-32.634h25.691L294.499,237.317z M298.566,192.387h-27.049v-28.74l29.529,1.342L298.566,192.387z M332.232,221.371 c-1.41,7.048-7.154,12.349-14.293,13.189l-8.217,0.967l2.547-28.139h22.759L332.232,221.371z M338.029,192.387h-24.401 l2.418-26.716l27.08,1.231L338.029,192.387z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>'),
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'author',
                'thumbnail',
                'comments',
                'revisions',
                'custom-fields'
            ),
            'capability_type' => 'page'
        );
        if (!post_type_exists('shop_production')):
            register_post_type('shop_production', $args);
        endif;
    }
endif;
add_action('init', 'shop_menus');

if (!function_exists('shop_menus_add_category')):
    function shop_menus_add_category()
    {
        register_taxonomy_for_object_type('category', 'shop_production');
    }
endif;
add_action('init', 'shop_menus_add_category');

// GET FEATURED IMAGE
if (!function_exists('shop_menus_get_featured_image')):
    function shop_menus_get_featured_image($post_ID)
    {
        $post_thumbnail_id = get_post_thumbnail_id($post_ID);
        if ($post_thumbnail_id) {
            $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
            return $post_thumbnail_img[0];
        }
    }
endif;

if (!function_exists('shop_menus_get_price')):
    function shop_menus_get_price($post_ID)
    {
        $price_data = get_post_meta($post_ID, '_price_value_key', true);
        if ($price_data) {
            return $price_data;
        } else {
            return 'null';
        }
    }
endif;

if (!function_exists('shop_menus_columns_head')):
// ADD NEW COLUMN
    function shop_menus_columns_head($defaults)
    {
        $defaults['price']          = 'Price';
        $defaults['featured_image'] = 'Image';
        return $defaults;
    }
endif;
add_filter('manage_edit-shop_production_columns', 'shop_menus_columns_head');

if (!function_exists('shop_menus_columns_content')):
// SHOW THE FEATURED IMAGE COLUMN
    function shop_menus_columns_content($column_name, $post_ID)
    {
        if ($column_name == 'price') {
            $post_price = shop_menus_get_price($post_ID);
            if ($post_price) {
                echo $post_price . " vnd";
            }
        }
        if ($column_name == 'featured_image') {
            $post_featured_image = shop_menus_get_featured_image($post_ID);
            if ($post_featured_image) {
                echo '<img src="' . $post_featured_image . '" width="100" />';
            }
        }
    }
endif;
add_action('manage_posts_custom_column', 'shop_menus_columns_content', 10, 3);

/* METABOX PRICE */
if (!function_exists('shop_menus_add_meta_box')):
    function shop_menus_add_meta_box()
    {
        add_meta_box('price_box', 'Price', 'shop_menus_price_box_callback', 'shop_production', 'side', 'high');
    }
endif;
add_action('add_meta_boxes', 'shop_menus_add_meta_box');

if (!function_exists('shop_menus_price_box_callback')):
    function shop_menus_price_box_callback($post)
    {
        wp_nonce_field('shop_menus_save_price_data', 'shop_menus_price_meta_box_none');
        $value = get_post_meta($post->ID, '_price_value_key', true);
        echo '<label for="shop_price_field">Price : </label>';
        echo '<input type="text" id="shop_price_field" name="shop_price_field" value="' . esc_attr($value) . '"
            size="24" /> vnd';
    }
endif;

if (!function_exists('shop_menus_save_price_data')):
    function shop_menus_save_price_data($post_id)
    {
        if (!isset($_POST['shop_menus_price_meta_box_none'])) {
            return;
        }
        ;
        
        if (!wp_verify_nonce($_POST['shop_menus_price_meta_box_none'], 'shop_menus_save_price_data')) {
            return;
        }
        ;
        
        if (define('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
        ;
        
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
        ;
        
        if (!isset($_POST['shop_price_field'])) {
            return;
        }
        ;
        
        $my_data = sanitize_text_field($_POST['shop_price_field']);
        update_post_meta($post_id, '_price_value_key', $my_data);
    }
endif;
add_action('save_post', 'shop_menus_save_price_data');
/* METABOX PRICE */
/* METABOX SIZE */

if (!function_exists('shop_menus_add_size_meta_box')):
    function shop_menus_add_size_meta_box()
    {
        add_meta_box('size_box', 'Size', 'shop_menus_size_box_callback', 'shop_production', 'side', 'high');
    }
endif;
add_action('add_meta_boxes', 'shop_menus_add_size_meta_box');

if (!function_exists('shop_menus_size_box_callback')):
    function shop_menus_size_box_callback($post)
    {
        wp_nonce_field(basename(__FILE__), 'size_meta_nonce');
        $ids = get_post_meta($post->ID, '_size_value', true);
?>
            <a class="add_field_button button" href="#0" data-uploader-title="Add size(s) to size" data-uploader-button-text="Add size(s)" style="background: #0099F7;
    border-color: #006799;
    color: white;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);">ᴀᴅᴅ sɪᴢᴇ</a>
            <a class="free_size_button button" href="#0" style="background: #ff4b1f;      border-color: #bf1a1a;
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Ubuntu,Arial,sans-serif;
    color: white;
    float: right;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);">ғʀᴇᴇ sɪᴢᴇ</a>
            <div class="input_fields_wrap">
<?php
    $j = 0;
    if (is_array($ids) || is_object($ids)):
        foreach ($ids as $key => $value):
            $j++;
        ?>            <div>
<input type="text" id="_size_value" name="_size_value[<?php
            echo $j;
?>]" value="<?php
            echo $value;
?>"
            size="22" />
            <span class="remove_field button" style="float: right;">remove</span>
            </div>
        <?php
    
        endforeach;
    endif;
    echo '</div>';
    ?>

    <?php
    }
endif;

if (!function_exists('shop_menus_save_size_data')):
    function shop_menus_save_size_data($post_id)
    {
    if (!isset($_POST['size_meta_nonce']) || !wp_verify_nonce($_POST['size_meta_nonce'], basename(__FILE__)))
        return;
    if (!current_user_can('edit_post', $post_id))
        return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if (isset($_POST['_size_value'])) {
        update_post_meta($post_id, '_size_value', $_POST['_size_value']);
    } else {
        delete_post_meta($post_id, '_size_value');
    }
    }
endif;
add_action('save_post', 'shop_menus_save_size_data');
/* METABOX SIZE */


if (!function_exists('gallery_metabox_enqueue')):
function gallery_metabox_enqueue($hook)
{
    if ('post.php' == $hook || 'post-new.php' == $hook) {
        wp_enqueue_script('gallery-metabox', get_stylesheet_directory_uri() . '/inc/js/gatale.js', array(
            'jquery',
            'jquery-ui-sortable'
        ));
    }
}
endif;
add_action('admin_enqueue_scripts', 'gallery_metabox_enqueue');

if (!function_exists('add_gallery_metabox')):
function add_gallery_metabox($post_type)
{
    $types = array(
        'custom-post-type',
        'shop_production'
    );
    if (in_array($post_type, $types)) {
        add_meta_box('gallery-metabox', 'Gallery', 'gallery_meta_callback', $post_type, 'normal', 'high');
    }
}
endif;
add_action('add_meta_boxes', 'add_gallery_metabox');

if (!function_exists('gallery_meta_callback')):
function gallery_meta_callback($post)
{
    wp_nonce_field(basename(__FILE__), 'gallery_meta_nonce');
    $ids = get_post_meta($post->ID, 'vdw_gallery_id', true);
?>
        <table class="form-table">
          <tr><td>
            <a class="gallery-add button" href="#" data-uploader-title="Add image(s) to gallery" data-uploader-button-text="Add image(s)">Add image(s)</a>
    
            <ul id="gallery-metabox-list" >
            <?php
    if ($ids):
        foreach ($ids as $key => $value):
            $image = wp_get_attachment_image_src($value);
?>

    
              <li style="display: inline-block;">
                <input type="hidden" name="vdw_gallery_id[<?php
            echo $key;
?>]" value="<?php
            echo $value;
?>">
                <img class="image-preview" src="<?php
            echo $image[0];
?>">
                <a class="change-image button button-small" href="#" data-uploader-title="Change image" data-uploader-button-text="Change image" style="display: table-cell;">Change image</a><br>
                <small><a class="remove-image" href="#">Remove image</a></small>
              </li>
    
            <?php
        endforeach;
    endif;
?>
            </ul>
    
          </td></tr>
        </table>
      <?php
}
endif;


function gallery_meta_save($post_id)
{
    if (!isset($_POST['gallery_meta_nonce']) || !wp_verify_nonce($_POST['gallery_meta_nonce'], basename(__FILE__)))
        return;
    if (!current_user_can('edit_post', $post_id))
        return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if (isset($_POST['vdw_gallery_id'])) {
        update_post_meta($post_id, 'vdw_gallery_id', $_POST['vdw_gallery_id']);
    } else {
        delete_post_meta($post_id, 'vdw_gallery_id');
    }
}
add_action('save_post', 'gallery_meta_save');


?>