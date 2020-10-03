# User

Capabilities
(check for capability, not role) 

```php
current_user_can( $capability, ...$args );
user_can( $user, $capability, ...$args );
author_can( $post, $capability, ...$args );
```

For $capability, see [here](./wp-content/plugins/oak-labs-wp/src/admin/users/main.php) 

current_user_can() is a wrapper for user_can()

Roles: Add roles during activation hook, as they only need to be added once

```php
add_role( $role, $display_name, $capabilities = array() );
remove_role( $role );
get_role( $role );


$wpRole = get_role($role);
$wpRole->add_cap( $cap, $grant = true );
$wpRole->remove_cap( $cap );
```

- remove_role() will also remove the role from all users in database who are assigned to the role
- add_role() will automatically assign role to all users who previously had the role (possibly the relation is never removed from the database in the first place)
- to deny cap, set $grant = false


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

User Object

```php
$user = new WP_User(1);
$user = get_userdata(1);
$user = wp_get_current_user();
```

Count User Posts
```php
count_user_posts($userid, $post_type='post', $public_only=false);
count_many_users_posts($users, $post_type='post', $public_only=false);
```

User Metadata

```php
add_user_meta( $user_id, $meta_key, $meta_value, $unique = false );
update_user_meta( $user_id, $meta_key, $meta_value, $prev_value = '' );
get_user_meta( $user_id, $key = '', $single = false );
delete_user_meta( $user_id, $meta_key, $meta_value = '' );
```

Notes
- The existence of "admin" username should not be assumed - can be anything
- many user functions are not available until plugins are loaded and 'init' actions are complete 


Links

- https://developer.wordpress.org/reference/functions/get_users/
https://developer.wordpress.org/reference/functions/wp_insert_user/
