
<!DOCTYPE html>
<html>
<head>
    <title>All Tasks - TSA1</title>
</head>
<body>

    <h1>All Tasks</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <hr>

    <h2>Complete Task List</h2>

    <?php if (!empty($tasks)): ?>

        <?php foreach ($tasks as $task): ?>
            <p>
                <?= esc($task['title']) ?>
                -
                <?= esc($task['status']) ?>
                -
                <?= esc($task['task_date']) ?>
            </p>
        <?php endforeach; ?>

    <?php else: ?>

        <p>No tasks found.</p>

    <?php endif; ?>

    <hr>

    <a href="<?= site_url('/') ?>">Back to Home</a>

</body>
</html>
