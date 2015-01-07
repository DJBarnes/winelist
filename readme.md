## Overview
Winelist is a small laravel 4.0.* application that shows some of the basic functionality that can be accomplished with Laravel. The project was the result of a small set of classes I taught on the framework. It allowed students to understand MVC, and get a feel for how the components fit together.

## Technologies
### Laravel 4.0.*
The project uses Laravel 4.0.*. No other libraries were used. The main focus was on vanila laravel.

## System Overview
### Login

This version of the CAEWeb application uses the Eloquent driver, which is the Laravel default.
Navigating to the site sends users to the login page. All routes require the user to be logged in before they can access them. The default username and password that is setup by the database seeder is:

UN:admin
PW:laravel4

### Wine List

After logging in, a user is presented with the wine list. From here a user can filter the results, edit and entry, and add a new entry. Filtering is done by using the filter box at the top of the page. Autocomplete using jqueryUI is attached to every textbox for the filter. Clicking a row in the list of items will take the user to an edit page for the item. Clicking the add new button will take the user to page that looks similar to the edit page, but with no fields filled out.

#### Edit
Clicking on a row in the wine list takes the user to a detailed page that allows for the alteration of the fields of the item. There is also a save button that will save the item to the database. I was going to add a delete button to this page as well so that an item could be deleted, but we did not have time to add it. Something for a future release.

#### Add New
Clicking add new presents the user with a form to fill in the Item Number, Name, Slot Location, and Pack Size. Once filled out clicking the Add button will add the new item to the database.

#### Logout
Clicking this button will cause the logged in user to become logged out.

## Installation

To install this application you can folllow the following instructions:
  1. clone or download the repository.
  2. Make sure that the web root for your domain points to the public folder of laravel. The public folder is the entry point for the application.
  3. Run 'composer install' using [Composer](https://getcomposer.org)
  4. Create the database that will be used for the application.
  5. Edit database.php in app/config/ and provide the database name and connection parameters.
  6. Run the migrations and seeds provided in the project. See the database section for more info.
  7. If all went well, you should be done.

## Database Information
### Database Name
By default the name of the database is: 

wine

This can easily be changed if needed in the database.php file located under the app/config/ directory.

### Notes:

* There are many more tables here than what is needed for this demo. The plan was to create a much larger application to showcase laravel, but there was not time to do so. 
* Most of these id fields are not an auto incrementing id. This is because the real project that this demo is based on did not have auto incrementing id's. The items used in the demo already had id's that the company was using, and so those had to be chosen over auto incrementing ones. It should also be noted that varchar had to be used instead of ints because thier existing id system included characters.

### Tables

All of the table structure has been listed below for reference. Tables can be created and seeded using the artisan commands provided by Laravel. All of the migrations and seeds are already created, but the commands to run them needs to be issued. For instructions on how to do this, refer to the [Laravel](http://laravel.com/docs/4.0/migrations) site.

#### backstock

| Field               | Type             | Null | Key | Default             | Extra        |
|---------------------|------------------|------|-----|---------------------|--------------|
| id                  | varchar(10)      | NO   |PRI  | NULL                |              |
| created_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |              |
| updated_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |              |

#### item

| Field               | Type             | Null | Key | Default             | Extra          |
|---------------------|------------------|------|-----|---------------------|----------------|
| id                  | varchar(10)      | NO   | PRI | NULL                |                |
| name                | varchar(80)      | NO   |     | NULL                |                |
| slot_location       | varchar(8)       | NO   |     | NULL                |                |
| pack                | varchar(20)      | NO   |     | NULL                |                |
| created_at          | timestamp        | NO   |     | NULL                |                |
| updated_at          | timestamp        | NO   |     | NULL                |                |

#### item_backstock

| Field               | Type             | Null | Key | Default             | Extra          |
|---------------------|------------------|------|-----|---------------------|----------------|
| item_id             | varchar(255)     | NO   | PRI | NULL                |                |
| backstock_id        | varchar(10)      | NO   | PRI | NULL                |                |
| quantity            | int(11)          | NO   |     | NULL                |                |
| receive_date        | datetime         | NO   |     | NULL                |                |
| created_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| updated_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |


#### log

| Field               | Type             | Null | Key | Default             | Extra          |
|---------------------|------------------|------|-----|---------------------|----------------|
| id                  | int(10) unsigned | NO   | PRI | NULL                | auto_increment |
| item_id             | varchar(10)      | NO   |     | NULL                |                |
| item_name           | varchar(80)      | NO   |     | NULL                |                |
| item_pack           | varchar(10)      | NO   |     | NULL                |                |
| move_type           | varchar(30)      | NO   |     | NULL                |                |
| user_id             | int(10) unsigned | NO   | MUL | NULL                |                |
| from_location       | varchar(20)      | NO   |     | NULL                |                |
| to_location         | varchar(20)      | NO   |     | NULL                |                |
| quantity            | int(11)          | NO   |     | NULL                |                |
| created_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| updated_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |

#### migrations

| Field               | Type             | Null | Key | Default             | Extra          |
|---------------------|------------------|------|-----|---------------------|----------------|
| migration           | varchar(255)     | NO   |     | NULL                |                | 
| batch               | int(11)          | NO   |     | NULL                |                |

#### user_level

| Field               | Type             | Null | Key | Default             | Extra          |
|---------------------|------------------|------|-----|---------------------|----------------|
| id                  | int(10) unsigned | NO   | PRI | NULL                | auto_increment |
| name                | varchar(20)      | NO   |     | NULL                |                |
| created_at          | timestamp        | NO   |     | NULL                |                |
| updated_at          | timestammp       | NO   |     | NULL                |                |

#### users

| Field               | Type             | Null | Key | Default             | Extra          |
|---------------------|------------------|------|-----|---------------------|----------------|
| id                  | int(10) unsigned | NO   | PRI | NULL                | auto_increment |
| name                | varchar(80)      | NO   |     | NULL                |                |
| username            | varchar(20)      | NO   |     | NULL                |                |
| password            | varchar(60)      | NO   |     | NULL                |                |
| remember_token      | varchar(100)     | NO   |     | NULL                |                |
| user_level_id       | int(10) unsigned | NO   | MUL | NULL                |                |
| created_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| updated_at          | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| deleted_at          | timestamp        | YES  |     | NULL                |                |
