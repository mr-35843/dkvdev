<?php

function zeroPadPrice($price){
  $inputPrice = intval($price);
  $displayPrice = $price / 100;
  $stringPrice = "$displayPrice";

  $seperator = substr($stringPrice, -2);
   
    switch($seperator){
      case ".1";
      case ".2";
      case ".3";
      case ".4";
      case ".5";
      case ".6";
      case ".7";
      case ".8";
      case ".9";
        $response = "$stringPrice". "0";
        return $response;
      break;
      
      default:
        return $stringPrice;
      break;
    }
  }

  ?>