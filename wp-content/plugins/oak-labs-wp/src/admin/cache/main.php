<?php
use oak\labs\wp\Plugin;
?>
<div class="wrap">
    <h1>Cache</h1>

    <?php
    $fruits = wp_cache_get(Plugin::$wpCacheKey_fruits, Plugin::$wpCacheGroup_oak);
    $colors = get_transient(Plugin::$wpTransKey_colors);
    ?>

    <h3>Fruits</h3>
    <ol>
        <?php foreach ($fruits as $fruit): ?>
            <li><?= $fruit ?></li>
        <?php endforeach; ?>
    </ol>

    <h3>Colors</h3>
    <ol>
        <?php foreach ($colors as $color): ?>
            <li><?= $color ?></li>
        <?php endforeach; ?>
    </ol>

</div>
