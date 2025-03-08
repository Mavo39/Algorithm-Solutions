<?php

class BankAccount{
    public string $bankName;
    public string $ownerName;
    public float $savings;

    public function __construct(string $bankName, string $ownerName, int $savings){
        $this->bankName = $bankName;
        $this->ownerName = $ownerName;
        $this->savings = $savings;
    }

    public function withdrawMoney(int $withdrawAmount): int{
        if($withdrawAmount <= $this->savings * 0.2){
            $this->savings -= $withdrawAmount;
            return $this->savings;
        }
        return $this->savings -= $this->savings * 0.2;
    }

    public function depositMoney(int $depositAmount): int{
        return $this->savings <= 20000 ? $this->savings += $depositAmount - 100 : $this->savings += $depositAmount;
    }

    public function pastime(int $days): float{
        return $this->savings += 0.25 * $days;
    }
}