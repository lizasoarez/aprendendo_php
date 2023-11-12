 <?php  require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

       $mpdf= new \Mpdf\Mpdf();
       $mpdf->WriteHtml('<h1>Meu primeiro arquivo em pdf</h1><p>linha 1</p><p>linha 2</p><p>linha 2</p>');
       $mpdf->Output("meupdf.pdf","D");
?>

