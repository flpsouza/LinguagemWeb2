<html>
    <body>
        <h1> Carrinho </h1>
        <p> Modulo de carrinho que junta as informações para finalizar a compra </p>
        <h2> Lista </h2>

        <?php

$pedido = array();

$pedido[] = array("CodigoPedido" => "11", "DataEntrada" => "22/01/2021", "FormaPagamento" => "Dinheiro");
$pedido[] = array("CodigoPedido" => "22", "DataEntrada" => "15/02/2021", "FormaPagamento" => "Cartão");
$pedido[] = array("CodigoPedido" => "33", "DataEntrada" => "09/03/2021", "FormaPagamento" => "Pix");

foreach($pedido as $pedido){

    if($pedido["FormaPagamento"] == "Pix"){
        echo"<pre>";
        print_r($pedido["CodigoPedido"]);
        print_r(" ");
        print_r($pedido["DataEntrada"]);
        echo "</pre>";
    }else{
        echo"<pre>";
        print_r("Não Encontrado");
        echo "</pre>";
    };
};

?>

        <table>
            <tr>
                <th> CodigoDoPedido </th>
                <th> Data </th>
                <th> FormaDePagamento </th>

            </tr>
            <tr>
                <td> 0 </td>
                <td> 01/01/2020 </td>
                <td> Boleto </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td> 02/01/2020 </td>
                <td> Pix </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> 03/01/2020 </td>
                <td> Cartão </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> 03/01/2020 </td>
                <td> Boleto </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> 04/01/2020 </td>
                <td> Cartão </td>
            </tr>
                                                                   
        </table>
        <h2> Formulario </h2>
        <form name="formCadastro" action="tela.php" method="post">      
        Data: <input type = "text" name = "Dia" size = 4 maxlenght = 4/>                                                                                     
        /<input type = "text" name = "Mes" size = 4 maxlenght = 4/>
        /<input type = "text" name = "Ano" size = 4 maxlenght = 4/>
        </br>
        Nome: <input type = "text" name = "nome1" size = 32 maxlenght = 20/>
        <br/>
        Status: <input type = "text" name = "status" size = 32 maxlenght = 20/>
        <br/>
        Forma de Pagamento: <input type = "text" name = "formadepagamento" size = 32 maxlenght = 20/>
        <br/>     
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        

        </form>
    </body>
</html>                                                                                                    
