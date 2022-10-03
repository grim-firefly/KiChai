<x-master>
    <div class="col-md-11" id="sidebar-right-section">
        <div class="row mt-3">
            <div class="col-4">

            </div>
            <div class="page-title col-3">
                <h1>Create Lab</h1>
            </div>
            <div class="col-5">

            </div>
        </div>


        <div class="container-fluid mt-1 d-flex" style="justify-content: center;">
            <form action="{{ route('Product.Store') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input placeholder="Lab no" type="text" name="lab_no" class="input-box-input my-2 "
                        style="width: 300px;outline:none;border-radius:10px;padding:5px 15px; border-color:#f16343;" />
                    <span class="line"></span>

                </div>
                <div class="input-box">
                    <input placeholder="no of pc" type="text" name="no_of_pc"
                        class="input-box-input my-2 "
                        style="width: 300px;outline:none;border-radius:10px;padding:5px 15px; border-color:#f16343;" />
                    <span class="line"></span>

                </div>
                <div class="input-box">
                    <input placeholder="capacity" type="text" name="capacity"
                        class="input-box-input my-2 "
                        style="width: 300px;outline:none;border-radius:10px;padding:5px 15px; border-color:#f16343;" />
                    <span class="line"></span>

                </div>
                <div class="input-box">
                    <select name="type" style="display: flex; width:100%; justify-content:center;text-align:center;margin:15px 0px;">
                            <option value="Laravel">Laravel</option>
                            <option value="React">React</option>
                            <option value="Vue">Vue</option>
                            <option value="Node">Node</option>
                    </select>
                </div>
              
                <div class="d-flex" style="justify-content: center;">
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
