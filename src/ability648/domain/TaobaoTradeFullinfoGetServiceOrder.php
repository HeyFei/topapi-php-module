<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetServiceOrder {

    /**
        虚拟服务子订单订单号
     **/
    public $oid;

    /**
        服务所属的交易订单号。如果服务为一年包换，则item_oid这笔订单享受改服务的保护
     **/
    public $item_oid;

    /**
        服务数字id
     **/
    public $service_id;

    /**
        服务详情的URL地址
     **/
    public $service_detail_url;

    /**
        购买数量，取值范围为大于0的整数
     **/
    public $num;

    /**
        服务价格，精确到小数点后两位：单位:元
     **/
    public $price;

    /**
        子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。
     **/
    public $payment;

    /**
        商品名称
     **/
    public $title;

    /**
        服务子订单总费用
     **/
    public $total_fee;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        最近退款的id
     **/
    public $refund_id;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        服务图片地址
     **/
    public $pic_path;

    /**
        支持家装类物流的类型
     **/
    public $tmser_spu_code;

    /**
        天猫汽车预约服务时间
     **/
    public $et_ser_time;

    /**
        电子凭证预约门店地址
     **/
    public $et_shop_name;

    /**
        电子凭证核销门店地址
     **/
    public $et_verified_shop_name;

    /**
        车牌号
     **/
    public $et_plate_number;

    /**
        虚拟服务子订单订单号(String类型)
     **/
    public $oid_str;

    /**
        appleCareEmail
     **/
    public $apple_care_email;

    /**
        appleCareMPN
     **/
    public $apple_care_mpn;

    /**
        服务供应链-服务商外部编码标
     **/
    public $service_outer_id;

    /**
        服务供应链-服务订单类型,1:主子挂载；2：双主挂载；3：单独售卖
     **/
    public $service_order_type;

    /**
        服务订单与实物订单关联关系
     **/
    public $ext_service_biz_id;

    /**
        套餐购对应的成分品id
     **/
    public $combine_sub_item_id;

    /**
        套餐购对应的成分品的skuId
     **/
    public $combine_sub_item_sku_id;

    /**
        套餐购服务原价  (单位分) 
     **/
    public $comm_amount_unit;


    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getItemOid() : int{
        return $this->item_oid;
    }

    public function setItemOid(int $itemOid){
        $this->item_oid = $itemOid;
    }

    public function getServiceId() : int{
        return $this->service_id;
    }

    public function setServiceId(int $serviceId){
        $this->service_id = $serviceId;
    }

    public function getServiceDetailUrl() : string{
        return $this->service_detail_url;
    }

    public function setServiceDetailUrl(string $serviceDetailUrl){
        $this->service_detail_url = $serviceDetailUrl;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getRefundId() : string{
        return $this->refund_id;
    }

    public function setRefundId(string $refundId){
        $this->refund_id = $refundId;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getPicPath() : string{
        return $this->pic_path;
    }

    public function setPicPath(string $picPath){
        $this->pic_path = $picPath;
    }

    public function getTmserSpuCode() : string{
        return $this->tmser_spu_code;
    }

    public function setTmserSpuCode(string $tmserSpuCode){
        $this->tmser_spu_code = $tmserSpuCode;
    }

    public function getEtSerTime() : string{
        return $this->et_ser_time;
    }

    public function setEtSerTime(string $etSerTime){
        $this->et_ser_time = $etSerTime;
    }

    public function getEtShopName() : string{
        return $this->et_shop_name;
    }

    public function setEtShopName(string $etShopName){
        $this->et_shop_name = $etShopName;
    }

    public function getEtVerifiedShopName() : string{
        return $this->et_verified_shop_name;
    }

    public function setEtVerifiedShopName(string $etVerifiedShopName){
        $this->et_verified_shop_name = $etVerifiedShopName;
    }

    public function getEtPlateNumber() : string{
        return $this->et_plate_number;
    }

    public function setEtPlateNumber(string $etPlateNumber){
        $this->et_plate_number = $etPlateNumber;
    }

    public function getOidStr() : string{
        return $this->oid_str;
    }

    public function setOidStr(string $oidStr){
        $this->oid_str = $oidStr;
    }

    public function getAppleCareEmail() : string{
        return $this->apple_care_email;
    }

    public function setAppleCareEmail(string $appleCareEmail){
        $this->apple_care_email = $appleCareEmail;
    }

    public function getAppleCareMpn() : string{
        return $this->apple_care_mpn;
    }

    public function setAppleCareMpn(string $appleCareMpn){
        $this->apple_care_mpn = $appleCareMpn;
    }

    public function getServiceOuterId() : string{
        return $this->service_outer_id;
    }

    public function setServiceOuterId(string $serviceOuterId){
        $this->service_outer_id = $serviceOuterId;
    }

    public function getServiceOrderType() : string{
        return $this->service_order_type;
    }

    public function setServiceOrderType(string $serviceOrderType){
        $this->service_order_type = $serviceOrderType;
    }

    public function getExtServiceBizId() : string{
        return $this->ext_service_biz_id;
    }

    public function setExtServiceBizId(string $extServiceBizId){
        $this->ext_service_biz_id = $extServiceBizId;
    }

    public function getCombineSubItemId() : int{
        return $this->combine_sub_item_id;
    }

    public function setCombineSubItemId(int $combineSubItemId){
        $this->combine_sub_item_id = $combineSubItemId;
    }

    public function getCombineSubItemSkuId() : int{
        return $this->combine_sub_item_sku_id;
    }

    public function setCombineSubItemSkuId(int $combineSubItemSkuId){
        $this->combine_sub_item_sku_id = $combineSubItemSkuId;
    }

    public function getCommAmountUnit() : string{
        return $this->comm_amount_unit;
    }

    public function setCommAmountUnit(string $commAmountUnit){
        $this->comm_amount_unit = $commAmountUnit;
    }


}

