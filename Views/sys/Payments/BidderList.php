<select id="BidderList"  class="form-select" name="BidderList" onchange="loadItems(this.value)">

    <option selected="">...</option>
    <?php foreach ($Bidder_list as $key => $resultn) { ?>
        <option value="<?= $resultn['VendorId'] ?>"><?= $resultn['CompanyName'] ?></option>
    <?php } ?>
</select>

