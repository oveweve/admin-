<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/dashboard" class="{{ 'dashboard' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        <li><a href="/video" class="{{ 'video' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-camera-video"></i><span>Video</span></a></li>
        <li><a href="/audio" class="{{ 'audio' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-music-note"></i><span>Audio</span></a></li>
        <li><a href="/buku" class="{{ 'buku' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-book"></i><span>Buku</span></a></li>
        <li><hr style="margin-left: 20px; margin-right: 20px;"></li>
        <li><a href="/rekening" class="{{ 'rekening' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-briefcase"></i><span>Rekening</span></a></li>
        <li><a href="/murid" class="{{ 'murid' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-users"></i><span>Pengguna</span></a></li>
        <li><a href="/bukti_transfer" class="{{ 'bukti_transfer' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-cart"></i><span>Bukti Transfer</span></a></li>
        <li><a href="/pembelian" class="{{ 'pembelian' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-lock"></i><span>Pembelian</span></a></li>
        <li><hr style="margin-left: 20px; margin-right: 20px;"></li>
        <li><a href="/data_alat" class="{{ 'alat_musik' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-database"></i><span>Database Alat Musik</span></a></li>
        <li><a href="/data_kategori" class="{{ 'kategori' == request()->path() ? 'active' : '' }}"><i class="lnr lnr-database"></i><span>Database Kategori</span></a></li>
      </ul>
    </nav>
  </div>
</div>
