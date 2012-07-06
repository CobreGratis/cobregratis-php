<?php

require 'lib/CobreGratis.php';

$bank_billet = new BankBillet(array ('amount' => 230.50, 'expire_at' => '2015-07-22', 'name' => 'Rafael Lima') );
$bank_billet->user = "BGAhcIVKwZiNwRazGg90yc4H952qNGxLtxFVBRp95Ex2CtzdjbQS4E7vFNkz";
$bank_billet->password = "X";

$bank_billet->save();

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
    print "URL: $bank_billet->external_link\n";
    print "=================================\n";
  }
}

?>