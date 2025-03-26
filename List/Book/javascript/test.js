const { Book, printBookArray } = require('./solution');

books = []
books.push(new Book("How Did It All Begin?", "2021"));
books.push(new Book("The Theory of Everything", "2010"));
books.push(new Book("God Created the Integers", "2006"));

printBookArray(books);