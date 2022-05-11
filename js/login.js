async function login() {
    const username = document.getElementById("usernameInput").value;
    const userPassword = document.getElementById("userPasswordInput").value;

    await fetch(
        `http://localhost/projects/sestavsibednu/api/login.php?username=${username}&userPassword=${userPassword}`
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

    const userreg = {
        username: username,
        userPassword: userPassword,
        email: email
    };

    await fetch(`http://localhost/projects/sestavsibednu/api/reg.php`, {
        method: "POST",
        body: JSON.stringify(userreg)
      });

    window.location.replace(`../index/index.php`);
}