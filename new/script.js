//modal
var open = document.getElementById('btn_open');
var modal_container = document.getElementById('modal_container');
var close = document.getElementById('btn_close');

var open_two = document.getElementById('btn_open_two');
var modal_container_two = document.getElementById('modal_container_two');
var close_two = document.getElementById('btn_close_two');


//slideshow
var i = 0;
var time = 1000;
var images = ['slideshow/sw1.jpg', 'slideshow/sw2.jpg', 'slideshow/sw3.jpg', 'slideshow/sw4.jpg'];

function changeImg(){
	document.getElementById('img').src = images[i];
	
	if(i < images.length - 1){
		i++
	} else {
		i = 0;
	}
	
	setTimeout('changeImg()', 1500);
}


window.onload = changeImg();

open.addEventListener('click',openModal);
close.addEventListener('click',closeModal);

open_two.addEventListener('click',openModalTwo);
close_two.addEventListener('click',closeModalTwo);

//first modal
function openModal(){
	modal_container.classList.add('show');
}

function closeModal(){
	modal_container.classList.remove('show');
}


//second modal
function openModalTwo(){
	modal_container_two.classList.add('show');
}

function closeModalTwo(){
	modal_container_two.classList.remove('show');
}