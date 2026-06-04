<?php

namespace controllers\Admin;

use core\rendering\View;

class AdminController extends \controllers\Controller
{
    public function panel() {
        View::render("admin/panel");
    }
}