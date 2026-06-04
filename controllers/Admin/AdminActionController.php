<?php

namespace controllers\Admin;

use core\data_base\DB;
use core\routing\Router;

class AdminActionController extends \controllers\Controller
{
    public function put($id, $page = 1) {
        DB::query()
            ->from("appoint")
            ->where("id", "=", $id)
            ->update(["status_id" => $_POST["status"]]);

        Router::redirect(Router::route("admin.panel", ["page" => $page]));
    }
}