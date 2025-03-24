const { Card, printCardArray } = require('./solution');

let cards = [];
cards.push(new Card("♣", "A", "1"));
cards.push(new Card("♦", "K", "13"));
cards.push(new Card("♥", "Q", "12"));
cards.push(new Card("♠", "J", "11"));

printCardArray(cards);