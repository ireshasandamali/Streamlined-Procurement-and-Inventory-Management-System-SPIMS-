<main id="main" class="main">
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Monthly Listings</h2>
                <p>Select the month and year to generate the report.</p>
            </div>

            <div class="container" data-aos="fade-up">
                <form action="<?= base_url('sys/monthly_listings'); ?>" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="month" class="form-label">Month</label>
                            <select id="month" name="month" class="form-select">
                                <?php for ($m = 1; $m <= 12; $m++): 
                                    $month = date('F', mktime(0, 0, 0, $m, 1));
                                    echo "<option value='{$m}'>{$month}</option>";
                                endfor; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="year" class="form-label">Year</label>
                            <select id="year" name="year" class="form-select">
                                <?php for ($y = date('Y'); $y >= 2000; $y--): 
                                    echo "<option value='{$y}'>{$y}</option>";
                                endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">OK</button>
                    </div>
                </form>
            </div>

            <!-- Placeholder for Displaying listings -->
            <div class="mt-4">
                <?php if (isset($listings) && !empty($listings)): ?>
                <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Number of Listings</th>
                        </tr>
                        
                        
                    </thead>
                    
                    <tbody>
                        <?php 
                        $total=0;
                        foreach ($listings as $key=>$value){ 
                            $total+=$value['nooflist'];
                            
                            ?>
                         <tr>
                            <td><?= $value['item_type']?></td>
                            <td><?= $value['nooflist']?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>Total</td>
                            <td><?=$total?></td>
                        </tr>
                        
                    </tbody>
                </table>
                
                
                
                    <p>Listing data will be displayed here.</p>
                <?php else: ?>
                    <p>No listings found for the selected month and year.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>