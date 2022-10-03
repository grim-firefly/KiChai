<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Edit Labs</h1>
            </div>
            <div class="col-5">

            </div>
        </div>


        <div class="container-fluid mt-1 d-flex" style="justify-content: center;">
            <form action="{{ route('Lab.Update') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $lab->id }}">
                <x-form.inputbox value="{{ $lab->lab_no }}" name='lab_no' placeholder='Lab no'>
                </x-form.inputbox>
                <x-form.inputbox value="{{ $lab->no_of_pc }}" name='no_of_pc' placeholder='NO Of PC'>
                </x-form.inputbox>
                <x-form.inputbox value="{{ $lab->capacity }}" name='capacity' placeholder='Capacity'>
                </x-form.inputbox>

                <div class="input-box">
                    <select name="type"
                        style="display: flex; width:100%; justify-content:center;text-align:center;margin:15px 0px;">
                        <option value="Laravel" {{ $lab->type == 'Laravel' ? 'selected' : '' }}>Laravel</option>
                        <option value="React" {{ $lab->type == 'React' ? 'selected' : '' }}>React</option>
                        <option value="Vue" {{ $lab->type == 'Vue' ? 'selected' : '' }}>Vue</option>
                        <option value="Node" {{ $lab->type == 'Node' ? 'selected' : '' }}>Node</option>
                    </select>
                </div>

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
