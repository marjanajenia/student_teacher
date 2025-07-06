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
    <div class="container">
        <h2 class="text-center my-4">Student Registration Form</h2>
        <form action="{{ route('student.update', $student->id) }}" method="POST">
            @csrf
            <div class="row"style="margin:5%;">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter your name" value="{{ $student->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male" {{ $student->gender == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="female" {{ $student->gender == 'female' ? 'selected' : ''}}>Female</option>
                            <option value="other" {{ $student->gender == 'other' ? 'selected' : ''}}>Other</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Address</label>
                        <input class="form-control" type="text" name="address" placeholder="Enter your Address" value="{{ $student->address }}">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Phone</label>
                        <input class="form-control" type="tel" name="phone" placeholder="Enter your Phone num" value="{{ $student->phone }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Date of Birth</label>
                        <input class="form-control" type="date" name="dob" placeholder="Enter your date of birth" value="{{ $student->dob }}">
                        @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Date of Join</label>
                        <input class="form-control" type="date" name="date_of_join" placeholder="Enter your join date" value="{{ $student->date_of_join }}">
                        @error('date_of_join')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
