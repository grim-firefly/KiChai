<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Brands</h1>
            </div>
            <div class="col-5">

            </div>
        </div>

        <div class="add-new-category mb-1  " style="display:flex;">

            <x-common.button tag='a' url="{{ route('Brand.Create') }}" icon="fa-solid fa-plus" name="Add">
            </x-common.button>
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
                    @forelse ($brandList as $brand)
                        <tr>
                            <th scope="row">{{ $brand->id }}</th>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->created_at }}</td>
                            <td>
                                <div style="display: flex;">

                                    <a class="btn btn-primary btn-sm edit-btn mx-1"
                                        href="{{ route('Brand.Show', ['id' => $brand->id]) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a class="btn btn-primary btn-sm edit-btn"
                                        href="{{ route('Brand.Edit', [$brand->id]) }}">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>

                                    <form action="{{ route('Brand.Delete', [$brand->id]) }}" method="POST"
                                        class="mx-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>



                            </td>
                        </tr>
                    @empty
                        <h1>No Brands Found</h1>
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
