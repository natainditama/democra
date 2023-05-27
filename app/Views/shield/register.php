<?= $this->extend('layouts/base'); ?>

<?= $this->section('main'); ?>
<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center form-bg-image">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
          <div class="text-center text-md-center mb-4 mt-md-0">
            <h1 class="mb-0 h3">Create your Account</h1>
          </div>
          <?php if (session('error') !== null) : ?>
            <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
          <?php elseif (session('errors') !== null) : ?>
            <div class="alert alert-danger" role="alert">
              <?php if (is_array(session('errors'))) : ?>
                <?php foreach (session('errors') as $error) : ?>
                  <?= $error ?>
                  <br>
                <?php endforeach ?>
              <?php else : ?>
                <?= session('errors') ?>
              <?php endif ?>
            </div>
          <?php endif ?>

          <form action="<?= url_to("register") ?>" method="post" class="mt-4">
            <?= csrf_field(); ?>
            <div class="form-group mb-4">
              <label for="email"><?= lang("Auth.email") ?></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </span>
                <input id="email" autofocus type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
              </div>
            </div>
            <div class="form-group mb-4">
              <label for="username"><?= lang("Auth.username") ?></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </span>
                <input id="username" autofocus type="username" class="form-control" name="username" inputmode="username" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-group mb-4">
                <label for="password"><?= lang('Auth.password') ?></label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon2">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                    </svg>
                  </span>
                  <input id="password" type="password" class="form-control" name="password" inputmode="text" autocomplete="password" placeholder="<?= lang('Auth.password') ?>" required>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="terms">
                  <label class="form-check-label fw-normal mb-0" for="terms">
                    I agree to the <a href="#" class="fw-bold">terms and conditions</a>
                  </label>
                </div>
              </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-gray-800"><?= lang('Auth.register') ?></button>
            </div>
          </form>
          <div class="d-flex justify-content-center align-items-center mt-4">
            <span class="fw-normal">
              Already have an account?
              <a href="<?= url_to("login") ?>" class="fw-bold">Login here</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>