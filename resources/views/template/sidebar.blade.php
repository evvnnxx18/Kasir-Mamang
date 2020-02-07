  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
          <div class="sidebar-brand-icon">
            <i class="fas fa-clinic-medical"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Medical Clinic</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Menu Master Klinik -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Master Klinik</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/jadwal_dokter">Jadwal Dokter</a>
              <a class="collapse-item" href="/dokter">Data Dokter</a>
              <a class="collapse-item" href="/pasien">Data Pasien</a>
              <a class="collapse-item" href="/periksa">Pemeriksaan</a>
            </div>
          </div>
        </li>
  
        <!-- Menu Master Apotek-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Master Apotek</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/apoteker">Data Apoteker</a>
              <a class="collapse-item" href="/pabrik">Data Pabrik</a>
              <a class="collapse-item" href="/satuan">Data Satuan Obat</a>
              <a class="collapse-item" href="/lokasi">Data Lokasi Obat</a>
              <a class="collapse-item" href="/supplier">Data Supplier</a>
              <a class="collapse-item" href="/gudang">Data Gudang</a>
              <a class="collapse-item" href="/golongan">Data Golongan Obat</a>
              <a class="collapse-item" href="/obat">Data Obat</a>
            </div>
          </div>
        </li>

     <!-- Transaksi Menu -->
     <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-dollar-sign"></i>
        <span>Transaksi</span>
      </a>
      <div id="collapseThree" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="/po">Purchase Order</a>
          <a class="collapse-item" href="/data_po">Data Purchase Order</a>
          <a class="collapse-item" href="/penjualan">Penjualan Obat</a>
          <a class="collapse-item" href="/data_penjualan">Data Penjualan Obat</a>
          <a class="collapse-item" href="/data_periksa">Data Pembayaran Periksa</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-file-excel"></i>
          <span>Utilities</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/po">Purchase Order</a>
          </div>
        </div>
      </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->