<?php

class SinglyLinkedListNode {

    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function insertNodeAtTail($head, $data){
    
    $new_node = new SinglyLinkedListNode($data);
   
    if($head == null){
        $head = $new_node;
    }else{
        $current_node = $head;

        while($current_node->next != null){
            $temp_node = $current_node->next;
        }

        $temp_node->next = $new_node;
    }

    return $head;
}