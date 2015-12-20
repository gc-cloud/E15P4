# CSCIE15 Project - P4 ZUDBU
## 1. Summary
**Zudbu** is dedicated to providing reliable information to people interested in nurturing their body, mind and spirit.
- Reliable:  based on scientific research,  verifiable, from reputable sources.
- Nurturing body, mind and spirit: Promoting overall health and well-being with a focus on prevention.


The main reasoning behind the creation of Zudbu is the realization that our healthcare spend is too much and in the wrong place  (i.e., healing preventable diseases or ailments).  For perspective, according to Forbes, the annual US. Healthcare Spend has hit [$3.8 Trillion](http://www.forbes.com/sites/danmunro/2014/02/02/annual-u-s-healthcare-spending-hits-3-8-trillion/). The larger issue is that health outcomes are not in line with the spend, with the [US ranking last](http://www.forbes.com/sites/danmunro/2014/06/16/u-s-healthcare-ranked-dead-last-compared-to-10-other-countries/) in a list of 11 developed countries.  

Zudbu is not about providing medical advice to individuals that require treatment. The goal of Zudbu is to inform those interested in  prevention activities and well-being in general. There are many internet sites that provide advice about well being, but the information they contain is simply not supported by evidence.  Zudbu’s intent is to fill this gap.


***

## 2. Planning Document
[P4 Gerardo Castaneda](https://docs.google.com/document/d/1rWIdzVCenmaKI4ymeBS9thRywOPw0vuIh7tHsz6Q9Qg/edit?usp=sharing)
***

## 3. Repository Location
[GitHub gc-cloud E15](https://github.com/gc-cloud/E15P4)
***

## 4. Live Site Location
The current version of Zudbu can be accessed at [p4.zudbu.com](http://p4.zudbu.com).  In the future, it will be located at [zudbu.com](http://zudbu.com)
***

## 5. Demo location
Zudbu [youtube video](https://youtu.be/AZXvgetbxvw).
***

## 6. Functionality Features
### User Experience
- Zudbu should be easy to use, intuitive and accessible  
- Information will be disclosed progressively, allowing readers to easily find the depth of information they want
***

### Authentication
- Role based user authentication: guest, reader, contributor.  Rules stored
in custom middleware (AuthenticateContribute)
	- jill@harvard.edu: Admin role.  Can create, edit and delete own articles
	- jamal@harvard.edu: Reader role.  Can poset named comments to articles
	- Unregistered visitors: Guest role.  Can post Guest comments to articles
- Articles can only be modified or deleted by the original contributor
- Anonymous visitors have the option to register or sign-in
- Articles can be browsed by all visitors
- Visibility of menu options for Contribute, Login and Register is based on authentication status


### Forms
- Whenever possible, the app leverages Laravel's blade template and LAravel Collective
HTML helpers
- The article create and article edit form
- Ability to upload images, default image provided

### Eloquent
- Articles can be browsed by category (body, mind, spirit).  
- One article can belong to multiple
categories
- Users with admin access can edit and delete their own Articles

### Validation
- Custom validation rules and messages included in ArticleRequest:
	- title => required|min:5|max:30
	- bottomline => required|max:65
	- body  => required|min:5|max:2500
	- image => mimes:jpg,jpeg,png,bmp,gif,svg

### Error handling
- Custom pages for 403, 404, 500 and 503 errors are provided
- Redirects and flash messages when users try to access non existing pages,
pages for which they don't have access, and pages that are not needed based on
the Login status


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
| Sources:delete a source         | PUT?  | /articles/delete/{id?}        |SourceController@destroy          |


## 7. Database

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
***

## 8. Known issues
- New dynamically generated sources not kept if validation fails in edit pages
- Repeated Flash message shows with the following sequence: edit- update - edit
***

## 9. Planned future enhancements
- Icons for responsive header
- Ability to format images on load
- Ability to create thumb image on main photo load
- Add overlay login
- Pics for users
- Email for password reset
- social media integration
- Give users ability to close flash messages
- Social media sign in
***

## 10. Acknowledgements
- All mages:  - Pictures licensed [CC BY-SA 4.0](http://creativecommons.org/licenses/by-sa/4.0), via       Wikimedia Commons (except when noted)
- [Creative Commons](https://creativecommons.org/publicdomain/zero/1.0/deed.en)
- Rich text editor from [tinyMCE](https://www.tinymce.com)
- Zudbu default image by my good friend Karen Ackles
