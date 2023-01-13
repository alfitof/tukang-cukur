<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Login</span>

            <form action="/loginlogic" method="post">
                <?php if (session()->getFlashdata('error')) { ?>
                    <div class="alert alert-danger mt-4">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php }; ?>
                <div class="input-field">
                    <input type="text" placeholder="Enter your username" name="member_username" value="<?= session()->getFlashdata('member_username'); ?>">
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Enter your password" name="member_password">
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="input-field button">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">Not a member?
                    <a href="/register" class="text signup-link">Signup Now</a>
                </span>
            </div>
        </div>

        <?= $this->endSection(); ?>