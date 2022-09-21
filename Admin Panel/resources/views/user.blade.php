<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Users</h1>
            </div>
            <div class="col-5">

            </div>
        </div>


        <div class="container-fluid mt-1">



            <div class="add-new-category mb-1">

            </div>
            <div class="row">
                <table class="table border table-hover" id="user-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">username</th>
                            <th scope="col">email</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <th scope="row">1</th>
                            <td>illus1on</td>
                            <td>illus1on@gmail.com</td>
                            <td>13 Aug, 2222</td>
                            <td>


                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <button class="btn btn-warning btn-sm ban-btn">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>illus1on</td>
                            <td>illus1on@gmail.com</td>
                            <td>13 Aug, 2222</td>
                            <td>


                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <button class="btn btn-warning btn-sm ban-btn">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>illus1on</td>
                            <td>illus1on@gmail.com</td>
                            <td>13 Aug, 2222</td>
                            <td>


                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <button class="btn btn-warning btn-sm ban-btn">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>illus1on</td>
                            <td>illus1on@gmail.com</td>
                            <td>13 Aug, 2222</td>
                            <td>


                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <button class="btn btn-warning btn-sm ban-btn">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>

        </div>

    </div>
    <x-slot:title>
        Admin | User Control
        </x-slot>
        <x-slot:scripts>
            <script>
                $(document).ready(function() {
                    // search box 
                    let node = $('#input-search-box');
                    $(node).on('focus', function() {
                        $(node).next('.line').css('left', 0);
                    }).on('focusout', function() {
                        $(node).next('.line').css('left', '-100%');

                    });


                    // sidebar toggle
                    $("#sidebar-toggler-btn").on('click', function() {
                        if ($("#sidebar").css("left") == "0px") {
                            $("#sidebar").css("left", "-230px");
                            $('#sidebar-toggler-btn').css("left", "10px");
                            $('#sidebar-toggler-btn i').css("transform", "rotate(0deg)");
                            $('#sidebar-right-section').removeClass('col-md-10');
                            $('#sidebar-right-section').addClass('col-md-11');
                            $('#sidebar-left-section').removeClass('col-md-2');
                            $('#sidebar-left-section').addClass('col-md-1');
                        } else {
                            $("#sidebar").css("left", "0");
                            $('#sidebar-toggler-btn').css("left", "230px");
                            $('#sidebar-toggler-btn i').css("transform", "rotate(180deg)");

                            $('#sidebar-right-section').removeClass('col-md-11');
                            $('#sidebar-right-section').addClass('col-md-10');
                            $('#sidebar-left-section').removeClass('col-md-1');
                            $('#sidebar-left-section').addClass('col-md-2');


                        }
                    });

                    // input box 
                    $('.input-box-input').on('focus', function() {
                        $(this).next('.line').css('left', 0);
                    }).on('focusout', function() {
                        $(this).next('.line').css('left', '-100%');

                    });
                    $('.delete-btn').on('click', function() {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Deleted!',
                                    'user has been deleted.',
                                    'success'
                                )
                            }
                        });
                    });
                    $('.ban-btn').on('click', function() {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "Though , You can revert this later",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, ban this user!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'banned!',
                                    'this user has been banned.',
                                    'success'
                                )
                            }
                        });
                    });

                });
            </script>
            </x-slot>
</x-master>

