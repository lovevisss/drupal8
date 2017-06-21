<?php

namespace Drupal\dino_roar\Jurassic;


use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;

class RoarGenerator{
    /**
     * @var KeyValueFactoryInterface
     */
    private $keyvalue;


    /**
     * RoarGenerator constructor.
     */
    public function __construct(KeyValueFactoryInterface $keyvalue)
    {

        $this->keyvalue = $keyvalue;
    }

    public function getRoar($length){
        $key = 'roar_'.$length;
        $store = $this->keyvalue->get('dino');
        if($store->has($key))
        {
            return store->get($key);
        }
        sleep(2);
		$string =  'R'.str_repeat('o', $length).'AR!';
		$store->set($key, $string);
		return $string;
	}
}