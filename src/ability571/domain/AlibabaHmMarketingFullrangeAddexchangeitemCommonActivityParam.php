<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingFullrangeAddexchangeitemCommonActivityParam {

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        报名活动Id
     **/
    public $activity_id;


    public function getOutActId() : string{
        return $this->out_act_id;
    }

    public function setOutActId(string $outActId){
        $this->out_act_id = $outActId;
    }

    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }


}

