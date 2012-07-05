# PHP Wrapper para a API do Cobre Grátis

Essa biblioteca é um conjunto de classes em PHP para acessar as informações do [Cobre Grátis](http://cobregratis.com.br) através da [API](https://github.com/BielSystems/cobregratis-api).

Todas as classes são herdadas do PHP ActiveResouce. Veja a documentação do [PHP ActiveResouce](https://github.com/lux/phpactiveresource) para mais informações.

## Instalando

    git clone https://github.com/BielSystems/cobregratis-php.git

### Configurando seu token

```php
require 'lib/CobreGratis.php';

$bank_billet = new BankBillet();
$bank_billet->user = "seu_token";
$bank_billet->password = "X";
```

## Uso

```php
$bank_billet->extra_params = "?page=1";
$bank_billets = $bank_billet->find('all');
```

Veja um exemplo no arquivo [example.php](https://github.com/BielSystems/cobregratis-php/blob/master/example.php)

## Licença

Esse código é livre para ser usado dentro dos termos da licença [MIT license](http://www.opensource.org/licenses/mit-license.php).

## Bugs, Issues, Agradecimentos, etc

Comentários são bem-vindos. Envie seu feedback através do [issue tracker do GitHub](http://github.com/BielSystems/cobregratis-php/issues)

## Autor

[**Rafael Lima**](http://github.com/rafaelp) trabalhando na [BielSystems](http://bielsystems.com.br)

Blog: [http://rafael.adm.br](http://rafael.adm.br)

Twitter: [http://twitter.com/rafaelp](http://twitter.com/rafaelp)

### Gostou?

[Me recomende Working With Rails](http://workingwithrails.com/recommendation/new/person/14248-rafael-lima)