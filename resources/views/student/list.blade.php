<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between mb-3">
            <h2>Student List</h2>
            <a href="{{ route('student.create') }}" class="btn btn-primary">+ Create Student</a>
        </div>
        <table class="table" style="width: 85%" align="center">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date of Join</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration + ($students->currentPage() - 1) * $students->perPage() }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ Carbon\Carbon::parse($student->date_of_join)->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
        </table>
        <!-- Pagination -->
        <div class="">
            {{ $students->links() }}
        </div>
        @if($students->count()==0)
            <div class="text-center p-4">
                <img style="width: 100px;" src="{{ asset('image/sorry.svg') }}" alt="">
                <p class="mb-0">{{ 'No data to show'}}</p>
            </div>
        @endif
    </div>
</body>
</html>
