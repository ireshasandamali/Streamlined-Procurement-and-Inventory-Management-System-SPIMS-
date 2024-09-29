<select id="ItemList"  class="form-select" name="ItemName"  onchange="loadItemId(this.value);loadItemquantity(this.value)">
    <option selected="">Select</option>
    <?php foreach ($ItemName_list as $key => $resultn) { ?>
        <option value="<?= $resultn['id'] ?>"><?= $resultn['ItemName'] ?></option>
    <?php } ?>
</select>
<span class="text-danger"><?= service('validation')->getError('ItemName') ?></span>
