<?php

//C:\xampp\htdocs\api/wp-content/themes/api
$template_directory = get_template_directory();

require_once($template_directory . '/custom-post-type/produto.php');
require_once($template_directory . '/custom-post-type/transacao.php');

require_once($template_directory . '/endpoints/usuario_post.php');
require_once($template_directory . '/endpoints/usuario_get.php');
require_once($template_directory . '/endpoints/usuario_put.php');

require_once($template_directory . '/endpoints/produto_post.php');

function expire_token()
{
  return time() + (60 * 60 * 24);
}

add_action('jwt_auth_expire', 'expire_token');
