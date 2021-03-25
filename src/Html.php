<?php

namespace Torquato\Solid;

class Html 
{
   public function __call(string $name, array $arguments)
   {
       $class = '\Torquato\Solid\Tag\\' . ucfirst($name);

       return call_user_func_array([new $class, 'render'], $arguments);
   }
}