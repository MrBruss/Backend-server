const express = require("express");
const mongoose = require("mongoose");
const cors = require("cors");
const session = require("express-session");
const bcrypt = require("bcryptjs");
const bodyParser = require("body-parser");

const app = express();

app.use(express.json());


app.use(cors({
    origin: "http://127.0.0.1:5500", // Allow frontend requests from this URL
    credentials: true // Allow cookies/session sharing
}));

app.use(bodyParser.json());
app.use(express.static("public"));

mongoose.connect("mongodb+srv://desmondasamoah22:7WRpcRy9vUwfG8AY@cluster0.c4s9f.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0", {
  useNewUrlParser: true,
  useUnifiedTopology: true
});

// User Schema
const UserSchema = new mongoose.Schema({
  username: String,
  password: String,
});

const User = mongoose.model("User", UserSchema);

// Session Middleware
app.use(session({
  secret: "your_secret_key",
  resave: false,
  saveUninitialized: true
}));

// ✅ Register Route
app.post("/register", async (req, res) => {
  const { username, password } = req.body;

  // Check if username already exists
  const existingUser = await User.findOne({ username });
  if (existingUser) {
    return res.json({ success: false, message: "Username already taken!" });
  }

  // Hash password before saving
  const hashedPassword = await bcrypt.hash(password, 10);
  const newUser = new User({ username, password: hashedPassword });
  await newUser.save();

  res.json({ success: true, message: "Registration successful!" });
});

// ✅ Login Route (Final Fix)
app.post("/login", async (req, res) => {
  const { username, password } = req.body;
  
  // Find user in database
  const user = await User.findOne({ username });
  if (!user) {
    return res.json({ success: false, message: "User not found!" });
  }

  // Compare hashed password
  const isMatch = await bcrypt.compare(password, user.password);
  if (!isMatch) {
    return res.json({ success: false, message: "Invalid password!" });
  }

  // Save session
  req.session.user = user;
  res.json({ success: true, message: "Login successful!" });
});

// ✅ Protect `index.html`
app.get("/index.html", (req, res) => {
  if (!req.session.user) {
    return res.redirect("login.html");
  }
  res.sendFile(__dirname + "/public/index.html");
});



// ✅ Logout Route
app.post("/logout", (req, res) => {
    req.session.destroy(() => {
        res.json({ success: true, message: "Logged out successfully!" });
    });
});


// ✅ Start Server
const PORT = 3000;
app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});

app.post("/login", async (req, res) => {
  try {
      const { username, password } = req.body;
      if (!username || !password) {
          return res.status(400).json({ success: false, message: "Username and password are required" });
      }

      const user = await User.findOne({ username });
      if (!user) {  
          return res.status(401).json({ success: false, message: "User not found" });
      }

      const isMatch = await bcrypt.compare(password, user.password);
      if (!isMatch) {
          return res.status(401).json({ success: false, message: "Invalid password" });
      }

      req.session.user = user;
      return res.json({ success: true, message: "Login successful" });
  } catch (error) {
      console.error("Login Error:", error);
      return res.status(500).json({ success: false, message: "Internal Server Error" });
  }
});




app.use(cors({
    origin: "http://127.0.0.1:5500", // Allow frontend requests from this URL
    credentials: true // Allow cookies/session sharing
}));

app.use(bodyParser.json());
app.use(express.static("public"));

mongoose.connect("mongodb+srv://desmondasamoah22:7WRpcRy9vUwfG8AY@cluster0.c4s9f.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0", {
  useNewUrlParser: true,
  useUnifiedTopology: true
});




// Session Middleware
app.use(session({
  secret: "your_secret_key",
  resave: false,
  saveUninitialized: true
}));

// ✅ Register Route
app.post("/register", async (req, res) => {
  const { username, password } = req.body;

  // Check if username already exists
  const existingUser = await User.findOne({ username });
  if (existingUser) {
    return res.json({ success: false, message: "Username already taken!" });
  }

  // Hash password before saving
  const hashedPassword = await bcrypt.hash(password, 10);
  const newUser = new User({ username, password: hashedPassword });
  await newUser.save();

  res.json({ success: true, message: "Registration successful!" });
});

// ✅ Login Route (Final Fix)
app.post("/login", async (req, res) => {
  const { username, password } = req.body;
  
  // Find user in database
  const user = await User.findOne({ username });
  if (!user) {
    return res.json({ success: false, message: "User not found!" });
  }

  // Compare hashed password
  const isMatch = await bcrypt.compare(password, user.password);
  if (!isMatch) {
    return res.json({ success: false, message: "Invalid password!" });
  }

  // Save session
  req.session.user = user;
  res.json({ success: true, message: "Login successful!" });
});

// ✅ Protect `index.html`
app.get("/index.html", (req, res) => {
  if (!req.session.user) {
    return res.redirect("login.html");
  }
  res.sendFile(__dirname + "/public/index.html");
});



// ✅ Logout Route
app.post("/logout", (req, res) => {
    req.session.destroy(() => {
        res.json({ success: true, message: "Logged out successfully!" });
    });
});



app.post("/login", async (req, res) => {
  try {
      const { username, password } = req.body;
      if (!username || !password) {
          return res.status(400).json({ success: false, message: "Username and password are required" });
      }

      const user = await User.findOne({ username });
      if (!user) {  
          return res.status(401).json({ success: false, message: "User not found" });
      }

      const isMatch = await bcrypt.compare(password, user.password);
      if (!isMatch) {
          return res.status(401).json({ success: false, message: "Invalid password" });
      }

      req.session.user = user;
      return res.json({ success: true, message: "Login successful" });
  } catch (error) {
      console.error("Login Error:", error);
      return res.status(500).json({ success: false, message: "Internal Server Error" });
  }
});

