const newArray = [
    {
        name: 'fries',
        img: 'images/fries.png' 
    },
   
    {
        name: 'hotdog',
        img: 'images/hotdog.png'
    },
    {
        name: 'ice-cream',
        img: 'images/ice-cream.png'
    },{
        name: 'milkshake',
        img: 'images/milkshake.png'
    },
    {
        name: 'cheeseburger',
        img: 'images/cheeseburger.png'
    },
    {
        name: 'pizza',
        img: 'images/pizza.png'
    },
    {
        name: 'fries',
        img: 'images/fries.png' 
    },
   
    {
        name: 'hotdog',
        img: 'images/hotdog.png'
    },
    {
        name: 'ice-cream',
        img: 'images/ice-cream.png'
    },{
        name: 'milkshake',
        img: 'images/milkshake.png'
    },
    {
        name: 'pizza',
        img: 'images/pizza.png'
    },
    {
        name: 'cheeseburger',
        img: 'images/cheeseburger.png'
    }
];
newArray.sort(() =>0.5 - Math.random());

const grid = document.querySelector('#grid');
const result = document.querySelector('#result')
let chosen = [];
let chosenId = [];
const won = [];

function createBoard(){
    for (let i = 0 ; i < newArray.length; i++){
        const card = document.createElement('img');
        card.setAttribute('src','images/blank.png');
        card.setAttribute('data-id',i);
        card.addEventListener('click', flipCard)
        grid.append(card)
        console.log(card, i)

    }
}
createBoard()

function checkMatch(){
    const cards= document.querySelectorAll('#grid img')
    if(chosenId[0] == chosenId[1]){
        cards[chosenId[0]].setAttribute('src','images/blank.png')
        cards[chosenId[1]].setAttribute('src','images/blank.png')
        
    }
    if(chosen[0] == chosen[1]){
        cards[chosenId[0]].setAttribute('src','images/white.png')
        cards[chosenId[1]].setAttribute('src','images/white.png')
        cards[chosenId[0]].removeEventListener('click',flipCard)
        cards[chosenId[1]].removeEventListener('click', flipCard)
        won.push(chosen)
    }else {
        cards[chosenId[0]].setAttribute('src','images/blank.png')
        cards[chosenId[1]].setAttribute('src','images/blank.png')
    }
    result.textContent = won.length
    chosen = [];
    chosenId  = [];
    if(won.length == newArray.length/2){
        result.textContent = 'Congrulations';
    }
}

function flipCard(){
    const cardId = this.getAttribute('data-id')
    chosen.push(newArray[cardId].name);
    chosenId.push(cardId)
    this.setAttribute('src',newArray[cardId].img);
    if(chosen.length == 2){
        setTimeout(checkMatch(), 500)
    }
}
