<?php

namespace controllers\main;

use controllers\Controller;
use core\rendering\View;

class MainController extends Controller {
    public function index() {
        View::render("index");
    }

    public function about() {
        View::render("about");
    }

    public function contacts() {
        View::render("contacts");
    }

    public function residents() {
        View::render("residents");
    }
}