<?php

    session_start();
	include_once("../config.php");

	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Email</th>';
	$html .= '<th>Telefone</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_cli = "SELECT * FROM usuarios";

	$resultado_clientes = mysqli_query($connCad, $result_cli);

	while($row_clientes = mysqli_fetch_assoc($resultado_clientes)){
		$html .= '<tr><td>'.$row_clientes['id'] . "</td>";
		$html .= '<td>'.$row_clientes['nome'] . "</td>";
		$html .= '<td>'.$row_clientes['email'] . "</td>";
		$html .= '<td>'.$row_clientes['telefone'] . "</td>";
	}
	
	$html .= '</tbody>';
	$html .= '</table';

    use Dompdf\Dompdf;

    require_once "../relatorios/dompdf/autoload.inc.php";

    $pdf = new Dompdf();

    $pdf->loadHtml('
        <h1 style="text-align: center;">Relatório de Clientes Cadastrados</h1>
    '. $html .'

    ');

    $pdf->render();

    $pdf->stream(
        "relatorio.pdf",
        array(
            "Attachment"=>false
        )
    );
?>