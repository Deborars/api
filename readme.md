# Wordpress API

Detalhamento de como realizar as requisições usando o Insomnia.

## Usuário
### GET - visualização
![Alt text](./images/image.png)

### POST - cadastro
![Alt text](./images/image-1.png)

### PUT
![Alt text](./images/image-2.png)
![Alt text](./images/image-3.png)

### Validando sobre o TOKEN
### POST - irá retornar o token se for um usuário válido
![Alt text](./images/image-4.png)

### POST - validando se o token está ou não expirado, na página de functions tem uma função customizada que gera um novo token a cada um dia.

token inválido
![Alt text](./images/image-5.png)
![Alt text](./images/image-6.png)

token válido
![Alt text](./images/image-7.png)
![Alt text](./images/image-8.png)

## Produto
### GET - retorna um único produto
Ponto de atenção : Não há necessidade de informar o JWT para a busca apenas no cadastro e na exclusão.
![Alt text](./images/image-9.png)

retorna todos os produtos cadastrados por aquele usuário passado por query parameters
![Alt text](./images/image-10.png)

### POST - precisa ser um JWT válido para cadastrar
JWT inválido
![Alt text](./images/image-11.png)
![Alt text](./images/image-12.png)

JWT válido
![Alt text](./images/image-13.png)
![Alt text](./images/image-14.png)

### DELETE
![Alt text](./images/image-15.png)




## Transacão
### POST
![Alt text](./images/image-16.png)
![Alt text](./images/image-17.png)

### GET
![Alt text](./images/image-18.png)

Por padrão o tipo está como comprador_id quando não for passado, mas se desejar pode filtrar por vendedor_id através de query paramters
![Alt text](./images/image-19.png)

