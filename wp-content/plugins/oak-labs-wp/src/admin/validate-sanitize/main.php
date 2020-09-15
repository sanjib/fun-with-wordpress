<div class="wrap">
    <h1>Validate & Sanitize</h1>

    <?php
    $beforeSanitize['wp_unslash']  = "Can\'t and won\'t!";
    $beforeSanitize['absint']  = "-10X";
    $beforeSanitize['intval']  = "-10X";
    $beforeSanitize['64bit_larger_intval']  = "9223372036854775808X";
    $beforeSanitize['64bit_larger_intval_preg_replace']  = "9223372036854775808X";
    $beforeSanitize['sanitize_text_field']  = "Jane Doe is    a <em>super cool</em> person!\t\tYeah?";
    $beforeSanitize['wp_strip_all_tags']  = "Jane Doe is    a <em>super cool</em> person!\t\tYeah?";
    $beforeSanitize['sanitize_key']  = "foo_bar_#12";
    $beforeSanitize['is_email']  = "sanjib ahmad @ gmail.com";
    $beforeSanitize['sanitize_email']  = "sanjib ahmad @ gmail.com";
    $beforeSanitize['esc_url']  = "https://oak.dev/foo & bar";
    $beforeSanitize['esc_url_raw']  = "https://oak.dev/foo & bar";
    $beforeSanitize['esc_html']  = "<a href='#'>Link</a>";
    $beforeSanitize['esc_attr']  = '"><script>console.log("Rogue fighter")</script>';
    $beforeSanitize['force_balance_tags']  = "<p>Hello world";
    $beforeSanitize['wp_kses']  = "<p><strong>Hello world</strong></p>";
    $beforeSanitize['wp_kses_data']  = "<p>Hello <strong>world</strong>. <script>alert('foo');</script>";
    $beforeSanitize['esc_sql']  = "123456' OR 1='1";

    //--  --//

    $afterSanitize['wp_unslash'] = wp_unslash($beforeSanitize['wp_unslash']);
    $afterSanitize['absint'] = absint($beforeSanitize['absint']);
    $afterSanitize['intval'] = intval($beforeSanitize['intval']);
    $afterSanitize['64bit_larger_intval'] = intval($beforeSanitize['64bit_larger_intval']);
    $afterSanitize['64bit_larger_intval_preg_replace'] = preg_replace('/[^\d]/', '', $beforeSanitize['64bit_larger_intval_preg_replace']);
    $afterSanitize['sanitize_text_field'] = sanitize_text_field($beforeSanitize['sanitize_text_field']);
    $afterSanitize['wp_strip_all_tags'] = wp_strip_all_tags($beforeSanitize['wp_strip_all_tags']);
    $afterSanitize['sanitize_key'] = sanitize_key($beforeSanitize['sanitize_key']);
    $afterSanitize['is_email'] = is_email($beforeSanitize['is_email']) ? 'yes' : 'no';
    $afterSanitize['sanitize_email'] = sanitize_email($beforeSanitize['sanitize_email']);
    $afterSanitize['esc_url'] = esc_url($beforeSanitize['esc_url'], null, 'display');
    $afterSanitize['esc_url_raw'] = esc_url_raw($beforeSanitize['esc_url_raw']);
    $afterSanitize['esc_html'] = esc_html($beforeSanitize['esc_html']);
    $afterSanitize['esc_attr'] = esc_attr($beforeSanitize['esc_attr']);
    $afterSanitize['force_balance_tags'] = force_balance_tags($beforeSanitize['force_balance_tags']);
    $afterSanitize['wp_kses'] = wp_kses($beforeSanitize['wp_kses'], ['strong' => [],]);
    $afterSanitize['wp_kses_data'] = wp_kses_data($beforeSanitize['wp_kses_data']);
    $afterSanitize['esc_sql'] = esc_sql($beforeSanitize['esc_sql']);

    ?>

    <table class="widefat">
        <thead>
        <tr>
            <th style="width: 50%;">$beforeSanitize: <?= count($beforeSanitize) ?></th>
            <th style="width: 50%;">$afterSanitize: <?= count($afterSanitize) ?></th>
        </tr>
        </thead>
        <tbody>
        <tr class="form-field">
            <td>
                <div>$beforeSanitize['esc_html'] => <?= $beforeSanitize['esc_html'] ?></div>
                <div>$beforeSanitize['esc_attr'] => <?= $beforeSanitize['esc_attr'] ?></div>
                <textarea style="height: 600px;"><?php print_r($beforeSanitize) ?></textarea>
            </td>
            <td>
                <div>$afterSanitize['esc_html'] => <?= $afterSanitize['esc_html'] ?></div>
                <div>$afterSanitize['esc_attr'] => <?= $afterSanitize['esc_attr'] ?></div>
                <textarea style="height: 600px;"><?php print_r($afterSanitize) ?></textarea>
            </td>
        </tr>
        </tbody>
    </table>
</div>