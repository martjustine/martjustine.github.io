var i = 0;
var image = ['images/background.jpg', 'images/background2.jpg', 'images/background3.jpg'];
var time = 2000;
//var img = document.getElementById('img');


function changeImg() {
	document.getElementById('img').src = image[i];
	
	if (i < image.length - 1) {
		i++
	} else {
		i = 0;
	}
	
	setTimeout("changeImg()",time);
}

window.onload = changeImg();

// modal // modal // modal // modal // modal // modal

var openModal = document.getElementById('open');
var modalContainer = document.getElementById('contacts_modal_container');
var closeModal = document.getElementById('close');

openModal.addEventListener('click', open);
closeModal.addEventListener('click', close);

function open() {
	modalContainer.classList.add('show');
}

function close() {
	modalContainer.classList.remove('show');
}

// menu modal // menu modal // menu modal // menu modal 

var openRestaurantMenu = document.getElementById('open__jollibee');
var menuModalContainer = document.getElementById('menu__modal-container');
var closeRestaurantMenu = document.getElementById('menu__close');

openRestaurantMenu.addEventListener('click', openJollibee);
closeRestaurantMenu.addEventListener('click', closeJollibee);

function openJollibee() {
	menuModalContainer.classList.add('show');
}

function closeJollibee() {
	menuModalContainer.classList.remove('show');
}