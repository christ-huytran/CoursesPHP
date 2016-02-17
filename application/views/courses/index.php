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
        <h3>Add a new course</h3>
        <form action="/courses/create" method="post">
          <div class="form-group">
            <label for="course">Name</label>
            <input type="text" class="form-control" name="course" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>      
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h3>Courses</h3>
        <table class="table table-hover">
          <tr>
            <th>Course Name</th>
            <th>Description</th>
            <th>Date Added</th>
            <th>Action</th>
          </tr>
          <?php foreach ($courses as $course): ?>
            <tr>
              <td><?= $course['course'] ?></td>
              <td><?= $course['description'] ?></td>
              <td><?= $course['created_at'] ?></td>
              <td><a href="/courses/destroy/<?= $course['id'] ?>">Remove</a></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>