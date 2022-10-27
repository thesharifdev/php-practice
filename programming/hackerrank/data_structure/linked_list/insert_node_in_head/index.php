<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

class Node {
    
    public $data = null;
    public $next = null;

    public function __construct ($data = null)
    {
        $this->data = $data;
    }
}

class LinkedList{
    
    private $head_node = null;

    public function insertNodeAtHead ( Node $data) {
        
        $newNode = $data;
        
        if ($this->head_node == null) {
            
            $this->head_node = $newNode;
            
        } else {
            
            $current_node = $this->head_node;
            
            $this->head_node = $newNode;
            
            $this->head_node->next = $current_node;

        }
    }

    public function displayAll(){
        
        $current_node = $this->head_node;
        $counter = 0;
        while($current_node !== null){
            if($counter == 1){
                echo PHP_EOL;
            }
            echo $current_node->data;
            $current_node = $current_node->next;
            $counter++;
        }
    }
}

$LinkedList = new LinkedList();

$input_data = [];

while(! feof($_fp)){
    $input_data[] = fgets($_fp);  
}

for($i = 1; $i < count($input_data); $i++){
    
    $my_node = new Node($input_data[$i]);
    $LinkedList->insertNodeAtHead($my_node);    
}

$LinkedList->displayAll();

?>