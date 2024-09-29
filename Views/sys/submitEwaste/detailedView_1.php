<main id="main" class="main">
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Available Reports</h2>
                <p>Select the type of report you wish to generate from the options below. Each report provides detailed insights tailored to your needs.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="report-selection">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Report Number</th>
                                    <th scope="col">Report Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td><a href="<?= site_url('sys/monthly_listings'); ?>" class="report-link">Monthly Listings</a></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td><a href="<?= site_url('sys/bid_analysis_summary'); ?>" class="report-link">Bid Analysis Summary</a></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td><a href="<?= site_url('sys/panel_report'); ?>" class="report-link">Panel Report</a></td>
                                </tr>
                                
                                <!-- Potential for more reports to be added here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>