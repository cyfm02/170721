<?php

// 為什麼是 8 呢? 應該是 5 吧!

require("tools.php");

class ArrayListCount extends ArrayList {
    private $_count = 0;
    
    public function add($value) {
        parent::add($value);
        $this->count++;
    }
    
    public function addArray($list) {
        parent::addArray($list);
        $this->count += count($list);
    }
    
    public function getCount() {
        return $this->count;
    }
    
}


$dataList = new ArrayListCount();
$dataList->add("A");
$dataList->add("B");
$dataList->addArray(array("C", "D", "E"));
echo "Count: " . $dataList->getCount();
echo "<hr>";
var_dump($dataList->getData());

?>
