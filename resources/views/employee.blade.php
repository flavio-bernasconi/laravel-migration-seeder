<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>
    <h1>employees</h1>
    <ul>
      @foreach ($arrEmployees as $employee)
        <li>
          <h2>
              {{ $employee -> firstname }}
              {{ $employee -> lastname }}
          </h2>
          <h4>
            {{ $employee -> jobTitle }}
          </h4>

        </li>
      @endforeach
    </ul>


  </body>
</html>
