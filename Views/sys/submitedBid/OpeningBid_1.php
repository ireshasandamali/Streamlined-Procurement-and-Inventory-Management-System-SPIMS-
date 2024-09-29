<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-7">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW SUBMITTED BID</h1>       
            </div>
            <div class="col-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">BID OPENING</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Submitted Bid</li>
                    </ol>
                </nav>   
            </div>
        <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">BID Announcement</div>
            <div class="card-body">
                <h5 class="card-title"></h5>                           

                <!-- Multi Columns Form -->
                <?= form_open('SubmitedBid/OpeningBid') ?>
                <div class="row g-3">  
                    <div class="col-md-1">
                        <label for="entries" class="form-label">Show </label>
                    </div>
                    <div class="col-md-2">
                        <select style="border-radius: 40px;border: 1px solid  #000066" id="entries" class="form-select" onchange="changeEntries(this.value)">
                            <option value="5">5</option>
                            <option value="10" selected>10</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <label for="entries" class="form-label">Entries </label>
                    </div>
                    <div class="col-md-2">
                        <input style="border-radius: 40px;border: 1px solid  #000066" type="date" class="form-control" id="BStart" name="BStart">
                    </div>               
                    <div class="col-md-2">
                        <button style="border-radius: 40px;border: 1px solid  #000066"  type="submit" class="btn btn-primary">
                            Search
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbtJREFUSEvV1UuITnEYx/HPkJUMKYmd2dq4bS0kIxuXmoRSQkmR5JZZDKVoynWmJoqkRBaKjShZYCe3srOxsnArYmEWM/6P/m+deZvznqP3nYX/6jyn83++z/V3ukzx6Zpi/8oA83AYy7EkB/EaL3AeX+oGNhlgO4Yxu8TJN+zE/TqQZsB+DOWLdzGCJ9lenSLfh43Z3obbVZAioAfvMS2X51zJ5RPp/Un8wiJ8bgUpAiLavbiDLRWRPcRaDOBUXcBHLMhNfVsB6MUjvMSKuoBRzEgRTU+RjVUA5uIrfrQYhr8uiiX6iZmYlXoQz61ON77jE+bXzeAdFmMlnlcAVuXpeow1dQGncTz14B42VQCi/tGH2JmbdQEL8SH34QjOllwcxFHEZi/7lz2Ib3fgemHRLuFZtjdgD9Zl+0Lel5YDMZlUbE7jegVzSqKLybmcs4i+HcODskzKxC4m41AWu6WpN7/xCk9xLYtdCF9jB0K7DmC8GdSOXK9vEryLaXQPdhIQvm5ha8HpGfQXIe1kEH5i8wPSV3AaJdzdsNsFNPxcxa5sTMiiU4CQ+BvpX/EmSc0Eme8UoHTf/n/AH9BmShm5CxJHAAAAAElFTkSuQmCC"/>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <a style="border-radius: 40px;border: 1px solid  #000066" type="reset" class="btn btn-secondary"href="<?= site_url('SubmitedBid/OpeningBid') ?>">
                            Reset
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcpJREFUSEu11T+oj3EUx/HXTflvQaGITSiEJN2FhcLAouRvslHMysJsuQw20l1uXVEGBhkkoQwiBiEzBixMnqPz+/X0cJ/f98n9faen5/v9nvc553PO+Y4Y8hoZsn1dAPNwBSe6OFUKWIM7WIlZ0w04mZ7PTsPf8BaPMIFnbcCSCI7iGnqApr0AncbLf4FKAHFvHSaxCqHFrtRiP2bgFw7idhNSCoh78zNVx2tGluEqAvQDG/C+DukCaEv1OA7hIXYOAzAHH7AkAQH6s7pEMIZeeq7jTCOkc7icKQvROwHCeP9S3o2mq0O24Hkl9puqfNd2BXxPketOh6gLaj8WVU58TrH7/5sp+oKFiMNfa5dLAFFlcS5sLJ4qgqfYim2I794qSVH0yquqR55g+1SAmzhcNc9FXGiIOEjk87hUNWMUQH8gNlO0B3czl8vxs634a3tRpp8yNbtxv03kmC2juFEry0Gc8PpYaaOtyAm5FLdwqiF4HRbVEsYPpMCbqhS/K+nk9XiQIUfpRQNFjb/AzGqobcSOHHDxRnzEXrxuhtrWyasRM2bzgPw8xpEcFX8dLRkV+3A2X7OYnnPT03vT9eAMErh1vySC/wL8BrLNURk1ZlSoAAAAAElFTkSuQmCC"/>
                        </a>
                    </div>              
                   </div>   
                </div>   
            </div>   
                </div>
                <!-- End Multi Columns Form -->


                <div class="card" style="margin-top: 10px;"> 
                    <div class="card-header" style="background-color: #7070db; color: white;">INVITATION FOR BIDS (IFB)</div>
                    <div class="card-body">
                        <h5 class="card-title">Commandant / Special Task Force, STF Headquarters, No: 223, Bauddhaloka Mawatha, Colombo 07, now invite for sealed bids from eligible bidders for the following procurements to the Special Task Force (STF) Sri Lanka Police.</h5>           
                        <div class="row">                      
                            <div class="container">        
                                <div class="row">
                                    <?php
                                    $i = 1;
                                    foreach ($list as $key => $result) {
                                        ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="icon-box" style=" box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1); border-radius: 10px;padding: 30px;margin: 0 10px 40px 10px; background: #fff; border: 2px solid #cce6ff;">
                                                 <div class="icon"><h6 class="description" style="font-family: 'italic_font'; font-weight: bold; color: #00004d;"><i class="bi bi-cash-stack" style="margin-right: 10px;color: #ff689b;"></i>Bid Notice Validity </h6></div> 
                                                <p class="description" style="font-family: 'italic_font'; font-weight: bold;">from <?= $result['BStart'] ?> To  <?= $result['BEnd'] ?></p>
                                                <h4 class="description" style="font-family: 'serif'; color: #00004d;">Bid Opening Date :</h4>
                                                <p class="description" style="font-family: 'italic_font'; font-weight: bold;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASFJREFUSEvd1MEqRVEUxvHf9QqSpJQopl5BwsxE3kEZyUQmxIAMjHgHIzNFeQUDEyOiJAN5A2Fr3zrOPefue851SvZod85e33+vtb69WhperYb19QpYxipm44WucIyz1AV7ARxio0RoGzvdICnACk6jwC5O4n4NW3G/gMsySApwjRms4ygnEgB7uMBiXcA7Br7qPYTXnMgInvGGwbqAjxiYyrS0DanARgBL2Md0yoK5/7fRbefZ70UZPGG0onj7+D0mUoC6ZSmMK8rg/wLazQ8ZhtHxo5nou0QvGI4N7GjmbwCC6HgE3GEy57S+M5iPcyfoziGM7OzqGxDEujns7wAeMVbzJT9k+vQtUfTQgh0PMFURcoPNvH1T07Qio/N444BPCXI6GUFO82QAAAAASUVORK5CYII="/> <?= $result['BOpen'] ?></p>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <?php
                                                    $Odate = $result['BOpen'];
                                                    $disabled = null;
                                                    $cdate = date('Y-m-d h:i');
                                                    //this change later
                                                    if ($Odate <= $cdate) {
                                                        $disabled = 'disabled';
                                                    }
                                                    ?>
                                                    <button class="btn btn-primary <?= $disabled ?>" type="button">
                                                        <a href="<?= site_url('SubmitedBid/OpenedBid/' . $result['id']) ?>"style="color: white;">Open</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
                </main>