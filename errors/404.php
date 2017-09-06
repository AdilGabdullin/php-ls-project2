<?php
echo "error 404";
if (file_exists('debug')) {
    echo $e->getMessage();
}
