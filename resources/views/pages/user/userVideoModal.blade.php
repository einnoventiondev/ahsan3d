<div class="modal fade page result video" id="userVideoModal" tabindex="-1" aria-labelledby="userVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </h1>
                            <div class="profile d-none">
                                @if(@auth()->user()->profile == null)
                                <a href="#profile">
                                    <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                </a>
                                @else
                                <a href="#profile">
                                    <img src="{{ asset(  auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    @if(@$links->youtubeurl != null)
                                    <div class="col-md-12 text-center">
                                        <iframe width="560" height="315" src="{{$links->youtubeurl}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    @else
                                    <div class="col-md-12 text-center">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rF1aUUU14rA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>