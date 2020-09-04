# Fun with WordPress

A place for WordPress plugins & themes - development, documentation and experiments.

Goal: create high quality, pristine, precise code and documentation.

## APIs

- [Plugin - Hooks: Actions & Filters](./plugin.md)
- Widgets
- Shortcode
- HTTP
- HTTP
- Settings
- Options
- Dashboard Widgets
- Rewrite
- Transients
- Database

## Functions

- [URLs and Paths](./url-path.md)

## WordPress Lifecycle

For front-end (admin-end differs slightly depending on admin theme):

1. wp-config loaded
2. Functions loaded
3. Plugins loaded
4. Pluggables loaded
5. Translations loaded
6. Theme loaded
7. Page content

## Plugin Types

- Active / inactive / recently active
- Must-use: resides in `wp-content/mu-plugins` directory
- Drop-ins: replaces core WP functionalities, ten available:
    1. advanced-cache.php
    2. db.php
    3. db-error.php
    4. install.php
    5. maintenance.php
    6. object-cache.php
    7. sunrise.php (multi-site specific)
    8. blog-deleted.php (multi-site specific)
    9. blog-inactive.php (multi-site specific)
    10. blog-suspended.php (multi-site specific)

## Plugin Development Notes

- Prefix business-name with plugin name. For example if business-name is "Acme", then plugin name could be "Acme Sound System".
- Plugin folder name should be hyphenated lowercase characters.
- Plugin folder name must match "Text Domain"
- snake case for option names: acme_sound_system_option_name_foo
- kebab case for handles: acme-sound-system-css


