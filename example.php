<?php

require 'lib/CobreGratis.php';

$bank_billet = new BankBillet();
$bank_billet->user = "3NIAl4KWk87sFBbpqOUCSURED4zIx3Xiqz8gXSDtFF77YIADbRnoCXRjCHQ3";
$bank_billet->password = "X";
$bank_billet->extra_params = "?page=1";
$bank_billets = $bank_billet->find('all');

if($bank_billets->errno) {
  print "$bank_billets->error\n";
} else {
  foreach($bank_billets as $bank_billet) {
    print "Nosso Número: $bank_billet->our_number\n";
    print "Vencimento: $bank_billet->expire_at\n";
    print "Valor: $bank_billet->amount\n";
    print "Sacado: $bank_billet->name\n";
    print "=================================\n";
  }
}

?>