<?php
/**
 * Class Response
 * @package app\core
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\core;

class Response
{
    public function setStatusCode (int $code)
    {
        http_response_code($code);
    }
}
