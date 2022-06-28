  <header class="main-nav">
      <div class="sidebar-user text-center"><a class="setting-primary" href="{{route('editpassword')}}"><i data-feather="settings"></i></a>

          <a href="{{ route('profileupdate.view') }}" class="admin-profile">
              @if(auth()->user()->profile != null)
              <img class="img-90 rounded-circle" src="{{ asset(  auth()->user()->profile) }}" alt="">
              @else
              <img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="">

              @endif
              <div class="badge-bottom"><span class="badge badge-primary">جديد</span></div>
              <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->name}}</h6>
          </a>
          <p class="mb-0 font-roboto"></p>

      </div>


      <nav>
          <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                  <ul class="nav-menu custom-scrollbar" style="text-align:right;">
                      <li class="nav-item">
                          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"></a>
                      </li>
                      <li class="nav-item"><a href="{{route('home')}}" class="nav-link  " tabindex="-1" aria-disabled="true"><i class="fa fa-home"></i>الرئيسية</a>
                          <!-- <ul class="nav-submenu menu-content">
                      <li><a href="index.html">Default</a></li>
                      <li><a href="dashboard-02.html">Ecommerce</a></li>
                    </ul> -->
                      </li>

                      <li class="nav-item req">
                          <a class="nav-link " href="{{ route('medi.index') }}" tabindex="-1" aria-disabled="true">
                              <span class="pull-right badge badge-danger badge-pill">
                                  {{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\MedicalNotification')->count() }}
                                 </span><i class="fa fa-envelope-o"></i>
                              طلبات الخدمات الطبية
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('publics.index') }}" tabindex="-1" aria-disabled="true">
                              <span class="pull-right badge badge-danger badge-pill"> {{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\PublicNotification')->count() }} </span><i class="fa fa-envelope-o"></i>
                              طلبات الخدمات العامة</a>
                      </li>
                      <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-home"></i><span>صفحات الموقع </span></a>
                          <ul class="nav-submenu menu-content">
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('about.index') }}" tabindex="-1" aria-disabled="true">صفحة من نحن</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('tech.index') }}" tabindex="-1" aria-disabled="true">صفحة تقنية الـ 3D</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('contact.index') }}" tabindex="-1" aria-disabled="true">اتصل بنا</a>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-gear"></i><span>إعدادات الموقع </span></a>
                          <ul class="nav-submenu menu-content">
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('image.index') }}" tabindex="-1" aria-disabled="true">صور البانر المتحرك</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('logo.index') }}" tabindex="-1" aria-disabled="true">الشعارات</a>
                              </li>
                              <!--<li class="nav-item">-->
                              <!--    <a class="nav-link " href="{{ route('client.index') }}" tabindex="-1" aria-disabled="true">قائمة المستخدمين</a>-->
                              <!--</li>-->
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('counter.index') }}" tabindex="-1" aria-disabled="true"> عدادات </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('side.index') }}" tabindex="-1" aria-disabled="true">الصورة الجانبية</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('map.index') }}" tabindex="-1" aria-disabled="true"> صورة الخريطة</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="{{ route('youtubeurl.index') }}" tabindex="-1" aria-disabled="true"> يوتيوب رابط </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="{{ route('printing.index') }}" tabindex="-1" aria-disabled="true">  تقنية الطباعة </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('software_type.index') }}" tabindex="-1" aria-disabled="true">  أنواع البرامج المستخدمة </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('size.index') }}" tabindex="-1" aria-disabled="true">  sالبرامج </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('color.index') }}" tabindex="-1" aria-disabled="true">    البرامجc </a>
                            </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('invoicess.index') }}" tabindex="-1" aria-disabled="true"> <i class="fa fa-cubes"></i>فاتورة</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('perposal.index') }}" tabindex="-1" aria-disabled="true"><i class="fa fa-pencil-square-o"></i> عروض الأسعار</a>
                      </li>




                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('social.index') }}" tabindex="-1" aria-disabled="true"><i class="fa fa-globe"></i>حسابات التواصل الاجتماعي</a>
                      </li>

                      <!-- designer orders in admin panel  -->
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('productRequest') }}" tabindex="-1" aria-disabled="true"> <i class="fa fa-pencil-square-o"></i>ادارة المنتج</a>
                      </li>


                      <li class="nav-item">
                          <a class="nav-link "  href="{{ route('user.list') }}" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i> قائمة المستخدمين </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link "  href="{{ route('designer.index') }}" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i> قائمة المصممين </a>
                    </li>
                     <!-- <li class="nav-item">
                          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-users"></i> ائمة المشرفينـ </a>
                      </li> -->
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('user.profile.list') }}" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i> الإدارة </a>
                      </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link " href="{{ route('payment') }}" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i> قسط </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('OrderManagement') }}" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i> إدارة الطلبات</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link " href="{{ route('adminSettingshow') }}" tabindex="-1" aria-disabled="true"> <i class="fa fa-pencil-square-o"></i>   إعدادات</a>
                      </li>
                  </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>
      </nav>
  </header>
