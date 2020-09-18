<?php if (
   isset($this) &&
   ($this instanceof oak\labs\wp\admin\js\Controller)
): ?>

<div class="wrap">
    <h1>JavaScript</h1>

    <?= __('Hello', 'oak-labs-wp') ?>

    <?php
    $data = <<<EOT
console.log('--> Hello');
EOT;

    //-- INLINE
    wp_register_script($this::$scriptInline1, '');
    // To add in footer:
    // wp_register_script($this::$scriptInline1, '', [], '', true);

    wp_enqueue_script($this::$scriptInline1 );
    wp_add_inline_script($this::$scriptInline1, $data);

    //---- BUNDLED ----//

    //-- JQUERY-UI - INTERACTIONS
    wp_enqueue_script('jquery-ui-draggable');
    wp_enqueue_script('jquery-ui-droppable');
    wp_enqueue_script('jquery-ui-resizable');
    wp_enqueue_script('jquery-ui-selectable');
    wp_enqueue_script('jquery-ui-sortable');

    //-- JQUERY-UI - WIDGETS
    wp_enqueue_script('jquery-ui-accordion');
    wp_enqueue_script('jquery-ui-autocomplete');
    wp_enqueue_script('jquery-ui-button');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('jquery-ui-dialog');
    wp_enqueue_script('jquery-ui-progressbar');
    wp_enqueue_script('jquery-ui-selectmenu');
    wp_enqueue_script('jquery-ui-slider');
    wp_enqueue_script('jquery-ui-spinner');
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('jquery-ui-tooltip');

    //-- JQUERY-UI - EFFECTS
    wp_enqueue_script('jquery-effects-blind');
    wp_enqueue_script('jquery-effects-bounce');
    wp_enqueue_script('jquery-effects-clip');
    wp_enqueue_script('jquery-effects-drop');
    wp_enqueue_script('jquery-effects-explode');
    wp_enqueue_script('jquery-effects-fade');
    wp_enqueue_script('jquery-effects-fold');
    wp_enqueue_script('jquery-effects-highlight');
    wp_enqueue_script('jquery-effects-puff');
    wp_enqueue_script('jquery-effects-pulsate');
    wp_enqueue_script('jquery-effects-scale');
    wp_enqueue_script('jquery-effects-shake');
    wp_enqueue_script('jquery-effects-slide');
    wp_enqueue_script('jquery-effects-transfer');

    ?>
</div>

<?php endif; ?>