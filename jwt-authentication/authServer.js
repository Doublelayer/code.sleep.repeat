require("dotenv").config();
const express = require("express");
const morgan = require("morgan");

const PORT = 4000;

const jwt = require("jsonwebtoken");

const app = express();
app.use(express.json());
app.use(morgan("dev"));

let refreshTokens = [];

app.post("/token", (req, res) => {
  const refreshToken = req.body.token;
  if (refreshToken == null) return res.sendStatus(401);
  if (!refreshTokens.includes(refreshToken)) return res.sendStatus(403);
  jwt.verify(refreshToken, process.env.REFRESH_TOKEN_SECRET, (err, user) => {
    if (err) return res.sendStatus(403);
    const accsessToken = generateAccessToken({ name: user.name });
    res.json({ accessToken: accsessToken });
  });
});

app.post("/login", (req, res) => {
  // TODO: Auhenticate User

  const username = req.body.username;

  const user = { name: username };

  const accessToken = generateAccessToken(user);
  const refreshToken = jwt.sign(user, process.env.REFRESH_TOKEN_SECRET);
  refreshTokens.push(refreshToken);
  res.json({ accessToken: accessToken, refreshToken: refreshToken });
});

app.delete("/logout", (req, res) => {
  refreshTokens = refreshTokens.filter(token => token !== req.body.token);
  res.sendStatus(204);
});

function generateAccessToken(user) {
  return jwt.sign(user, process.env.ACCESS_TOKEN_SECRET, { expiresIn: "15s" });
}

app.listen(PORT, () => {
  console.log(`Listening: http://localhost:${PORT}`);
});
