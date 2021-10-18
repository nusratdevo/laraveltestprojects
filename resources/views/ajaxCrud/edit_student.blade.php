<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Curd Student Create</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

          
  </head>
  <body>
      <section  style="margin-top: 20px; padding: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
              
                  <form action="{{ url('student/update/') }}" id="studentForm">
                    @csrf
         <div class="card" style="margin-top: 30px">
          <div class="card-header">
            Student Add
            <a style="float: right" class="btn btn-secondary" href="{{ route('student') }}" > Back</a>
         
    </div>
            <div class="card-body">
              <input type="hidden" value="{{ $edit_student->id }}" id="">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" value="{{ $edit_student->firstname }}" id="firstname">
                  </div>
                  <div class="mb-3">
                    <label for="lastname" class="form-label">last Name</label>
                    <input type="text" class="form-control" value="{{ $edit_student->lastname }}" id="lastname">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ $edit_student->email }}" id="email">
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" value="{{ $edit_student->phone }}" id="phone">
                  </div>
                  <button type="submit" class="btn btn-secondary">Update</button>
                  
            </div>
          

        </div>
      </form> 
                  
        </div>
    </div>
        </div>
    </section>














   
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>