<?php
namespace framework\core;
class Db
{

	public function __construct()
	{
		$this->db = new PDO('mysql:host=localhost;dbname=itninja', 'root', '');
	}
	public function query($sql)
	{
	$query = $this->db->query($sql);
	$result = $query->fetchColumn();
	return $query;
	}
	public function row($sql)
	{
	$result = $this->query($sql);
	return $result->fetchAll();
	}
	public function column($spl)
	{
	$result = $this->query($sql);
	return $result->fetchColumn();
	}
}
