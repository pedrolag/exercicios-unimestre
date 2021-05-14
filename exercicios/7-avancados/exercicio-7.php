<?php

/**
 * 7)
 * Criar uma estrutura de diretorios em objetos virtuais.
 * O programa deve adicionar as seguintes pastas:
 * 
 * raiz
 *     linguagens
 *         marcacao
 *             html
 *             xml
 *         programacao
 *             php
 *             c++
 *         funcionais
 *             haskell
 *     banco
 *         mysql
 *     Amazon
 *         S3
 *  
 * Fazer usando objetos e no final essa lista de pastas deve ser listada com uma função recursiva
 */

class DirTree
{
    public $objStrutcture;
    public $obj;
    public function __construct()
    {
        $this->obj = array(
            (object) array (
                "name" => 'teste',
                "content" => array()
            )
        );

        $this->objStrutcture = array(
            (object) array(
                "name" => "root",
                "content" => array(
                    (object) array(
                        "name" => "linguagens",
                        "content" => array(
                            (object) array(
                                "name" => "marcacao",
                                "content" => array(
                                    (object) array(
                                        "name" => "html",
                                        "content" => array()
                                    ),
                                    (object) array(
                                        "name" => "xml",
                                        "content" => array()
                                    )
                                )
                            ),
                            (object) array(
                                "name" => "programacao",
                                "content" => array(
                                    (object) array(
                                        "name" => "php",
                                        "content" => array()
                                    ),
                                    (object) array(
                                        "name" => "c++",
                                        "content" => array()
                                    )
                                )
                            ),
                            (object) array(
                                "name" => "funcionais",
                                "content" => array(
                                    (object) array(
                                        "name" => "haskell",
                                        "content" => array()
                                    )
                                )
                            ),
                        )
                    ),
                    (object) array(
                        "name" => "bancos",
                        "content" => array(
                            (object) array(
                                "name" => "mysql",
                                "content" => array()
                            )
                        )
                    ),
                    (object) array(
                        "name" => "amazon",
                        "content" => array(
                            (object) array(
                                "name" => "s3",
                                "content" => array()
                            )
                        )
                    ),
                )
            )
        );
    }

    public function list(array $objStrutcture, int $level = -1)
    {
        $level ++;

        foreach ($objStrutcture as $objDir) {
            echo str_repeat("    ", $level) . $objDir->name . "<br>";
            if (
                is_array($objDir->content)
                && count($objDir->content) > 0
            ) {
                $this->list($objDir->content, $level);
            }
        }
    }

    public function create(array $objStrutcture, string $path = '')
    {
        foreach ($objStrutcture as $objDir) {
            if (is_array($objDir->content)) {
                mkdir($path . $objDir->name);
            }
            if (count($objDir->content) > 0) {
                $this->create($objDir->content, $path . $objDir->name . '/');
            }
        }
    }
}

$DirTree = new DirTree();
echo "<br><pre>";
$DirTree->list($DirTree->objStrutcture);
$DirTree->create($DirTree->objStrutcture);