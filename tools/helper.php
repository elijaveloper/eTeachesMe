<?php

class Helper{
  var $view = "view/";
  var $model = "model/";
  var $controller = "controller/";
  
  function getView($requested_view){
    return $this->view . $requested_view . ".php";
  }
  
}