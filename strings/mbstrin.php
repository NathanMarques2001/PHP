<?php

$password = 'açougue';

/*
mb = multiple byte - converte caracteres especiais ou acentuados
que seriam considerados como 2 bytes como somente 1
Ex: i = 1byte - í = 2bytes(sem o mbstring)
*/
echo mb_strlen($password);
