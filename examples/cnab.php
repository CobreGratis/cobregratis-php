<?php

require 'lib/CobreGratis.php';

// Enviando um CNAB
// Envie o conteúdo original do cnab pedo do seu banco.
// Se preferir enviar como binário ou multipar, use o parâmetro: file
// content: conteúdo original do cnab pego no banco
// filename: nome do arquivo cnab
// $path = realpath(dirname(__FILE__) . '/cnab.txt');
// $cnab = new cnab(array('content' => file_get_contents($path), 'filename' => 'cnab.txt'));
// $cnab->user = "minha_chave";
// $cnab->password = "X";
// $cnab->save();

// Quitando boletos do cnab
// $cnab = new cnab(array('id' => 1));
// $cnab->user = "minha_chave";
// $cnab->password = "X";
// $cnab->put('pay_all_off');

// Listando cnabs
// $cnab = new Cnab();
// $cnab->user = "minha_chave";
// $cnab->password = "X";
// $cnab->extra_params = "?page=1";
// $cnabs = $cnab->find('all');
//
// if($cnabs->errno) {
//   print "$cnabs->error\n";
// } else {
//   foreach($cnabs as $cnab) {
//     print "ID: $cnab->id\n";
//     print "Nome do arquivo: $cnab->filename\n";
//     print_r($cnab->bank_billet_ids);
//     print "=================================\n";
//   }
// }

?>




