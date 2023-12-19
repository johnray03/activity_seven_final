<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap-3.4.1/css/bootstrap.min.css">
    <script src="bootstrap-3.4.1/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.6.4.js"></script>
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>

    @if (session("msg"))
        <p class="alert-msg">{{ session("msg") }}</p>
    @endif

    <div class="container">
        
        <h2 class="jumbotron jumbo">Student Contact Management System</h2>


        <div class="create-div">
            <a href="/create" class="create-btn" id="createBtn">Add New</a>
        </div>

        <div class="table-container">
            <table class="table table-bordered contacts-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student No.</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Degree Program/Course</th>
                        <th colspan="2"  style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 1)
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $contact->student_number }}</td>
                            <td>{{ $contact->lastname }}</td>
                            <td>{{ $contact->firstname }}</td>
                            <td>{{ $contact->middlename }}</td>
                            <td>{{ $contact->course }}</td>
                            <td style="text-align: center;"><a href="/details/{{ $contact->id }}" id="edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td style="text-align: center;"><a href="/delete/{{ $contact->id }}" id="delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                        </tr>
                        @php($count++)
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <small>John Ray C. Escarlan | Angelou T. Montezon - BSIT AI32</small>
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