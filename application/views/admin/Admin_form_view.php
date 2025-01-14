<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin_style.css">
    <title>Login</title>
</head>



<body>
    <section>
        <form action="<?php echo base_url(); ?>admin/Admin_Login/login" method="post">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="Email_id" name="Email_id" required>
                <label for="Email_id">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="forget">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember"> Remember Me
                </label>
                <a href="#">Forget Password</a>
            </div>
            <button type="submit">Log in</button>
            <br>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="bg-white alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="bg-white alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
            <?php endif; ?>
        </form>

    </section>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <?php if ($this->session->flashdata('success')) : ?>
        <script>
            alert("<?php echo $this->session->flashdata('success'); ?>");
        </script>
    <?php endif; ?>
</body>

</html>