<?php

use App\Models\EwasteListModel;
use App\Models\BiddingModel;

$ewasteModel = new EwasteListModel();
$biddingModel = new BiddingModel();

// Retrieve user ID from the session
$userId = session()->get('UserId');

// Load listings based on user type
$user_type = strtolower(session()->get('UserType'));
if ($user_type === 'e-waste collector') {
    $listings = $ewasteModel->findAll();
} else {
    $listings = $ewasteModel->getListings($userId);
    echo $ewasteModel->getLastQuery()->getQuery();
}
?>





<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('sys/index'); ?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <section class="sectionl">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">e-Waste Listings</h5>
                        <p>View and manage your e-Waste listings and bids.</p>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-container">
                                <table class="table datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th>Listing Number</th>
                                            <th>Item Image</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Quantity</th>
                                            <th>Remaining Quantity</th>
                                            <th>Price Option</th>
                                            <th>Amount</th>
                                            <th>No of Bids</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listings as $item): ?>
                                            <tr>
                                                <td><?= $item['item_id'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('sys/detailedViewEwg/' . $item['item_id']) ?>">
                                                        <img src="<?= base_url('public/images/uploads/' . $item['item_image']) ?>" alt="Item Image" width="50">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('sys/detailedViewEwg/' . $item['item_id']) ?>"><?= $item['item_title'] ?></a>
                                                </td>
                                                <td><?= $item['item_type'] ?></td>
                                                <td><?= $item['quantity'] ?></td>
                                                <td><?= $item['rem_quantity'] ?></td>


                                                <td><?= ucfirst($item['price_option']) ?></td>
                                                <td><?= $item['amount'] ?></td>
                                                <td><?= $item['nobids'] ?></td>
                                                <td>
                                                    <?php $style = getStatusStyle($item['item_status_g']); ?>
                                                    <span class="status-badge" style="color: <?= $style['color']; ?>; background-color: <?= $style['background']; ?>;">
                                                        <?php
                                                        if ($item['nobids'] > 0) {
                                                            echo 'Bids Received';
                                                        } else {
                                                            echo 'No Bids Yet';
                                                        }
                                                        ?>
                                                    </span>
                                                    <span class="status-badge" style="color: <?= $style['color']; ?>; background-color: <?= $style['background']; ?>;">
                                                        <?php
                                                        if ($item['item_status_g'] == 'Accepted') {
                                                            echo $item['quantity'] - $item['rem_quantity'] . ' ' . $item['item_status_g'];
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('sys/detailedViewEwg/' . $item['item_id']) ?>" class="btn btn-primary">View More</a>
                                                    <?php if ($item['item_status_g'] == 'Bids Received'): ?>
                                                        <a href="<?= base_url('sys/viewBids/' . $item['item_id']) ?>" class="btn btn-warning btn-sm">View Bids</a>
                                                    <?php elseif ($item['item_status_g'] == 'Accepted'): ?>
                                                        <a href="<?= base_url('sys/cancelDeal/' . $item['item_id']) ?>" class="btn btn-danger btn-sm">Cancel Deal</a>
                                                    <?php endif; ?>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton<?= $item['item_id'] ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= $item['item_id'] ?>">
                                                            <!-- Edit option, available for 'No Bids Yet' and 'Bids Received' statuses -->
                                                            <?php if ($item['item_status_g'] == 'No Bids Yet' || $item['item_status_g'] == 'Bids Received'): ?>
                                                                <li style="background-color: lightgreen;">
                                                                    <a class="dropdown-item" href="<?= base_url('sys/editListing/' . $item['item_id']) ?>">Edit</a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <!-- Delete option, available for 'No Bids Yet' and 'Bids Received' statuses -->
                                                            <?php if ($item['item_status_g'] == 'No Bids Yet' || $item['item_status_g'] == 'Bids Received'): ?>
                                                                <li style="background-color: yellow;">
                                                                    <a class="dropdown-item" href="<?= base_url('sys/deleteListing/' . $item['item_id']) ?>" onclick="return confirm('Are you sure you want to delete this listing?');">Delete</a>
                                                                </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>