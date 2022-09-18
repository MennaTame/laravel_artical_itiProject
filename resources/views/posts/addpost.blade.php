<div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form class="form-horizontal" action="{{ route('post.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">New Artical</h4>
                    </div>
                    <div class="panel-body">
                        {{-- <div class="row g-2"> --}}
                        <div class="col-md">
                            <div class="form-floating">
                                <label for="floatingInputGrid">title</label>
                                <input type="text" class="form-control mb-3" id="floatingInputGrid" name="title">
                                   @if ($errors->has('title'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('title') }}</strong>
                                   </span>
                               @endif
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <label for="floatingInputGrid">Description</label>
                                <textarea type="text" class="form-control mb-3" id="floatingInputGrid" name="desc"
                                    >
                                </textarea>
                                @if ($errors->has('desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('desc') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <label for="floatingInputGrid">body</label>
                                <textarea type="text" class="form-control mb-3" id="floatingInputGrid" rows="5" name="body"
                                    >
                                </textarea>
                                @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <label for="floatingInputGrid">artical Image</label>
                                <input type="file" class="form-control" name="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="mx-5 mt-3">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>

            </form>
        </div>
    </div>
</div>
