<?php

namespace controllers\Admin;

use core\rendering\View;
use core\data_base\DB;

class AdminController extends \controllers\Controller
{
    public function panel($page = 1) {
        $appoints_on_page = 20;

        $appoints_count = DB::query()
            ->from("appoint")
            ->select(["COUNT(id)"])
            ->get()[0]["COUNT(id)"];
        $page_count = ceil($appoints_count / $appoints_on_page);

        $appoints = DB::query()
            ->from("appoint")
            ->select([
                "appoint.id",
                "appoint.created_at",
                "event.title",
                "user.name",
                "user.surname",
                "user.patronymic",
                "user.phone",
                "user.email",
                "appoint_status.id as status_id",
                "appoint_status.name as status_name",
                "appoint_status.sys_name as status",
                "appoint_status.style as status_style"
            ])
            ->join("appoint_status", "appoint_status.id", "=", "appoint.status_id")
            ->join("user", "user.id", "=", "appoint.user_id")
            ->join("event", "event.id", "=", "appoint.event_id")
            ->orderBy("id", "DESC")
            ->offset(($page-1)*$appoints_on_page)
            ->limit($appoints_on_page)
            ->get();

        $statuses = DB::query()
            ->from("appoint_status")
            ->select([
                "appoint_status.id as id",
                "appoint_status.name as status_name",
                "appoint_status.sys_name as status",
                "appoint_status.style as status_style"
            ])
            ->get();

        View::render("admin/panel", [
            "appoints" => $appoints,
            "statuses" => $statuses,
            "page_count" => $page_count,
            "current_page" => $page,
        ]);
    }
}