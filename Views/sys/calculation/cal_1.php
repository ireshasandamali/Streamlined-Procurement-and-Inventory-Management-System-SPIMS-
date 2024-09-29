<main id="main" class="main">
    <head>
        <link rel="stylesheet" href="popupstyle.css">
    </head>
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="container" style=" background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px;  border-radius: 10px;">        
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
           <ol class="breadcrumb">
               <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
            </ol>
        </nav>    
        </div><!-- End Page Title -->
    <section class="section dashboard">        
         <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Employee Registration Form</div>
            <div class="card-body">
                <h5 class="card-title"></h5>    
                <!-- Multi Columns Form -->
                <?= form_open_multipart('calculation/cal') ?>
                <div class="row g-3" style="margin-top: 5px">
                    <div class="col-md-6">
                        <label for="item" class="form-label">item Name</label>
                        <input type="text" class="form-control" id="item" name="item" value="<?= set_value('item') ?>">  
                         <span class="text-danger"><?= service('validation')->getError('item') ?></span>
                    </div>
                    
                     <div class="col-md-6">
                        <label for="qty" class="form-label">qty</label>
                        <input type="text" class="form-control" id="qty" name="qty" value="<?= set_value('qty') ?>">                       
                    </div>
                     <div class="col-md-6">
                        <label for="uprise" class="form-label">uprise</label>
                        <input type="text" class="form-control" id="uprise" name="uprise" value="<?= set_value('uprise') ?>">                       
                    </div>
                    <div class="col-md-6">
                        <label for="total" class="form-label">total</label>
                        <input type="text" class="form-control" id="total" name="total"  value="<?= set_value('qty') ?>" readonly>
                    </div>
                     <div class="col-md-6">
                        <label for="other" class="form-label">other</label>
                        <input type="text" class="form-control" id="other" name="other" value="<?= set_value('other') ?>">                       
                    </div>
                    <div class="col-md-6">
                        <label for="discount" class="form-label">discount</label>
                        <input type="text" class="form-control" id="discount" name="discount" value="<?= set_value('discount') ?>">                       
                    </div>
                    <div class="col-md-6">
                        <label for="vat" class="form-label">vat</label>
                        <input type="text" class="form-control" id="vat" name="vat" value="<?= set_value('vat') ?>">                       
                    </div>
                     <div class="col-md-6">
                        <label for="prise" class="form-label">prise</label>
                        <input type="text" class="form-control" id="vat" name="prise" value="<?= set_value('prise') ?>">                       
                    </div>
                
                    <div>
                     <div class="text-center">
                         <button type="submit" class="btn btn-outline-primary rounded" ><a class="nav-link scrollto" href="<?= site_url('calculation/Welcome') ?>">Submit</a></button>
    <div class="popup" id="popup">
        <img src="<?= site_url('public/assets/img/tick.png')?>" alt="" style="width: 80px; height: 90px">
        <h2>Welcome to SPIMS System</h2>
        <p>You have registered Successfully...!!!</p>
        <button type="button" onclick="closePopup()">OK</button>
    </div>
    <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
</div>
<?= form_close() ?>
                         <?= form_open('calculation/caladd') ?>

                    <div class="row mb-4">
                    <div class="row mb-3">
                        <label for="CNo" class="col-sm-2 col-form-label">Camp Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="CNo" name="CNo">
                            <span class="text-danger"><?= service('validation')->getError('CNo') ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="CName" class="col-sm-2 col-form-label">Camp Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="CName" name="CName">
                            <span class="text-danger"><?= service('validation')->getError('CName') ?></span>
                        </div>
                    </div>
                   
                     <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                        <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                    </div>

                    <?= form_close() ?><!-- End Horizontal Form -->


            </div>
        </div>

    </section>
    </div>
             <script>
        document.getElementById('qty').addEventListener('input', updateTotal);
        document.getElementById('uprise').addEventListener('input', updateTotal);

        function updateTotal() {
            var qty = parseFloat(document.getElementById('qty').value) || 0;
            var uprise = parseFloat(document.getElementById('uprise').value) || 0;
            var total = qty * uprise;

            document.getElementById('total').value = total;
        }
    </script>
    
     <script>
                let popup = document.getElementById("popup");
                 function OpenPopup() {
        document.getElementById("popup").classList.add("open-popup");
    }

    function closePopup() {
        document.getElementById("popup").classList.remove("open-popup");
    }
            </script>
         
</main>