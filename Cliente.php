<html>
    <body>
        <h1> Cliente </h1>
        <p> cadastro de cliente </p>
        <h2> Lista </h2>

        <?php

$cliente = array();

$cliente[] = array("Nome" => "Felipe", "DataNascimento" => "22/07/1992", "Sexo" => "M");
$cliente[] = array("Nome" => "Deborah", "DataNascimento" => "30/09/1996", "Sexo" => "F");
$cliente[] = array("Nome" => "Amora", "DataNascimento" => "??/??/????", "Sexo" => "F");

foreach($cliente as $cliente){

    if($cliente["Sexo"] == "F"){
        echo"<pre>";
        print_r($cliente["Nome"]);
        echo "</pre>";
    }else{
        echo"<pre>";
        print_r("Não Encontrado");
        echo "</pre>";
    };
};

?>

        </table>
        <h2> Formulario </h2>

        <form name="formCadastro" action="tela.php" method="post">
        Nome: <input type = "text" name = "nome2" size = 32 maxlenght = 20/>
        <br/>
        Data de Nascimento: <input type = "text" name = "datanascimento" size = 32 maxlenght = 10/>
        <br/>
        Telefone:   <input type = "text" name = "tel" size = 32 maxlenght = 20/>
        <br/>
        <br/>
        Sexo <input type = "Radio" name = "resposta" value = "True"/> M <input type = "Radio" name = "resposta" value = "False"/> F
 
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        

        </form>
        <table>
            <tr>
                <th> CodigoDoCliente </th>
                <th> Email </th>
                <th> Endereco </th>
            </tr>
            <tr>
                <td> 0 </td>
                <td> cliente1@gmail.com </td>
                <td> x </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td> cliente2@gmail.com </td>
                <td> y  </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> cliente3@gmail.com </td>
                <td> a </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> cliente4@gmail.com </td>
                <td> z </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> cliente5@gmail.com </td>
                <td> w </td>
            </tr>
            
    </body>
</html>