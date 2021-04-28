# Pergunta
Olhando para a solução dada nos exercícios complementares, você faria alguma alteração caso
estivéssemos desenvolvendo o sistema para uma loja pequena? E se fosse para uma grande rede de
lojas? Quais seriam as alterações e quais as implicações?

---

# Resposta
Sim, eu mudaria completamente a estrutura das classes.

## Primeiro
A classe Loja conteria informações específicas relacionadas à loja.
Exemplo:
- Nome da loja
- Endereço
- Contato

## Segundo
Criaria uma classe de Compra que iria conter as informações relacionadas à compra.
Exemplo: 
- ID da compra
- Lista de pedidos
   - Produto
   - Quantidade
   - Descrição
- Valor total
- Data da compra
- ID do cliente

## Terceiro
Seria necessário criar várias outras classes, como uma de Cliente, Produto etc.