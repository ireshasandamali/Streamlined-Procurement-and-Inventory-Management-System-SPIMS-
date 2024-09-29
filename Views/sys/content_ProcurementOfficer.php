<main id="main" class="main">

    <div class="pagetitle container-fluid">
        <div class="row">
            <hr style="background-color: black; height: 2px;">
            <div class="col-10">
                <h1>
                    <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>
                    DASHBOARD
                </h1>       
            </div>
            <div class="col-2">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">DASHBOARD</a></li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
    </div>

    <section class="section dashboard container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- Registered Employees Card -->
                    <div class="col-md-3">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Registered Employees <span>| This Year</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $NumberofEployees ?></h6>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div><!-- End Registered Employees Card -->

                    <!-- Registered Vendors Card -->
                    <div class="col-md-3">
                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Non Registered Vendors <span>| This Month</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $nonregSuppliers ?></h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Registered Vendors Card -->

                    <!-- Registered Vendors Card -->
                    <div class="col-md-3">
                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                            </div>


                            <div class="card-body">
                                <h5 class="card-title"> Registered Vendors <span>| This Year</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $regSuppliers ?></h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Registered Vendors Card -->
                    <!-- Sales Card -->
                    <div class="col-md-3">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Procurement Request Received </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $itemrequest ?></h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-md-3">
                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Total Procurement Processed </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i><a href=""><img src="<?= site_url('public/assets/img/purchaseorder.png') ?>" alt=""></a></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $tender ?></h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Camp Card -->
                    <div class="col-md-3">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Number of STF Camp<span>| This Year</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i><a href=""><img src="<?= site_url('public/assets/img/icons8.png') ?>" alt=""></a></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $camp ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Camp Card -->

                    <!-- Item Card -->
                    <div class="col-md-3">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Number of Procurement Items <span>| This Year</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i><a href=""><img src="<?= site_url('public/assets/img/icons9.png') ?>" alt=""></a></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $listItem ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Item Card -->



                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>Filter</h6></li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Procurement Plan <span>| This Year</span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Vote</th>
                                            <th scope="col">Allocation</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        $Totala= 0;
                                        foreach ($listP as $key => $resultP) {
                                            $Totala += $resultP['Allocation'];
                                            ?>
                                            <tr>
                                                <th scope="row"><?= $i ?></th>
                                                <td><?= $resultP['Year'] ?></td>
                                                <td><?= $resultP['Vote'] ?> - <?= $resultP['Description'] ?></td>
                                                <td><?= number_format($resultP['Allocation'], 2) ?></td>
                                                
                                            </tr>
                                            
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                            <tr>
                                                <td></td><td></td>
                                                <td colspan="5">Total Allocation</td>
                                                <th><?= number_format($Totala,2) ?></th>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Budget Report -->
                    <div class="col-12">
                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>Filter</h6></li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body pb-0">
                                <h5 class="card-title">Procurement Plan <span>| This Year</span></h5>
                                <div id="procurementPlanPieChart" style="width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div><!-- End Budget Report -->

                    <!-- ECharts Script -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.3/echarts.min.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var voteData = <?= $voteData ?>;
                            var pieChart = echarts.init(document.getElementById('procurementPlanPieChart'));

                            var option = {
                                title: {
                                    text: 'Procurement Plan Balance Percentage',
                                    subtext: 'Percentage of Allocation Remaining',
                                    left: 'center'
                                },
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    orient: 'vertical',
                                    left: 'left'
                                },
                                series: [
                                    {
                                        name: 'Vote Balance',
                                        type: 'pie',
                                        radius: '50%',
                                        data: voteData.map(function (item) {
                                            return {
                                                name: item.Description,
                                                value: item.percentage
                                            };
                                        }),
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                                    }
                                ]
                            };

                            pieChart.setOption(option);
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
</main>
