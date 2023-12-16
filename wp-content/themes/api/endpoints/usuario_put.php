<?php

function api_usuario_put($request)
{
  $user = wp_get_current_user();
  $user_id = $user->ID;

  if ($user_id > 0) {

    $email = sanitize_email($request['email']);
    $nome  = sanitize_text_field($request['nome']);
    $senha = $request['senha'];
    $cep   = sanitize_text_field($request['cep']);
    $endereco = sanitize_text_field($request['endereco']);
    $bairro = sanitize_text_field($request['bairro']);
    $numero = sanitize_text_field($request['numero']);
    $cidade = sanitize_text_field($request['cidade']);
    $estado = sanitize_text_field($request['estado']);


    //vai retornar o id do email se existir
    $email_exists = email_exists($email);

    //você pode atualizar o email que não exista na base ou um email existente que tenha o mesmo a id do usuario logado
    if (!$email_exists ||  $email_exists === $user_id) {


      $response = array(
        'ID' => $user_id,
        'user_pass' => $senha,
        'user_email' => $email,
        'display_name' => $nome,
        'first_name'   => $nome,
      );

      wp_update_user($response);

      update_user_meta($user_id, 'cep', $cep);
      update_user_meta($user_id, 'endereco', $endereco);
      update_user_meta($user_id, 'bairro', $bairro);
      update_user_meta($user_id, 'numero', $numero);
      update_user_meta($user_id, 'cidade', $cidade);
      update_user_meta($user_id, 'estado', $estado);
    } else {
      $response = new WP_Error('email', 'Email já cadastrado', array('status' => 403));
    }
  } else {
    $response = new WP_Error('permissão', 'Usuário não possui permissão', array('status' => 401));
  }

  return rest_ensure_response($response);
}

function registrar_api_usuario_put()
{
  register_rest_route('api', '/usuario', array(
    array(
      'methods' => WP_REST_Server::EDITABLE,
      'callback' => 'api_usuario_put'
    )
  ));
}

add_action('rest_api_init', 'registrar_api_usuario_put');
