@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        Create New Country
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ URL("admin/country/form-create/submit") }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country" class="form-control" placeholder="Country"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection