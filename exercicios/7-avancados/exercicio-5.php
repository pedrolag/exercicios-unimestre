<?php

/**
 * 4) Arvore binaria ordenada - inserir na arvore já ordenando os elementos. 
 * Pode ser usada a lista utilizada no exercicio 4
 */

class TreeNode 
{
    public $value;
    public $branchLeft;
    public $branchRight;
    public $parent;
} 

class OrderedBinaryTree
{
    public $mainNode;

    public function insert($value)
    {
        $newNode = new TreeNode();
        $newNode->value = $value;

        $selectedNode = $this->mainNode;

        while (true) {
            if ($selectedNode != null) {
                if ($value == $selectedNode->value) break;
                if ($value < $selectedNode->value) {
                    if ($selectedNode->branchLeft != null) {
                        $selectedNode = $selectedNode->branchLeft;
                        continue;
                    }
                    $selectedNode->branchLeft = $newNode;
                    $selectedNode->branchLeft->parent = $selectedNode;
                    break;
                }
                if ($value > $selectedNode->value) {
                    if ($selectedNode->branchRight != null) {
                        $selectedNode = $selectedNode->branchRight;
                        continue;
                    }
                    $selectedNode->branchRight = $newNode;
                    $selectedNode->branchRight->parent = $selectedNode;
                    break;
                }
            }
            $this->mainNode = $newNode;
            break;
        }
    }
}