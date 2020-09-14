# Nonce

```php
$nonceAction = 'Sweet Corn';

$nonceUrl = wp_nonce_url($this->urlBase, $nonceAction);
/* Output
https://viaye.san:4430/fun_with_wordpress/wp-admin/admin.php?page=oak-labs-wp-scratch&_wpnonce=85d8931696
*/

$nonceField = wp_nonce_field($nonceAction);
/* Output
<input type="hidden" id="_wpnonce" name="_wpnonce" value="85d8931696" /><input type="hidden" name="_wp_http_referer" value="/fun_with_wordpress/wp-admin/admin.php?page=oak-labs-wp-scratch" />
*/

wp_verify_nonce('85d8931696', $nonceAction); 
// TRUE
```

Demo code available [here](./wp-content/plugins/oak-labs-wp/src/admin/nonce/main.php)