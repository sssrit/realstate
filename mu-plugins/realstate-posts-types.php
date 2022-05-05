<?php 

function realstate_post_types()
{
    register_post_type('service',array(
        'supports' => array('title','editor','excerpt'),
        'rewrite' => array(
            'slug' => 'services'
        ),
        'has_archive'=> true, // for add in archive
        'public' => true,        
        'show_in_rest' => true, // for enable new modern Block Editor
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon'=> 'dashicons-excerpt-view'

    ));

    register_post_type('my_property',array(
        'supports' => array('title','editor','excerpt','thumbnail'),
        'rewrite' => array(
            'slug' => 'properties'
        ),
        'has_archive'=> true, // for add in archive
        'public' => true,        
        'show_in_rest' => true, // for enable new modern Block Editor
        'labels' => array(
            'name' => 'Properties',
            'add_new_item' => 'Add New Propertie',
            'edit_item' => 'Edit Propertie',
            'all_items' => 'All Propertie',
            'singular_name' => 'Property'
        ),
        'menu_icon'=> 'dashicons-admin-multisite'

    ));

    register_post_type('agents',array(
        'supports' => array('title','editor','excerpt','thumbnail'),
        'rewrite' => array(
            'slug' => 'agents'
        ),
        'has_archive'=> true, // for add in archive
        'public' => true,        
        'show_in_rest' => true, // for enable new modern Block Editor
        'labels' => array(
            'name' => 'Agents',
            'add_new_item' => 'Add New Agent',
            'edit_item' => 'Edit Agent',
            'all_items' => 'All Agent',
            'singular_name' => 'Agent'
        ),
        'menu_icon'=> 'dashicons-groups'

    ));

    register_post_type('testimonials',array(
        'supports' => array('title','editor','excerpt','thumbnail'),
        'rewrite' => array(
            'slug' => 'testimonials'
        ),
        'has_archive'=> true, // for add in archive
        'public' => true,        
        'show_in_rest' => true, // for enable new modern Block Editor
        'labels' => array(
            'name' => 'Testimonials',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonial',
            'singular_name' => 'Testimonial'
        ),
        'menu_icon'=> 'dashicons-megaphone'

    ));
}

add_action('init','realstate_post_types');