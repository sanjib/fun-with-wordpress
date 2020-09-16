<?php if (
    ($this) &&
    ($this instanceof \oak\labs\wp\admin\hooks\Controller)
): ?>

<div class="wrap">
    <h1>Hooks</h1>

    <?php d($this::$debugBucket); ?>
</div>

<?php endif ?>