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
