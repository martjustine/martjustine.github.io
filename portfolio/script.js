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


//typing letters

var str = 'hi, I\'m mart justine bermejo';
var output = document.getElementById('name');
var index = 0;

//slider

var prev = document.getElementById('prev');
var next = document.getElementById('next');
var mySlider = ['slideshow/sw1.jpg', 'slideshow/sw2.jpg', 'slideshow/sw4.jpg'];
var x = 0;


next.addEventListener('click', function() {
	if(x < mySlider.length - 1){
		x++;
	} else {
		x = 0;
	}
	
	document.getElementById('image').src = mySlider[x];
});

prev.addEventListener('click', function() {
	if(x == 0){
		x = mySlider.length - 1;
	} else {
		x--;
	}
	
	document.getElementById('image').src = mySlider[x];
});


function type(){
	if(index < str.length){
		output.innerHTML += str.charAt(index);
		index++
		setTimeout(type, 350);
	} else {
		setTimeout(erase, 1000);
	}
}

setTimeout(type, 1000);

function erase(){
	if(index >= 0){
		var temp = str.substring(0, index);
		output.innerHTML = temp;
		index--;
		setTimeout(erase, 250);
	} else {
		setTimeout(type, 500);
	}
}

//typing names
// var texts = ['mart justine bermejo'];
// var count = 0;
// var index = 0;
// var letter = '';
// var currentText = '';



// (function type(){
	
	// if(count === texts.length){ //taga check lang to kung anong current text ang naka select
		// count = 0;
	
	// }
	
	// currentText = texts[count]; //current text dun sa array
	// letter = currentText.slice(0, index++);

	// document.getElementById('name').textContent = letter;
	
	// if(letter.length === currentText.length){
	
	
		// index = 0;
		
	
	// }

		
		// setTimeout(type, 200);
		
// })();

// var likes = 0;
// var disLikes = 0;

//image 1 likes and dislikes
// var likeBtn = document.getElementById('like-button');
// var resultLike = document.getElementById('result-like');
// var dislikeBtn = document.getElementById('dislike-button');
// var resultdisLike = document.getElementById('result-dislike');

// image 2 likes and dislikes
// var likeBtn = document.getElementById('like-button');
// var resultLike = document.getElementById('result-like');

// image 2 likes and dislikes
// var likeBtn = document.getElementById('like-button');
// var resultLike = document.getElementById('result-like');

// likeBtn.addEventListener('click', addLike);
// dislikeBtn.addEventListener('click', adddisLike);

//image1 function
// function addLike(){
	// likes++;
	// resultLike.innerHTML = likes;
// }

// function addLike(){
	// if(document.getElementById('overlay').style.visibility === 'visible'){
			// document.getElementById('overlay').style.visibility = 'hidden';
	// } else {
			// document.getElementById('overlay').style.visibility = 'visible';
	// }
	
	// document.getElementById('overlay').classList.add('show');
// }

// function adddisLike(){
	// disLikes++;
	// resultdisLike.innerHTML = disLikes;
// }

//slideshow function

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