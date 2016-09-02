"use strict";

(function () {
    function renderSignForm() {
		var signInBtn = document.getElementById("signin-link");
		var signUpBtn = document.getElementById("signup-link");
		var signInForm = document.querySelectorAll(".form-hidden")[1];
		var signUpForm = document.querySelectorAll(".form-hidden")[0];
		var floatBack = document.querySelectorAll(".close");
		var signInLink = document.getElementById("signup__form--signin");
		var signUpLink = document.getElementById("signin__form--signup");

		signInBtn.onclick = function () {
			signUpForm.className = "form-hidden";
			signInForm.className = "form-visible";
		};
		signInLink.onclick = function () {
			signUpForm.className = "form-hidden";
			signInForm.className = "form-visible";
		};
		signUpBtn.onclick = function () {
			signInForm.className = "form-hidden";
			signUpForm.className = "form-visible";
		};
		signUpLink.onclick = function () {
			signInForm.className = "form-hidden";
			signUpForm.className = "form-visible";
		};
		Array.from(floatBack).forEach(function (element) {  //in Chrome can use floatback.foreach
			element.onclick = function () {
				signInForm.className = "form-hidden";
				signUpForm.className = "form-hidden";
			};
		});
	}

    renderSignForm();
})();