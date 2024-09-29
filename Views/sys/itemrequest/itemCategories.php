<select id="ItemNameInput"  class="form-select" name="ICatergory" onchange="loadItems(this.value)">

    <option selected="">...</option>
    <?php foreach ($Item_list as $key => $result) { ?>
        <option value="<?= $result['ICatergory'] ?>"><?= $result['ICatergory'] ?></option>
    <?php } ?>
</select>