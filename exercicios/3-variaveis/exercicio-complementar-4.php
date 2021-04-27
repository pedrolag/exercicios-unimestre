<?php

// Criando a classe "Loja"
class Loja {

    /**
     * @var integer
     */
    public $nr_pedido = 1001;

    /**
     * @var integer
     */
    public $cd_produto = 123;

    /**
     * @var integer
     */
    public $nr_quantidade = 2;

    /**
     * @var float
     */
    public $nr_valor_total_compra = 40.34;

    /**
     * getNrPedido
     * 
     * @return integer
     */
    function getNrPedido() {
        return $this->nr_pedido;
    }

    /**
     * getCdProduto
     * 
     * @return integer
     */
    function getCdProduto() {
        return $this->cd_produto;
    }

    /**
     * getNrQuantidade
     * 
     * @return integer
     */
    function getNrQuantidade() {
        return $this->nr_quantidade;
    }

    /**
     * getNrValorTotalCompra
     * 
     * @return integer
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