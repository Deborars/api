# Wordpress API

Detalhamento de como realizar as requisições usando o Insomnia.

## Usuário
### GET - visualização
![Alt text](image.png)

### POST - cadastro
![Alt text](image-1.png)

### PUT
![Alt text](image-2.png)
![Alt text](image-3.png)

### Validando sobre o TOKEN
### POST - irá retornar o token se for um usuário válido
![Alt text](image-4.png)

### POST - validando se o token está ou não expirado, na página de functions tem uma função customizada que gera um novo token a cada um dia.

token inválido
![Alt text](image-5.png)
![Alt text](image-6.png)

token válido
![Alt text](image-7.png)
![Alt text](image-8.png)

## Produto
### GET - retorna um único produto
Ponto de atenção : Não há necessidade de informar o JWT para a busca apenas no cadastro e na exclusão.
![Alt text](image-9.png)

retorna todos os produtos cadastrados por aquele usuário passado por query parameters
![Alt text](image-10.png)

### POST - precisa ser um JWT válido para cadastrar
JWT inválido
![Alt text](image-11.png)
![Alt text](image-12.png)

JWT válido
![Alt text](image-13.png)
![Alt text](image-14.png)

### DELETE
![Alt text](image-15.png)




## Transacão
### POST
![Alt text](image-16.png)
![Alt text](image-17.png)

### GET
![Alt text](image-18.png)

Por padrão o tipo está como comprador_id quando não for passado, mas se desejar pode filtrar por vendedor_id através de query paramters
![Alt text](image-19.png)

