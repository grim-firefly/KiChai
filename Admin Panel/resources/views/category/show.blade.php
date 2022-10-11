<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">

            <div class="page-title">
                <h1>Product of {{ $category->name }}</h1>
            </div>
            
            <table class="table border table-hover" id="category-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">images</th>
                        <th scope="col">Product</th>
                        <th scope="col">is_active</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($category->product as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <th scope="row"><img style="height: 50px;width:80px;"
                                    src="{{ asset('product_storage/' . $product->image) }}" alt="wow" srcset="">
                            </th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->is_active ? 'Yes' : 'No' }}</td>
                            <td>
                                <div style="display: flex;">

                                    <a class="btn btn-primary btn-sm edit-btn mx-1"
                                        href="{{ route('Product.Show', ['id' => $product->id]) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a class="btn btn-primary btn-sm edit-btn"
                                        href="{{ route('Product.Edit', [$product->id]) }}">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>

                                    <form action="{{ route('Product.Delete', [$product->id]) }}" method="POST"
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
                        <tr>
                            <td colspan="5" style="text-align:center;">No Product Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>

    <x-slot:title>
        Admin | view Category
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
