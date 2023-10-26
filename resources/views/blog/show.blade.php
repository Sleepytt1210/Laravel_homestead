@extends('layouts.lr-cards')

@section('title', 'Blog 1')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/markdown.css') }}">
    <style>
        .replay:last-child {
            border-bottom: none !important;
        }
    </style>
@endsection

@section('left-card')
    <div class="card">
        <div class="card-body">
            <h3 class="font-weight-light text-center mb-3">How to Laravel</h3>
            <div class="text-center fs-14 text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                    class="bi bi-calendar4-event" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                </svg>
                <span class="mr-2">5 months ago</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-eye"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
                <span class="mr-2">420</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                    class="bi bi-chat-dots" viewBox="0 0 16 16">
                    <path
                        d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    <path
                        d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                </svg>
                <span class="mr-2">1</span>
            </div>
            <hr>
            <div class="markdown" id="content">

            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header bg-white fs-16">
            Reply Counts
        </div>
        <div class="card-body">
            <div class="media mb-3 border-bottom pb-3 replay">
                <img class="rounded-circle mr-3" width="50" height="50" src="/img/avatar_placeholder_400x400.jpg"
                    alt="avatar-placeholder">
                <div class="media-body">
                    <h5 class="mt-0">Media heading</h5>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body pb-2">
            <div class="alert alert-warning" role="alert">
                You are not logged in, please log in to continue!
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm py-1 px-4 ml-3">Log in now</a>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body pb-2">
            <form action="">
                <div class="form-group">
                    <textarea class="form-control" name="comment" id="exampleTextAreaFormControl" cols="30" rows="5"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-sm px-5">Comment</button>
                </div>
            </form>
        </div>
    </div>

    <div id="markdown" style="display: none">{{ '
## About this project

This project is a demo web application built on Laravel. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Files
- [PHP tests config file](phpunit.xml)
- [NPM Dependencies](package.json)
- [PHP Dependencies](composer.json) 
  - Use `composer update` to update packages based on [composer.json](composer.json), and updates in [composer.lock](composer.lock).
- [PHP Dependencies (version LOCKED)](composer.lock)
  - Use `composer install` to install packages based on this file.
- [Vendor - PHP packages (like node module)](vendor/)
- [Artisan - Laravel console CLI](artisan)
  - Use `php artisan` for more details
- [Application Configurations](.env.example)
  - The actual *.env* file should not be exposed

## Simple Authentication
Using the official [Laravel Breeze](https://github.com/laravel/breeze) package, we can implement authentication features, from login, registration, password reset to email verification and password confirmation.

Installation, go to the application root folder or where the *composer.json* file resides. Execute the following command.

```sh
composer require laravel/breeze --dev
```

Once finished, we should see "laravel/breeze" being added in *composer.json*.
```json
    "require-dev": {
        "fakerphp/faker": "^1.9.1",
        "laravel/breeze": "^1.25",
        "laravel/pint": "^1.0",
        "laravel/sail": "^1.18",
        "mockery/mockery": "^1.4.4",
        "nunomaduro/collision": "^7.0",
        "phpunit/phpunit": "^10.1",
        "spatie/laravel-ignition": "^2.0"
    },
```
Next, we should run `breeze:install` command of *artisan*.

```sh
php artisan breeze:install
```

There will be many changes made on the existing files, along with some new files created.

For instance,
- [Tailwind css config](tailwind.config.js) is the configuration file for the tailwind CSS framework.
- [Postcss config](postcss.config.js) is the configuration file for postcss tool that transforms styles using JS plugins.
- [Auth views](resources/views/auth/) stores the views for authentication related actions like login, registration...
- [Auth routes](auth.php) implements the routing logic for authentication related actions.

![Alt text](doc-img/login-reg-button.png)

Before we can use the authentication services, we must ensure the database is running. We can easily do this by running the command `php artisan migrate`.

**Note**: Make sure *a mysql server* is running and *php-mysql* is installed in the machine.

In this project, a mysql server was configured using [docker-compose.yaml](docker-compose.yaml).

```sh
docker compose up

# sudo apt-get install php<version>-mysql
sudo apt-get install php8.1-mysql
```

Also, ensure that the database configuration in the [.env](.env) file is correctly provided. Now run 

```sh
php artisan migrate
```

to create tables.

More information about migration, refer here [Database: Migrations - Laravel 10.x - The PHP Framework For Web Artisans](https://laravel.com/docs/10.x/migrations). In short, we can create other migrations using 

`php artisan make:migration create_tablename_table`, which will create a corresponding file at `database/migrations`.

## MVC Pattern

Laravel uses the Model-View-Controller (MVC) architecture pattern to manage data access control.

- **View**: The user interface part that renders based on the current model\'s state. It can also work as an interface to update or add new data to the models.

- **Controller**: A controller is the brain that connects the model and view. It handles requests and data flow. It can control what data is returned to the view or what actions are to be performed on the data before rendering or storage. For example, data validation or sanitisation.

- **Model**: Where the controller gets its data from. Usually performs the MYSQL CRUD. In Laravel, any class that extends `Model` will automatically match with a table named after the class name in plural form. It can also be explicitly defined using the `table` property of the class.

  ```php

  class Order extends Model {
      protected $table = \'user_order\'
  }

  ```


### SQL Query

Using the `Illuminate\Support\Facades\DB` library, we can perform SQL queries by passing statements to the provided functions.

For example, a simple select query

```php

# fetch all users
$users = DB::select("select * from users");

```

To query with conditions, remember to use binding to prevent SQLi attack.

```php

# find user by name
$users = DB::select("select * from users where name=?", ["jason"]);

```

For insertion, use the `insert` function and similarly we can use binding to put variables into the statement safely.

```php

# insert a new user
id = 1;
name = "Jim"
$success = DB::insert("insert into users (id, name) values (?, ?)", [id, name]);

# $success will return true if insert has no errors

```

Another way to perform SQL queries to use the `table` function.

```php

# Retrieving all user records
$users = DB::table(\'users\')->get();
# To select columns
$users = DB::table(\'users\')->get(["name, email"]);
# Where condition
$users = DB::table(\'users\')->where(\'name\', \'=\', \'Dylon Wong Chung Yee\')->get(["name", "email"]);
# Get first user
$users = DB::table(\'users\')->first();
# Find by id
$users = DB::table(\'users\')->find(1);
# Chunking system...

```

This omits the need to write the SQL statement every time.

To learn more about SQL querying in Laravel, refer to [Database: Query Builder - Laravel 10.x - The PHP Framework For Web Artisans](https://laravel.com/docs/10.x/queries)

### Eloquent ORM

Laravel also includes Eloquent, which is an object-relational mapper (ORM). For example, the User class that extends the Model class inherited SQL functions. 

```php

$users = User::create([
    "name" => \'Yu Cheng\',
    "email"=> \'ycjoker@gmail.com\',
    "password"=> \'1D0Nt@know!\',
]);

# To update a user, the user object must be retrieved first
$user = User::where(\'email\', \'ycjoker@gmail.com\')->first();
$user.update([
    \'email\' => \'jokeryc@gmail.com\',
]);

# Update using save
$user = User::where(\'email\', \'ycjoker@gmail.com\')->first();
$user->\'email\' = \'jokeryc@gmail.com\';
$user->save();

# Same goes for delete
$user = User::find(2);
$user.delete()

```

The created user will be returned in the `attributes` and `original` field of `$users`.

By using ORM, we can have more flexible control over the table and models. For instance, we can specify to generate UUID for the id field, specify other primary keys and manage timestamp...

#### Mutator/Cast

Eloquent allows mutating a value before committing changes to the database or after retrieving from the database. This is extremely useful when we want to perform actions like type casting, password hashing, or any form of manipulation.

This can be done by creating a protected class method with the same name as the target column. 

```php

use Illuminate\Database\Eloquent\Casts\Attribute;

protected function name(): Attribute
{
    return Attribute::make(
    	get: fn (string $value) => ucfirst($value),
        set: fn (string $value) => strtolower($value)
    );
}

protected function password(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => bcrypt($value)
        );
    }

```

By creating the following user,

```php

$user = User::create([
    "name" => "yu Cheng",
    "email" => "ycjoker@gmail.com",
    "password" => \'!D0ntKn0w\',
]);

```

![mutator-result](doc-img/mutator.png)

We got the above result. Notice that the name is lowercase where the password is encrypted.

#### Mass Assignment & CSRF

A mass assignment attack occurs when an attacker can guess the pattern of the post request. Thereby, they can inject values into an object to the request to perform unauthorised changes to a record in the database.

For instance, say a User model below has an `$isAdmin` field. 

```php

class User extends Model {
    private $name;
    private $email;
    private $isAdmin;
}

```

Although the form does not include an input field for `$isAdmin`, the attacker may figure out the existence of this field and explicitly insert the `isAdmin=true` via request interception.

```http

name=bob&email=bob@gmail.com&isAdmin=true

```

This could cause the value of `$isAdmin` field being assigned true during model creation.

To prevent this, include either `fillable` or `guarded` to white list or black list the fields respectively. Then, use `create` or `update` to ensure the protection are provided instead of `save`. 

To prevent Cross-Site Request Forgery (CSRF) attack, use the `@csrf` decorator which will generate a hidden input to generate a *csrf token* to validate the form submission. 

```php+HTML

<form>
    @csrf
</form>

```

## Form Control

To control where the form submission goes to, we must create the corresponding route and controller.

###  Route

In [web.php](web.php), add a new route:

```php

Route::patch(\'/profile/avatar\', [AvatarController::class, \'update\'])->name(\'profile.avatar\');

```

### Controller

We can quickly create a controller using artisan.

```sh

php artisan make:controller AvatarController

```

In the controller, we create the `update` function as we have provided to the route.

```php

    /**
     * Update the user\'s avatar.
     */
    public function update(UpdateAvatarRequest $request): RedirectResponse
    {
        $file = $request->file(\'avatar\'); # To get the file data from the \'avatar\' input field
        return redirect(route(\'profile.edit\'))->with(\'status\', \'avatar-updated\');
    }

```

This function will redirect the view back to a route named `profile.edit` after successful request.

### Request

Similarly, we can create a Request object to authorise or validate the submitted form data. In this case,  we want the avatar to be `required` and an `image` object.

We can create a Request Class using `artisan make`

```sh

php artisan make:request UpdateAvatarRequest

```

Then, add rules to validate the data.

```php

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            \'required\', \'image\' # This field is required and must be an image
        ];
    }

```
' }}
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/showdown.min.js') }}"></script>
    <script src="{{ asset('js/showdown-table.min.js') }}"></script>
    <script type="text/javascript">
        function convert() {
            var text = $('#markdown').html();
            console.log(text);
            var converter = new showdown.Converter({extensions: ['table']});
            var html = converter.makeHtml(text);
            $('#content').html(html);
            $('#content > table').addClass('table table-bordered');
        }
        convert()
    </script>
@endsection