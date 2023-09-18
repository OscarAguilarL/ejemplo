<?php

function makeHttpRequest(string $url, array $options = [])
{
  // Iniciamos una nueva sesión cURL.
  $ch = curl_init($url);

  // Establecemos las opciones de la sesión cURL.
  foreach ($options as $key => $value) {
    curl_setopt($ch, $key, $value);
  }

  // Ejecutamos la petición HTTP.
  $response = curl_exec($ch);

  // Cerramos la sesión cURL.
  curl_close($ch);

  // Devolvemos el resultado de la petición HTTP.
  return $response;
}