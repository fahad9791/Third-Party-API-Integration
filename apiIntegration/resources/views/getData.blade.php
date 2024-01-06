<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Integration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <button class="btn btn-info"><a href="{{ route('insertData') }}">Add New Data</a></button>
    <button class="btn btn-warning"><a href="{{ route('wrongUrl') }}">Wrong URL</a></button>
    <table class="table">
        <thead>
          <tr class="table-warning">
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jsonData as $value)
            <tr>
                <td class="table-primary">{{ $value['id'] }}</td>
                <td class="table-success">{{ $value['title'] }}</td>
                <td class="table-danger">{{ $value['body'] }}</td>
                <td class="table-info"><a class="btn btn-info" href="{{ route('postView', $value['id']) }}">View</a> </td>
              </tr>
            @endforeach

        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
