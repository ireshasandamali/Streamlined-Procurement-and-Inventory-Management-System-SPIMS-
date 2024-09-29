<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="container" style=" background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px;  border-radius: 10px;">        
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                <ol class="breadcrumb">
                    <img style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                    <li class="breadcrumb-item"><a href="index.html">Division</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Camp</li>
                </ol>
            </nav>    
        </div>
    </div><!-- End Page Title -->
    <section class="section dashboard">        
         <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Camp</div>
            <div class="card-body">
                <h5 class="card-title"></h5>       
                <?= form_open('Procurement/Preliminaryanalysiscriteria') ?>

                    <div class="row mb-4">                  
                    <div class="row mb-3">
                        <label for="PCriteria" class="col-sm-2 col-form-label">Preliminary Analysis Criteria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="PCriteria" name="PCriteria">
                            <span class="text-danger"><?= service('validation')->getError('PCriteria') ?></span>
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
</main>
