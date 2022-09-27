<?php
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'hero-block',
            'title'             => __('Hero Block'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'template-parts/acf-blocks/hero-block.php',
            'category'          => 'formatting',
        ));
    }
}