<!DOCTYPE html>
<html>
<head>
    <title>New Customer</title>
</head>
<body>

    <h1>Add New Customer</h1>

    <a href="<?= site_url('customers') ?>">Back to Customers</a>

    <br><br>

    <?php if (session()->getFlashdata('errors')): ?>
    <div style="color: red;">
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <form action="<?= site_url('customers/create') ?>" method="post">

        <?= csrf_field() ?>

        <label>Full Name:</label>
        <input type="text" name="full_name"
               value="<?= esc(old('full_name')) ?>">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email"
               value="<?= esc(old('email')) ?>">
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone"
               value="<?= esc(old('phone')) ?>">
        <br><br>

        <button type="submit">Save Customer</button>

    </form>

</body>
</html>