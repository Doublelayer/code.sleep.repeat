# JWT Authentication

🧠 Concepts Covered:

- microservice architecture (one for authenticate & one for get data)
- Creating Node.js authentication middleware
- Using refresh tokens with JWT
- Authenticating users with JWT
- Invalidating refresh tokens to log users out
- How to use JWT securely

---

## Server :computer:

#### Includes API Server utilities:

- [morgan](https://www.npmjs.com/package/morgan)
  - HTTP request logger middleware for node.js
- [dotenv](https://www.npmjs.com/package/dotenv)

  - Dotenv is a zero-dependency module that loads environment variables from a `.env` file into `process.env`

  #### Development utilities:

- [nodemon](https://www.npmjs.com/package/nodemon)
  - nodemon is a tool that helps develop node.js based applications by automatically restarting the node application when file changes in the directory are detected.

#### Setup

```
npm install
```

```
npm run devStart && npm run devStartAuth
```

#### Usage of requests.rest file (xcode required)

- install "REST Client"
  - Name: REST Client
    Id: humao.rest-client
    Description: REST Client for Visual Studio Code
    Version: 0.22.2
    Publisher: Huachao Mao
    VS Marketplace Link: https://marketplace.visualstudio.com/items?itemName=humao.rest-client

#### Usage of .env

- open terminal and generate token(s)

  ```
  node
  require("crypto").randomBytes(64).toString("hex")
  require("crypto").randomBytes(64).toString("hex")

  ```

- copy .env.sample
  - copy & paste generated tokens
