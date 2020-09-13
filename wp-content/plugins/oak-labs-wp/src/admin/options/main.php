<?php
use oak\labs\wp\admin\Menu;
use oak\labs\wp\WpOptions;
?>
<div class="wrap">
    <h1>Extra Settings</h1>
    <p>Sections are set by the Settings API: add_settings_section().</p>

    <form action="options.php" method="post">
        <?php
        settings_fields(WpOptions::$settingsKey);
        do_settings_sections(Menu::$menuSlugSettingsPage);
        submit_button('Save Changes', 'primary');
        ?>
    </form>
</div>