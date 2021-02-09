<?php
declare(strict_types=1);

namespace Pandora\Config;



interface ResponseInterface]
{

    public function setStatusCode(int $code): boolean
    public function setHeader(string $head_n, string $head_v): boolean
    public function setJson(string $json_n, string $json_v): boolean
    public function setCharset(string $json_n, string $json_v): boolean
    public function setExpires(int $date = 0): boolean
}
