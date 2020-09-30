<div class="wrap">
    <h1>Content</h1>

    <?php

    $x = register_post_type('oak_custom_post', [
            'label' => 'Oak Post',
            'description' => 'A custom Oak Post for testing',
    ]);
    d($x);

    ?>
</div>
