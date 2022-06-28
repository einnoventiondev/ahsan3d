<div id="identityModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Signature and Confirmation of identity</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('identity') }}" method="post">
                @csrf
                <input type="hidden" name="invoice_id" value="{{ $invoice->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}" >
                <div class="modal-body">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="col">
                        <div class="mb-3">
                            <small id="helpId" class="text-muted">Name</small>
                            <input type="text" disabled value="{{ $user->name }}" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-3">

                            <small id="helpId" class="text-muted">Email</small>
                            <input type="text" disabled value="{{ $user->email }}" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>
                    </div>
                    <div id="sig" ></div>
                    <br/>
                    <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                    <textarea id="signature64" name="signed" style="display: none"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light">
                        Cancel
                    </button>
                    <input type="submit" class="btn bg-success" value="Sign">
                </div>
            </form>
        </div>
    </div>
</div>