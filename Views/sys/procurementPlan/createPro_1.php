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
    <!-- Start Search -->
    <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group" data-select2-id="23">
                        <form method="post" id="search-form" data-select2-id="search-form">

                            <div class="col-sm-3" data-select2-id="22">
                                <label class="control-label">Year</label>
                                <select class="form-control select2 select2-hidden-accessible" name="Year" id="Year" tabindex="-1" aria-hidden="true" data-select2-id="ref_no">
                                    <option value="" data-select2-id="12">Select</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ref_no-container"><span class="select2-selection__rendered" id="select2-ref_no-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>

                            <div class="col-sm-3" data-select2-id="54">
                                <label class="control-label">Vote</label>
                                <select class="form-control select2 select2-hidden-accessible" name="Vote" id="Vote" tabindex="-1" aria-hidden="true" data-select2-id="line_ministry">
                                    <option value="" data-select2-id="14">Select</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-line_ministry-container"><span class="select2-selection__rendered" id="select2-line_ministry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>

                            <div class="col-sm-3">
                                <label class="control-label">Title of the Procurement</label>
                                <select class="form-control select2 select2-hidden-accessible" name="proc_title" id="proc_title" tabindex="-1" aria-hidden="true" data-select2-id="proc_title">
                                    <option value="" data-select2-id="16">Select</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="15" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-proc_title-container"><span class="select2-selection__rendered" id="select2-proc_title-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>

                            <div class="col-sm-3">
                                <label class="control-label">Category</label>
                                <select class="form-control select2 select2-hidden-accessible" name="category" id="category" tabindex="-1" aria-hidden="true" data-select2-id="category">
                                    <option value="" data-select2-id="18">Select</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category-container"><span class="select2-selection__rendered" id="select2-category-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>

                            <div class="col-sm-3">
                                <label class="control-label">Successful Bidder</label>
                                <select class="form-control select2 select2-hidden-accessible" name="successful_bidder_name" id="successful_bidder_name" tabindex="-1" aria-hidden="true" data-select2-id="successful_bidder_name">
                                    <option value="" data-select2-id="20">Select</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="19" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-successful_bidder_name-container"><span class="select2-selection__rendered" id="select2-successful_bidder_name-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>

                            <div class="col-sm-3">
                                <label class="control-label">Award From</label>
                                <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="report_from" id="report_from">
                            </div>

                            <div class="col-sm-3">
                                <label class="control-label">Award To</label>
                                <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="report_to" id="report_to">
                            </div>

                            <div class="col-sm-3">
                                <label class="control-label"> </label>
                                <input type="submit" class="btn btn-primary" style="margin-top: 25px" name="search" id="search" value="Search">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    <!-- end search -->
    <section class="section dashboard">
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Procurement Plan</h5>
              <span class="text-success"><?= @$msg ?></span>
              <?=form_open('procurementPlan/createPro')?>
              
             <div class="row mb-3"> 
                      <label for="Year" class="col-sm-2 col-form-label">Year</label>
                      <div class="col-sm-10">
                      <select  class="form-control" id="Year" name="Year">
                           <option value="">--</option>
                            <?php
                            $cyear = date('Y');

                            for ($i = 2023; $i <= 2030; $i++) {
                                ?>
                                <option value="<?= $i ?>" <?php if ($i == $cyear) {
                                echo 'selected';
                            } ?>><?= $i ?></option>
                            <?php } ?>
                      </select>
                      <span class="text-danger"><?= service('validation')->getError('Year') ?></span>
                      </div>
                      
                    
              </div>
             
              <div class="row mb-3"> 
                      <label for="Vote" class="col-sm-2 col-form-label">Vote</label>
                    <div class="col-sm-8">
                      <select id="Vote" class="form-select" name="Vote" onchange="loadDiscription(this.value)">
                          <option selected="">...</option>
                        <?php foreach ($vote_list as $key=>$result){ ?>
                            <option value="<?= $result['Vote']?>"><?=$result['Vote']?></option>
                        <?php }?>
                      </select>
                       <span class="text-danger"><?= service('validation')->getError('Vote') ?></span>
                      </div>
                      
                      <!--Vote Description-->
                      
                      <div class="col-sm-2">
                     <button class="btn btn-primary add_vote"> <i class="bi bi-plus-square" aria-hidden="true"></i> Add Vote </button>

                     </div>
                      
                      <div class="row mb-3"> 
                      <label for="Vote" class="col-sm-2 col-form-label">Vote Description</label>
                      <div class="col-sm-10">
                          <div class="alert alert-light mt-3" id="result">
                            
                          </div>  
                          
                      </div>
                      </div>
                     
               </div> 
                  
              
              <div class="row mb-3"> 
                      <label for="Cost" class="col-sm-2 col-form-label">Estimated Cost</label>
                       <div class="col-sm-10">
                      <input type="text" class="form-control" id="Cost" name="Cost">
                      <span class="text-danger"><?= service('validation')->getError('Cost') ?></span>
                      </div>
              </div>    
              
              <div class="text-center">
                  <button type="submit" class="btn btn-outline-primary rounded">Create</button>
                  <button type="save" class="btn btn-outline-primary rounded">Cancel</button>
                </div>
           <?=form_close()?><!-- End Horizontal Form -->

            </div>
          </div>
    </section>
</main>

<script>
    function  loadDiscription(did){
        var formData = "VoteId=" +did+"&";
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