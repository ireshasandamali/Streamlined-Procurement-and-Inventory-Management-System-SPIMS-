<select id="ItemList"  class="form-select" name="ItemName">
    <option selected="">...</option>
    <?php foreach ($ItemName_list as $key => $resultn) { ?>
        <option value="<?= $resultn['ItemName'] ?>"><?= $resultn['ItemName'] ?></option>
    <?php } ?>
</select>
<span class="text-danger"><?= service('validation')->getError('ItemName') ?></span>
