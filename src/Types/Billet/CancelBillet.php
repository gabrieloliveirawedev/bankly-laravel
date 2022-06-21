<?php

namespace WeDevBr\Bankly\Types\Billet;

use WeDevBr\Bankly\Validators\Billet\CancelBilletValidator;

class CancelBillet
{
    /** @var string */
    public $authenticationCode;

    /** @var BankAccount */
    public $account;

    /**
     * This validate and return an array
     * @return array
     */
    public function toArray(): array
    {
        $this->validate();
        return json_decode(json_encode($this), true);;
    }

    /**
     * This function validate the billet cancellation
     */
    public function validate()
    {
        $cancelBilletValidator = new CancelBilletValidator($this);
        $cancelBilletValidator->validate();
    }
}