require("dotenv").config();
const express = require("express");
const morgan = require("morgan");

const PORT = 3000;

const jwt = require("jsonwebtoken");

const app = express();
app.use(express.json());
app.use(morgan("dev"));

const posts = [
  {
    username: "Doublelayer",
    title: "Post 1"
  },
  {
    username: "Rick",
    title: "Post 2"
  }
];

app.get("/posts", authenticateToken, (req, res) => {
  res.json(posts.filter(post => post.username === req.user.name));
});

function authenticateToken(req, res, next) {
  const authHeader = req.headers["authorization"];

  const token = authHeader && authHeader.split(" ")[1];

  if (token == null) return res.status(401);
  console.log("token");

  jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, (err, user) => {
    if (err) return res.sendStatus(403);
    req.user = user;
    next();
  });
}

app.listen(PORT, () => {
  console.log(`Listening: http://localhost:${PORT}`);
});
