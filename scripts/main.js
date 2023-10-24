function openSidePanel() {
    document.getElementById("sidePanel").style.left = "0";
}

function closeSidePanel() {
    document.getElementById("sidePanel").style.left = "-250px";
}

signinBtn.onclick = function(event) {
    if (document.getElementById("formStateField").value === "signup") {
        // Switch to Sign In state
        event.preventDefault();
        nameField.style.maxHeight = "0";
        title.innerHTML = "Sign In";
        signupBtn.classList.remove("disable");
        signinBtn.classList.add("disable");
        document.getElementById("formStateField").value = "signin";
    }
    // Else: The form will be submitted
}

signupBtn.onclick = function(event) {
    if (document.getElementById("formStateField").value === "signin") {
        // Switch to Sign Up state
        event.preventDefault();
        nameField.style.maxHeight = "60px";
        title.innerHTML = "Sign Up";
        signupBtn.classList.add("disable");
        signinBtn.classList.remove("disable");
        document.getElementById("formStateField").value = "signup";
    }
    // Else: The form will be submitted
}

