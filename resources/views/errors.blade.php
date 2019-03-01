@if($errors->any())
<div class="container alert alert-danger"  role="alert">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif