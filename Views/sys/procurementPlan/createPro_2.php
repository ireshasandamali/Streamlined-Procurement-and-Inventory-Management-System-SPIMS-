<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"  style="text-align:center">Procurement Plan</h5
                <hr style="height: 3px; background-color: red;">
                <span class="text-success"><?= @$msg ?></span>
                <?= form_open('procurementPlan/createPro') ?>

                <div class="row mb-3"> 
                    <label for="Year" class="col-sm-2 col-form-label">Year</label>
                    <div class="col-sm-10">
                        <select  class="form-control" id="Year" name="Year">
                            <option value="">--</option>
                            <?php
                            $cyear = date('Y');

                            for ($i = 2023; $i <= 2030; $i++) {
                                ?>
                                <option value="<?= $i ?>" <?php
                                if ($i == $cyear) {
                                    echo 'selected';
                                }
                                ?>><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <span class="text-danger"><?= service('validation')->getError('Year') ?></span>
                    </div>
                </div>

                <div class="row mb-3"> 
                    <label for="Vote" class="col-sm-2 col-form-label">Vote</label>
                    <div class="col-sm-8">
                        <select id="Vote" class="form-select" name="Vote" onchange="loadDiscription(this.value)" onchange="loadVoteAllocation(this.value)">
                            <option selected="">...</option>
                            <?php foreach ($vote_list as $key => $result) { ?>
                                <option value="<?= $result['Vote'] ?>"><?= $result['Vote'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="text-danger"><?= service('validation')->getError('Vote') ?></span>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary add_vote"> <i class="bi bi-plus-square" aria-hidden="true"></i> Add Vote </button>
                    </div>
                </div>
                     <!--Vote Description-->
                    <div class="row mb-3"> 
                        <label for="Vote" class="col-sm-2 col-form-label">Vote Description</label>
                        <div class="col-sm-10">
                            <div class="alert alert-light mt-3" id="result">
                            </div>  
                        </div>
                    </div>
                <div class="row mb-3"> 
                    <label for="Cost" class="col-sm-2 col-form-label">Vote Allocation</label>
                    <div class="col-sm-10">
                         <div class="alert alert-light mt-3" id="result">
                       <!-- <span class="text-danger"><?= service('validation')->getError('Cost') ?></span>-->
                    </div>
                </div>    

                <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary rounded">Create</button>
                    <button type="save" class="btn btn-outline-primary rounded">Cancel</button>
                </div>
            <?= form_close() ?><!-- End Horizontal Form -->

            </div>
        </div>
    </section>
</main>

<script>
    function  loadDiscription(did) {
        var formData = "VoteId=" + did + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('ProcurementPlan/getvdiscription') ?>',
            data: formData,
            success: function (response) {
                $("#result").html(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });

    }

</script>

<script>
    function  loadVoteAllocation(aid) {
        var formData = "VoteId=" + aid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('ProcurementPlan/getvallocation') ?>',
            data: formData,
            success: function (response) {
                $("#result").html(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });

    }

</script>