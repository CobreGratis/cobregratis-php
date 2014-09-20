<?php

require 'lib/CobreGratis.php';

// Verifique os detalhes de cada campo do boleto:
// http://suporte.cobregratis.com.br/hc/pt-br/articles/201644783

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


// Detalhes do boleto
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

// Buscando boletos
// Campos disponível para busca
// Devem ser passar dentro de search[] no extra_params
// 
// Datas no formato americando 2014-08-21
// Valor no formato de reais 12,50
// 
// service_id_eq - ID do Serviço
// name_cont - Nome do cliente
// bank_billet_account_id_eq - ID conta de cobrança
// processed_our_number_cont = Nosso número
// document_number_cont = Número do documento
// amount_gteq - Valor do boleto maior ou igual
// amount_lteq - Valor do boleto menor ou igual
// expire_at_gteq - Data de vencimento maior ou igual
// expire_at_lteq - Data de vencimento menor ou igual
// status_eq - Status do boleto
// events_event_eq - Status de eventos
// tags_name_in  - Categoria
// cnpj_cpf_cont - CPF/CNPJ do cliente formatado 000.000.000-00
// 
// Exemplo - Quero todos os boletos de clientes que tem nome Mauro, que vencerão em 2015 com valor igual ou maior que 12,99
// 
// $bank_billet = new BankBillet();
// $bank_billet->user = "minha_chave";
// $bank_billet->password = "X";
// $bank_billet->extra_params = "?page=1&search[name_cont]=Mauro&search[expire_at_gteq]='2015-01-01'&search[expire_at_lteq]='2015-12-31'&search[amount_gteq]=12,99";
// $bank_billets = $bank_billet->find('all');
//
// if($bank_billets->errno) {
//   print "$bank_billets->error\n";
// } else {
//   foreach($bank_billets as $bank_billet) {
//     print "Nosso Número: $bank_billet->our_number\n";
//     print "Vencimento: $bank_billet->expire_at\n";
//     print "Valor: $bank_billet->amount\n";
//     print "Pagador: $bank_billet->name\n";
//     print "CPF/CNPJ do pagador: $bank_billet->cnpj_cpf\n";
//     print "URL: $bank_billet->external_link\n";
//     print "Email Status: $bank_billet->email_state\n";
//     print "Email Delayed: $bank_billet->email_delayed_at\n";
//     print "Email Sent: $bank_billet->email_sent_at\n";
//     print "Cliente ID: $bank_billet->customer_id\n";
//     print "=================================\n";
//   }
// }

?>




