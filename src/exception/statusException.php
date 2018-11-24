<?php
/**
 * Created by PhpStorm.
 * User: masood
 * Date: 11/24/18
 * Time: 11:29 AM
 */

namespace itsmh\yii2payamresan\exception;


use yii\base\Exception;

class statusException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->message = $this->_errorList[$message];

    }

    private $_errorList = [
        "0" => "دريافت شده توسط پیام رسان در صف ارسال",
        "1" => "ارسال شده – هنوز وضعیتي از مخابرات اعالم نشده است",
        "2" => "در صف ارسال مخابرات",
        "3" => "رسیده به مخابرات",
        "4" => "رسیده به گوشي پیام با موفقیت به گوشي گیرنده رسیده است.",
        "5" => "نرسیده به گوشي پیام به دست مخابرات رسیده است ولي به گوشي دلیور نشده است ،",
        "6" => "نرسیده به مخابرات -اعتبار کسر شده بابت اين پيام برگشت داده مي شود-",
        "7" => "نرسیده به مخابرات – گیرنده دريافت پیامک تبلیغاتي را غیر فعال کرده است",
        "8" => "پیامک يافت نشد شناسه وارد شده اشتباه است يا اينکه پیامک پیش از 7 روز گذشته ارسال شده است",
        "9" => "منقضي شده از تاخیر مجاز مشخص شده گذشته است.",
        "10" => "نا مشخص",
    ];

    public function getName()
    {
        return "Retrieve SMS status";
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $this->_errorList[$message];
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
}