# Laravel PHP Project - P4

**Zudbu** is dedicated to providing evidence-based information to people interested in nurturing their body, mind and spirit.  
	- Evidence based: based on scientific research
	- Nurturing body, mind and spirit: Promoting health and well-being with a focus on prevention.

***

### Planning Document
[P4 Gerardo Castaneda](https://docs.google.com/document/d/1rWIdzVCenmaKI4ymeBS9thRywOPw0vuIh7tHsz6Q9Qg/edit?usp=sharing)

### Repository Location
[GitHub gc-cloud E15](https://github.com/gc-cloud/E15P4)

### Live Site Location
Please visit [p4.zudbu.com](http://p4.zudbu.com).  This domain is dedicated (currently) to my CSCIE15 work.  After CSCIE15 the main site will also be located at [zudbu.com](http://zudbu.com)

### Demo location
Zudbu [youtube video](https://youtu.be/AZXvgetbxvw).

***

### Application Features
#### Route Map


|                PAGE PURPOSE     | METHOD|   URL 	          |  CONTROLLER    |
|---------------------------------|-------|-------------------|----------------|
| Home: basic info and navigation	| GET   | /                 |                |
| Body: physical well-being       | GET   | /body             |                |
| Mind: mental well-being    	    | GET   | /mind             |                |
| Spirit: spiritual well-being    | GET   | /spirit           |                |
| Login 	                        | GET	  | /login            |   			       |
| Articles: list all articles     | GET   | /articles         |articles@index  |
| Articles: create  new article	  | GET 	| /articles/new     |articles@create |
| Articles: post new article      | POST  | /articles/        |articles@store  |
| Articles: display an article    | GET   | /articles/:id     |articles@show   |
| Articles: modify an article     | GET   | /articles/:id/edit|articles@edit   |
| Articles: update an article     | PUT   | /articles/:id     |articles@update |
| Articles: delete an article     | DELETE| /articles/:id     |articles@destroy|
| FUTURE:POST COMMENTS ON ARTICLE | PUT?  | /articles/:id     |comments@update |

#### Articles
  - Can be browsed by all visitors
	- Can only be created by users with 'contributor' access
	- Can only be modified or deleted by the original contributor
	- Comments to articles can be posted by all registered users

#### User Authentication
  - The login page allows users to sign-up or sign-in
  - Users with contributor access can see 'create','edit',and 'delete'
	 buttons
  - All registered users can see 'comment' and 'like' buttons
	- XXXXXXX package allows users to sign-in with their Facebook account

### Social Media
	- Users can share using XXXXX package

## Application Build
### General features
- The app uses bootstrap and bootstrap's carousel template.  The site is responsive
and uses javascript to implement a slide show, collapsible menus and other navigational aids.
- All the requests use Laravel's routes, controllers and views.  The basic flow is
  request -> routes -> controller -> view
- The app is powered with HTML forms.  These forms were implemented using Blade
- The text generator and the password generator forms take advantage of HTTP
 requests and  flash messages to keep the values entered by the user (sticky forms)
- The app was built leveraging several packages including  laravel collective html,
laravel-debugbar, and Rap2hpoutre's log viewer
- All custom classes built by me use proper namespacing and are included within the
  'app' folder to leverage Laravel's autoloading
- Interaction with database based on RESTful controlles and Eloquent
- All pages were checked using [W3c's Unicorn validator](https://validator.w3.org/)

***

### Acknowledgements
- Theme based on bootstrap's carrousel template.
- Packages
	- nesbot/carbon
- This app was built using the Laravel framework. The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
- Images:  - Pictures licensed [CC BY-SA 4.0](http://creativecommons.org/licenses/by-sa/4.0), via       Wikimedia Commons (except when noted)
- [Creative Commons](https://creativecommons.org/publicdomain/zero/1.0/deed.en)
	- barbeque.jpg pixabay
	- paddle.jpg pixabay  
	- runners.jpg pixabay

### To do
- add media queries to replace carousel images based on screen size
