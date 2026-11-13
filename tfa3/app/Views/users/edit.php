<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <h1>Edit User</h1>

    <a href="<?= site_url('users') ?>">Back to Users</a>

    <br><br>

    <?php if (session()->getFlashdata('errors')): ?>
        <div style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('users/update/' . $user['id']) ?>"
          method="post"
          enctype="multipart/form-data">

        <?= csrf_field() ?>

        <label>Username:</label>
        <input type="text" name="username"
               value="<?= esc(old('username', $user['username'])) ?>">
        <br><br>

        <label>Full Name:</label>
        <input type="text" name="full_name"
               value="<?= esc(old('full_name', $user['full_name'])) ?>">
        <br><br>

        <label>Profile Picture:</label>
        <input type="file"
               name="avatar"
               accept=".jpg,.jpeg,.png,image/jpeg,image/png">
        <br><br>

        <button type="submit">Update User</button>

    </form>

</body>
</html>