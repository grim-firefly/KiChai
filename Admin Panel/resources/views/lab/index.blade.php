<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Labs</h1>
            </div>
            <div class="col-5">

            </div>
        </div>




        <div class="add-new-category mb-1  " style="display:flex;">
            <a class="animate-button" href="{{route('Lab.Create')}}" style="margin-right:20px;" >
                <i class="fa-solid fa-plus"></i>
                <span class="btn-animate-top"></span>
                <span class="btn-animate-right"></span>
                <span class="btn-animate-bottom"></span>
                <span class="btn-animate-left"></span>
                <div class="btn-text"> Add</div>
            </a>
        </div>




        <div class="row">
            <table class="table border table-hover" id="category-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Lab no</th>
                        <th scope="col">No of PC</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($labList as $lab)
                        <tr>
                            <th scope="row">{{ $lab->id }}</th>
                            <td>{{ $lab->lab_no }}</td>
                            <td>{{ $lab->no_of_pc }}</td>
                            <td>{{ $lab->capacity }}</td>
                            <td>{{ $lab->type }}</td>
                            <td>
                                <div style="display: flex;">

                                    <a class="btn btn-primary btn-sm edit-btn mx-1"
                                        href="{{ route('Lab.Show', ['id' => $lab->id]) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a class="btn btn-primary btn-sm edit-btn"
                                        href="{{ route('Lab.Edit', [$lab->id]) }}">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>

                                    <form action="{{ route('Lab.Delete', [$lab->id]) }}" method="POST"
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
