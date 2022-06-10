<?php

namespace App;

require "vendor/autoload.php";

use Illuminate\Support\Facades\Log;
use Monolog\Logger;
use Logtail\Monolog\LogtailHandler;

class Box
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * Constructor. Fill the box with the given items.
     *
     * @param array $items
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    /**
     * Add a new item to the box.
     *
     * @param string $item
     * @return array
     */
    public function add($item)
    {
        array_push($this->items, $item);

        // Log::info('Added an item.');
        // Log::channel("very_very_important")->emergency("Added an item.");
        Log::info("Added an item.", ["item" => $item]);

        // $logtail_logger = new Logger("logtail-source");
        // $logtail_logger->pushHandler(
        //     new LogtailHandler("7PWdJfoNZDxpSYfYaHECFAyM")
        // );

        // $logtail_logger->info("Added an item.", ["item" => $item]);

        Log::channel("null");
        return $this->items;
    }

    /**
     * Remove a item from the box.
     *
     * @param string $item
     * @return array
     */
    public function remove($item)
    {
        if (($key = array_search($item, $this->items)) !== false) {
            unset($this->items[$key]);
        }

        // Log::critical('Removed an item.');
        // Log::critical("Removed an item.", ["item" => $item]);

        // $logtail_logger = new Logger("logtail-source");
        // $logtail_logger->pushHandler(
        //     new LogtailHandler("7PWdJfoNZDxpSYfYaHECFAyM")
        // );

        // $logtail_logger->critical("Removed an item.", ["item" => $item]);

        return $this->items;
    }
}
