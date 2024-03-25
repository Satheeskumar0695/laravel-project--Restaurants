<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
@csrf
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">image</th>


              </tr>
            </thead>
            <tbody>
                @foreach ($category as $categor )
                 <tr>
                <th scope="row">{{$categor->product_id}}</th>
                <td>{{$categor->product_name}}</td>
                <td>
                    @if ($categor->image)
                    <img src="{{asset($categor->image)}}" alt="" height="100" weight="100">
                  @endif
                </td>
                @endforeach
                 </tr>
                    </tbody>
          </table>
    </div>
</div>
</body>
</html>
