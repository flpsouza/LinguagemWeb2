<?php

if (!empty($_POST['nome'])) {


    $tabela1 = "<table border='1'>";
    $tabela1 .= '<thead>';
    $tabela1 .= '<tr>';
    $tabela1 .= '<td>Nome</td>';
    $tabela1 .= '<td>Preco</td>';
    $tabela1 .= '<td>Codigo</td>';
    $tabela1 .= '</tr>';
    $tabela1 .= '</thead>';
    $tabela1 .= '<tbody>';
    $tabela1 .= '<tr>';
    $tabela1 .= "<td>{$_POST['nome']}</td>";
    $tabela1 .= "<td>{$_POST['preco']}</td>";
    $tabela1 .= "<td>{$_POST['codProduto']}</td>";
    $tabela1 .= '</tr>';
    $tabela1 .= '</tbody>';
    $tabela1 .= '</table>';

    echo $tabela1;
}

if (!empty($_POST['nome1'])) {

    $tabela2 = "<table border='1'>";
    $tabela2 .= '<thead>';
    $tabela2 .= '<tr>';
    $tabela2 .= '<td>Nome</td>';
    $tabela2 .= '<td>Status</td>';
    $tabela2 .= '<td>Forma de Pagamento</td>';
    $tabela2 .= '</tr>';
    $tabela2 .= '</thead>';
    $tabela2 .= '<tbody>';
    $tabela2 .= '<tr>';
    $tabela2 .= "<td>{$_POST['nome1']}</td>";
    $tabela2 .= "<td>{$_POST['status']}</td>";
    $tabela2 .= "<td>{$_POST['formadepagamento']}</td>";
    $tabela2 .= '</tr>';
    $tabela2 .= '</tbody>';
    $tabela2 .= '</table>';

    echo $tabela2;
}

if (!empty($_POST['nome2'])) {

    $tabela3 = "<table border='1'>";
    $tabela3 .= '<thead>';
    $tabela3 .= '<tr>';
    $tabela3 .= '<td>Nome</td>';
    $tabela3 .= '<td>Data Nascimento</td>';
    $tabela3 .= '<td>Telefone</td>';
    $tabela3 .= '</tr>';
    $tabela3 .= '</thead>';
    $tabela3 .= '<tbody>';
    $tabela3 .= '<tr>';
    $tabela3 .= "<td>{$_POST['nome2']}</td>";
    $tabela3 .= "<td>{$_POST['datanascimento']}</td>";
    $tabela3 .= "<td>{$_POST['tel']}</td>";
    $tabela3 .= '</tr>';
    $tabela3 .= '</tbody>';
    $tabela3 .= '</table>';

    echo $tabela3;
}
