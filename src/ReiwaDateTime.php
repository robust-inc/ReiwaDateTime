<?php

namespace RobustInc\ReiwaDateTime;
use \DateTime;

class ReiwaDateTime extends DateTime{
  const GENGO = [
    '令和' => '2019-05-01',
    '平成' => '1989-01-08',
    '昭和' => '1926-12-25',
    '大正' => '1912-07-30',
    '明治' => '1868-01-25'
  ];
  public function localize($format){
    $format = str_replace('Y',$this->_wareki_gengo(),$format);
    return $this->format($format);
  }

  private function _wareki_gengo(){
    $date_str = $this->format('Y-m-d');
    foreach (self::GENGO as $key => $value) {
      if($date_str >= $value){
        return $key . $this->_wareki_nen((int)$this->format('Y'),(int)(new DateTime($value))->format('Y'));
      }
    }
  }

  private function _wareki_nen($year,$base_year){
    return $year - $base_year == 0 ? '元' : ($year - $base_year + 1);
  }
}
