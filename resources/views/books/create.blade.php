@extends('admin.dashboard')
@section('content')
<form method="POST" action="{{ route('books-store') }}">
    @csrf

    <div class="form-group">
        <label for="book_name" class="form-label">Book Name</label>
        <input type="text" class="form-control" id="book_name" name="book_name" required>
    </div>
    <!-- <div class="card-body">            
              <div class="form-group">
                <Strong>Avatar</Strong>
                <input type="file" placeholder="image" id="user_image" class="form-control" name="user_image">      
              </div>
            </div> -->
     <div class="form-group">
        <label for="book_image" class="form-label">Book image</label>
        <input type="file" class="form-control" id="book_image" name="book_image" placeholder="Ảnh bìa sách" required>
    </div>
    <div class="form-group">
        <label for="book_author" class="form-label">Book Author</label>
        <input type="text" class="form-control" id="book_author" name="book_author" required>
    </div>

    <div class="form-group">    
        <label for="book_type" class="form-label">Book Type</label>
        <input type="text" class="form-control" id="book_type" name="book_type" required>
    </div>

    <div class="form-group">
        <label for="book_source" class="form-label">Book Source</label>
        <input type="text" class="form-control" id="book_source" name="book_source" required>
    </div>
<!-- 
    <div class="form-group">
        <label for="book_status" class="form-label">Book Status</label>
        <select class="form-control" id="book_status" name="book_status" required>
            <option value="">Select a status</option>
            <option value="Available">Available</option>
            <option value="Unavailable">Unavailable</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="book_description" class="form-label">Book Description</label>
        <textarea class="form-control" id="book_description" name="book_description" rows="3" required></textarea>
    </div>
<!-- 
    <div class="form-group">
        <label for="book_version" class="form-label">Book Version</label>
        <input type="text" class="form-control" id="book_version" name="book_version" required>
    </div> -->

    <!-- <div class="form-group">
        <label for="book_view" class="form-label">Book View</label>
        <input type="number" class="form-control" id="book_view" name="book_view" required>
    </div> -->

    <button type="submit" class="btn btn-primary">Add Book</button>
</form>
@endsection