
<x-app-layout>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<style>
    @media (min-width: 768px) {
    .navbar-nav {
        float: right !important;
    }
}
</style>

    <div class="container">
    <h3 align="center">Compose Email</h3><br>
<div class="row">
    <div class="col-md-12">
    <form method="post">
                                            @csrf
                                            <textarea id="summernote" name="editordata">
                                                {{$message}}
                                            </textarea>
                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancel</button>
                                            <button class="btn btn-info"><i class="bi bi-send"></i> Send</button>
                                            </form>
    </div>
   
</div>
</div>
    
                                            
    
</x-app-layout>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote({
    height:300
  });
});
</script>