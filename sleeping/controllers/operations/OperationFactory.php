<?php
/**
 * @access public
 * @package controllers.operations
 */
class OperationFactory {
	/**
	 * @AssociationType controllers.operations.OperationFactory
	 * @AssociationMultiplicity 1
	 * @AssociationType controllers.operations.OperationFactory
	 * 
	 * 
	 * @AssociationMultiplicity 1
	 */
	private static $instance;
	/**
	 * @AssociationType controllers.operations.Operation
	 * @AssociationMultiplicity *
	 * @AssociationKind Aggregation
	 * 
	 * 
	 * @AssociationMultiplicity 0..*
	 */
	private $operations = array();

	/**
	 * @access public
	 * @param string class_name
	 * @return controllers.operations.Operation
	 * @ParamType class_name string
	 * @ReturnType controllers.operations.Operation
	 */
	public function getOperation($class_name) {
		if( isset($this->operations[$class_name]) )
			$back = $this->operations[$class_name];
		else{
			$this->addOperation($class_name);
			$back = $this->operations[$class_name];
		}
		return $back;
	}
	
	public function addOperation($class_name)
	{
		$this->operations[$class_name] = new $class_name;
	}
	
	/**
	 * @access public
	 * @return controllers.operation.OperationFactory
	 * @ReturnType controllers.operation.OperationFactory
	 */
	public static function getInstance() {
		if( !isset(self::$instance) )
			self::$instance = new OperationFactory();
		return self::$instance;
	}
}
?>