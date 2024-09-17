@extends('dashboard.app')

@section('content')
    <div class="" style="margin-inline: 1rem;"> <!--begin::Quick Example-->
        <div class="card card-primary card-outline mb-4"> <!--begin::Header-->

            <form action="/dashboard/galeri/add" method="POST" enctype="multipart/form-data">
                @csrf <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Judul</label> <input type="text"
                            required class="form-control" name="title" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="input-group mb-3"> <input required type="file" name="image" class="form-control"
                            id="inputGroupFile02">
                    </div>

                    <div id="image-container">
                        <img src="" id="news-image" alt="">
                    </div>
                </div> <!--end::Body--> <!--begin::Footer-->
                <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div>
                <!--end::Footer-->
            </form> <!--end::Form-->
        </div> <!--end::Quick Example--> <!--begin::Input Group-->
    </div>


    <style>
        #image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            /* Full width container */
            height: 300px;
            margin-top: 20px;
        }

        #news-image {
            max-width: 100%;
            /* Ensure the image scales responsively */
            height: 300px;
            /* Maintain aspect ratio */
            object-fit: contain;
            /* Prevent cropping of the image */
        }
    </style>
    <script>
        document.getElementById('inputGroupFile02').addEventListener('change', function(event) {
            const file = event.target.files[0]; // Get the selected file
            const reader = new FileReader(); // Create a FileReader to read the file

            // When the file is loaded, set it as the src for the image
            reader.onload = function(e) {
                document.getElementById('news-image').src = e.target.result;
            }

            // If a file is selected, read it as a data URL
            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>
 @endsection
