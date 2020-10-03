<?php

namespace oak\labs\wp;

class Plugin {

    // CACHE
    public static string $wpCacheKey_fruits = 'fruits';
    public static string $wpCacheGroup_oak = 'oak_labs_wp_cache';
    public static string $roleStudent = 'oak_labs_wp_student';
    public static string $roleInstructor = 'oak_labs_wp_instructor';

    // TRANS
    public static string $wpTransKey_colors = 'oak_labs_wp_colors';

    public static function activate() {
        if ($val = get_option(WpOptions::$activationKey)) {
            $val['activated_on'] = current_time('timestamp');
            update_option(WpOptions::$activationKey, $val);
        } else {
            $val['activated_on'] = current_time('timestamp');
            add_option(WpOptions::$activationKey, $val, '', 'no');
        }
        // ADD ROLES
	    add_role(self::$roleStudent, 'Student (oak)', [
	    	'read'  => true,
		    'oak_labs_wp_cap_read_course'   => true,
		    'oak_labs_wp_cap_read_quiz'     => true,
	    ]);
	    add_role(self::$roleInstructor, 'Instructor (oak)', [
		    'read'  => true,
		    'oak_labs_wp_cap_create_course' => true,
		    'oak_labs_wp_cap_create_quiz'   => true,
	    ]);
    }

    public static function deactivate() {
        if ($val = get_option(WpOptions::$activationKey)) {
            $val['deactivated_on'] = current_time('timestamp');
            update_option(WpOptions::$activationKey, $val);
        } else {
            $val['deactivated_on'] = current_time('timestamp');
            add_option(WpOptions::$activationKey, $val, '', 'no');
        }
        // REMOVE ROLES
		remove_role(self::$roleStudent);
		remove_role(self::$roleInstructor);
    }
}