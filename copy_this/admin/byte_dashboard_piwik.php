<?php

class byte_dashboard_piwik extends oxAdminView
{
  public function render()
  {
     parent::render();
     $oSmarty = oxUtilsView::getInstance()->getSmarty();
     $oSmarty->assign( "oViewConf", $this->_aViewData["oViewConf"]);
     $oSmarty->assign( "shop", $this->_aViewData["shop"]);
     //
     // put your implementation code here
     //
     echo $oSmarty->fetch("byte_dashboard_piwik.tpl");
     oxUtils::getInstance()->showMessageAndExit( "" );
 }
}