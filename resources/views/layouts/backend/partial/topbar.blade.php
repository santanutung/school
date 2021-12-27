<div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
    <div class="sidebar-user-avatar">
  
        <a href="{{route('backend.profile.index')}}">
            <img src="{{ asset('images/profile/' .  profile_pic_check(Auth::user()->profile_pic))}}" alt="avatar">
        </a>
    </div>
    <div class="sidebar-user-name">{{Auth::user()->name}}</div>
    <div class="sidebar-user-links">
        <a href="{{route('backend.profile.index')}}" data-toggle="tooltip" data-placement="bottom" title="Profile"><i  class="gi gi-user"></i></a>

    </div>
</div>
