<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <h1>User Accounts</h1>

    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('about') ?>">About</a> |
    <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
    <a href="<?= base_url('users') ?>">User Accounts</a>

    <br><br>

    <?php if (session()->get('isLoggedIn')): ?>
        <form action="<?= site_url('logout') ?>" method="post">
            <?= csrf_field() ?>
            <button type="submit">Logout</button>
        </form>
    <?php endif; ?>

    <br><br>

    <a href="<?= site_url('users/new') ?>">
        <button type="button">+ Add New User</button>
    </a>

    <br><br>

    <table border="1" cellpadding="8">

        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
            <th>Action</th>
        </tr>

            <?php foreach ($users as $user): ?>
        <tr>
            <td>
                <?php if (!empty($user['avatar'])): ?>
                    <img
                        src="<?= base_url('uploads/avatars/' . rawurlencode($user['avatar'])) ?>"
                        width="80"
                        height="80"
                        style="object-fit: cover;"
                        alt="User Avatar">
                <?php else: ?>
                    <img
                        src="<?= base_url('images/default-avatar.png') ?>"
                        width="80"
                        height="80"
                        style="object-fit: cover;"
                        alt="Default Avatar">
                <?php endif; ?>
            </td>

            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['full_name']) ?></td>
            <td><?= esc($user['role']) ?></td>

            <td>
                <a href="<?= site_url('users/edit/' . $user['id']) ?>">
                    Edit
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>