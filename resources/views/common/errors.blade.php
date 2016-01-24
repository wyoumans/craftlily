@if (count($errors) > 0)
  <!-- Form Error List -->
  <div class="alert alert-danger">
    <strong>Please correct the following errors:</strong>

    <br>

    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
