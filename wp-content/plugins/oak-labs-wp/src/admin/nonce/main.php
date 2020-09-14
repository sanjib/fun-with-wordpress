<?php
use oak\labs\wp\admin\nonce;
if (
    isset($this) &&
    ($this instanceof nonce\Controller)
): ?>

<div class="wrap">
    <h1>Oak Labs - Nonce</h1>
    <?php
    $nonceAction = 'Sweet Corn';
    $nonceUrl = wp_nonce_url($this->urlBase, $nonceAction);
    $nonceField = wp_nonce_field($nonceAction);
    ?>

    <table>
        <thead>
        <tr>
            <th>Nonce Type</th>
            <th>Nonce Output</th>
            <th>Nonce Verified?</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nonce URL</td>
            <td><a href="<?= $nonceUrl ?>"><?= $nonceUrl ?></a></td>
            <td><?= wp_verify_nonce('85d8931696', $nonceAction) ? 'Yes' : 'No'; ?></td>
        </tr>
        <tr class="form-field">
            <td><label for="nonce_field">Nonce Field</label></td>
            <td><textarea id="nonce_field"><?= $nonceField ?></textarea></td>
            <td><?= wp_verify_nonce('85d8931696', $nonceAction) ? 'Yes' : 'No'; ?></td>
        </tr>
        </tbody>
    </table>

    <form action="<?= $this->urlBase ?>" method="post">

    </form>

</div>

<?php endif; ?>