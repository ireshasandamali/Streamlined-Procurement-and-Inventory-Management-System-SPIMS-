<select id="ItemList"  class="form-select" name="ItemName">
    <option selected="">...</option>
    <?php foreach ($Avalue_list as $key => $resulta) { ?>
        <option value="<?= $resulta['PStatus'] ?>"><?= $resulta['PStatus'] ?></option>
    <?php } ?>
</select>
<span class="text-danger"><?= service('validation')->getError('PStatus') ?></span>
