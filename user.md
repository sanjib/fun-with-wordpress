# User

```php
current_user_can($capability)
```

For **$capability**, see [here](./wp-content/plugins/oak-labs-wp/src/admin/users/main.php) 

User Functions
```php
is_user_logged_in();
get_users($args = array());
$subscribers = get_users(['role' => 'subscriber']);
count_users($strategy = 'time', $site_id = null);
```

User Management

```php
wp_insert_user($userdata);

// Example:
if (username_exists('foobar')) return;
$user = wp_insert_user( [
    'user_login'   => 'foobar',
    'user_email'   => 'foo@bar.com',
    'user_pass'    => '1234',
    'user_url'     => 'https://bar.com',
    'display_name' => 'Foo Bar',
    'role'         => 'editor',
    'description'  => 'example user'
] );
if (is_wp_error($user)) {
    echo $user->get_error_message();
}

// wp_create_user is a wrapper for wp_insert_user with minimal args
wp_create_user($username, $password, $email = '');

wp_update_user($userdata);

// Only available in WordPress admin
wp_delete_user($id, $reassign = null);

// Example:
// Delete user with ID 100 and assign posts to user with ID 1
wp_delete_user(100, 1);


```

User Data

- ID
- user_login
- user_pass
- user_nicename
- user_url
- user_email
- user_registered
- display_name

```php
$user = new WP_User(1);
$user = get_userdata(1);
$user = wp_get_current_user();
```

Notes
- The existence of "admin" username should not be assumed - can be anything
- many user functions are not available until plugins are loaded and 'init' actions are complete 


Links

- https://developer.wordpress.org/reference/functions/get_users/
https://developer.wordpress.org/reference/functions/wp_insert_user/
