<?php
namespace App\Model;
use \Exception;
class Outil
{
    public static function formatNumber(string $seq, int $ordre)
    {
      if (strlen(trim($seq)) > $ordre) {
        throw new Exception("Format impossible !");
      }
      $ret = "";
      for ($i = 0; $i < $ordre - strlen(trim($seq)); $i++) {
        $ret .= "0";
      }
      return $ret . $seq;
    }
}
