<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="./assets/css/register.css" />
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .custom-alert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f0f0f0;
            padding: 70px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
    </style>

</head>

<body>
    {{-- <script>
        // This script shows the alert dialog when the registration is complete
        @if(session('registration_complete'))
            $(document).ready(function() {
                // Create the alert dialog
                var alertDiv = $('<div class="custom-alert">Registration is complete!</div>');
                $('body').append(alertDiv);

                // Ask the user for options using a confirm dialog
                var goToNewPage = confirm("Do you want to go to the new page?");
                if (goToNewPage) {
                    // Redirect to the new page
                    window.location.href = "/list";
                } else {
                    // Redirect to the homepage
                    window.location.href = "/";
                }
            });
        @endif
    </script> --}}
    @if(Session::has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Success!',
                text: '{{ Session::get('success') }}',
                icon: 'success',
                showCancelButton: true, // Add this line to show the "View" button
                confirmButtonText: 'OK',
                cancelButtonText: 'View attendees' // Set the text for the "View" button
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the home page
                    window.location.href = '/'; // Replace with your home page route
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // Redirect to the "View" page
                    window.location.href = '/list'; // Replace with the view page route
                }
            });
        });
    </script>


@endif

    <section class="container">
        <header>Registration Form</header>
        <form method="POST" action="/store" class="form">
            @csrf
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter full name" required />
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="text" id="email" name="email" placeholder="Enter email address" required />
            </div>

            <div class="input-box">
                <label>Phone Number</label>
                <input type="number" id="phone" name="phone" placeholder="Enter phone number" required />
            </div>
            {{-- <div class="input-box">
            <label>Age</label>
            <input type="number" id="age" name="age" placeholder="Age" required />
          </div> --}}

            {{-- <div class="column">
          <!-- <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div> -->
          <!-- <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div> -->
        </div> --}}
            {{-- <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div> --}}
            <button type="submit">Submit</button>
            <!-- <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" required />
          <input type="text" placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your region" required />
            <input type="number" placeholder="Enter postal code" required />
          </div>
        </div> -->

        </form>
    </section>
</body>

</html>
