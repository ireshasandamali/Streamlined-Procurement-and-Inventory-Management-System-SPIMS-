<select id="ICatergory"  class="form-select" name="ICatergory" onchange="loadItems(this.value)">

    <option selected="">...</option>
    <?php foreach ($Bidder_list as $key => $resultn) { ?>
        <option value="<?= $resultn['VendorId'] ?>"><?= $resultn['CompanyName'] ?></option>
    <?php } ?>
</select>

