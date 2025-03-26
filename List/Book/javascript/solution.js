class Book{
    static author = 'Stephen Hawkings';

    constructor(title, year){
        this.title = title;
        this.year = year;
    }
}

function printBookArray(arr){
    for(let i = 0; i < arr.length; i++){
        console.log(`${arr[i].title} written by ${Book.author} in ${arr[i].year}`);
    }
}

module.exports = {
    Book,
    printBookArray
}