<div class="bg-white">
    <div class="container py-5">
        <h2>Заявки</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Дата подачи</th>
                    <th>Пользователь</th>
                    <th>Телефон</th>
                    <th>Почта</th>
                    <th>Мероприятие</th>
                    <th>Статус</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($appoints as $appoint): ?>
                    <form action="<?php echo \core\routing\Router::route("admin.appoint.put", ["id" => $appoint["id"], "page" => $current_page]) ?>" method="post">
                        <tr>
                            <td><?php echo $appoint["created_at"] ?></td>
                            <td><?php echo $appoint["surname"] ?> <?php echo $appoint["name"] ?> <?php echo $appoint["patronymic"] ?></td>
                            <td><?php echo $appoint["phone"] ?></td>
                            <td><?php echo $appoint["email"] ?></td>
                            <td><?php echo $appoint["title"] ?></td>
                            <td>
                                <select class="form-select" name="status" id="status">
                                    <?php foreach($statuses as $status): ?>
                                        <option class="text-<?php echo $status["status_style"] != null ? $status["status_style"] : "black" ?>" value="<?php echo $status["id"] ?>" <?php echo $status["id"] == $appoint["status_id"] ? "selected" : "" ?>><?php echo $status["status_name"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><button class="btn btn-outline-primary">Сохранить</button></td>
                        </tr>
                    </form>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center gap-1 fs-4">
            <a class="text-decoration-none <?php echo $current_page > 1 ? "text-primary" : "text-secondary" ?>" href="<?php echo $current_page > 1 ? \core\routing\Router::route("admin.panel", ["page" => 1]) : "" ?>">⋘</a>
            <a class="text-decoration-none <?php echo $current_page - 1 >= 1 ? "text-primary" : "text-secondary" ?>" href="<?php echo $current_page - 1 >= 1 ? \core\routing\Router::route("admin.panel", ["page" => $current_page - 1]) : "" ?>"><</a>
            <a class="text-decoration-none"><?php echo $current_page ?></a>
            <a class="text-decoration-none <?php echo $current_page + 1 <= $page_count ? "text-primary" : "text-secondary" ?>" href="<?php echo $current_page + 1 <= $page_count ? \core\routing\Router::route("admin.panel", ["page" => $current_page + 1]) : ""?>">></a>
            <a class="text-decoration-none <?php echo $current_page < $page_count ? "text-primary" : "text-secondary" ?>" href="<?php echo $current_page < $page_count ? \core\routing\Router::route("admin.panel", ["page" => $page_count]) : "" ?>">⋙</a>
        </div>
    </div>
</div>