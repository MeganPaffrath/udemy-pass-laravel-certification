# Routing

- [Back to Root](../README.md)

## About ROuting

- Files withing `./routes/` file
  - `api.php` - used for stateless interactions
  - `web.php` - used for general web interface

# Available router methods

- Know these
  - get : to read
  - post : to create
  - put : to update / replace
  - patch : to update / modify
  - delete : remove
  - options : allows settings of headers

```
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
```

- [Form method spoofing](https://laravel.com/docs/9.x/routing#form-method-spoofing)
- [CSRF Protection](https://laravel.com/docs/9.x/csrf)
  - prevent other websites from making form post via request

# Parameters & Optional Parameters

```
Route::get('/name/{name}', function($name) {
    return 'Hello there ' . $name . '.';
});


// with optionals
Route::get('/animal/{animal?}', function($animal = null) {
    if (!is_null($animal)) {
        return 'Animal entered: ' . $animal . '.';
    }
    return 'No animal entered';
});
```

# Regular expression constrains

Within `RouteServiceProvider`:

```
    public function boot()
    {
        Route::pattern('id', '[0-9]+');
```

Within `web.php`:

```
Route::get('/user/{id?}', function($id = null) {
    if (!is_null($id)) {
        return 'user id: ' . $id;
    }
    return 'no user found.';
});

``
```
