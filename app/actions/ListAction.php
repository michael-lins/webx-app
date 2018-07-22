<?php
/**
 * webxample framework
 * 
 * Tiny and simple framework to illustrate an implementation of a web framework 
 * with static routes using Php | Study purposes for classes
 * 
 * Project dedicated to a php friend from DBA
 * 
 * @author Michael Lins <michael at longanime.com.br>
 * @created 2018-07-19
 */
namespace Longanime\Webxapp;
 
use Longanime\Webx\BasicAction;
use Longanime\Webx\Session;

class ListAction extends BasicAction {
    
    public function getList() {
        if ( empty($this->list) )
            $this->list = Session::getValue( "list" );
        return $this->list;
    }
    
    public function execute() {
        // Prepares a repository for listing names (used in app views)
        
        // NOT GOING TO USE DB (mabe some other time/release)
        if ( empty( Session::getValue( "list" ) ) )
            Session::setValue( "list", array( "Michael Lins", "Mike Leens" ) );
        
        $this->list = Session::getValue( "list" );
        
    }
    
    public function clazz() { var_dump( __CLASS__ ); }
}