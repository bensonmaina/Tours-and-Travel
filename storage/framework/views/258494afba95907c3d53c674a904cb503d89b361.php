<div class="" style="">
    <div class="b-container">
        <div class="b-header">
            <?php $email_header = setting_item('email_header') ?>
            <?php echo $email_header ? $email_header : sprintf('<h1 class="site-title">%s</h1>',setting_item('site_title','The 2023 Tours')); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\booking\modules/Email/Views/parts/header.blade.php ENDPATH**/ ?>