<?php
function setActivo($ruta){
  return request()->routeIs($ruta) ? 'bg-black text-white' : '';
}
?>