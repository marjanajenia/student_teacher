<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
         <div class="row"style="margin:5%;text-align:center;">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Gender</label>
                <input class="form-control" type="text" name="gender" placeholder="Enter your Gender">
                 @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Address</label>
                <input class="form-control" type="text" name="address" placeholder="Enter your Address">
                 @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Phone</label>
                <input class="form-control" type="text" name="phone" placeholder="Enter your Phone num">
                 @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Date of Birth</label>
                <input class="form-control" type="date" name="dob" placeholder="Enter your date of birth">
                 @error('dob')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Date of Join</label>
                <input class="form-control" type="date" name="date_of_join" placeholder="Enter your join date">
                 @error('date_of_join')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="m-3">
            <button class="btn btn-success submit">Submit</button>
        </div>
    </div>
    </form>

</body>
</html>
