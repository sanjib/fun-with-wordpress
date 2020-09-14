<?php

namespace oak\labs\wp\admin\nonce;

use oak\labs\wp\lib\AdminPageController;

class Controller extends AdminPageController
{
    public function main() {
        include dirname(__FILE__).'/main.php';
    }
}