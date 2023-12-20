@if ($errors->any())
    <script>
        $(window).on("load", function() {
            setTimeout(function() {
                toastr.options = {
                    timeOut: 3000,
                    progressBar: true,
                    showMethod: "slideDown",
                    hideMethod: "slideUp",
                    showDuration: 200,
                    hideDuration: 200,
                };
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}');
                @endforeach
            }, 1000);
        });
    </script>
@endif

@if (session()->has('error'))
    <script>
        $(window).on("load", function() {
            setTimeout(function() {
                toastr.options = {
                    timeOut: 3000,
                    progressBar: true,
                    showMethod: "slideDown",
                    hideMethod: "slideUp",
                    showDuration: 200,
                    hideDuration: 200,
                };
                toastr.error('{{ session()->get('error') }}');
            }, 1000);
        });
    </script>
@endif

