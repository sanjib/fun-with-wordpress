<div class="wrap">
    <h1>Oak Labs WP - Users</h1>

    <?php
    $capabilities = [
        'manage_options',
        'remove_user', 'promote_user', 'add_users', 'edit_user', 'edit_users', 'delete_post', 'delete_page',
        'edit_post', 'edit_page', 'read_post', 'read_page', 'publish_post', 'edit_post_meta', 'delete_post_meta',
        'add_post_meta', 'edit_comment_meta', 'delete_comment_meta', 'add_comment_meta', 'edit_term_meta',
        'delete_term_meta', 'add_term_meta', 'edit_user_meta', 'delete_user_meta', 'add_user_meta', 'edit_comment',
        'unfiltered_upload', 'edit_css', 'unfiltered_html', 'edit_files', 'edit_plugins', 'edit_themes',
        'update_plugins', 'delete_plugins', 'install_plugins', 'upload_plugins', 'update_themes', 'delete_themes',
        'install_themes', 'upload_themes', 'update_core', 'install_languages', 'update_languages', 'activate_plugins',
        'deactivate_plugins', 'activate_plugin', 'deactivate_plugin', 'resume_plugin', 'resume_theme', 'delete_user',
        'delete_users', 'create_users', 'manage_links', 'customize', 'delete_site', 'edit_term', 'delete_term',
        'assign_term', 'manage_post_tags', 'edit_categories', 'edit_post_tags', 'delete_categories', 'delete_post_tags',
        'assign_categories', 'assign_post_tags', 'create_sites', 'delete_sites', 'manage_network', 'manage_sites',
        'manage_network_users', 'manage_network_plugins', 'manage_network_themes', 'manage_network_options',
        'upgrade_network', 'setup_network', 'update_php', 'export_others_personal_data', 'erase_others_personal_data',
        'manage_privacy_options', 'edit_blocks', 'edit_others_blocks', 'publish_blocks', 'read_private_blocks',
        'delete_blocks', 'delete_private_blocks', 'delete_published_blocks', 'delete_others_blocks',
        'edit_private_blocks', 'edit_published_blocks'
    ];
    sort($capabilities);
    ?>

    <h2>Capabilities</h2>
    <p>Some capabilities check need additional argument, like 'publish_post' needs post ID. So the first post
        "Hello world" with ID 1 should not be deleted.</p>
    <table class="widefat striped">
        <thead>
        <tr>
            <th>No.</th>
            <th>Capability</th>
            <th>Can Current User?</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>No.</th>
            <th>Capability</th>
            <th>Can Current User?</th>
        </tr>
        </tfoot>
        <tbody>
        <?php $i=0; foreach ($capabilities as $capability): $i++; ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $capability ?></td>
                <?php if (
                        ($capability == 'add_comment_meta') ||
                        ($capability == 'add_post_meta') ||
                        ($capability == 'add_term_meta') ||
                        ($capability == 'add_user_meta') ||
                        ($capability == 'assign_term') ||
                        ($capability == 'publish_post') ||
                        ($capability == 'read_page') ||
                        ($capability == 'read_post')
                ): ?>
                    <td><?= current_user_can($capability, 1) ? "yes" : "no" ?></td>
                <?php else: ?>
                    <td><?= current_user_can($capability) ? "yes" : "no" ?></td>
                <?php endif ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>