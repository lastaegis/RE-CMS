<li class="treeview">
    <a href="#">
        <i class="fa fa-th"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="treeview">
    <a href="{{ route('admin.cafe') }}">
        <i class="fa fa-th"></i>
        <span>Cafe</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-th"></i>
        <span>Category</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-th"></i>
        <span>File</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="treeview">
            <a href="{{ route('admin.file.create') }}">Upload New File</a>
            <a href="{{ route('admin.file') }}">File Manager</a>
        </li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-th"></i>
        <span>Location</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="treeview">
            <a href="{{ route('admin.country') }}">Country</a>
            <a href="{{ route('admin.province') }}">Province</a>
            <a href="{{ route('admin.city') }}">City</a>
            <a href="{{ route('admin.district') }}">District</a>
        </li>
    </ul>
</li>