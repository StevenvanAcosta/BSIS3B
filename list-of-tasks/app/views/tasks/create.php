<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $link = new Link();
        $link->fontAwesome();
        $link->addStyle('tasks/form');
    ?>
    <title><?= APP_NAME ?></title>
</head>
<body>
    <h1>Create Task</h1>
    <a href="<?= ROOT ?>/tasks" class="btnGreen"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
    <form action="<?= ROOT ?>/tasks/insert" method="POST">
        <label for="">Name: </label><input type="text" name="task_name">
        <label for="">Description: </label><textarea name="task_description"></textarea>
        <label for="">Status: </label>
        <select name="task_status">
            <?php foreach($status as $item) { ?>
                <option value="<?= $item->status_name ?>"><?= $item->status_name ?></option>
            <?php } ?>
        </select>
        <label for="">Due Date: </label><input type="datetime-local" name="task_due">
        <button type="submit" class="btnGreen"><i class="fa-solid fa-plus"></i> Create</button>
    </form>
</body>
</html>