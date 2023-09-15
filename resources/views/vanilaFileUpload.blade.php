<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                            Laravel 10 Dropzone Multiple Image Upload Example - Laravelia
                        </div>
                         <div class="card-body">                    
                            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="dropzone">
                                    <input type="file" name="files[]" multiple />
                                    <p id="fileName"></p>
                                </div>

                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
  
  Dropzone.options.myDropzone = {
    url: '/upload',

    // This event will be fired when a file is added to the Dropzone.
    addedfile: function(file) {
        // Get the file object.
        var fileName = file.name;

        // Display the file name in the view.
        $('#fileName').text(fileName);
    }
};

    // Dropzone.options.documentDropzone = {
    //     url: "{{ route('uploads') }}",
    //     autoProcessQueue: false,
    //     uploadMultiple: true,
    //     parallelUploads: 100,
    //     addRemoveLinks: true,
    //     headers: {
    //         'X-CSRF-TOKEN': "{{ csrf_token() }}"
    //     },
    //     init: function () {
    //         var myDropzone = this;
    //         // this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
    //         //     e.preventDefault();
    //         //     e.stopPropagation();
    //         //     myDropzone.processQueue();
    //         // });
    //     }
    // }
</script>
</body>

</html>
