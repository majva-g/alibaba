@if (session()->has('success'))
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
                toastr.success('{{ session()->get('success') }}');
            }, 1000);
        });
    </script>
@endif
