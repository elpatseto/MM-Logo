<!DOCTYPE html>
<html>
<head>
    <title>Create Logo Task</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="text-center">Create Logo MM </h1>
<hr>
<div class="container">
    <form method="post">
        <div class="for-group text-center">
            <label>Insert odd numbers between 3 and 10 000!</label>
            <input type="text" name="number" class="form-control input-number">
        </div>
        <div class="for-group">
            <button class="btn btn-primary">GO</button>
        </div>
    </form>
</div>

<div class="write-here text-center">
    <?php include 'create_logo.php'; ?>
</div>
</body>
</html>
