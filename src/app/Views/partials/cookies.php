<!-- Cookie Banner -->
<div id="cookieBanner" class="cookie-banner border-top border-light shadow-sm d-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="mb-2 mb-md-0"><?= __('cookies') ?><a href="<?= url('privacy-policy') ?>" class="cookie-link" title="<?= __('cookies_a') ?>"><?= __('cookies_a') ?></a>.
                </p>
            </div>
            <div class="col-md-4 text-md-end">
                <button id="rejectCookies" class="btn btn-outline-light btn-sm me-2"><?= __('form.decline') ?></button>
                <button id="acceptCookies" class="btn btn-light btn-outline-success btn-sm"><?= __('form.accept') ?></button>
            </div>
        </div>
    </div>
</div>
<!-- End Cookie Banner -->
