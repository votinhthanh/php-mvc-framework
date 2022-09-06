<?php
/**
 * Class RegisterModel
 * @package app\models
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';

    /**
     * @return void
     */
    public function register(): void
    {
        echo 'add user success';
    }

    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [
                self::RULE_REQUIRED,
                [
                    self::RULE_MIN,
                    'min' => 8
                ],
                [
                    self::RULE_MAX,
                    'max' => 24
                ]
            ],
            'passwordConfirm' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}
