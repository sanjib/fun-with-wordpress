# Language

1. Create the mo/po files via PoeEdit and make sure to prefix them with the plugin name. For example, if the plugin name is foo-bar, then the language files should look like this:

    - `foo-bar-en_US.mo`
    - `foo-bar-en_US.po`
    - `foo-bar-fr_FR.mo`
    - `foo-bar-fr_FR.po`

2. Place the files in the "lang" folder under your plugin folder. For example, if your plugin name is foo-bar, then place the language files here:

    `~/wp-content/plugins/foo-bar/lang`
    
   Folder name "lang" is preferred to "languages" because it's shorter though might deviate from WordPress recommendation.

3. The plugin entry point php file only needs the following WordPress directive:

    ` * Text Domain: foo-bar`
 
4. Load the text domain files from the plugin entry point php file like this (it's important to note that the folder pointing to the language files is a relative path):

    ```php
    add_action('plugin_loaded', function () {
        load_plugin_textdomain('foo-bar', false,
                    'foo-bar/lang');
    });
    ```
   For better code organization a static function under a class is highly recommended. 