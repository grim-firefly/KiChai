<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">

            <div class="col-md-10" style="overflow-x:hidden;">
                <div> 
                    <a href="{{Route('Product.pdfdownload',$product->id)}}">Download pdf</a>
                </div>
                <h1> {{ $product->title }}</h1>
                <h4>Category:{{$product->category->name}}</h4>
                <h4>Brand:{{$product->brand->name}}</h4>
                <h4>Color:{{$product->color->name}}</h4>
                <h1>{{ $product->description }}</h1>
                <div class="" style="display: flex;justify-content:center;">
                    <img style="width:100%;" src="{{ asset('product_storage/' . $product->image) }}"
                        alt="wow" srcset="">

                </div>
            </div>
        </div>


        <br>


        <x-slot:title>
            Admin | view Product
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
