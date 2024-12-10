<?php
if (!file_exists('/usr/lib/libssl.so.10')) {
    shell_exec('apk --no-cache add openssl1.0');
}
// Memuat file index utama dari public folder
require __DIR__.'/../public/index.php';