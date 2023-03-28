<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <ul aria-expanded="false" class="collapse">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i>Profil</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Gelen kutusu</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-settings"></i>Hesap ayarları</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Çıkış</a></li>
                </ul>
                </li>
                <li class="nav-small-cap">
                    <h1>PERSONAL</h1>
                </li>
                <li> <a class="waves-effect waves-dark" href="/dashboard"><i class="icon-home "></i><span class="hide-menu">Ana
                            Sayfa</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('kullanici.index')}}"><i
                            class="icon-user"></i><span class="hide-menu">Kullanıcılar</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('sayfa.index')}}"><i class="icon-menu"></i><span
                            class="hide-menu">Sayfalar</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('blog.index')}}"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Blog</span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-email"></i><span class="hide-menu">Bolgeler</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="sub-menu"> <a class="waves-effect waves-dark" href="{{route('country.index')}}"><i
                                    class="icon-list"></i><span class="hide-menu">Ülkeler</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('city.index')}}"><i
                                    class="icon-list"></i><span class="hide-menu">İller</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('county.index')}}"><i
                                    class="icon-list"></i><span class="hide-menu">İlçeler</span></a>
                        </li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-email"></i><span class="hide-menu">Emlak</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a class="waves-effect waves-dark" href="{{route('ilan.index')}}"><i
                                    class="icon-speedometer"></i><span class="hide-menu">İlan Yönetimi</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('client-type.index')}}"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Client Type</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('client.index')}}"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Client</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('property-type.index')}}"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Property Type</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('feature.index')}}"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Feature</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('property.index')}}"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Property</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('property-feature.index')}}"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Property Feature</span></a>
                        </li>
                    </ul>
                </li>


                <li> <a class="waves-effect waves-dark" href="index.html"><i class="fa fa-power-off"></i><span
                            class="hide-menu">Çıkış</span></a>
                </li>
                </li>
                </li>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
