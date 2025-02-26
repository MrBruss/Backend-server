document.getElementById("login-form").addEventListener("submit", async function (e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    try {
        const response = await fetch("http://127.0.0.1:3000/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ username, password }),
        });

        const data = await response.json().catch(() => ({ success: false, message: "Invalid server response" }));

        if (data.success) {
            alert("Login successful!");
            localStorage.setItem("user", username); // Store user in localStorage
            window.location.href = "index.html"; // Redirect to homepage
        } else {
            alert(data.message);
        }
    } catch (error) {
        console.error("Error:", error);
        alert("An error occurred. Try again.");
    }
});
