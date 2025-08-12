<?php
register_block_pattern(
    'base-wp-theme/hero',
    [
        'title'       => __('Hero Section', 'base-wp-theme'),
        'description' => _x('A hero section with heading and button.', 'Block pattern description', 'base-wp-theme'),
        'content'     => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading --><h2>Bem-vindo!</h2><!-- /wp:heading --></div><!-- /wp:group -->',
    ]
);