class Human {
    constructor(name, age) {
        this.name = name
        this.age = age
    }

    sayName() {
        console.log(`${this.name}です`)
    }
}

class Man extends Human {
    work() {
        console.log(`私は${this.name}です。毎日仕事をします。`)
    }
}

class Woman extends Human {
    houseWork() {
        console.log(`私は${this.name}です。毎日家事をします。`)
    }
}