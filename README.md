# Cinema API

## Description

The main purpose of this API is to manage a list of users and movies.
Basically, several actions can be done.
You can use [Advanced Rest Client](https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo) Google Chrome extension to test the API.

### User

He can:

* create, update and delete user;
* list all the movies he has liked;
* list all the movies he has disliked;
* list all the movies he has watched;
* list all the movies he would like to watch;
* list all the other users;
* consult the profile of another user.

### Movies

* Create, list, update and delete movies.
* A user can add and delete a movie he has liked.
* A user can add and delete a movie he has disliked.
* A user can add and delete a movie he has watched.
* A user can add and delete a movie he would like to watch.

### Users

| Resources                                       | POST (create) | GET (read)                    | PUT (update)                     | DELETE (delete) |
| ---------                                       |:-------------:|:------------------:           |:------------:                    |:---------------:|
| `/users/`                                       | Create a user | List all the users            |                                  |                 |
| `/users/:number/` (where `:number` is an integer)|               | Get a user with a specific ID | Update a user with a specific ID | Delete a user with a specific ID

### Movies

| Resources                                       | POST (create) | GET (read)                    | PUT (update)                     | DELETE (delete) |
| ---------                                       |:-------------:|:------------------:           |:------------:                    |:---------------:|
| `/movies/`                                       | Create a movie | List all the movie           |                                  |                 |
| `/movies/:number/` (where `:number` is an integer)|               | Get a movie with a specific ID | Update a movie with a specific ID | Delete a movie with a specific ID