<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Create Color</h1>
            </div>
            <div class="col-5">

            </div>
        </div>


        @error('category')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="container-fluid mt-1 d-flex" style="justify-content: center;">


            <form action="{{ route('Color.Store') }}" method="POST">
                @csrf
                <x-form.inputbox name='name' value="{{ old('name') }}" placeholder='Color name'>
                </x-form.inputbox>
                <x-form.inputbox type="color" name='color' value="{{ old('color') }}" placeholder='Color name'>
                </x-form.inputbox>
                <select name="brand" class="my-2" style="width: 100%; height:38px;">
                @foreach ($brandList as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach    
                </select>
                <div class="d-flex" style="justify-content: center;">
                   <x-common.button icon="fa-solid fa-floppy-disk" tag="button" name="Save">
                   </x-common.button>
                </div>

            </form>
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
