<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Curd</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

          
  </head>
  <body>
      <section  style="margin-top: 20px; padding: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                                Student List
                                <a style="float: right" class="btn btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#studentModal"> Create</a>
                             
                        </div>
                        <div class="card-body">
                            <table id="studentTable" class=" table table-success">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                  @foreach ($students as $key => $item)
                                  <tr id="sid{{ $item->id }}">
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $item->firstname }}</td>
                                    <td>{{ $item->lastname }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                               <td> 
                                 <a class="btn btn-outline-danger" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editStudent({{ $item->id }})">Edit</a>
                                <a class="btn btn-danger" href="javascript:void(0)"   onclick="deleteStudent({{ $item->id }})">Delete</a>
                              </td>
                            </tr>
                                   @endforeach

                                </tbody>
                              </table>
                        </div>
                    </div>
                    
                </div>
            </div>
            
  
  <!-- Add Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form id="studentForm">
                            @csrf
                 <div class="card" style="margin-top: 30px">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Inter Your First Name">
                          </div>
                          <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Inter Your Last Name">
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Inter Your Email">
                          </div>
                          <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Inter Your phone">
                          </div>
                          
                          <button type="submit" class="btn btn-secondary">Submit</button>
                          
                    </div>
                </div>
              </form>  
            </div>
        </div>
      </div>
    </div>
  </div></div></div>


   <!-- Edit Modal -->
   <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <form id="editForm">
                        @csrf
             <div class="card" style="margin-top: 30px">
                <div class="card-body">
                  <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control"  id="firstname2">
                      </div>
                      <div class="mb-3">
                        <label for="lastname" class="form-label">last Name</label>
                        <input type="text" class="form-control"  id="lastname2">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email2">
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone2">
                      </div>
                      <button type="submit" class="btn btn-secondary">Update</button>
                      
                </div>
              
    
            </div>
          </form> 
            </div>
        </div>
      </div>
    </div>
  </div></div></div>
 </div> {{-- container --}}
 
 </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script>
    $("#studentForm").submit(function(e){
     e.preventDefault();
     var firstname = $('#firstname').val();
     var lastname = $('#lastname').val();
     var email = $('#email').val();
     var phone = $('#phone').val();
     var _token = $('input[name=_token]').val();

     $.ajax({
     url: "{{ route('create.student') }}",
     type:"POST" ,
     data: {firstname:firstname, lastname:lastname, email:email, phone:phone, _token:_token},
     success:function(response){
       $('#studentTable tbody').prepend('<tr><td></td><td>'+ response.firstname +'</td><td>'+ response.lastname +'</td><td>'+ response.email +'</td><td>'+ response.phone +'</td></tr>')
       $('#studentForm')[0].reset();
       $('#studentModal').modal('hide');
     }
     });
    });
    </script>
    <script>
      function editStudent(id){
        $.get(
          '/student/edit/'+id, 
          function(edit_student){
      $('#id').val(edit_student.id)
     $('#firstname2').val(edit_student.firstname);
     $('#lastname2').val(edit_student.lastname);
     $('#email2').val(edit_student.email);
     $('#phone2').val(edit_student.phone);
     $('#editModal').modal('toggle');
            });
          }

          $("#editForm").submit(function(e){
     e.preventDefault();
     var id = $('#id').val(); 
     var firstname = $('#firstname2').val();
     var lastname = $('#lastname2').val();
     var email = $('#email2').val();
     var phone = $('#phone2').val();
     var _token = $('input[name=_token]').val();

     $.ajax({
     url: "{{ route('update.student') }}",
     type:"PUT" ,
     data: {id:id,firstname:firstname, lastname:lastname, email:email, phone:phone, _token:_token},
     success:function(response){
       $('#sid'+response.id + 'td:nth-child(1)').text(response.firstname);
       $('#sid'+response.id + 'td:nth-child(2)').text(response.lastname);
       $('#sid'+response.id + 'td:nth-child(3)').text(response.email);
       $('#sid'+response.id + 'td:nth-child(4)').text(response.phone);
       $('#editForm')[0].reset();
       $('#editModal').modal('toggle');
       
     }
     });
          });

    </script>
    <script>
      function deleteStudent(id){
        if(confirm('Do you want to delete?')){
          $.ajax({
            url: 'student/delete/'+id,
            type: "DELETE",
            data: {
               _token:$('input[name=_token]').val()
            },
            success: function(response){
                 $('#sid'+id).remove();
            }
          });
        }
        }
    </script>

  </body>
</html>