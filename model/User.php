<?php
class User
{
	private $emailid;
	private $password;
	
	public function __construct($e, $p)
	{
		$this->emailid = $e;
		$this->password = $p; 	
	}
	
	public function display()
	{
		$details = array($this->emailid, $this->password);
		return $details;
		//return $this->emailid;
	}
}
?>