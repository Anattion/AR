
<?php
class Produto 
{
  private $codigo;
  private $descricao;
  private $preco;
  private $quantidade;
 
  public function ImprimeEtiqueta($parametro)
  {
    print 'Código:    ' . $this->codigo . "<br>\n";
    print 'Descrição: ' . $this->descricao . "<br>\n";
    print "Parâmetro: $parametro<br>";
  }
 
  function __construct($codigo, $descricao, $quantidade, $preco)
  {
    $this->codigo     = $codigo;
    $this->descricao  = $descricao;
    $this->quantidade = $quantidade;
    $this->preco      = $preco;
  }
 
  function  __set($atrib, $value){
    $this->$atrib = $value;
  }
 
  public function  __get($atrib){
    return $this->$atrib;
  }
}
 
$produto = new Produto(123,'Teste',15,5.50);
$produto->codigo = 0;
$produto->descricao = "qualquer texto"; 
$produto->preco = "R$20,00";
$produto->quantidade = 12;
echo "$produto->codigo<br>"; 
 
$produto->ImprimeEtiqueta(1234); 
echo '<br><br>';
?>