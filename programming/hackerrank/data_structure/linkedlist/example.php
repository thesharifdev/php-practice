<?php

class Node {

    protected $data;
    protected $next_node;

    public function __construct(string $data = null){
        $this->data = $data;
    }

}

class LinkedList extends Node {

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

    public function get_node_status() {
      
        echo "All nodes: ".$this->total_node.PHP_EOL;
        $currentNode = $this->first_node;

        while ($currentNode !== NULL) {
            echo $currentNode->data .PHP_EOL;
            $currentNode = $currentNode->next_node;
        }
    }
}

$BookTitles = new LinkedList();
$BookTitles->insertNode("Node 1 data");
$BookTitles->insertNode("Node 2 data");
$BookTitles->insertNode("Node 3 data");
$BookTitles->get_node_status();