<?= $this->extend('template/Header'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="forms">
        <div class="form register">
            <span class="title">Register</span>

            <form action="/regist" method="post">
                <div class="input-field">
                    <input type="text" name="nama" placeholder="Enter your name" required>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="text" name="email" placeholder="Enter your email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="text" class="password" name="member_username" placeholder="Enter username" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" name="member_password" placeholder="Enter password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="input-field button">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <div class="login-signup">
                <span class="text">Already have account?
                    <a href="/login" class="text signup-link">Login</a>
                </span>
            </div>
        </div>

        <?= $this->endSection(); ?>