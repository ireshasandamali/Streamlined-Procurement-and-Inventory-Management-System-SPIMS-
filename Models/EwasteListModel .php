<?php

namespace App\Models;
use CodeIgniter\Model;
class VoteModel extends Model{
    protected $table = 'ewaste_listings';
    protected $primaryKey = 'item_id';
    protected $allowedFields = [
        'item_title', 'item_name', 'item_type', 'item_description',
        'item_image', 'quantity', 'rem_quantity', 'weight', 'weight_unit', 'price_option',
        'amount', 'pickup_location', 'google_location', 'contact_name',
        'contact_number', 'item_status_g', 'cancelled_by_ewg', 'item_status_c', 'cancelled_by_ewc', 'is_edited', 'date_added', 'time_added', 'UserId', 'bid_id', 'collector_id'
    ];

    public function getListings($UserId=null) {
        $query = $this->query("SELECT ewaste_listings.*,COUNT(bids.UserId) AS 'nobids' 
                FROM ewaste_listings 
                LEFT JOIN bids ON bids.item_id=ewaste_listings.item_id 
                WHERE ewaste_listings.UserId = '$UserId' AND ewaste_listings.item_status_c != 'Deleted' 
                GROUP BY ewaste_listings.item_id;");
        $result = $query->getResultArray();
        return $result;

    }
    
       
        
}