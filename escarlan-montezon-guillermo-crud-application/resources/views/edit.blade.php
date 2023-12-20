<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <link rel="stylesheet" href="bootstrap-3.4.1/css/bootstrap.min.css">
    <script src="bootstrap-3.4.1/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.6.4.js"></script>
    <link rel="stylesheet" href="/styles/create.css">
</head>
<body>

    @if (session("msg"))
        <p class="alert-msg">{{ session("msg") }}</p>
    @endif

    <div class="container">

        <h2 class="jumbotron jumbo">Edit Student Contact</h2>

        <hr>

        <div class="form-container">
            <form method="POST" action="/update/{{ $contact->id }}">
                @csrf
                <div class="form-col1">
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    
                    <label>Student Number</label>
                    <input type="text" name="student-number" placeholder="Student No." value="{{ $contact->student_number }}" required>

                    <label>Last Name</label>
                    <input type="text" name="lastname" placeholder="Last Name" value="{{ $contact->lastname }}" required>

                    <label>First Name</label>
                    <input type="text" name="firstname" placeholder="First Name" value="{{ $contact->firstname }}" required>

                    <label>Middle Name</label>
                    <input type="text" name="middlename" placeholder="Middle Name" value="{{ $contact->middlename }}" required>

                    <label>Couse/Degree Program</label>
                    <input type="text" name="course" placeholder="Course/Degree Program" value="{{ $contact->course }}" required>
                
                    <a href="/"><span class="glyphicon glyphicon-home">&nbsp;</span>Go Back</a>
                </div>

                <div class="form-col2">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email" value="{{ $contact->email }}" required>

                    <label>Contact No.</label>
                    <input type="text" name="contact-number" placeholder="Contact No." value="{{ $contact->contact_number }}" required>

                    <label>Address</label>
                    <input type="text" name="address" placeholder="Address" value="{{ $contact->address }}" required>

                    <label>Name of Parent/Guardian</label>
                    <input type="text" name="parent" placeholder="Parent/Guardian's Name" value="{{ $contact->parent }}" required>

                    <label>Contact No. of Parent/Guardian</label>
                    <input type="text" name="parent-contact" placeholder="Contact No." value="{{ $contact->parent_contact }}" required>

                    <input type="submit" name="create-contact" value="Save Contact Info">
                </div>
            </form>
        </div>
    </div>
    

    <script>
        $(document).ready(function() {
            $(".alert-msg").fadeIn("fast", function() {
                setTimeout(() => {
                    $(".alert-msg").fadeOut("fast");
                }, 1000);
            });
        });
    </script>
</body>
</html>