<?php

use function PHPUnit\Framework\throwException;

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
 *     amazon
 *         s3
 *  
 * Fazer usando objetos e no final essa lista de pastas deve ser listada com uma função recursiva
 */


class Diretorio
{
    public $index;
    public $nome;
    public $ponteiroDiretorioPai;
    public $ponteiroDiretorioFilho;
    public $ponteiroDiretorioIrmaoEsquerda;
    public $ponteiroDiretorioIrmaoDireita;

    public function __construct($nomeDoDiretorio)
    {
        $this->nome = $nomeDoDiretorio;
    }
}

class EstruturaDePastas
{
    public $ponteiroDiretorio;

    public function __construct($nomeDoDiretorio)
    {
        $diretorioRaiz = new Diretorio($nomeDoDiretorio);
        $this->ponteiroDiretorio = $diretorioRaiz;
    }

    public function criarDiretorio($nomeDoDiretorio)
    {
        $novoDiretorio = new Diretorio($nomeDoDiretorio);
        $novoDiretorio->ponteiroDiretorioPai = $this->ponteiroDiretorio;

        $diretorio = $this->ponteiroDiretorio->ponteiroDiretorioFilho;

        // Caso seja o primeiro diretório sendo adicionado
        if ($diretorio == null) {
            $this->ponteiroDiretorio->ponteiroDiretorioFilho = $novoDiretorio;
            return;
        }

        // Caso o filho do diretório atual possua um ou mais diretórios irmãos, navega por todos eles
        while ($diretorio->ponteiroDiretorioIrmaoDireita != null) {

            // Navega para o próximo diretório irmão
            $diretorio = $diretorio->ponteiroDiretorioIrmaoDireita;
        }

        // Ao chegar no último diretório irmão, adiciona o novo diretório
        $novoDiretorio->ponteiroDiretorioIrmaoEsquerda = $diretorio;
        $novoDiretorio->ponteiroDiretorioIrmaoEsquerda->ponteiroDiretorioIrmaoDireita = $novoDiretorio;
    }

    public function navegarPara(string $nomeDoDiretorio)
    {
        // Caso o usuário queira voltar um diretório
        if ($nomeDoDiretorio == "..") {
            $this->ponteiroDiretorio = $this->ponteiroDiretorio->ponteiroDiretorioPai;
            return;
        }

        // Se prepara para verificar se o diretório desejado está entre algum dos diretórios filhos do atual
        $diretorio = $this->ponteiroDiretorio->ponteiroDiretorioFilho;

        // Percorre todos os diretórios filhos do diretório atual
        while ($diretorio != null) {

            // Caso seja o diretório desejado
            if ($diretorio->nome == $nomeDoDiretorio) {
                $this->ponteiroDiretorio = $diretorio;
                return;
            }

            // Percorre o próximo diretório
            $diretorio = $diretorio->ponteiroDiretorioIrmaoDireita;
        }

        // Caso não encontre o diretório desejado
        throw new \DomainException("O diretório \"$nomeDoDiretorio\" não foi encontrado.");
    }

    public function imprimirEstruturaCompleta($objEstruturaDePastas = null, int $nivel = -1)
    {
        // Nível serve apenas para identar durante a impressão na tela
        $nivel += 1;

        // Caso a função seja chamada sem nenhum parâmetro, imprime a estrutura desde a raiz
        if ($objEstruturaDePastas == null) {
            
            // Voltar para a raiz do projeto
            while ($this->ponteiroDiretorio->ponteiroDiretorioPai != null) {
                $this->ponteiroDiretorio = $this->ponteiroDiretorio->ponteiroDiretorioPai;
            }

            $objEstruturaDePastas = $this->ponteiroDiretorio;
        }

        // Imprimir o nome de cada diretório
        while (true) {
            echo str_repeat("    ", $nivel) . $objEstruturaDePastas->nome . '<br>';

            // Imprime todos os diretórios filhos
            if ($objEstruturaDePastas->ponteiroDiretorioFilho != null) {
                $this->imprimirEstruturaCompleta($objEstruturaDePastas->ponteiroDiretorioFilho, $nivel);
            }
            
            // Imprime todos os diretórios irmãos
            if ($objEstruturaDePastas->ponteiroDiretorioIrmaoDireita != null) {
                $this->imprimirEstruturaCompleta($objEstruturaDePastas->ponteiroDiretorioIrmaoDireita, $nivel -= 1);
            }

            break;
        }
    }
}

$objEstruturaDePastas = new EstruturaDePastas("root");

$objEstruturaDePastas->criarDiretorio("linguagens");

$objEstruturaDePastas->navegarPara("linguagens");
$objEstruturaDePastas->criarDiretorio("marcacao");

$objEstruturaDePastas->navegarPara("marcacao");
$objEstruturaDePastas->criarDiretorio("html");
$objEstruturaDePastas->criarDiretorio("xml");

$objEstruturaDePastas->navegarPara("..");
$objEstruturaDePastas->criarDiretorio("programacao");

$objEstruturaDePastas->navegarPara("programacao");
$objEstruturaDePastas->criarDiretorio("php");
$objEstruturaDePastas->criarDiretorio("c++");

$objEstruturaDePastas->navegarPara("..");
$objEstruturaDePastas->criarDiretorio("funcionais");

$objEstruturaDePastas->navegarPara("funcionais");
$objEstruturaDePastas->criarDiretorio("haskell");

$objEstruturaDePastas->navegarPara("..");
$objEstruturaDePastas->navegarPara("..");
$objEstruturaDePastas->criarDiretorio("banco");

$objEstruturaDePastas->navegarPara("banco");
$objEstruturaDePastas->criarDiretorio("mysql");

$objEstruturaDePastas->navegarPara("..");
$objEstruturaDePastas->criarDiretorio("amazon");

$objEstruturaDePastas->navegarPara("amazon");
$objEstruturaDePastas->criarDiretorio("s3");

echo "<br><pre>";
$objEstruturaDePastas->imprimirEstruturaCompleta();