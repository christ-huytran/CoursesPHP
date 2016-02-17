<html>
<head>
  <title>Courses</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-8 col-sm-offset-2'>
        <h3>Are you sure you want to delete the following course?</h3>
        <p>Name: <?= $course['course'] ?></p>
        <p>Description: <?= $course['description'] ?></p>
        <form action="/courses/delete/<?= $course['id'] ?>" method="post">
          <div class="form-group">
            <a href="/" class="btn btn-primary">No</a>
          </div>
          <button type="submit" class="btn btn-danger">Yes, I want to delete this course.</button>
        </form>

      </div>
    </div>
  </div>
</body>
</html>