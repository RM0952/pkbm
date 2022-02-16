<?php 
$logo = $this->db->get('config_page')->row()->logo;
?>
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url() ?>">

      <img src="<?php echo base_url().'assets/dist/img/logo-pkbm.png'?>" alt="" height="64" class="d-inline-block align-text-center">
      <span class="mx-2 fs-4">SMK NEGERI 1 CIOMAS</span>

    </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-primary me-2 rounded-pill fw-bold" aria-current="page" href="<?php echo base_url() ?>home/contact_us">Kontak Kami</a>
          </li>
        </ul>
      </div>
</nav>
