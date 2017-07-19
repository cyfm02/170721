<?php

$userName = "Guest";

class Tool {
    
    public static function repeatString($iCount, $sWhat = "*") {
        $result = "";
    	if ($iCount > 0) {
    		if ($iCount <= 20) {
    			for ($i = 1; $i <= $iCount; $i++) {
    				$result .= $sWhat;
    			}
    		}
    		else {
    			$result = "iCount <= 20 please.";
    		}
    	}
    	else {
    		$result = "iCount > 0 please.";
    	}
    	return $result;
    } // end of repeatString

}  // end of class Tool


class ArrayList {
    private $data = array();
    
    public function add($value) {
        $this->data[] = $value;
    }
    
    public function addArray($list) {
        foreach ($list as $value) {
            $this->add($value);
        }
    }
    
    public function getData() {
        return $this->data;
    }
}

// ---------- 防雷頁 ----------



































































/*

class ArrayList {
    private $data = array();
    
    public function add($value) {
        $this->data[] = $value;
    }
    
    public function addArray($list) {
        $this->data = array_merge($this->data, $list);
    }
    
    public function getData() {
        return $this->data;
    }
}

*/






?>
