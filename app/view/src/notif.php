<!-- notif start -->
<?php if (isset($_SESSION['flash_message'])) : ?>
    <?php if ($_SESSION['flash_message']['color'] == 'Merah'): ?>
        <div role="alert" class="alert alert-error">
    <?php elseif ($_SESSION['flash_message']['color'] == 'Hijau'): ?>
        <div role="alert" class="alert alert-success">
    <?php endif; ?>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 shrink-0 stroke-current"
            fill="none"
            viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span><?= $_SESSION['flash_message']['pesan']; ?></span>
        <?php unset($_SESSION['flash_message']); ?>
    </div>
<?php endif; ?>
<!-- notif end -->
