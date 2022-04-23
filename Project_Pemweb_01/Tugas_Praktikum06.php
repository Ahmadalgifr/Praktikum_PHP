<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tugas PROJECT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Project</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

      <div class="container-fluid ">
        <div class="row">
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Pasien</h3>

                <div class="card-tools">
                </div>
              </div>
              <div class="card-body">
                <?php
                include_once "Tugas_project /form_input_pasien.php";
                ?>
              </div>
              
            </div>
          
          </div>
        </div>
      </div>
    </section>
              </div>
           
              <div class="card-footer ">
                <div class="col-12 text-center">Design By AHMAD ALGIFARI</div>
                </div>
            
            </div>
        
          </div>
        </div>
      </div>
    </section>
   
  </div>

<?php
include_once 'footer.php';
?>