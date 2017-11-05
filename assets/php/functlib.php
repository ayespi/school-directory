<?php 
function redirect($path)
{
  header('Location: '.$path);
}

function prewrap($data)
{
  echo('<pre>');
  print_r($data);
  echo('</pre>');
}

?>