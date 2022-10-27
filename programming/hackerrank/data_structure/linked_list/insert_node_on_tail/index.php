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

    public function insertNodeAtTail ( Node $data) {
        
        $newNode = $data;
        
        if ($this->head_node == null) {
            
            $this->head_node = $newNode;
            
        } else {
            
            $currentNode = $this->head_node;
            
            while ($currentNode-> next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }


    public function displayAll(){
        
        $currentNode = $this->head_node;
        
        while($currentNode !== null){
            
            echo $currentNode->data;
            $currentNode = $currentNode->next;
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
    $LinkedList->insertNodeAtTail($my_node);    
}

$LinkedList->displayAll();

?>
