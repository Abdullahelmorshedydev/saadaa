
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
console.log(sign_up_btn);
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
	container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
	container.classList.remove("sign-up-mode");
});

const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const phone = document.getElementById("phone");
const confirmPassword = document.getElementById("confirmPassword");

form.addEventListener("submit", (e) => {
	e.preventDefault();

	validateInputs();
});

const setError = (element, message) => {
	const inputControl = element.parentElement;
	const errorDisplay = inputControl.querySelector(".error");

	errorDisplay.innerText = message;
	inputControl.classList.add("error");
	inputControl.classList.remove("success");
};

const setSuccess = (element) => {
	const inputControl = element.parentElement;
	const errorDisplay = inputControl.querySelector(".error");

	errorDisplay.innerText = "";
	inputControl.classList.add("success");
	inputControl.classList.remove("error");
};

const isValidEmail = (email) => {
	const re =
		/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
	const usernameValue = username.value.trim();
	const phonevalue = phone.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const confirmPasswordValue = confirmPassword.value.trim();

	if (usernameValue === "") {
		setError(username, "Username is required");
	} else {
		setSuccess(username);
	}
	if (phonevalue === "") {
		setError(phone, "phone is required");
	} else {
		setSuccess(phone);
	}

	if (emailValue === "") {
		setError(email, "Email is required");
	} else if (!isValidEmail(emailValue)) {
		setError(email, "Provide a valid email address");
	} else {
		setSuccess(email);
	}

	if (passwordValue === "") {
		setError(password, "Password is required");
	} else if (passwordValue.length < 8) {
		setError(password, "Password must be at least 8 character.");
	} else {
		setSuccess(password);
	}

	if (confirmPasswordValue === "") {
		setError(confirmPassword, "Please confirm your password");
	} else if (confirmPasswordValue !== passwordValue) {
		setError(confirmPassword, "Passwords doesn't match");
	} else {
		setSuccess(confirmPassword);
	}
};


function validateForm() {
	var usernamee = document.getElementById("user").value;
	var passwordd = document.getElementById("Passwordd").value;
	var usernameError = document.getElementById("usernameError");
	var passwordError = document.getElementById("passwordError");
	var isValid = true;

	// Username validation
	if (usernamee === "") {
		usernameError.textContent = "Username is required";
		isValid = false;
	} else {
		usernameError.textContent = "";
	}

	// Password validation
	if (passwordd === "") {
		passwordError.textContent = "Password is required";
		isValid = false;
	} else if (passwordd.length < 8) {
		passwordError.textContent =
			"Password must be at least 8 characters long";
		isValid = false;
	} else {
		passwordError.textContent = "";
	}

	return isValid;
}




