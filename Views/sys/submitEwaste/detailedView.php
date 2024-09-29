

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Detailed View</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Detailed View</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">e-Waste Detailed View</h5>

                        <!-- Item Image -->
                        <div class="text-center mb-4">
                            <img src="<?= base_url('public/images/uploads/' . $item['item_image']) ?>" alt="Item Image" class="img-fluid rounded" style="max-width: 400px;">
                        </div>

                        <!-- Item Details -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <?php
                                            $details = [
                                                'Item Title' => $item['item_title'],
                                                'Item Name' => $item['item_name'],
                                                'Item Type' => $item['item_type'],
                                                'Item Description' => $item['item_description'],
                                                'Quantity' => $item['quantity'],
                                                'Weight' => $item['weight'] . " " . $item['weight_unit'],
                                                'Amount' => $item['amount'],
                                                'Pickup Location' => $item['pickup_location'],
                                                'Google Location Link' => "<a href=\"" . htmlspecialchars($item['google_location']) . "\" target=\"_blank\">View Location</a>",
                                                'Contact Name' => $item['contact_name'],
                                                'Contact Number' => $item['contact_number'],
                                                'Item Status' => $item['item_status_c'],
                                                'Date Added' => $item['date_added']
                                            ];

                                            foreach ($details as $label => $value):
                                            ?>
                                                <tr>
                                                    <th><?= $label ?></th>
                                                    <td><?= $value ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-end">
                                    <!-- The button to view bids will only show for e-Waste Generators -->
                                    <?php if (session()->get('UserType') === 'e-Waste Generator'): ?>
                                    <a href="<?= base_url('sys/viewBids/'.$item['item_id']) ?>" class="btn btn-primary">View Bids</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
