<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SPIMS_Dashboard</title>
    <!-- Vendor CSS Files -->
    <link href="<?=base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?=base_url('public/assets/css/style.css') ?>" rel="stylesheet">
    <script src="<?=base_url('public/assets/js/code.jquery.com_jquery-3.7.1.min.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/chart.js/chart.umd.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/quill/quill.min.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?=base_url('public/assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('public/assets/js/jspdf.debug.js') ?>"></script>
  <script src="<?=base_url('public/assets/js/main.js') ?>"></script>
   

</head>


<main id="main" class="main">
    <div class="pagetitle">
        
        <!-- Tender->View -->
          <div class="row mb-3">
    <div class="col-md-12 text-md-end">
        <button type="button" class="btn btn-info" onclick="javascript:demoFromHTML();"><i class="bi bi-download"></i> Download PDF</button>
    </div>
</div>

        <div id="customers">
            <div class="col-md-12">
                        <div class="card" style="border: 2px solid  #ccd9ff; border-radius: 0;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                               

                                <div class="row mb-3">
                           
                            </div>
                        </div>
                

                    </div>
                </div>
            </div>
     
    

</main>


<script>
function demoFromHTML() {
    var pdf = new jsPDF('l', 'pt', 'A3');
    // source can be HTML-formatted string, or a reference
    // to an actual DOM element from which the text will be scraped.
    source = $('#customers')[0];

    // we support special element handlers. Register them with jQuery-style 
    // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    // There is no support for any other type of selectors 
    // (class, of compound) at this time.
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true
        }
    };
    margins = {
        top: 80,
        bottom: 60,
        left: 40,
        width: 522
    };
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        pdf.save('Item.pdf');
    }, margins);
}
</script>

