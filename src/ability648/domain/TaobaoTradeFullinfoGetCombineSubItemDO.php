<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetCombineSubItemDO {

    /**
        商品数字编号
     **/
    public $item_id;

    /**
        商品的最小库存单位Sku的id
     **/
    public $sku_id;

    /**
        数量
     **/
    public $quantity;

    /**
        商品名称
     **/
    public $item_name;

    /**
        商家外部编码(可与商家外部系统对接)。
     **/
    public $outer_iid;

    /**
        SKU标题
     **/
    public $sku_title;

    /**
        成分品原价
     **/
    public $origin_fee;

    /**
        成分品套餐原价
     **/
    public $combine_sub_item_fee;

    /**
        套餐购是否商品主子成分品  
     **/
    public $ismain;

    /**
        套餐购成分品预计承诺时效(如果为时间格式为yyyy-MM-dd 则为绝对时间，为数字则为相对时间，比如7天内发货)
     **/
    public $estcon_time;

    /**
        outer_sku_id
     **/
    public $outer_sku_id;

    /**
        教育优惠原价
     **/
    public $edu_original_fee;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getOuterIid() : string{
        return $this->outer_iid;
    }

    public function setOuterIid(string $outerIid){
        $this->outer_iid = $outerIid;
    }

    public function getSkuTitle() : string{
        return $this->sku_title;
    }

    public function setSkuTitle(string $skuTitle){
        $this->sku_title = $skuTitle;
    }

    public function getOriginFee() : int{
        return $this->origin_fee;
    }

    public function setOriginFee(int $originFee){
        $this->origin_fee = $originFee;
    }

    public function getCombineSubItemFee() : int{
        return $this->combine_sub_item_fee;
    }

    public function setCombineSubItemFee(int $combineSubItemFee){
        $this->combine_sub_item_fee = $combineSubItemFee;
    }

    public function getIsmain() : bool{
        return $this->ismain;
    }

    public function setIsmain(bool $ismain){
        $this->ismain = $ismain;
    }

    public function getEstconTime() : string{
        return $this->estcon_time;
    }

    public function setEstconTime(string $estconTime){
        $this->estcon_time = $estconTime;
    }

    public function getOuterSkuId() : string{
        return $this->outer_sku_id;
    }

    public function setOuterSkuId(string $outerSkuId){
        $this->outer_sku_id = $outerSkuId;
    }

    public function getEduOriginalFee() : int{
        return $this->edu_original_fee;
    }

    public function setEduOriginalFee(int $eduOriginalFee){
        $this->edu_original_fee = $eduOriginalFee;
    }


}

