<select id="ItemNameInput"  class="form-select" name="ICatergory"  >

    <option selected="">...</option>
    <?php foreach ($ItemName_list as $key => $resultn) { ?>
        <option value="<?= $resultn['ItemName'] ?>"><?= $resultn['ItemName'] ?></option>
    <?php } ?>
</select>

