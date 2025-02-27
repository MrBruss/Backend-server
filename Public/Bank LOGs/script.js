document.addEventListener("DOMContentLoaded", () => {
    // Handle Registration
    if (document.getElementById("registerForm")) {
        document.getElementById("registerForm").addEventListener("submit", function (event) {
            event.preventDefault();
            const username = document.getElementById("regUsername").value;
            const password = document.getElementById("regPassword").value;

            fetch("/register", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ username, password }),
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert("Registration successful! Please login.");
                    window.location.href = "login.html"; // Redirect to login
                } else {
                    alert(data.message);
                }
            });
        });
    }

   
    
    
    
    // Restrict access to main site if not logged in
    if (window.location.pathname === "/index.html" && !localStorage.getItem("user")) {
        window.location.href = "login.html"; // Redirect to login if user is not logged in
    }
    
  });

  document.addEventListener("DOMContentLoaded", () => {
    // Select both logout buttons (desktop & mobile)
    const logoutButtons = document.querySelectorAll("#logout-btn");

    // Function to handle logout
    async function handleLogout() {
        try {
            const response = await fetch("https://backend-server-production-d81b.up.railway.app/logout", {
                method: "POST",
                credentials: "include", // Keep session cookies
                headers: {
                    "Content-Type": "application/json"
                }
            });

            const data = await response.json();
            if (data.success) {
                alert("Logout successful!");
                localStorage.removeItem("user"); // Remove session
                window.location.href = "login.html"; // Redirect to login
            } else {
                alert("Logout failed! Please try again.");
            }
        } catch (error) {
            console.error("Logout error:", error);
            alert("An error occurred. Please try again.");
        }
    }

    // Attach the logout function to both buttons
    logoutButtons.forEach(button => {
        button.addEventListener("click", handleLogout);
    });
});


document.addEventListener("DOMContentLoaded", function() {
    // Identify both sidebars
    const mobileNav = document.getElementById("mobile-nav"); // Index.html sidebar
    const newSidebar = document.getElementById("new-sidebar"); // New sidebar
    const closeBtns = document.querySelectorAll("#close-btn"); // All close buttons
    const menuBtn = document.getElementById("menu-btn"); // The main menu button

    // Function to toggle sidebar
    function toggleSidebar(nav) {
        if (nav) {
            nav.classList.toggle("active");
        }
    }

    // Open sidebar when clicking the menu button
    if (menuBtn) {
        menuBtn.addEventListener("click", function() {
            if (mobileNav && !newSidebar) {
                toggleSidebar(mobileNav);
            } else if (newSidebar && !mobileNav) {
                toggleSidebar(newSidebar);
            }
        });
    }

    // Close sidebar when clicking close button
    closeBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            if (mobileNav) {
                mobileNav.classList.remove("active");
            }
            if (newSidebar) {
                newSidebar.classList.remove("active");
            }
        });
    });

    // Dropdown Toggle for `mobile-nav`
    const mobileDropdowns = document.querySelectorAll("#mobile-nav .dropdown .drop-btn");
    mobileDropdowns.forEach(btn => {
        btn.addEventListener("click", function(e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            if (submenu) {
                submenu.classList.toggle("show");
            }
        });
    });

    // Dropdown Toggle for `new-sidebar`
    const newSidebarDropdowns = document.querySelectorAll("#new-sidebar .dropdown .drop-btn");
    newSidebarDropdowns.forEach(btn => {
        btn.addEventListener("click", function(e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            if (submenu) {
                submenu.classList.toggle("show");
            }
        });
    });
});



      
