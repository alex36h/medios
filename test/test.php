<?php

$clave_cifrada = hash("sha512", "nexus". "12345" );
echo $clave_cifrada;