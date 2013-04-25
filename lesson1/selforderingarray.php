<?php

class SelfOrderingArray{
    protected $arr = array();
    protected $type = '';

    public function __construct($type = 'NUMERIC', $defaultArr = array()){
        $this->type = $type;
        $this->arr = $defaultArr;
        
    }
    
    private function innerSort(){
    if($this->type == 'NUMERIC'){
        sort($this->arr, SORT_NUMERIC);
    }
    elseif($this->type == 'STRING'){
        sort($this->arr, SORT_STRING);
    }
    else{
        sort($this->arr, SORT_REGULAR);
    }
    return true;
    }

    public function addElement($el){
       array_push($this->arr, $el);
        $this->innerSort();
         return true;
    }
    public function rmElement($el){
        if(isset($this->arr[$el])){
            unset($this->arr[$el]);
            $this->innerSort();
        }
        return true;
    }
    public function getArray(){
        return $this->arr;
    }

}

$newArr = new SelfOrderingArray('STRING', array('orange', 'apple', 'watermelon'));
$newArr->addElement('pear');
print_r($newArr->getArray());

?>