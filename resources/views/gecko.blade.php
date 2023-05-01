@extends('welcome')

@section('scripts')
  <script>
    $(document).ready(function() {
      $('.gecko-card').click(function() {
        var description = $(this).data('description');
        $('#descriptionModal .modal-body').text(description);
        $('#descriptionModal').modal('show');
      });
    });
  </script>
@endsection
