<div class="wrap">
    <h1 class="wp-heading-inline">Oak Labs Store</h1>
    <h1><span class="dashicons dashicons-smiley"></span> My Heading 1</h1>
    <h2><span class="dashicons dashicons-admin-site-alt"></span> My Heading 2</h2>
    <h3><span class="dashicons dashicons-format-quote"></span> My Heading 3</h3>
    <h4><span class="dashicons dashicons-nametag"></span> My Heading 4</h4>
    <h5><span class="dashicons dashicons-pets"></span> My Heading 5</h5>
    <h6><span class="dashicons dashicons-carrot"></span> My Heading 6</h6>

    <p>Full list of Dashicons here: <a href="https://developer.wordpress.org/resource/dashicons/">
            https://developer.wordpress.org/resource/dashicons/</a><br />
       Future of Dashicons here: <a href="https://make.wordpress.org/design/2020/04/20/next-steps-for-dashicons/">
            https://make.wordpress.org/design/2020/04/20/next-steps-for-dashicons/</a></p>

    <!-- NOTICES - DISMISSIBLE - APPEARS ON TOP -->
    <div class="notice notice-error is-dismissible">
        <p>There has been an error.</p>
    </div>

    <div class="notice notice-warning is-dismissible">
        <p>This is a warning message.</p>
    </div>

    <div class="notice notice-success is-dismissible">
        <p>This is a success message.</p>
    </div>

    <div class="notice notice-info is-dismissible">
        <p>This is some information.</p>
    </div>

    <!-- TABLE -->
    <table class="widefat striped">
        <thead>
        <tr>
            <th>H1</th>
            <th>H2</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>H1</th>
            <th>H2</th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td>D1</td>
            <td>D2</td>
        </tr>
        <tr>
            <td>D3</td>
            <td>D4</td>
        </tr>
        <tr>
            <td>D5</td>
            <td>D6</td>
        </tr>
        <tr>
            <td>D7</td>
            <td>D8</td>
        </tr>
        <tr>
            <td>D9</td>
            <td>D10</td>
        </tr>
        </tbody>
    </table>


    <br /><br />

    <!-- NAV -->
    <div class="tablenav">
        <div class="tablenav-pages">
            <span class="displaying-num">Displaying 1-20 of 69</span>
            <span class="page-numbers current">1</span>
            <a href="#" class="page-numbers">2</a>
            <a href="#" class="page-numbers">3</a>
            <a href="#" class="page-numbers">4</a>
            <a href="#" class="next page-numbers">&raquo;</a>
        </div>
    </div>

    <br /><br />

    <!-- FORM FIELDS -->
    <form action="" method="post" enctype="application/x-www-form-urlencoded">
        <table class="form-table">
            <tbody>
            <tr class="form-field">
                <th scope="row"><label for="first-name">First Name</label></th>
                <td><input id="first-name" type="text" /></td>
            </tr>
            <tr class="form-field">
                <th scope="row"><label for="last-name">Last Name</label></th>
                <td><input id="last-name" type="text" /></td>
            </tr>
            <tr class="form-field">
                <th scope="row">Misc.</th>
                <td>
                    <p><input id="c1" type="checkbox" /><label for="c1">Checkbox 1</label></p>
                    <p><input id="c2" type="checkbox" /><label for="c2">Checkbox 2</label></p>
                    <p><input id="c3" type="checkbox" /><label for="c3">Checkbox 3</label></p>
                </td>
            </tr>
            <tr class="form-field">
                <th scope="row">Radio</th>
                <td>
                    <p><input id="r1" type="radio" name="group1" /><label for="r1">Radio 1</label>
                    <p><input id="r2" type="radio" name="group1" /><label for="r2">Radio 2</label>
                    <p><input id="r3" type="radio" name="group1" /><label for="r3">Radio 3</label>
                </td>
            </tr>
            <tr class="form-field">
                <th scope="row"><label for="s1">Colors</label></th>
                <td>
                    <select name="s1" id="s1">
                        <option>Blue</option>
                        <option>Red</option>
                        <option>Green</option>
                        <option>Yellow</option>
                        <option>White</option>
                    </select>
                </td>
            </tr>
            <tr class="form-field">
                <th scope="row"><label for="description">Description</label></th>
                <td><textarea id="description"></textarea></td>
            </tr>
            </tbody>
        </table>
    </form>

    <!-- BUTTONS -->
    <div style="display: flex;">
        <div><p class="submit"><input type="submit" class="button-primary" name="Save" value="Save Options" /></p></div>
        <div><p class="submit"><input type="submit" class="button-secondary" name="Secondary" value="Secondary Button" /></p></div>
    </div>
    <div style="display: flex;">
        <div><?php submit_button('Save Changes', 'primary') ?></div>
        <div><?php submit_button('Save Changes', 'large') ?></div>
        <div><?php submit_button('Save Changes', 'small') ?></div>
    </div>

    <div style="display: flex;">
        <div><a href="#/">Link 1</a></div>
        <div><a href="#/" class="button-primary">Link 2</a></div>
        <div><a href="#/" class="button-secondary">Link 3</a></div>
    </div>

    <br /><br />
</div>