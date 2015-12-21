# CSCIE15 Project - P4 ZUDBU
## 1. Summary
**Zudbu** is dedicated to providing reliable information to people interested in nurturing their body, mind and spirit.
- **Reliable:**  based on scientific research,  verifiable, from reputable sources.
- **Nurturing body, mind and spirit:** Promoting overall health and well-being with a focus on prevention.


The main reasoning behind the creation of Zudbu is the realization that our healthcare spend is too high  and in the wrong place  (i.e. healing preventable diseases or ailments).  For perspective, according to Forbes, the annual US. Healthcare Spend has hit [$3.8 Trillion](http://www.forbes.com/sites/danmunro/2014/02/02/annual-u-s-healthcare-spending-hits-3-8-trillion/). The larger issue is that health outcomes are not in line with the spend, with the [US ranking last](http://www.forbes.com/sites/danmunro/2014/06/16/u-s-healthcare-ranked-dead-last-compared-to-10-other-countries/) in a list of 11 developed countries.  

Zudbu is not about providing medical advice to individuals that require treatment. The goal of Zudbu is to inform those interested in  prevention activities and well-being in general. There are many internet sites that provide advice about well being, but the information they contain is not necessarily supported by evidence.  Zudbu’s intent is to fill this gap.


***

## 2. Planning Document
[P4 Gerardo Castaneda](https://docs.google.com/document/d/1rWIdzVCenmaKI4ymeBS9thRywOPw0vuIh7tHsz6Q9Qg/edit?usp=sharing)

The planning document was frequently updated while I was building this project and contains additional details about the site, testing, database tables relations, etc.  
***

## 3. Repository Location
[GitHub gc-cloud E15](https://github.com/gc-cloud/E15P4)
***

## 4. Live Site Location
The current version of Zudbu can be accessed at [p4.zudbu.com](http://p4.zudbu.com).  In the future, it will be located at [zudbu.com](http://zudbu.com)
***

## 5. Demo location
Zudbu [youtube video](https://youtu.be/0cRXNDGhfog).
***

## 6. Functionality Features
### User Experience
- Zudbu is easy to use, intuitive and accessible  
- Information is disclosed progressively, allowing readers to easily find
the depth of information they want
- The site is fully responsive and was tested on extra large and large PC screens,
tablets and phones.  The focus on responsiveness is to support easy access to
content
- Rich text editor for users with contribute access

### Authentication
- Zudbu has role based user authentication (guest, reader, administrator).  
	- **Guest role (unregistered visitors)**:  Browse site, send contact form, post anonymous comments, register
	- **Reader role (jamal@harvard.edu)**:  guest access + named comments to articles, login/logout, password reset
	- **Contributor (jill@harvard.edu)**:  reader access + create, edit and delete own articles (body, sources, pictures)


- Authentication uses custom middleware (AuthenticateContribute.php)
- Articles can only be modified or deleted by the original contributor
- Anonymous visitors have the option to register or sign-in
- Articles can be browsed by all visitors
- Visibility of menu options for Contribute, Login and Register is based on
authentication status
- Password reset functionality is available, where users receive an email with a token.  
- Contact Us forms send confirmation emails to users


### Forms
- Whenever practical, the app leverages Laravel's blade template and Laravel's Collective HTML and Form helpers
- The article create and article edit form are the main points of content management.
These forms provide the ability to dynamically add new fields. This way, the content
managers can add as many references as they wish.  This feature was achieved combiningclient side javascript with server-side php scripting.  
- The create and edit forms also provide the ability to upload images. A default
image is used if the content manager does not provide one
- Additional forms are used for login, registration, password resets, and contact us

### Eloquent
- Articles can be browsed by category (body, mind, spirit).  
- Any article can belong to multiple categories
- Users with contribute access can only edit and delete their own Articles

### Validation
- Custom validation rules and messages are coded on in ArticleRequest:
	- title => required|min:5|max:30
	- bottomline => required|max:65
	- body  => required|min:5|max:2500
	- image => mimes:jpg,jpeg,png,bmp,gif,svg
	- url => required|url

### Error handling
- Custom pages for 403, 404, 500 and 503 errors are provided
- Redirects and flash messages are used when users try to access non existing pages,
pages for which they don't have access, and pages that are not needed based on
the authentication status


### Routing Map

|PAGE PURPOSE                     | METHOD|   URL 	                      |  CONTROLLER                      |
|---------------------------------|-------|-------------------------------|----------------------------------|
| Home: basic info and navigation	| GET   | /                             |WelcomeController@index           |
| Body: physical well-being       | GET   | /body                         |ArticleController@index           |
| Mind: mental well-being    	    | GET   | /mind                         |ArticleController@index           |
| Spirit: spiritual well-being    | GET   | /spirit                       |ArticleController@index           |
| Login 	                        | GET	  | /login                        |AuthController@getLogin           |
| Login 	                        | POST	| /login                        |AuthController@postLogin          |
| Register 	                      | GET 	| /login                        |AuthController@getRegister        |
| Register 	                      | POST	| /login                        |AuthController@postRegister       |
| Logout 	                        | GET		| /logout                       |AuthController@getLogout          |
| Articles: list all articles     | GET   | /articles                     |ArticleController@index           |
| Articles: create  new article	  | GET 	| /articles/create              |ArticleController@create          |
| Articles: post new article      | POST  | /articles/create              |ArticleController@store           |
| Articles: display an article    | GET   | /articles/show/{id?}          |ArticleController@show            |
| Articles: list user articles    | GET   | /articles/edit                |ArticleController@showOwnArticles |
| Articles: modify an article     | GET   | /articles/edit/{id}           |ArticleController@edit            |
| Articles: update an article     | GET   | /articles/edit/{id}           |ArticleController@update          |
| Articles: confirm delete article| GET   | /articles/confirm-delete/{id?}|ArticleController@getConfirmDelete|
| Articles: delete an article     | GET   | /articles/delete/{id?}        |ArticleController@destroy         |
| Articles: post new comment      | GET   | /articles/comment/{id?}       |CommentController@store           |
| Sources:delete a source         | PUT  	| /articles/delete/{id?}        |SourceController@destroy          |
| About         									| GET  	| /about       									|WelcomeController@about        	 |
| Privacy         								| GET  	| /privacy        							|WelcomeController@privacy         |
| Contact        									| GET  	| /contact    									|WelcomeController@contact         |
| Contact        									| POST  | /contact        							|WelcomeController@contactConfirm  |
| Sources:delete a source         | ALL 	| /password/{*}       					|PasswordController          			 |



## 7. Database
Migration and seeding files are provided for all database tables

- #### Table name: roles
Store valid roles for users ( e.g. author, reader)

- #### Table name: users
Store users and reference to role

- #### Table name: articles
Store article content and paths to images

- #### Table name: sources
Store sources for articles

- #### Table name: comments
Description: Store comments on articles posted by users

- #### Table name: categories
Description: Store valid categories for articles ( e.g. body, mind, spirit)

- #### Table name: articles_categories
Description: Link categories  and articles

- #### Table name: password_resets
Description: Keep password reset tokens
***

## 8. Code
- All code is properly indented and well commented. If you have any concerns please let us know!
- Whenever possible, php/laravel code,  html, javascript and css are reused to avoid duplication.   

## 9. Known issues
- New dynamically generated sources not kept if validation fails in edit pages
- Incorrect flash message shows with the following sequence: edit- update - edit

***

## 10. Possible enhancements
- Icons for responsive header
- Crop images on load
- Create thumb image on load
- Add overlay for login for posting comments
- Add pics for users
- Social media integration
- Give users ability to close flash messages
***

## 11. Acknowledgements
- All mages:  - Pictures licensed [CC BY-SA 4.0](http://creativecommons.org/licenses/by-sa/4.0), via       Wikimedia Commons (except when noted)
- Zudbu's default article image by my good friend [Karen Ackles](http://kackles.deviantart.com/)
- Rich text editor from [tinyMCE](https://www.tinymce.com)
-  Footer at bottom solution inspired by [cssreset.com](http://www.cssreset.com/2010/css-tutorials/how-to-keep-footer-at-bottom-of-page-with-css/)
- email HTTP Library: Guzzlehttp 4.0
- barryvdh/laravel-debugbar and rap2hpoutre/laravel-log-viewer were invaluable during development
- Thanks to the staff and peers at CSCIE15 for their support and help with questions
