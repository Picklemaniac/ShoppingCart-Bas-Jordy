<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shopping</title>
  </head>
  <body>
    <ul>
      @foreach ($items as $item)
        <li>{{$item->title}}</li>
      @endforeach
    </ul>
  </body>
</html>
