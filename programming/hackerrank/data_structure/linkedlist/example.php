<?php

class Node {

    private $data;
    private $next_node;

    public function __construct(string $data = null){
        $this->data = $data;
    }

}

class LinkedList {

    private $first_node = null;
    private $total_node = 0;

    public function insertNode(string $data = null){
        
        $newNode = new Node($data);

        if($this->first_node == null){

            $this->first_node = &$newNode;
            
        }else{

            $current_node = $this->first_node;
            
            while($current_node->next_node != null){

                $current_node = $current_node->next_node;

            }

            $current_node->next_node = $newNode;
            $this->total_node++;
        }

        return true;
    }
}