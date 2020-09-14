<?php

namespace oak\labs\wp\lib;

class AdminPageController
{
    public $urlBase;

    public function __construct($slug)
    {
        $this->urlBase = admin_url('admin.php?page='.$slug);
    }
}