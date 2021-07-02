<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
  
    <form action ="{{route('student.update', $editStudent)}}" method="post">
        {{-- <form action=""> --}}
        @csrf
        @method('PUT')
        <div class="container-fluid bg">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="form-container">
                    <div class="inside-container">
                    <h2 class="text-center"> EDIT </h2>

                  <div class="form-group">
                    <div class="form-floating my-3">
                      <input type="text" class="form-control" name="name" id="name" value="{{$editStudent['name']}}">
                      <label for="name">Email address</label>
                    </div>
                    <div class="form-floating my-3">
                      <input type="text" class="form-control" name="grade" id="grade" value="{{$editStudent['grade']}}">
                      <label for="grade">Grade</label>
                    </div>
                  </div>
                  <button type = "submit" class="btn btn-md btn-primary mt-3">Save Changes</button>

                </div>
              </div>
            </div>
          </div>
        </div>
  
      </form>
</body>
</html>

