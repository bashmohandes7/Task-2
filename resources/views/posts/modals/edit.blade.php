<form action="{{ route('posts.update', $post->id) }}" method="post">
    @method('PATCH')
    @csrf
    <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Post Title</strong>
                            <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description</strong>
                            <textarea name="description" cols="83" rows="6">{{ $post->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>User</strong>
                            <select name="user_id" class="form-control">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
