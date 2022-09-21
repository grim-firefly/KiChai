@extends('layout.app')

<!-- =================sidebar Ends====================== -->


<!-- =================Main Body====================== -->
@section('main_content')
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Products</h1>
            </div>
            <div class="col-5">

            </div>
        </div>

        <div class="container-fluid mt-1">

            <!-- ================add modal starts===================== -->
            <div class="modal fade" id="add-product" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Product</h5>
                            <button type="button" class="btn-close modal-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="input-box">
                                    <input placeholder="title" type="text" class="input-box-input"
                                        name="Product-title" />
                                    <span class="line"></span>


                                </div>
                                <div class="input-box mt-3">
                                    <input placeholder="price" type="text" name="price" class="input-box-input" />
                                    <span class="line"></span>
                                </div>
                                <div class="input-box mt-3">
                                    <input placeholder="quantity" type="text" name="qty" class="input-box-input" />
                                    <span class="line"></span>
                                </div>
                                <div class="input-box mt-3">
                                    <input placeholder="product image" type="file" class="input-box-input "
                                        name="pimg" />
                                    <span class="line"></span>
                                </div>
                                <div class="input-box mt-3">
                                    <textarea type="file" class="input-box-description" name="product-description">
											product description
											</textarea>
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
            <div class="modal fade" id="edit-product" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Product</h5>
                            <button type="button" class="btn-close modal-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="input-box">
                                    <label for="Product-title">Title</label>
                                    <input placeholder="title" type="text" class="input-box-input"
                                        name="Product-title" />
                                    <span class="line"></span>


                                </div>
                                <div class="input-box mt-3">
                                    <label for="price">Price</label>

                                    <input placeholder="price" type="text" name="price" class="input-box-input" />
                                    <span class="line"></span>
                                </div>
                                <div class="input-box mt-3">
                                    <label for="qty">Quantity</label>

                                    <input placeholder="quantity" type="text" name="qty" class="input-box-input" />
                                    <span class="line"></span>
                                </div>
                                <div class="input-box mt-3">
                                    <label for="pimg">Product Image</label>

                                    <input placeholder="product image" type="file" class="input-box-input "
                                        name="pimg" />
                                    <span class="line"></span>
                                </div>
                                <div class="input-box mt-3">
                                    <label for="input-box-description">Description</label>

                                    <textarea type="file" class="input-box-description" name="product-description">
											product description
											</textarea>
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
            <!-- ================Edit modal ends===================== -->


            <div class="add-new-category mb-1">
                <button class="animate-button" data-bs-toggle="modal" data-bs-target="#add-product">
                    <i class="fa-solid fa-plus"></i>
                    <span class="btn-animate-top"></span>
                    <span class="btn-animate-right"></span>
                    <span class="btn-animate-bottom"></span>
                    <span class="btn-animate-left"></span>
                    <div class="btn-text"> Add</div>
                </button>
            </div>
            <div class="row">
                <table class="table border table-hover" id="product-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <th scope="row">1</th>
                            <td> <img class style="width: 50px; height:50px;" src="asset/images/Products/mouse.jpg"
                                    alt="product image" srcset=""> </td>
                            <td>illus1on</td>
                            <td>39,910</td>
                            <td>407</td>
                            <td>13 Aug, 2222</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-product">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <a href="product-view.html" class="btn btn-info btn-sm view-btn">
                                    <i class="fa-solid fa-eye text-white"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td> <img class style="width: 50px; height:50px;" src="asset/images/Products/mouse.jpg"
                                    alt="product image" srcset=""> </td>
                            <td>illus1on</td>
                            <td>39,910</td>
                            <td>407</td>
                            <td>13 Aug, 2222</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-product">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <a href="product-view.html" class="btn btn-info btn-sm view-btn">
                                    <i class="fa-solid fa-eye text-white"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td> <img class style="width: 50px; height:50px;" src="asset/images/Products/mouse.jpg"
                                    alt="product image" srcset=""> </td>
                            <td>illus1on</td>
                            <td>39,910</td>
                            <td>407</td>
                            <td>13 Aug, 2222</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-product">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <a href="product-view.html" class="btn btn-info btn-sm view-btn">
                                    <i class="fa-solid fa-eye text-white"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td> <img class style="width: 50px; height:50px;" src="asset/images/Products/mouse.jpg"
                                    alt="product image" srcset=""> </td>
                            <td>illus1on</td>
                            <td>39,910</td>
                            <td>407</td>
                            <td>13 Aug, 2222</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-product">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <a href="product-view.html" class="btn btn-info btn-sm view-btn">
                                    <i class="fa-solid fa-eye text-white"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td> <img class style="width: 50px; height:50px;" src="asset/images/Products/mouse.jpg"
                                    alt="product image" srcset=""> </td>
                            <td>illus1on</td>
                            <td>39,910</td>
                            <td>407</td>
                            <td>13 Aug, 2222</td>
                            <td>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit-product">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <a href="product-view.html" class="btn btn-info btn-sm view-btn">
                                    <i class="fa-solid fa-eye text-white"></i>
                                </a>

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



        $('.input-box-description').on('focus', function() {
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


    });
</script>
@endsection
