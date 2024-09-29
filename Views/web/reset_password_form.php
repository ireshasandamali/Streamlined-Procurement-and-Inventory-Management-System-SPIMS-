<?= form_open('user/save_reset_password', ["role" => "form", "class" => "php-email-form", "novalidate" => "novalidate"]) ?>
<!-- Add input for the reset token -->
<input type="hidden" name="token" value="<?= $token ?>">

<!-- Add other form elements as needed -->
<div class="form-group mt-3">
    <label for="new_password">New Password</label>
    <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required>
    <span class="text-danger"><?= service('validation')->getError('new_password') ?></span>
</div>

<div class="text-center"><button type="submit">Reset Password</button></div>

<?= form_close() ?>