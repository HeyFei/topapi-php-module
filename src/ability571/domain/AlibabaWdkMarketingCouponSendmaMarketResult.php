<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingCouponSendmaMarketResult {

    /**
        错误信息
     **/
    public $message;

    /**
        返回的匿名码对象
     **/
    public $data;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getData() : AlibabaWdkMarketingCouponSendmaCouponActivity{
        return $this->data;
    }

    public function setData(AlibabaWdkMarketingCouponSendmaCouponActivity $data){
        $this->data = $data;
    }


}

