# laravel_template_structur


#### Assest
```
``` 
```php
// public/admin/plugin/.......
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
```

#### Layout Master Template

- Setup Master

```php
// resources/views/layouts/master.blade.php

<html>
    @include('layouts.partials.head')
    <body>
        @include('layouts.partials.aside')
 
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.partials.js')
    </body>
</html>
```

```php
// resources/views/layouts/partials/aside.blade.php

<p>aside</p>
```

```php
// resources/views/layouts/partials/head.blade.php

<head>
    <title>App Name - @yield('title')</title>
</head>
```

```php
// resources/views/layouts/partials/js.blade.php

<script></script>
```

- Use Master

```php
// resources/views/some_view.blade.php

@extends('layouts.master')
 
@section('title', 'Page Title')
 
@section('content')
    <p>This is my body content.</p>
@stop
```

- Call Master

```php
Route::get('/some_view', function () {
    return view('some_view');
});
```

- Test Master

```
http://localhost:8000/some_view
```

---

```
Copyright 2022 M. Fadli Zein
```
