<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Bootstrap Css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    {{-- Fontawesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   

    <title>@yield('title', 'CRUD')</title>
  </head>
  <body>
    {{-- Login --}}
    @yield('login')
    
    {{-- Header --}}
    @yield('header')

  

    {{-- Authentication --}}
    @yield('content')

    {{-- TableBlade --}}
    @yield('employeeTable')

    {{-- CreateBlade --}}
    @yield('employeeCreate')

    {{-- ShowBlade --}}
    @yield('employeeShow')

    {{-- EditBlade --}}
    @yield('employeeEdit')


    
    {{-- Bootstrap Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


  </body>
</html>