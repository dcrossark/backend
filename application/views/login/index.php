<div class="container">
    <div class="forms-container">
        <div class="signin-signup">

            <!-- FORM LOGIN -->
            <form action="<?= base_url('auth/masuk'); ?>" method="post" class="sign-in-form">
                <h2 class="title">Masuk</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <button type="submit" value="Masuk" class="btn solid">Masuk</button>
                <?= $this->session->flashdata('message'); ?>

                <a href="<?= base_url() ?>">Kembali ke Beranda</a>
                <p class="social-text">Masuk menggunakan platform sosial </p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>


            <!-- FORM DAFTAR -->
            <form action="<?= base_url('auth/registration'); ?>" method="post" class="sign-up-form">
                <h2 class="title">Daftar</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" value="<?= set_value('name'); ?>" />
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>" />
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" />
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn" value="Daftar">Daftar</button>
                <?= $this->session->flashdata('message'); ?>
                <a href="<?= base_url() ?>">Kembali ke Beranda</a>

            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Belum punya akun?</h3>
                <p>
                    Ayo daftar sekarang!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Daftar Akun
                </button>
            </div>
            <img src="<?= base_url(); ?>assets/img/account-img/reg.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Sudah punya akun?</h3>
                <p>
                    Login disini!
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Masuk
                </button>
            </div>
            <img src="<?= base_url(); ?>assets/img/account-img/log.png" class="image" alt="" />
        </div>
    </div>
</div>