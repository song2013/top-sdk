<?php
/**
 * TOP API: taobao.rds.db.deleteaccount request
 * 
 * @author auto create
 * @since 1.0, 2017.05.25
 */
class RdsDbDeleteaccountRequest
{
	/** 
	 * rds账户
	 **/
	private $accountName;
	
	/** 
	 * rds实例
	 **/
	private $instanceName;
	
	private $apiParas = array();
	
	public function setAccountName($accountName)
	{
		$this->accountName = $accountName;
		$this->apiParas["account_name"] = $accountName;
	}

	public function getAccountName()
	{
		return $this->accountName;
	}

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["instance_name"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
	}

	public function getApiMethodName()
	{
		return "taobao.rds.db.deleteaccount";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountName,"accountName");
		RequestCheckUtil::checkNotNull($this->instanceName,"instanceName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
