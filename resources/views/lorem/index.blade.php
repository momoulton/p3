<!doctype html>
<html>
<head>
  <title>Lorem Ipsum Generator</title>
  <meta charset='utf-8'>
  <link href="/css/p3.css" type='text/css' rel='stylesheet'>
</head>
<body>

  <header>
  </header>

  <section>
    <h1>Lorem Ipsum Generator</h1>
    <p>How many paragraphs?</p>
    <form action="/lorem-ipsum" method="post">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      Paragraphs: <input type="text" name="paragraphs">
      <br>
      <input type="submit" value="Submit">
  </section>

  <footer>
      &copy; {{ date('Y') }}
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
