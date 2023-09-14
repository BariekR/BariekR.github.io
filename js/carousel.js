const leftArrow = document.getElementById("recommended-left-arrow");
const rightArrow = document.getElementById("recommended-right-arrow");
const firstCard = GetCard(1);
const secondCard = GetCard(2);
const thirdCard = GetCard(3);
const fourthCard = GetCard(4);
fourthCard.classList.add("display-none");
let cards = [firstCard, secondCard, thirdCard, fourthCard];

leftArrow.addEventListener("click", () => {
  leftArrow.setAttribute("disabled", "");

  for (let index = 0; index < cards.length; index++) {
    if (index === cards.length - 1) {
      MoveBackToRight(cards[index]);
      ShowCard(cards[index]);
    }
    MoveLeft(cards[index]);
    if (index === 0) HideCard(cards[index]);
  }

  setTimeout(() => {
    cards.push(cards.shift());
    leftArrow.removeAttribute("disabled");
  }, 1000);
});

rightArrow.addEventListener("click", () => {
  rightArrow.setAttribute("disabled", "");

  for (let index = 0; index < cards.length; index++) {
    if (index === cards.length - 1) {
      MoveBackToLeft(cards[index]);
      ShowCard(cards[index]);
    }
    MoveRight(cards[index]);
    if (index === cards.length - 2) HideCard(cards[index]);
  }

  setTimeout(() => {
    cards.unshift(cards.pop());
    rightArrow.removeAttribute("disabled");
  }, 1000);
});

function MoveLeft(card) {
  const iniPositionX = getComputedStyle(card).right;
  const endPositionX =
    Number(iniPositionX.substring(0, iniPositionX.length - 2)) + 400;
  card.style.right = endPositionX / 10 + "rem";
}

function MoveRight(card) {
  const iniPositionX = getComputedStyle(card).right;
  const endPositionX =
    Number(iniPositionX.substring(0, iniPositionX.length - 2)) - 400;
  card.style.right = endPositionX / 10 + "rem";
}

function HideCard(card) {
  card.classList.add("decrease-opacity");
  setTimeout(() => {
    card.classList.add("display-none");
    card.classList.remove("decrease-opacity");
  }, 1000);
}

function ShowCard(card) {
  card.classList.remove("display-none");
  card.classList.add("increase-opacity");
  setTimeout(() => {
    card.classList.remove("increase-opacity");
  }, 1000);
}

function GetCard(index) {
  return document.querySelector(`#carousel > div:nth-of-type(${index})`);
}

function MoveBackToRight(card) {
  card.style.right = "-35rem";
}

function MoveBackToLeft(card) {
  card.style.right = "125rem";
}
