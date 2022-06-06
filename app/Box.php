<?php

namespace App;

class Box
{
  /**
   * @var array
   */
  protected $item = [];

  /**
   * Constructor. Fill the box with the given item.
   *
   * @param array $item
   */
  public function __construct($item = [])
  {
    $this->item = $item;
  }

  /**
   * Add a new item to the box.
   *
   * @param string $item
   * @return array
   */
  public function add($item)
  {
    array_push($this->item, $item);
    return $this->item;
  }

  /**
   * Remove a item from the box.
   *
   * @param string $item
   * @return array
   */
  public function remove($item)
  {
    if (($key = array_search($item, $this->item)) !== false) {
      unset($this->item[$key]);
    }
    return $this->item;
  }
}
