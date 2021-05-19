<?php

use PHPUnit\Framework\TestCase;

include "exercicios/7-avancados/exercicio-7.2.php";

class M7E7 extends TestCase
{
    public $objEstruturaDePastas;

    public function setUp(): void
    {
        $this->objEstruturaDePastas = new EstruturaDePastas("root");
    }

    public function testInserirDiretoriosNaEstrutura()
    {
        // A estrutura deve estar apontando para o diretório raiz
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->nome,
            "root"
        );

        // Inserir primeiro diretório
        $this->objEstruturaDePastas->criarDiretorio("dir-1");
        
        // O diretório raiz deve ter um filho chamado "dir-1"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->ponteiroDiretorioFilho->nome,
            "dir-1"
        );

        // Inserir segundo diretório
        $this->objEstruturaDePastas->criarDiretorio("dir-2");

        // Diretorio "dir-1" deve estar à esquerda de "dir-2"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->ponteiroDiretorioFilho->ponteiroDiretorioIrmaoDireita->ponteiroDiretorioIrmaoEsquerda->nome,
            "dir-1"
        );

        // Diretorio "dir-2" deve estar à direita de "dir-1"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->ponteiroDiretorioFilho->ponteiroDiretorioIrmaoDireita->nome,
            "dir-2"
        );

        // Entrar no diretório "dir-1"
        $this->objEstruturaDePastas->navegarPara("dir-1");

        // A estrutura deve estar apontando para o diretório "dir-1"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->nome,
            "dir-1"
        );

        // Inserir um terceiro diretório "dir-3" dentro de "dir-1"
        $this->objEstruturaDePastas->criarDiretorio("dir-3");

        // Diretorio "dir-3" deve ser filho de "dir-1"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->ponteiroDiretorioFilho->nome,
            "dir-3"
        );

        // Diretorio "dir-1" deve ser pai de "dir-3"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->ponteiroDiretorioFilho->ponteiroDiretorioPai->nome,
            "dir-1"
        );

        // Voltar para "root"
        $this->objEstruturaDePastas->navegarPara("..");

        // A estrutura deve estar apontando para o diretório raiz
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->nome,
            "root"
        );

        // O diretório raiz deve ainda ter um filho chamado "dir-1"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->ponteiroDiretorioFilho->nome,
            "dir-1"
        );

        // O diretório raiz deve ainda ter um neto chamado "dir-3"
        $this->assertEquals(
            $this->objEstruturaDePastas->ponteiroDiretorio->ponteiroDiretorioFilho->ponteiroDiretorioFilho->nome,
            "dir-3"
        );
    }
}