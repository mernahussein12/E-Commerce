<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
            </li>
            <!--<li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>-->
            <!--    <ul class="menu-content">-->
            <!--        <li class="active"><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="eCommerce">eCommerce</a>-->
            <!--        </li>-->
            <!--        <li><a class="menu-item" href="dashboard-analytics.html" data-i18n="Analytics">Analytics</a>-->
            <!--        </li>-->
            <!--        <li><a class="menu-item" href="dashboard-fitness.html" data-i18n="Fitness">Fitness</a>-->
            <!--        </li>-->
            <!--        <li><a class="menu-item" href="dashboard-crm.html" data-i18n="CRM">CRM</a>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</li>-->




{{-- <li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="feather icon-sliders"></i>
        <span class="menu-title" data-i18n="Slider Management">Slider </span>
    </a>
    <ul class="menu-content">
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Slider Category">Slider Category</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('SliderPosition.index')}}" data-i18n="All SliderCategory">
                        <i class='bx bx-radio-circle'></i> All SliderCategory
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('SliderPosition.create')}}" data-i18n="Add SliderCategory">
                        <i class='bx bx-radio-circle'></i> Add SliderCategory
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Slider">Sub Slider</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('Slider.index')}}" data-i18n="All Slider">
                        <i class='bx bx-radio-circle'></i> All Slider
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('Slider.create')}}" data-i18n="Add Slider">
                        <i class='bx bx-radio-circle'></i> Add Slider
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li> --}}


<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="feather icon-sliders"></i>
        <span class="menu-title" data-i18n="Contact"> Slider</span>
    </a>
    <ul class="menu-content">
        <li>
            <a class="menu-item" href="{{route('new_slider.index')}}" data-i18n="All Contact">
                <i class='bx bx-radio-circle'></i> All Slider
            </a>
        </li>
        <li>
            <a class="menu-item" href="{{ route('new_slider.create') }}" data-i18n="Add Contact">
                <i class='bx bx-radio-circle'></i> Add New Slider
            </a>
        </li>
    </ul>
</li>





<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="fa fa-pencil"></i>
        <span class="menu-title" data-i18n="Services Management">Services </span>
    </a>
    <ul class="menu-content">
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Services Category">Services Category</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('ServiceCategory.index')}}" data-i18n="All ServicesCategory">
                        <i class='bx bx-radio-circle'></i> All ServicesCategory
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('ServiceCategory.create')}}" data-i18n="Add ServicesCategory">
                        <i class='bx bx-radio-circle'></i> Add ServicesCategory
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Services">Sub Services</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('Service.index')}}" data-i18n="All Services">
                        <i class='bx bx-radio-circle'></i> All Services
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('Service.create')}}" data-i18n="Add Services">
                        <i class='bx bx-radio-circle'></i> Add Services
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>



<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="feather icon-image"></i>
        <span class="menu-title" data-i18n="Gallery Management">Gallery </span>
    </a>
    <ul class="menu-content">
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Gallary Category">Gallary Category</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('GallaryCategory.index')}}" data-i18n="All GallaryCategory">
                        <i class='bx bx-radio-circle'></i> All GallaryCategory
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('GallaryCategory.create')}}" data-i18n="Add GallaryCategory">
                        <i class='bx bx-radio-circle'></i> Add GallaryCategory
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Gallary"> ٍSub Gallary</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('Gallary.index')}}" data-i18n="All Gallary">
                        <i class='bx bx-radio-circle'></i> All Gallary
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('Gallary.create')}}" data-i18n="Add Gallary">
                        <i class='bx bx-radio-circle'></i> Add Gallary
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="fa fa-pencil-square-o"></i>
        <span class="menu-title" data-i18n="Blog Management">Blog </span>
    </a>
    <ul class="menu-content">
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Blog Category">Blog Category</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('BlogCategory.index')}}" data-i18n="All BlogCategory">
                        <i class='bx bx-radio-circle'></i> All BlogCategory
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('BlogCategory.create')}}" data-i18n="Add BlogCategory">
                        <i class='bx bx-radio-circle'></i> Add BlogCategory
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Blog">ٍSub Blog</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('Blog.index')}}" data-i18n="All Blog">
                        <i class='bx bx-radio-circle'></i> All Blog
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('Blog.create')}}" data-i18n="Add Blog">
                        <i class='bx bx-radio-circle'></i> Add Blog
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="feather icon-home"></i>
        <span class="menu-title" data-i18n="Company">Company</span>
    </a>
    <ul class="menu-content">
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Mission">Mission</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('Mission.index')}}" data-i18n="All Mission">
                        <i class='bx bx-radio-circle'></i> All Mission
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('Mission.create')}}" data-i18n="Add Mission">
                        <i class='bx bx-radio-circle'></i> Add Mission
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="About">About</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('About.index')}}" data-i18n="All About">
                        <i class='bx bx-radio-circle'></i> All About
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('About.create')}}" data-i18n="Add About">
                        <i class='bx bx-radio-circle'></i> Add About
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <span class="menu-title" data-i18n="Approach">Approach</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="menu-item" href="{{route('Approach.index')}}" data-i18n="All Approach">
                        <i class='bx bx-radio-circle'></i> All Approach
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('Approach.create')}}" data-i18n="Add Approach">
                        <i class='bx bx-radio-circle'></i> Add Approach
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="feather icon-phone-call"></i>
        <span class="menu-title" data-i18n="Contact">Contact</span>
    </a>
    <ul class="menu-content">
        <li>
            <a class="menu-item" href="{{route('Contact.index')}}" data-i18n="All Contact">
                <i class='bx bx-radio-circle'></i> All Contact
            </a>
        </li>
        <li>
            <a class="menu-item" href="{{route('Contact.create')}}" data-i18n="Add Contact">
                <i class='bx bx-radio-circle'></i> Add Contact
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="feather icon-image"></i>
        <span class="menu-title" data-i18n="Contact">Client</span>
    </a>
    <ul class="menu-content">
        <li>
            <a class="menu-item" href="{{route('Client.index')}}" data-i18n="All Contact">
                <i class='bx bx-radio-circle'></i> All Client
            </a>
        </li>
        <li>
            <a class="menu-item" href="{{route('Client.create')}}" data-i18n="Add Contact">
                <i class='bx bx-radio-circle'></i> Add Client
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a href="javascript:;" class="has-arrow">
        <i class="feather icon-user"></i>
        <span class="menu-title" data-i18n="Contact">Team</span>
    </a>
    <ul class="menu-content">
        <li>
            <a class="menu-item" href="{{route('Team.index')}}" data-i18n="All Contact">
                <i class='bx bx-radio-circle'></i> All Team
            </a>
        </li>
        <li>
            <a class="menu-item" href="{{ route('Team.create') }}" data-i18n="Add Contact">
                <i class='bx bx-radio-circle'></i> Add Team
            </a>
        </li>
    </ul>
</li>



    </div>
</div>
