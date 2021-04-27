<?php

/**
 * Tentei utilizar corretamente a sintaxe do phpdoc neste arquivo.
 * 
 *  https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md 
 */

/**
 * Classe Loja
 */
class Loja 
{
    /** @var int $nr_pedido contém o número do pedido */
    protected $nr_pedido = 1001;

    /** @var int $cd_produto contém o código do produto */
    protected $cd_produto = 123;

    /** @var int $nr_quantidade contém a quantidade (de algo que não foi especificado) */
    protected $nr_quantidade = 2;

    /** @var float $nr_valor_total_compra contém o valor total da compra */
    protected $nr_valor_total_compra = 40.34;

    /**
     * Retorna o número do pedido
     * 
     * @return int
     */
    function getNrPedido() {
        return $this->nr_pedido;
    }

    /**
     * Retorna o número do produto
     * 
     * @return int
     */
    function getCdProduto() {
        return $this->cd_produto;
    }

    /**
     * Retorna a quantidade (de algo que não foi especificado)
     * 
     * @return int
     */
    function getNrQuantidade() {
        return $this->nr_quantidade;
    }

    /**
     * Retorna o valor total da compra
     * 
     * @return int
     */
    function getNrValorTotalCompra() {
        return $this->nr_valor_total_compra;
    }
}

// Criando uma instância da classe "Loja"
$objLoja = new Loja();

// Buscando os valores
$nr_pedido = $objLoja->getNrPedido();
$cd_produto = $objLoja->getCdProduto();
$nr_quantidade = $objLoja->getNrQuantidade();
$nr_valor_total_compra = $objLoja->getNrValorTotalCompra();

// Concatenando os valores em uma mensagem
$ds_mensagem = ""
    . "Número do pedido: $nr_pedido <br />"
    . "Código do produto: $cd_produto <br />"
    . "Quantidade: $nr_quantidade <br />"
    . "Valor total da compra: $nr_valor_total_compra <br />";

// Imprimindo a mensagem com todos os valores buscados
echo($ds_mensagem);