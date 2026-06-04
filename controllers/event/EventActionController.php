<?php

namespace controllers\user;

use controllers\Controller;
use core\data_base\DB;
use core\routing\Router;
use core\session\Session;

class EventActionController extends Controller {
    public function signup($id) {
        if (empty(DB::query()->from("event")->where("id", "=", $id)->first())) Router::redirect(Router::back(Router::route("event.list")));
        if (empty(DB::query()->from("appoint")->where("user_id", "=", Session::get("user.id"))->where("event_id", "=", $id)->first())) {
            DB::query()->from("appoint")->insert([
                "user_id" => Session::get("user.id"),
                "event_id" => $id,
                "status_id" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ]);
            Router::redirect(Router::back(Router::route("event.show", ["id" => $id])));
        }
        Router::redirect(Router::back(Router::route("event.show", ["id" => $id])));
    }
}