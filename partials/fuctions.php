<?php

  function checktext($text){
    if(strlen($text) > 3 && strlen($text) < 255){
      return true;
    }else{
      return false;
    }
  }