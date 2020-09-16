<div class="wrap">
    <h1>DB</h1>
    <h2></h2>

    <?php
    global $wpdb;

    //-- SQL PARAMS
    $status = esc_sql('publish');
    $typePost = esc_sql('post');
    $typePage = esc_sql('page');

    //-- QUERY
    $query = $wpdb->prepare("
        SELECT COUNT(ID) 
        FROM {$wpdb->posts} 
        WHERE post_status='publish' && post_type=%s", $typePost);
    $count_publishPost = $wpdb->get_var($query);

    //-- QUERY
    $query = $wpdb->prepare("
        SELECT user_email 
        FROM {$wpdb->users}");
    $col_userEmails = $wpdb->get_col($query);

    //-- QUERY
    $query = $wpdb->prepare("
        SELECT p.ID, p.post_title, p.post_name, p.post_status, p.post_type 
        FROM {$wpdb->posts} AS p 
        WHERE p.post_status=%s && (p.post_type=%s || p.post_type=%s)", $status, $typePost, $typePage);
    $rows_publish = $wpdb->get_results($query);
    ?>

    <h3>Count of Published Posts: <?= $count_publishPost ?><br /><br /></h3>

    <h3>Rows of Published Posts & Pages</h3>
    <table class="widefat striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Post Name</th>
            <th>Post Type</th>
            <th>Post Status</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows_publish as $row): ?>
        <tr>
            <td><?= $row->ID ?></td>
            <td><?= $row->post_title ?></td>
            <td><?= $row->post_name ?></td>
            <td><?= $row->post_type ?></td>
            <td><?= $row->post_status ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <br />

    <h3>User Emails:</h3>
    <table class="widefat striped">
        <thead>
        <tr>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($col_userEmails as $email): ?>
            <tr>
                <td><?= $email ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
