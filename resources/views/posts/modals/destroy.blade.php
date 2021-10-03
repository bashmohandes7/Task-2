<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @method('DELETE')
    @csrf
    <div class="modal fade text-left" id="ModalDelete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are You Sure You Want to Delete This Post?
                </div>
                <div class="modal-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
