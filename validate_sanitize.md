# Validate/Sanitize

#### Validate Functions

- is_email

#### Sanitize Functions

- absint
- ctype_digit (if ctype not available use preg_replace)
- esc_attr (escapes characters to prevent breaking HTML when used as attr value)
- esc_html (does not remove markup but escapes chars: <>)
- esc_js
- esc_sql (only for quoted data: strings, $wpdb-prepare is better)
- esc_url
- esc_url_raw (for storing in database)
- force_balance_tags (balance missing or out of sequence tags)
- intval
- preg_replace('/[^\d]/', '', $_POST['stars'])
- sanitize_email()
- sanitize_key
- sanitize_text_field
- wp_filter_nohtml_kses
- wp_json_encode
- wp_kses
- wp_kses_data
- wp_strip_all_tags
- wp_unslash

#### esc_url, esc_attr

From J.D. Grimes:

```html
<!-- This is correct: -->
<img src="<?php echo esc_url( $src ); ?>" />
 
<!-- This is OK, but the esc_attr() is unnecessary: -->
<img src="<?php echo esc_attr( esc_url( $src ) ); ?>" />
  
<!-- This is *not* correct: -->
<img src="<?php echo esc_attr( $src ); ?>" />

<!-- This is correct: -->
<input type="text" name="fname" value="<?php echo esc_attr( $fname ); ?>">
 
<!-- This is *not* correct: -->
<input type=text name=fname value=<?php echo esc_attr( $fname ); ?>>
```

#### esc_html, esc_attr, esc_url, esc_textarea

From Jacob Peattie:

`esc_html()` escapes a string so that it is not parsed as HTML. Characters like `<` are converted to `&lt;`, for example. This will look the same to the reader, but it means that if the value being output is `<script>` then it won't be interpreted by the browser as an actual script tag.

Use this function whenever the value being output should not contain HTML.

`esc_attr()` escapes a string so that it's safe to use in an HTML attribute, like class="" for example. This prevents a value from breaking out of the HTML attribute. For example, if the value is `"><script>alert();</script>` and you tried to output it in an HTML attribute it would close the current HTML tag and open a script tag. This is unsafe. By escaping the value it won't be able to close the HTML attribute and tag and output unsafe HTML.

Use this function when outputting a value inside an HTML attribute.

`esc_url()` escapes a string to make sure that it's a valid URL.

Use this function when outputting a value inside an href="" or src="" attribute.

`esc_textarea()` escapes a value so that it's safe to use in a <textarea> element. By escaping a value with this function it prevents a value being output inside a <textarea< from closing the <textarea> element and outputting its own HTML.

Use this function when outputting a value inside a <textarea> element.

