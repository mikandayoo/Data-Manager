<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <title>Homepage</title>
</head>

<body>
  <header>
    <h1>Welcome to the Homepage</h1>
    <nav>
      <ul>
        <li><a href="{{ route('index.page') }}">Home</a></li>
        <li><a href="{{ route('input.page') }}">Input Page</a></li>
        <li><a href="{{ route('output.page') }}">Output Page</a></li>
      </ul>
    </nav>
  </header>

  <div class="content">
    <h1>Website Pengabdian Kepada Masyarakat</h1>
    <p>
      Project website ini bertujuan untuk membuat website pengabdian
      kepada masyarakat <br> dengan menggunakan framework Laravel.
      Kami membangun sebuah platform yang efisien dan dapat diandalkan.<br>
      Website ini dapat menyediakan informasi terkait data anggota pengabdian
      kepada masyarakat
    </p>
  </div>
</body>

</html>