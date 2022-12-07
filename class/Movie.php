<?php

class Movie{
  public $title;
  public $target;
  public $type;
  public $img;
  public $moreInfo;

  /**
   * @param String $title
   * @param String $target
   * @param String type
   * @param String $moreInfo
   */
  public function __construct($_title, $_target, $_type, MoreInfo $_moreInfo = null)
  {
    $this->title = $_title;
    $this->target = $_target;
    $this->type = $_type;
    $this->moreInfo = $_moreInfo;
  }

  public function Img($_img){
    $this->img = $_img;
  }

  public function getImg(){
    $placeholder = 'https://www.altavod.com/assets/images/poster-placeholder.png';
    if($this->img){
      return $this->img;
    }else{
      return $placeholder;
    }
  }
}

?>