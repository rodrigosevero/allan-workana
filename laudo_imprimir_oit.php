<?php  
if(!isset($_SESSION)){

  session_start();
  date_default_timezone_set("America/Sao_Paulo");
  set_time_limit(0);

 

} 

// Importar classes PHPMailer para o namespace global
// Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// reference the Dompdf namespace
use Dompdf\Dompdf;

//Load Composer's autoloader
require '../vendor/autoload.php';

// include autoloader
require_once '../dompdf/autoload.inc.php';


require_once ('../controle/conexao.php');  
include_once ('../controle/settings.php');  
//require_once ('../controle/verifica_login.php');
//print_r($_SESSION);exit;  // mostra o resultado dos dados do usuario*/
//var_dump($_POST);exit;
//var_dump($_SESSION);exit; 
 





// =-=-=-=-=-=-=--=-=--=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-
//     INICIO PARA GERAR O ARQUIVO PDF DO VOUCHR 
// =-=-=-=-=-=-=--=-=--=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-

// instantiate and use the dompdf class
// instanciar e usar a classe dompdf
//$dompdf = new Dompdf(["enable_remote" => true]); 
$dompdf = new Dompdf(["enable_remote" => true]);
$dompdf->loadHtml("Laudo Multi Laudos Telemedicina");

ob_start();  
require "../view/laudo_layout_oit.php";
$dompdf->loadHtml(ob_get_clean());

// (Optional) Setup the paper size and orientation
// Configurar o tamanho e a orientação do papel
//$dompdf->setPaper('A4', 'landscape');
$dompdf->setPaper("A4");

// Render the HTML as PDF
// Renderize o HTML como PDF
$dompdf->render();


// Output the generated PDF to Browser -(ESSE ERA O USADO)
// Saída do PDF gerado para o navegador - ABRE O PDF NA TELA
$dompdf->stream("Laudo_RX_Torax_PA_OIT.pdf", array("Attachment" => false)); //Para realizar o download somente alterar para true


// =-=-=-=-=-=-=--=-=--=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-
//     FIM PARA GERAR O ARQUIVO PDF DO VOUCHR 
// =-=-=-=-=-=-=--=-=--=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-
                                    

   
 ?>