<?php
/**
 * Class Response
 * @package app\core
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\core;

class Response
{
    /**
     * @param int $code
     * @return void
     */
    public function setStatusCode (int $code): void
    {
        http_response_code($code);
    }
}
