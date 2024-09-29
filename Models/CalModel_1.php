<?php

namespace App\Models;
use CodeIgniter\Model;
class CalModel extends Model{
    protected $table="camp";
    protected $primaryKey="id";
    protected $allowedFields =['id','item','qty','uprise','total','other','twithother','discount','totalwithdiscount','vat','vatamount','finalcost'];
}

 $Bidder = new SPriceScheduleModel();
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $Dilivery = new SgoodsDeliveryModel();
        $Spec = new SpecModel();
        $SSpec = new SSpecificationModel();
        
        $titem = new TenderItemModel();
        $UserId = session()->get('UserId');
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
       
        
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        $data['lista'] = $PAnalysisMarks->GetdocstatusDetails($TId);
       
        
        $PAnalysisMarks = new PAnalysisMarksModel();
        $TECMarks = new TecAnalysisMarksModel();
        $data['listr'] = $PAnalysisMarks->GetaprovedBidderDetails($TId);
          $data['listItem'] = $TECMarks->GetTECAmarkItem($TId);
           $data['listT'] = $TECMarks->GetTECAmarksDetails($TId);
           $data['marks'] = $TECMarks->getMarks($TId);
            $data['listz'] = $TECMarks->GetTECtotalmarks($TId);
            $data['listrejected'] = $TECMarks->rejectedbidder($TId);
       
            
            
            
            
        $data['rejected_list'] = $PAnalysisMarks->GetrejectedBidderDetails();
        $data['listE'] = $Mestimate->getCostEstinateDetails($TId);
       
        $data['listk'] = $titem->getBidtenderItemDetails($TId);
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listD'] = $Dilivery->GetgoodsDeliveryDetails($TId);
        // $data['listT'] = $TECMarks->GetTECAmarksDetails($TId,$UserId);
       
        
      
        
         $data['listy'] = $TECMarks->GetrejectBidders($TId);
        $data['listbidders'] = $TECMarks->GetAcceptedBidderlist($TId);
        echo $TECMarks -> getLastQuery()->getQuery();
        $data['listv'] = $TECMarks->GetAceptBidders($TId);
        $data['listf'] = $TECMarks->GetAceptBiddersCEstimate($TId);
        $data['listlowest'] = $TECMarks->GetLowestAceptBidders($TId);
        
        // echo $TECMarks -> getLastQuery()->getQuery();
        //$data['listi'] = $SSpec->JionBidderDetails($TId);
// Fetch the list of bidders
        $listB = $Bidder->joinBidderDetailsforBidEvaluation($TId);