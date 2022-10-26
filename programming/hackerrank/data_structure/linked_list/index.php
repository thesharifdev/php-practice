<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

class SinglyLinkedListNode {
    
    public $data;
    public $next;
    
    public function __construct($data = null){
        $this->data = $data;
    }
}

class LinkedList {
    
    public $head;
}

function insertNodeAtTail (LinkedList $linked_list, $data = null){
    
    $new_node = new SinglyLinkedListNode($data);
    $linked_list = new $linked_list;
    
    if($linked_list->head == null){
        $linked_list->head = $new_node;
    }else{
        $current_node = $linked_list->head;
        while($current_node->next != null){
            $current_node = $current_node->next;
        }
        
        $current_node->next = $new_node;
    }
    
    return $new_node;
}

?>