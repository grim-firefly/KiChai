@extends('layout.app')


<!-- =================Main Body====================== -->

@section('main_content')
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Category</h1>
            </div>
            <div class="col-5">

            </div>
        </div>


        <div class="container-fluid mt-1">

            <!-- ================add modal starts===================== -->
            <div class="modal fade" id="add-category" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Category</h5>
                            <button type="button" class="btn-close modal-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="input-box">
                                    <input placeholder="Category Name" type="text" name="search"
                                        class="input-box-input" />
                                    <span class="line"></span>


                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-success">Save
             changes</button> -->
                            <button class="animate-button" data-bs-toggle="modal" data-bs-target="#add-category"
                                data-bs-dismiss="modal">
                                <i class="fa-solid fa-floppy-disk"></i>
                                <span class="btn-animate-top"></span>
                                <span class="btn-animate-right"></span>
                                <span class="btn-animate-bottom"></span>
                                <span class="btn-animate-left"></span>
                                <div class="btn-text"> Save</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================add modal ends===================== -->


            <!-- ================Edit modal starts===================== -->
            <div class="modal fade" id="edit-category" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                            <button type="button" class="btn-close modal-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="input-box">
                                    <input placeholder="Category Name" type="text" name="search"
                                        class="input-box-input" />
                                    <span class="line"></span>


                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-success">Save
             changes</button> -->
                            <button class="animate-button" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <i class="fa-solid fa-floppy-disk"></i>
                                <span class="btn-animate-top"></span>
                                <span class="btn-animate-right"></span>
                                <span class="btn-animate-bottom"></span>
                                <span class="btn-animate-left"></span>
                                <div class="btn-text"> Save</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================Edit modal ends===================== -->


            <div class="add-new-category mb-1">
                <button class="animate-button" data-bs-toggle="modal" data-bs-target="#add-category">
                    <i class="fa-solid fa-plus"></i>
                    <span class="btn-animate-top"></span>
                    <span class="btn-animate-right"></span>
                    <span class="btn-animate-bottom"></span>
                    <span class="btn-animate-left"></span>
                    <div class="btn-text"> Add</div>
                </button>
            </div>
            <div class="row">
                <table class="table border table-hover" id="category-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-category">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-category">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-category">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-category">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
@section('Script')

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
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });
        });

    });
</script>
@endsection