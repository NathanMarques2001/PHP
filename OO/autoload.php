<?php

spl_autoload_register(function ($classFullName) {

  $filePath = str_replace("Alura\\Bank\\", "", $classFullName);
  $filePath = str_replace("\\", DIRECTORY_SEPARATOR, $filePath);
  $filePath .= ".php";

  if (file_exists($filePath)) {
    require_once $filePath;
  }
});