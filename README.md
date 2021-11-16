# Api Cidadão

## Sobre o Projeto:

A Api_Cidadão é um projeto api, desenvolvido com o propósito de este para vaga de desenvolvedor.
A aplicação consiste em uma api para manipular dados de cidadão.


- Permitir inserir, atualizar e deletar dados de cidadão com: nome, sobrenome, cpf, contatos (email e celular), endereço (cep, logradouro, bairro, cidade e uf);
- Permitir consultar todos os cidadãos em ordem alfabética crescente (sem filtro);
- Permitir consultar um cidadão pelo CPF;
- Não permitir cadastrar cidadão com o mesmo CPF;
- Permitir que a inserção também seja feita através da Linha de Comando;
- Com o CEP as informações de logradouro, bairro, cidade e uf devem ser buscadas no ViaCEP

## Formato

         Formato Orientação a Objeto com três classe  Pessoa Contato e Endereço para montar o  cidadão
     relacionamento um  para muitos  desta forma o Cidadão  pode ter mais de um contato e endereço.

## Tecnologia:

Linguagem php framework Laravel
Trafegar Jsom

## Configurar ambiente
 - 1 configura o nome do banco de dados no arquivo .env (DB_DATABASE=api_cidadao)
 - 2 executar as migate com o comando: ( php artisan  migrate )
 - 3 inserir dados no banco com o comando: ( php artisan db:seed )
 
## Utilizar
    exemplo com o Postiman 
-  1 listar cidadão url ( http://localhost/api_cidadao/public/api/cidadoes )
-  2 buscar um cidadão pelo CPF  url (  http://localhost/api_cidadao/public/api/cidadaocpf?cpf= número do cpf conforme esta no banco de dados)     
- inserir um novo cidadão url ( http://localhost/api_cidadao/public/api/cidadao/store )
- formato jsom  exemplo: {
   
            "nome": "Marlene",
            "sobre_nome": "Santos",
            "cpf": "884.004.949-00",             
            "cep": "13185560",
            "logradouro": "rua da Marlene",
            "numero": 14,
            "bairro": "chapadão",
            "cidade": "Campinas",
             "uf": "sp" ,          
             "telefone": 198872845,
             "email": "Marlene@gmail.com"
            }
                
            
- update de cidadão url (  http://localhost/api_cidadao/public/api/cidadao/update/ "número do id"
- formato jsom exemplo : {
   
           
            "nome": "Antonia ",
            "sobre_nome": "Lima",
            "cpf": "45145214521",             
            "cep": 14524,
            "logradouro": "rua da Antonia",
            "numero": 14,
            "bairro": "chapadão",
            "cidade": "hortolandia",
             "uf": "sp" ,          
             "telefone": 47474747,
             "email": "Antonio@gmail"
                                
            }
- Deletar Cidadão url ( http://localhost/api_cidadao/public/api/cidadao/delete/ " número do id "
- buca de endereço por cep  url ( http://localhost/api_cidadao/public/api/cep/?cep=13185561)

 O projeto possibilita que um cidadão tenha vários endereços e contatos para manipular esse  usar urls:
 
 - listar contato url (http://localhost/api_cidadao/public/api/contatos)
 - create contato url (http://localhost/api_cidadao/public/api/contato/store)
 - update contato url (http://localhost/api_cidadao/public/api/contato/update/  " número do id")
 - listar endereçosurl  ( http://localhost/api_cidadao/public/api/enderecos)
 - create Endereço url  ( http://localhost/api_cidadao/public/api/endereco/store)
 - update endereco url ( http://localhost/api_cidadao/public/api/endereco/update/ número do id )

   


        



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
