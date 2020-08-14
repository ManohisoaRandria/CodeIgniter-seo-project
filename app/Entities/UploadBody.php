<?php
namespace App\Entities;

class UploadBody
{
    public $upload_preset;
    public $api_key;
    public $file;
    public $folder;
    function __construct($upload_preset,$api_key,$file,$folder){
        $this->upload_preset=$upload_preset;
        $this->api_key=$api_key;
        $this->file=$file;
        $this->folder=$folder;
      }
}