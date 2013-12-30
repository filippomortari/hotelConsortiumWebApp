<?php


/**
 * @access public
 * @package views.graphic_commands
 */
class GCFactory {
	/**
	 * @AssociationType views.graphic_commands.GCFactory
	 * @AssociationMultiplicity 1
	 * @AssociationType views.graphic_commands.GCFactory
	 * 
	 * 
	 * @AssociationMultiplicity 1
	 */
	private static $instance;
	/**
	 * @AssociationType views.graphic_commands.GraphicCommand
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Aggregation
	 */
	public $gCommands = array();
	
	public function __construct()
	{
		//comandi dell'utente
		$this->gCommands['GDashboard'] = new GDashboard();
		$this->gCommands['GHome'] = new GHome();
		$this->gCommands['GHomeLogged'] = new GHomeLogged();
		$this->gCommands['GLogin'] = new GLogin();
		$this->gCommands['GUserSignup'] = new GUserSignup();
		
		//comandi dell'albergatore
		$this->gCommands['GHotelSignup'] = new GHotelSignup();
		$this->gCommands['GHotelierLogin'] = new GHotelierLogin();
		$this->gCommands['GDashboardAzienda'] = new GDashboardAzienda();

		//shared
		$this->gCommands['GError'] = new GError();
	}

	/**
	 * @access public
	 * @param string class_name
	 * @return views.graphic_commands.GraphicCommand
	 * @ParamType class_name string
	 * @ReturnType views.graphic_commands.GraphicCommand
	 */
	public function getGraphicCommand($class_name)
	{
		if( isset($this->gCommands[$class_name]) )
			$back = $this->gCommands[$class_name];
		else{
			$this->addGraphicCommand($class_name);
			$back = $this->gCommands[$class_name];
		}
		return $back;
	}

	/**
	 * @access public
	 * @return views.graphic_commands.GCFactory
	 * @ReturnType views.graphic_commands.GCFactory
	 */
	public static function getInstance() {
		if( !isset(self::$instance) )
			self::$instance = new GCFactory();
		return self::$instance;
	}
	
	/**
	 * @param GraphicCommand $class_name
	 */
	public function addGraphicCommand($class_name)
	{
		$this->gCommands[$class_name] = new $class_name;
	}
}
?>