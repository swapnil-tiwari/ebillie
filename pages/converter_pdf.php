<?php
/**
 * Html2Pdf Library - example
 *
 * HTML => PDF converter
 * distributed under the OSL-3.0 License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2017 Laurent MINGUET
 */
/*require_once dirname(__FILE__).'/../vendor/autoload.php';


    $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
   $html2pdf->writeHTML('bill.php');
   $html2pdf->createIndex('Sommaire', 25, 12, false, true, 1);
   $html2pdf->output('bookmark.pdf'); */
    $curl = curl_init();



   curl_exec ($curl);
   $bill_id=md5(microtime());

   $filename=$bill_id.".html";

   $content=bill.php;


   $myfile=fopen("bills/$filename", "w");
   curl_setopt ($curl, CURLOPT_URL, $content);
  curl_setopt($curl, CURLOPT_FILE, $myfile);
   $contents = curl_exec($curl);
  curl_setopt($curl,  CURLOPT_RETURNTRANSFER, TRUE);
   fwrite($myfile, $content);
   curl_close($curl);
   fclose($myfile);
?>
