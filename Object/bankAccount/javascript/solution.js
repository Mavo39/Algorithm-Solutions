class BankAccount{
    constructor(bankName, ownerName, savings){
        this.bankName = bankName;
        this.ownerName = ownerName;
        this.savings = savings;
    }

    depositMoney(depositAmount){
        if(this.savings <= 20000){
            this.savings += depositAmount - 100;
        } else {
            this.savings += depositAmount;
        }
        return this.savings;
    }

    withdrawMoney(withdrawAmount){
        if(withdrawAmount <= this.savings * 0.2){
            this.savings -= withdrawAmount;
        } else {
            this.savings -= this.savings * 0.2;
        }
        return this.savings;
    }

    pastime(days){
        return this.savings + 0.25 * days;
    }
}

module.exports = BankAccount;