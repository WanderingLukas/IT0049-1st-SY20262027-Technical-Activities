
<!DOCTYPE html>
<html>
<head>
    <title>User Profile - TSA1</title>
</head>
<body>

    <h1>User Profile</h1>

    <?php if (!empty($user)): ?>

        <p><strong>ID:</strong>
            <?= esc($user['id']) ?>
        </p>

        <p><strong>Username:</strong>
            <?= esc($user['username']) ?>
        </p>

        <p><strong>Full Name:</strong>
            <?= esc($user['full_name']) ?>
        </p>

        <p><strong>Email:</strong>
            <?= esc($user['email']) ?>
        </p>

        <p><strong>Created At:</strong>
            <?= esc($user['created_at']) ?>
        </p>

    <?php else: ?>
        <p>No user record found.</p>
    <?php endif; ?>

    <hr>

    <a href="<?= site_url('/') ?>">Home</a> |
    <a href="<?= site_url('tasks') ?>">All Tasks</a> |
    <a href="<?= site_url('about') ?>">About</a>

</body>
</html>
