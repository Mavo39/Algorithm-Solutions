class Animal {
    static activityMultiplier = 1.2;

    constructor(name, weightKg, heightM, isPredator, speedKph){
        this.name = name;
        this.weightKg = weightKg;
        this.heightM = heightM;
        this.isPredator = isPredator;
        this.speedKph = speedKph;
    }

    getBmi(){
        return Math.floor((this.weightKg / this.heightM ** 2) * 100) / 100;
    }

    getDailyCalories(){
        return Math.floor(70 * (this.weightKg ** 0.75) * Animal.activityMultiplier * 100) / 100;
    }

    isDangerous(){
        return this.isPredator || this.heightM >= 1.7 || this.speedKph >= 35;
    }
}

module.exports = Animal;