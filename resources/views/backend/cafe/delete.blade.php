@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>Cafe <small>Create New</small></h1>
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('admin.cafe.delete.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="cafeId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($cafeData->id)}}"/>
                    <p>Apakah anda yakin untuk menghapus data cafe dengan nama <b>{{ $cafeData->name }}</b></p>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.cafe') }}" class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection