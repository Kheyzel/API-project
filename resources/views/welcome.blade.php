<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- Bootstrap --}}
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-6 my-5">
                    <table class="table table-success table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student['id']}}</td>
                                    <td>{{$student['name']}}</td>
                                    <td>{{$student['grade']}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary justify-content-end"  href="{{route('student.edit', $student)}}">Edit</a>    
                                    </td>
                                    <td>      
                                        <form action="{{ route('student.destroy', $student) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="container col-12 my-2">
                    <h3 class="py-3 text-center">ADD NEW STUDENT</h3>
                <div class="col-12">

                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        {{-- <input type="text" name="name">
                        <input type="text" name="grade"> --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name">
                            <label for="name">Name</label>
                          </div>
                          <div class="form-floating">
                            <input type="text" class="form-control" id="grade" name="grade" placeholder="grade">
                            <label for="grade">Grade</label>
                          </div>
                        <button type="submit" class="btn btn-md btn-primary mt-3">Save</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
