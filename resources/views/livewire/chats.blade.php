<div>
	<div class="container chat-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card chat-card mb-3 mt-4">
                    <div class="card-header">
                        @if(isset($sender)) {{$sender->name}}   @endif

                    </div>
                    <div class="card-body message-box" wire:poll="mountdata" >
                        <?php
                            $i=0; ?>
                    @if(filled($allmessages))
                        @foreach($allmessages as $key => $mgs)
<?php $i++ ?>
                                <div class="single-message @if($mgs->user_id == auth()->id()) sent @else received @endif">
                                    <p class="font-weight-bolder my-0">{{$mgs->user->name}}</p>

                                    <?php
                                        parse_str($mgs->message,$extracted);
                                        if($extracted['chatImg']==null)
                                        {
                                            echo $extracted['chatImg'].$extracted['msg'];
                                        }else{?>
                                            <img src="{{ asset('chat/'.$extracted['chatImg']) }}" width="150"/>

                                      <?php  }

                                    ?>

                                    <br><small class="text-muted w-100">Sent <em>{{$mgs->created_at}}</em></small>
                                </div>

                                @endforeach
                                @endif

                    </div>

                    <div class="card-footer">
                        <form wire:submit.prevent="SendMessage">
                            <div class="row">
                                <div class="col-md-8 col-lg-9">
                                    <input wire:model="message" style="pointer-events: unset" class="form-control input shadow-none w-100 d-inline-block" id="message" placeholder="اكتب رسالة
" >
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <!-- <button type="submit" class="btn btn-primary d-inline-block w-100"><i class="far fa-paper-plane"></i> Send</button> -->
                                    <button type="submit" class="btn btn-form btn-primary chat-submit-btn"><i class="fa fa-paper-plane"></i> يرسل</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- <input type="file" wire:model="photo" id="photo-{{ $i }}"> -->
                                <button type="button" class="btn btn-sky btn-primary chat-img-upload mt-4">
                                    دقت قلب
                                    <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                    <input type="file" wire:model="photo" id="photo-{{ $i }}">
                                </button>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
