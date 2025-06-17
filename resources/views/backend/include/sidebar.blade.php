<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="/" class="sidebar-logo">
      <img src="{{asset('frontend/assets/img/logo.png')}}" alt="site logo" class="light-logo">
      <img src="{{asset('frontend/assets/img/logo.png')}}" alt="site logo" class="dark-logo">
      <img src="{{asset('frontend/assets/img/logo.png')}}" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
  <ul class="sidebar-menu" id="sidebar-menu">
 
    <li><a href="/home"><iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon><span>Dashboard</span></a></li>
    <li><a href="/banner"><iconify-icon icon="material-symbols:map-outline" class="menu-icon"></iconify-icon><span>Banner</span></a></li>
    <li><a href="/gallery"><i class="ri-news-line text-xl me-14 d-flex w-auto"></i><span>Gallery</span></a></li>
    <li><a href="/price"><iconify-icon icon="mdi:currency-inr" class="menu-icon"></iconify-icon><span>Price</span></a></li>
    <li><a href="/service"><iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon><span>Services</span></a></li>
    <li><a href="/project"><i class="ri-checkbox-multiple-blank-line text-xl me-14 d-flex w-auto"></i><span>Project</span></a></li>
    <li><a href="/reward"><i class="ri-trophy-line text-xl me-14 d-flex w-auto"></i><span>Rewards</span></a></li>
    <li><a href="/enquary"><i class="ri-question-answer-line text-xl me-14 d-flex w-auto"></i><span>Enquiries</span></a></li>
    <li><a href="/contact"><iconify-icon icon="mage:email" class="menu-icon"></iconify-icon><span>Contacts</span></a></li>
    <li><a href="/partner"><iconify-icon icon="fa6-solid:handshake" class="menu-icon"></iconify-icon><span>Partners</span></a></li>
    <li><a href="/testi"><iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon><span>Testimonial</span></a></li>

 

  <li class="dropdown">
    <a href="javascript:void(0)">
      <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon><span>Settings</span>
    </a>
    <ul class="sidebar-submenu">
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
      </li>
    </ul>
  </li>
</ul>
  </div>
</aside>