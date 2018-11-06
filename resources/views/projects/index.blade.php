<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Projects</h1>

@foreach ($projects as $project)
<li>{{ $project->title }}</li>
@endforeach

</body>
</html>
