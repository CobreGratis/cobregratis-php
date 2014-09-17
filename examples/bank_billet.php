<?php

require 'lib/CobreGratis.php';

// Criando boleto
// $bank_billet = new BankBillet(array('amount' => 230.50, 'expire_at' => '2015-07-22', 'name' => 'Teste','save_customer' => true, 'send_email_on_creation' => true));
// $bank_billet->user = "minha_chave";
// $bank_billet->password = "X";
// $bank_billet->save();


// Criando boleto Parcelado
// $bank_billet = new BankBillet(array('amount' => 230.50, 'expire_at' => '2015-07-22', 'name' => 'Teste','save_customer' => true, 'send_email_on_creation' => true, 'parcels' => '2'));
// $bank_billet->user = "minha_chave";
// $bank_billet->password = "X";
// $bank_billet->save();

// Criando Assinatura
// $bank_billet = new BankBillet(array('amount' => 230.50, 'expire_at' => '2015-07-22', 'name' => 'Teste','save_customer' => true, 'send_email_on_creation' => true, 'kind' => 'recurrent'));
// $bank_billet->user = "minha_chave";
// $bank_billet->password = "X";
// $bank_billet->save();

// Atualizando boleto
// $bank_billet = new BankBillet();
// $bank_billet->user = "minha_chave";
// $bank_billet->password = "X";
// $bank_billet->find(371470);
// sleep(5);
// $bank_billet->description = 'pqp';
// $bank_billet->save();


// Procurando boleto
// $bank_billet = new BankBillet();
// $bank_billet->user = "minha_chave";
// $bank_billet->password = "X";
// $bank_billet->find(1);
// print "Nosso Número: $bank_billet->our_number\n";
// print "Vencimento: $bank_billet->expire_at\n";
// print "Valor: $bank_billet->amount\n";
// print "Sacado: $bank_billet->name\n";
// print "URL: $bank_billet->external_link\n";
// print "Email Status: $bank_billet->email_state\n";
// print "Email Delayed: $bank_billet->email_delayed_at\n";
// print "Email Sent: $bank_billet->email_sent_at\n";
// print "Cliente ID: $bank_billet->customer_id\n";

// Listando boletos
// $bank_billet = new BankBillet();
// $bank_billet->user = "minha_chave";
// $bank_billet->password = "X";
// $bank_billet->extra_params = "?page=1";
// $bank_billets = $bank_billet->find('all');
//
// if($bank_billets->errno) {
//   print "$bank_billets->error\n";
// } else {
//   foreach($bank_billets as $bank_billet) {
//     print "Nosso Número: $bank_billet->our_number\n";
//     print "Vencimento: $bank_billet->expire_at\n";
//     print "Valor: $bank_billet->amount\n";
//     print "Sacado: $bank_billet->name\n";
//     print "URL: $bank_billet->external_link\n";
//     print "Email Status: $bank_billet->email_state\n";
//     print "Email Delayed: $bank_billet->email_delayed_at\n";
//     print "Email Sent: $bank_billet->email_sent_at\n";
//     print "Cliente ID: $bank_billet->customer_id\n";
//
//     // email_state
//     // 0 = :sending
//     // 1 = :sent
//     // 2 = :error
//     print "=================================\n";
//   }
// }

?>




