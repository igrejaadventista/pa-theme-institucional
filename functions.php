<?php


// add_action('after_setup_theme', function () {
//     load_theme_textdomain('iasd', get_stylesheet_directory() . '/language/');
// }, 9);

/**
 * Remove unused taxonomies
 */
add_action('wp_loaded', function () {
    unregister_taxonomy_for_object_type('xtt-pa-colecoes', 'post');
    unregister_taxonomy_for_object_type('xtt-pa-departamentos', 'post');
    unregister_taxonomy_for_object_type('xtt-pa-editorias', 'post');
    unregister_taxonomy_for_object_type('xtt-pa-projetos', 'post');
    unregister_taxonomy_for_object_type('xtt-pa-regiao', 'post');
    unregister_taxonomy_for_object_type('xtt-pa-sedes', 'post');
    unregister_taxonomy_for_object_type('xtt-pa-owner', 'post');
    unregister_taxonomy_for_object_type('xtt-pa-materiais', 'post');
});
