const gameTable = document.getElementById("gameTable");
const pButton = document.getElementById("generatorButton");
let theme = "anime";
let size = 3;
let img1;
let img2;
let clicked = false;

pButton.addEventListener("click", function () {
	createTable();
});

document.getElementById("anime").addEventListener("click", function () {
	theme = "anime";
	selectTheme("anime");
});

document.getElementById("cats").addEventListener("click", function () {
	theme = "cats";
	selectTheme("cats");
});

document.getElementById("galaxy").addEventListener("click", function () {
	theme = "galaxy";
	selectTheme("galaxy");
});

document.getElementById("1").addEventListener("click", function () {
	size = 3;
	selectSize("1");
});

document.getElementById("2").addEventListener("click", function () {
	size = 5;
	selectSize("2");
});

document.getElementById("3").addEventListener("click", function () {
	size = 7;
	selectSize("3");
});

function createTable() {
	let numberArray = [];
	let sizeSquared = Math.floor(((size + 1) * (size + 1)) / 2);
	for (n = 1; n <= sizeSquared; n++) {
		numberArray.push(n);
		numberArray.push(n);
	}
	console.log(numberArray);
	for (let j = 0; j <= size; j++) {
		let row = document.createElement("tr");

		for (let i = 0; i < size + 1; i++) {
			let imgIndex = Math.floor(Math.random() * numberArray.length);
			let cell = document.createElement("td");
			cell.classList.add(theme);
			let img = document.createElement("img");
			img.classList.add(`memoryImg${size}`);
			img.src = `../../assets/img/backcards/${theme}${size}.jpeg`;
			img.id = numberArray[imgIndex];
			img.addEventListener("click", function () {
				checkCard(img);
			});
			numberArray.splice(imgIndex, 1);
			cell.appendChild(img);
			row.appendChild(cell);
		}
		gameTable.appendChild(row);
	}
}

function selectTheme(name) {
	console.log(name);
}

function checkCard(clickedImg) {
	if (!clicked) {
		if (clickedImg.src.includes(`img/backcards/${theme}${size}.jpeg`)) {
			clickedImg.src = `../../assets/img/${theme}/${theme}${clickedImg.id}.jpeg`;
			if (img1 == null) {
				img1 = clickedImg;
			} else if (img2 == null) {
				img2 = clickedImg;
			}

			if (img1.id == img2?.id && img1 != null) {
				console.log("win");
				img1 = null;
				img2 = null;
			} else if (img2 != null) {
				clicked = true;
				setTimeout(function () {
					img1.src = `../../assets/img/backcards/${theme}${size}.jpeg`;
					img2.src = `../../assets/img/backcards/${theme}${size}.jpeg`;
					img1 = null;
					img2 = null;
					clicked = false;
				}, 1500);
			}
		}
	}
}

function selectSize(lvl) {
	console.log(lvl);
}

var request = $.ajax({
	url: "insertinto.php",
	type: "POST",
	data: { game_id: 1, score_game: 105, game_level: 3 },
});

alert("Votre score est de");
confirm("Rejouer");
