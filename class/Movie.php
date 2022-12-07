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
   * @param Sstring $img
   */
  public function __construct(string $_title, $_target, $_type,$_img, MoreInfo $_moreInfo = null)
  {
    $this->title = $_title;
    $this->target = $_target;
    $this->type = $_type;
    $this->img = $_img;
    $this->moreInfo = $_moreInfo;
  }


  public function getImg(){

    return $this->img ?? 'https://www.altavod.com/assets/images/poster-placeholder.png';
  }
}

?>