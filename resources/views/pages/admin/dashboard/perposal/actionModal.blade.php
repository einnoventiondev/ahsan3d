<div id="actionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Title</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link text-black active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">عرض سعر</button>
                        <button class="nav-link text-black" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">التعليقات</button>
                    </div>
                </nav>
                <div class="tab-content pt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="col-12 d-flex">
                            <div class="col-6">
                                <a href="{{ route('purposal',$invoice->id) }}"  target="_blank" class="btn btn-sm btn-light">View</a>
                                <a href="{{ route('purposal.pdf',$invoice->id) }}" class="btn btn-sm btn-light">PDF</a>
                                <a  class="btn btn-sm btn-light">Convert</a>
                                <a href="{{ route('sendViaMail',$invoice->order_id) }}"  class="btn btn-sm btn-light">Mail</a>
            
                            </div>
          
                            <div class="col-6">
                                @if($invoice->assigned==0)
                                    <button type="button" class="btn btn-danger">Not Accepted</button>
                                @else
                                    <button type="button" class="btn btn-success">Accepted</button>
                                @endif
                               
                            </div>
                        </div>

                       
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2
                        {{-- @if($invoice->comments==1) --}}
                        @livewire('chats',['user_id' =>
                        $invoice->user_id,'request_id'=>$invoice->order_id,'request_type'=>'App\Models\Medical']))
                        {{-- @endif --}}
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                Footer
            </div>
        </div>
    </div>
</div>