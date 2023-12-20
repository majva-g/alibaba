<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li data-toggle="tooltip" title="داشبورد"
                class="{{ \App\Helpers\BladeHelper::activeManu('navigationDashboards') }}">
                <a href="#navigationDashboards">
                    <i class="icon ti-pie-chart"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="گزارشکار"
                class="{{ \App\Helpers\BladeHelper::activeManu('navigationArticles') }}">
                <a href="#navigationArticles">
                    <i class="icon ti-layout"></i>
                </a>
            </li>
        </ul>
        <ul>
            {{-- <li data-toggle="tooltip" title="ویرایش پروفایل">
                <a href="#" class="go-to-page">
                    <i class="icon ti-settings"></i>
                </a>
            </li> --}}
            <li data-toggle="tooltip" title="خروج">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="go-to-page">
                    <i class="icon ti-power-off"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="navigationDashboards"
            class="{{ 'navigation-' . \App\Helpers\BladeHelper::activeManu('navigationDashboards') }}">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="{{ \App\Helpers\BladeHelper::activeManu('navigationDashboards', 1) }}">
                    <i class="fa fa-tachometer mr-2"></i> میزکار
                </a>
            </li>
        </ul>
        <ul id="navigationArticles"
            class="{{ 'navigation-' . \App\Helpers\BladeHelper::activeManu('navigationArticles') }}">
            <li class="navigation-divider">مدیریت مقاله</li>
            <li>
                <a href="{{ route('articles.index') }}"
                    class="{{ \App\Helpers\BladeHelper::activeManu('navigationArticles', 1) }}">
                    <i class="fa fa-bars mr-2"></i> لیست مقالات
                </a>
            </li>
            <li>
                <a href="{{ route('articles.create') }}"
                    class="{{ \App\Helpers\BladeHelper::activeManu('navigationArticles', 2) }}">
                    <i class="fa fa-plus mr-2"></i> ثبت مقاله جدید
                </a>
            </li>
        </ul>
    </div>
</div>
