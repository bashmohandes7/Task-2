<div class="modal fade" id="ModalView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Post Info</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Post Title:-</h5>
                        <p class="card-text">{{ $post->title }}</p>
                        <h5 class="card-title">Post Description:-</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <h5 class="card-title">Posted By:-</h5>
                        <p class="card-text">{{ $post->user->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
