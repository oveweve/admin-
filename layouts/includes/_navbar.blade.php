<nav class="navbar navbar-default navbar-fixed-top">
  <div class="brand">
    <a href="/dashboard"><img src="{{asset('admin/smi.png')}}" alt="smi Logo" class="img-responsive logo" style="width:20px"></a>
  </div>
  <div class="container-fluid">
    <div class="navbar-btn">
      <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
    </div>
    <form class="navbar-form navbar-left" method="get" action="{{ 'video' == request()->path() ? 'video' : '' }}
                                                               {{ 'audio' == request()->path() ? 'audio' : '' }}
                                                               {{ 'buku' == request()->path() ? 'buku' : '' }}">
      <div class="input-group">
        <input type="search" name="cari" class="form-control" placeholder="Pencarian..">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Cari</button></span>
      </div>
    </form>
    <div id="navbar-menu">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
          </ul>
        </li>
        <!-- <li>
          <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

