document.addEventListener("DOMContentLoaded", function () {
    console.log("JS Loaded"); // Check if this appears in Console

    const form = document.getElementById("register-form");

    if (!form) {
        console.error("Register form not found!");
        return;
    }

    form.addEventListener("submit", async function (event) {
        event.preventDefault(); // Stop form from refreshing page

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if (!username || !password) {
            alert("Please fill in all fields!");
            return;
        }

        try {
            const response = await fetch("http://localhost:3000/register", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ username, password }),
            });

            const data = await response.json();

            if (response.ok) {
                alert("Registration successful!");
                window.location.href = "login.html"; // Redirect to login page
            } else {
                alert("Registration failed: " + data.message);
            }
        } catch (error) {
            console.error("Error:", error);
            alert("An error occurred. Please try again.");
        }
    });
});
