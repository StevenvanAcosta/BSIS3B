<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $link = new Link();
        $link->fontAwesome();
        $link->addStyle('tasks/index');
    ?>
    <title><?= APP_NAME ?></title>
</head>
<body>
    <div class="container">
        <h1>Tasks</h1>
        <a href="<?= ROOT ?>/tasks/create" class="btnGreen"><i class="fa-solid fa-plus"></i> Create New</a>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
            <?php if (is_array($tasks) && count($tasks) > 0) { ?>
                <?php foreach ($tasks as $task) { ?>
                    <tr>
                        <td><?= $task->task_name ?></td>
                        <td><?= $task->task_description ?></td>
                        <td><?= $task->task_status ?></td>
                        <td><?= formattedDateTime($task->task_due); ?></td>
                        <td>
                            <div class="actions-container">
                                <a href="<?= ROOT ?>/tasks/edit/<?= $task->id ?>" class="btnGreen"><i class="fa-solid fa-pencil"></i> Edit</a>
                                <a href="<?= ROOT ?>/tasks/delete/<?= $task->id ?>" class="btnRed"><i class="fa-solid fa-trash"></i> Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="5" class="no-result">No Result</td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>