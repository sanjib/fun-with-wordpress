<?php

namespace oak\labs\wp\admin\db;

use oak\labs\wp\lib\AdminPageController;

class Controller extends AdminPageController {
    public function main() {
        include dirname(__FILE__).'/main.php';
    }
}
