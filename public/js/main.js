function changeBG() {
	var body = document.getElementsByTagName('body')[0];
	var cardLength = document.getElementsByClassName('card').length - 1;
	var card = document.getElementsByClassName('card');
	
	for (var i = 0; i <= cardLength; i++) {
		if (card[i].style.backgroundColor === "rgb(69, 90, 100)") {
			card[i].style.backgroundColor = "white";
		}
		else {
			card[i].style.backgroundColor = "rgb(69, 90, 100)";
		}
	}

	if (body.style.backgroundColor === "rgb(39, 50, 58)" && body.style.color === "white") {
		body.style.backgroundColor = "rgb(247, 247, 247)";
		body.style.color = "black";
	}
	else {
		body.style.backgroundColor = "rgb(39, 50, 58)";
		body.style.color = "white";
	}
}

function day() {
	var body = document.getElementsByTagName('body')[0];
	var cardLength = document.getElementsByClassName('card').length - 1;
	var card = document.getElementsByClassName('card');
	
	for (var i = 0; i <= cardLength; i++) {
		card[i].style.backgroundColor = "white";
	}
	body.style.backgroundColor = "rgb(247, 247, 247)";
	body.style.color = "black";
}

function night() {
	var body = document.getElementsByTagName('body')[0];
	var cardLength = document.getElementsByClassName('card').length - 1;
	var card = document.getElementsByClassName('card');

	for (var i = 0; i <= cardLength; i++) {
		card[i].style.backgroundColor = "rgb(69, 90, 100)";
		body.style.backgroundColor = "rgb(39, 50, 58)";
		body.style.color = "white";
	}

}