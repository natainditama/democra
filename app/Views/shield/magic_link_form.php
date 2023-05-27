<?= $this->extend('layouts/base'); ?>

<?= $this->section('main'); ?>
<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center form-bg-image">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
          <h1 class="h3">Forgot your password?</h1>
          <p class="mb-4">Keep calm! Share your email address, and we'll send you a code to initiate the password reset procedure!</p>
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
          <form action="<?= url_to('magic-link') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-4">
              <label for="email"><?= lang('Auth.email') ?></label>
              <div class="input-group">
                <input type="email" class="form-control" name="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email', auth()->user()->email ?? null) ?>" required id="email">
              </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-gray-800">Recover password</button>
            </div>
          </form>
          <div class="d-flex justify-content-center align-items-center mt-4">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            <p class="text-center mb-0"><a href="<?= url_to('login') ?>"><?= lang('Auth.backToLogin') ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>