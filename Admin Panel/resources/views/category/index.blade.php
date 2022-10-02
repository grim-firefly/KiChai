<x-master>
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
                                    id="edit-input-box-input" class="input-box-input" />
                                <span class="line"></span>


                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-success">Save
             changes</button> -->
                        <button class="animate-button " id="save-edit-info" data-bs-toggle="modal"
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
                    @forelse ($categoryList as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <div style="display: flex;">

                                    <a class="btn btn-primary btn-sm edit-btn mx-1"
                                        href="{{ route('Category.Show', ['id' => $category->id]) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a class="btn btn-primary btn-sm edit-btn" href="{{route('Category.Edit',[$category->id])}}">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>

                                    <form action="" class="mx-1">
                                        <button class="btn btn-danger btn-sm delete-btn">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>



                            </td>
                        </tr>
                    @empty
                        <h1>No Category Found</h1>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

    </div>
    <x-slot:title>
        Admin | Category
        </x-slot>
        <x-slot:scripts>
            <script>
                $(document).ready(function() {
                    // search box 
                    let node = $('#input-search-box');
                    $(node).on('focus', function() {
                        $(node).next('.line').css('left', 0);
                    }).on('focusout', function() {
                        $(node).next('.line').css('left', '-120%');

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

                });
            </script>
            </x-slot>
</x-master>
