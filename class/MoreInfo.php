<?php

  class MoreInfo {
    public $actors;
    public $time;
    public $plot;

    /**
   * @param String $actors
   * @param String $time
   * @param String $plot
   */
    public function __construct($_actors, $_time, $_plot)
    {
      $this->actors = $_actors;
      $this->time = $_time;
      $this->plot = $_plot;
    }

  }

?>