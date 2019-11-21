# Building a RESTful Web Service

🧠 Concepts Covered:

- Building a service that will accept HTTP GET request at:
  `http://localhost:8080/greetings`
  and respond with a JSON representation of a greeting
  `{"id" : 1, "content" : "Hello, Doublayer"}`
  customize the greeting with an optional "name" parameter in the query string
  `http://localhost:8080/greetings?name=User`
  the "name" parameter value overrides the default value of "Doublayer and is reflected in the response
  `{"id" : 1, "content" : "Hello, User"}` - JDK 1.8 or later - Maven 3.2+
