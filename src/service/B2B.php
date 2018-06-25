<?php
namespace zhangv\unionpay\service;
use zhangv\unionpay\UnionPay;

/**
 * 企业网银支付
 * @license MIT
 * @author zhangv
 * @ref https://open.unionpay.com/ajweb/product/newProApiList?proId=65
 * */
class B2B extends B2C {

	/**
	 * 支付
	 * @param $orderId
	 * @param $txnAmt
	 * @param array $ext
	 * @return string
	 */
	public function pay($orderId, $txnAmt, $ext = []) {
		$ext['bizType'] = UnionPay::BIZTYPE_B2B;
		$result = parent::pay($orderId, $txnAmt, $ext);
		return $result;
	}


	/**
	 * 退款
	 * @param $orderId
	 * @param $origQryId
	 * @param $refundAmt
	 * @param array $ext
	 * @return mixed
	 */
	public function refund($orderId, $origQryId, $refundAmt, $ext = []) {
		$result = parent::refund($orderId, $origQryId, $refundAmt, $ext);
		return $result;
	}

	/**
	 * 交易状态查询
	 * @param $orderId
	 * @param $txnTime
	 * @param array $ext
	 * @return mixed
	 */
	public function query($orderId, $txnTime, $ext = []) {
		return parent::query($orderId, $txnTime, $ext);
	}

	/**
	 * 文件传输
	 * @param string $settleDate MMDD
	 * @param string $fileType
	 * @return mixed
	 */
	public function fileDownload($settleDate, $fileType = '00') {
		return parent::fileDownload($settleDate, $fileType);
	}

}