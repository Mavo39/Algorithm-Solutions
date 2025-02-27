class Dog {
    constructor(name, size, age){
        this.name = name;
        this.size = size;
        this.age = age;
    }

    bark(){
        if(this.size >= 50){
            return "Wooof! Woof!";
        } else if(this.size >= 20){
            return "Ruff! Ruff!";
        } else {
            return "Yip! Yip!";
        }
    }

    calcHumanAge(){
        return 12 + (this.age - 1) * 7;
    }
}

module.exports = Dog;