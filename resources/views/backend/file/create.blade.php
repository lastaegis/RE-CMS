@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content">
        <h5>Upload New File</h5>
        <div class="box">
            <div class="box-body">
                <form action="{{ URL('admin/file/create/submit') }}" method="POST" enctype="multipart/form-data" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="file" multiple/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection