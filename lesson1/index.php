<?php

class SelfOrderingArray{
    protected $arr = array();
    protected $type = '';

    public function __construct($type = 'NUMERIC', $defaultArr = array()){
        $this->type = $type;
        $this->arr = $defaultArr;
        
    }

    public function addElement($el){
       array_push($this->arr, $el);
       if($this->type == 'NUMERIC'){
        sort($this->arr, SORT_NUMERIC);
    }
    elseif($this->type == 'STRING'){
        sort($this->arr, SORT_STRING);
    }
    else{
        sort($this->arr, SORT_REGULAR);
    }
    return $this->arr;
}
    public function getArray(){
        return $this->arr;
    }

}

$newArr = new SelfOrderingArray('STRING', array('orange', 'apple', 'watermelon'));
$newArr->addElement('pear');
print_r($newArr->getArray());


?>
