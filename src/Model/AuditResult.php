<?php

namespace App\Model;

class AuditResult
{
    private string $check;

    /**
     * @param string $check
     */
    public function __construct(string $check)
    {
        $this->check = $check;
    }


    /**
     * @return string
     */
    public function getCheck(): string
    {
        return $this->check;
    }

    /**
     * @param string $check
     */
    public function setCheck(string $check): void
    {
        $this->check = $check;
    }


}