@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content">
        <h5>File Connect and Create</h5>
        <div class="box">
            <div class="box-body">
                @if((int)count($fileList) === 0)
                    File empty. Click <a href="{{ route('admin.file.create') }}">here</a> to upload new file
                @else
                    <div class="col-md-12 no-padding" style="margin-bottom: 1em;">
                        <a href="{{ route('admin.file.create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Add File </a>
                    </div>
                    @foreach($fileList as $file)
                        @if($file->mime === "image/jpeg" || $file->mime === "image/png")
                            <a href="#" class="modal-file" data-file-id="{{ $file->id }}">
                                <div class="col-md-1 content-file">
                                    <img src="{{ URL('storage/app/'.$file->path) }}" class="img-responsive" alt="Test"/>
                                </div>
                            </a>
                        @elseif($file->mime === "application/pdf")
                            <a href="#" class="modal-file" data-file-id="{{ $file->id }}">
                                <div class="col-md-1 content-file">
                                    <img src="{{ URL::asset('public/assets/images/pdf-logo.png') }}" class="img-responsive"/>
                                </div>
                            </a>
                        @elseif($file->mime === "application/msword" || $file->mime === "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
                            <a href="#" class="modal-file" data-file-id="{{ $file->id }}">
                                <div class="col-md-1 content-file">
                                    <img src="{{ URL::asset('public/assets/images/word-logo.png') }}" class="img-responsive"/>
                                </div>
                            </a>
                        @elseif($file->mime === "application/vnd.ms-powerpoint" || $file->mime === "application/vnd.openxmlformats-officedocument.presentationml.presentation")
                            <a href="#" class="modal-file" data-file-id="{{ $file->id }}">
                                <div class="col-md-1 content-file">
                                    <img src="{{ URL::asset('public/assets/images/ppt-logo.png') }}" class="img-responsive"/>
                                </div>
                            </a>
                        @elseif($file->mime === "application/vnd.ms-excel" || $file->mime === "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
                            <a href="#" class="modal-file" data-file-id="{{ $file->id }}">
                                <div class="col-md-1 content-file">
                                    <img src="{{ URL::asset('public/assets/images/excel-logo.png') }}" class="img-responsive"/>
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-file" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">File Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive center-block" id="image-source" src="#"/>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>File Name</label>
                                <input type="text" id="file-name" class="form-control" placeholder="File Name"/>
                            </div>
                            <div class="form-group">
                                <a href="#" id="file-download" target="_blank">Download File</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="change-file">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection