add_action('init', function() {
    foreach (glob(get_template_directory() . '/patterns/*.php') as $file) {
        require $file;
    }
});