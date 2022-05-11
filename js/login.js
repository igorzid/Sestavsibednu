async function login() {
    const username = document.getElementById("usernameInput").value;
    const userPassword = document.getElementById("userPasswordInput").value;

    await fetch(
        `http://localhost/projects/web/api/login.php?username=${username}&userPassword=${userPassword}`
    );

    location.reload();
}

function logRegistration() {
    window.location.replace(`../login/registrace.php`);
}

async function registration() {
    const username = document.getElementById("usernameReg").value;
    const userPassword = document.getElementById("passwordReg").value;
    const email = document.getElementById("emailReg").value;
    const errorElement = document.getElementById("errorReg");

    let messages = [];

    if(username.value === "") {
        messages.push("uživatelské jméno musí být vyplněno");
    }

    if(userPassword.value === "") {
        messages.push("heslo musí být vyplněno");
    }

    if(email.value === "") {
        messages.push("email musí být vyplněn");
    }

    if(messages.length > 0) {
        errorElement.innerText = messages.join(", ");
        return;
    }
    const userreg = {
        username: username,
        userPassword: userPassword,
        email: email
    };

    await fetch(`http://localhost/projects/web/api/reg.php`, {
        method: "POST",
        body: JSON.stringify(userreg)
      });

    window.location.replace(`../index/index.php`);
}