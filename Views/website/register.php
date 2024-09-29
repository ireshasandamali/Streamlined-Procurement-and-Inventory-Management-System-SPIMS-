<?= form_open_multipart('web/make_register') ?>
<div class="row">
    <div class="form-group col-md-6">
        <label for="name">First Name</label>
        <input type="text" name="FirstName" class="form-control" id="FirstName" >
        <span class="text-danger"><?= service('validation')->getError('FirstName') ?></span>
    </div>
    <div class="form-group col-md-6">
        <label for="name">Last Name</label>
        <input type="text" name="LastName" class="form-control" id="LastName" >
        <span class="text-danger"><?= service('validation')->getError('LastName') ?></span>
    </div>
</div>
<div class="row">                                
    <div class="form-group col-md-6">
        <label for="name">Your Email</label>
        <input type="text" class="form-control" name="Email" id="Email" >
        <span class="text-danger"><?= service('validation')->getError('Email') ?></span>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="UserName">User Name</label>
        <input type="text" name="UserName" class="form-control" id="UserName" >
        <span class="text-danger"><?= service('validation')->getError('UserName') ?></span>
    </div>
    <div class="form-group col-md-6">
        <label for="Password">Password</label>
        <input type="text" name="Password" class="form-control" id="Password" >
        <span class="text-danger"><?= service('validation')->getError('Password') ?></span>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Image</label>
        <input class="form-control" type="file" id="profile_image" name="profile_image">
    </div>
</div>

<div class="text-center"><button type="submit">Register</button></div>
<?= form_close() ?>