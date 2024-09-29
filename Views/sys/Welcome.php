

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?= site_url('public/assets_web/img/tick.png') ?>" alt="" style="width: 80px; height: 90px">
                <p style="color: green; font-size: 18px; font-weight: bold;">Successfully Registered to the SPIMS...!</p>
                <p>Your Registration Id is <?= $userid ?></p>
                <p>You Will Receive Email Verification Shortly..!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Go To HOME Page</button>
            </div>
        </div>
    </div>
</div>
