
<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

    <h1>Welcome to Tasks for Today</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <hr>

    <h2>Today's Tasks</h2>

    <?php if (!empty($tasks)): ?>

        <?php foreach ($tasks as $task): ?>
            <p>
                <?= esc($task['title']) ?>
                -
                <?= esc($task['status']) ?>
            </p>
        <?php endforeach; ?>

    <?php else: ?>

        <p>No tasks scheduled for today.</p>

    <?php endif; ?>

    <hr>

    <a href="<?= site_url('tasks') ?>">View All Tasks</a>

</body>
</html>
