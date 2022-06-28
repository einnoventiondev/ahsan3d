<style>

        .srch{
          font-family: 'JannaRegular' !important;
        }
        .lgout{
          font-family: 'JannaRegular' !important;
        }
</style>
<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="{{route('home')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-hd.svg')}}" alt=""></a></div>
      <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('assets/images/logo/dark-logo.png')}}" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
    </div>
    <div class="left-menu-header col">
      <ul>
        <li>
          <form class="form-inline search-form">
            <div class="search-bg"><i class="fa fa-search"></i>
              <input class="form-control-plaintext srch" placeholder="ابحث هنا.....">
            </div>
          </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
        </li>
      </ul>
    </div>
   
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <!-- notifications -->
        <li class="onhover-dropdown notification-bell">
          <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
          <ul class="notification-dropdown notification-left-side onhover-show-div">
            <li> 
              @if(auth()->user()->unreadNotifications->count())
              <p class="f-w-700 mb-0">You have {{ auth()->user()->unreadNotifications->count() }} Notifications<span class="pull-right badge badge-danger badge-pill">{{ auth()->user()->unreadNotifications->count() }}</span></p>
              @endif
            </li>
            <li><a href="{{route('mark.read')}}">Mark as All Read</a></li>
            @foreach(auth()->user()->unreadNotifications as $notification)
            <li class="noti-primary">
              <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                <div class="media-body">
                  <p>{{$notification->data['data']}} </p>
                  <a href="{{ ($notification->data['med_id']==null ||$notification->data['med_id']=="") ? route('publics.show',$notification->data['pub_id']) : route('medical.show',$notification->data['med_id']) }}"><span>{{$notification->data['msg']}}</span></a>
                  <br>
                  <span>{{$notification->created_at->format('H:i:s')}}</span>
                </div>
              </div>
            </li>
            @endforeach
            @foreach(auth()->user()->readNotifications as $notification)
            <li class="noti-primary">
              <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                <div class="media-body">
                  <p>{{$notification->data['data']}} </p>
                  <a href="{{ ($notification->data['med_id']==null ||$notification->data['med_id']=="") ? route('publics.show',$notification->data['pub_id']) : route('medical.show',$notification->data['med_id']) }}"><span>{{$notification->data['msg']}}</span></a>
                  <br>
                  <span>{{$notification->created_at->format('H:i:s')}}</span>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </li>
        <!-- notifications -->
        <li class="onhover-dropdown p-0">
          <button class="btn btn-primary lgout" type="button"><a href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a></button>
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>