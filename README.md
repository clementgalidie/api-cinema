# Cinema API

## Description

The main purpose of this API is to manage a list of movies.
Basically, several actions can be done.

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

| Route                                                         | Function         
| -------------                                                 |:--------------------------------:                               |
| `/v1/users/`                                                  | Display a list of all the users.                                |
| `/v1/users/:number/` (where `:number` is an integer)          | Display piece of informations about a user according to his ID. |
| `/v1/users/deleting/:number/` (where `:number` is an integer) | Delete a user according to his ID.                              |

### Movies

| Route                                                          | Function         
| -------------                                                  |:--------------------------------:                                 |
| `/v1/movies/`                                                  | Display a list of all the movies.                                 |
| `/v1/movies/:number/` (where `:number` is an integer)          | Display piece of informations about a movie according to his ID.  |
| `/v1/movies/deleting/:number/` (where `:number` is an integer) | Delete a movie according to his ID.                               |