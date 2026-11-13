<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

    <h1>Edit Customer</h1>

    <a href="<?= site_url('customers') ?>">Back to Customers</a>

    <br><br>

    <?php if (session()->getFlashdata('errors')): ?>
        <div style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('customers/update/' . $customer['id']) ?>" method="post">

        <?= csrf_field() ?>

        <label>Full Name:</label>
        <input type="text" name="full_name"
               value="<?= esc(old('full_name', $customer['full_name'])) ?>">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email"
               value="<?= esc(old('email', $customer['email'])) ?>">
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone"
               value="<?= esc(old('phone', $customer['phone'])) ?>">
        <br><br>

        <button type="submit">Update Customer</button>

    </form>

</body>
</html>