<?php

class UDoctrine {

	private static $instance;
	private $connection;

	private function __construct(){
	}

	public static function getInstance(){
		if ( ! isset(self::$instance) )
			self::$instance = new UDoctrine();
		return self::$instance;
	}

	public function start_connection (){
		global $PATH;
		$this->connection = Doctrine_Manager::connection($PATH['doctrine']['DSN']);
	}

	public function getConnection (){
		if(!isset($this->connection)) $this->start_connection();
		return $this->connection;
	}

	/**
	 * from is never not null
	 */

	public function queryDB($select=null, $from, $where=null, $condition=null)
	{

		if(!is_null($select) && !is_null($where))
		{
			$where .= '= ?';
			$q = Doctrine_Query::create()->select($select)
			->from($from)
			->where($where, $condition);

		}
		elseif ($select==null && $where!=null ){
			$where .= '= ?';
			$q = Doctrine_Query::create()->from($from)
			->where($where, $condition);
		}
		elseif ($select!=null && $where==null){
			$q = Doctrine_Query::create()->select($select)
			->from($from);
		}
		else $q = Doctrine_Query::create()->from($from);
		return $q->fetchArray();
	}
}