<?php
session_start();
$content=$_SESSION['content'];




    require_once('./html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');

?>
