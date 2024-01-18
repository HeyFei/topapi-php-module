<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItemdiscountAdditemItemDiscountSku {

    /**
        通用限购信息，-1为不限制，默认为不限制
     **/
    public $limit_info;

    /**
        <优惠明细,分为单位>优惠类型为[减价],则代表直降金额[如700,表示商品直降7元];优惠券类型为[一口价],则代表一口价[如700,表示商品一口价为7元];优惠券类型为[打折],则代表折扣[如700,表示打7折]
     **/
    public $value;

    /**
        商品名称
     **/
    public $sku_name;

    /**
        商品的skuCode
     **/
    public $sku_code;

    /**
        门槛数量，金额值单位为分
     **/
    public $condition_num;

    /**
        门槛类型，2：累计消费金额，3：累计购买次数
     **/
    public $condition_type;


    public function getLimitInfo() : AlibabaWdkMarketingItemdiscountAdditemLimitInfo{
        return $this->limit_info;
    }

    public function setLimitInfo(AlibabaWdkMarketingItemdiscountAdditemLimitInfo $limitInfo){
        $this->limit_info = $limitInfo;
    }

    public function getValue() : int{
        return $this->value;
    }

    public function setValue(int $value){
        $this->value = $value;
    }

    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getConditionNum() : int{
        return $this->condition_num;
    }

    public function setConditionNum(int $conditionNum){
        $this->condition_num = $conditionNum;
    }

    public function getConditionType() : int{
        return $this->condition_type;
    }

    public function setConditionType(int $conditionType){
        $this->condition_type = $conditionType;
    }


}

