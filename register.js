password = function () {
	let psw = document.getElementById("password").value;
	let mdpdiv = document.getElementById("mdpdiv");
	document.getElementById("mdpdiv").classList.remove("faible");
	document.getElementById("mdpdiv").classList.remove("moyen");
	document.getElementById("mdpdiv").classList.remove("fort");

	uppercase = false;
	lenght = false;
	number = false;
	match = false;
	var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

	//uppercase letter
	for (i = 0; i < psw.length; i++) {
		if (psw[i] == psw[i].toUpperCase()) {
			uppercase = true;
		}
	}

	if (psw.length > 7) {
		lenght = true;
	}

	for (i = 0; i < psw.length; i++) {
		if (format.test(psw[i])) {
			match = true;
		}
	}
	for (i = 0; i < psw.length; i++) {
		if (!isNaN(psw[i])) {
			number = true;
		}
	}
	if (uppercase == true && lenght == true && number == true && match == true) {
		document.getElementById("mdpdiv").classList.add("fort");
		mdpdiv.innerHTML = "Mot de passe fort";
	} else if (uppercase == true && lenght == true && number == true) {
		document.getElementById("mdpdiv").classList.add("moyen");
		mdpdiv.innerHTML = "Mot de passe moyen";
	} else {
		document.getElementById("mdpdiv").classList.add("faible");
		mdpdiv.innerHTML = "Mot de passe faible";
	}
};

document.getElementById("password").addEventListener("keyup", password);

document.getElementById("send").addEventListener("click", function() {
    sendMessage();
});

document.getElementById("message").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        sendMessage();
    }
});

function sendMessage() {
    var messageInput = document.getElementById("message");
    var message = messageInput.value;
    if (message.trim() === "") return;

    var chatbox = document.getElementById("chatbox");
    chatbox.innerHTML += "<p><strong>Vous :</strong> " + message + "</p>";
    messageInput.value = "";
}