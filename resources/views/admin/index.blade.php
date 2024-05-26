@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('assets/img/sekolah1.jpeg') }}" class="img-circle elevation-2" 
                      alt="User Image">
              </div>
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sekolah Tinggi Teknologi Terpadu Nurul</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Biodata</h3>

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
                    Jayas Permana 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Teknik Informatika
                </div>
                <!-- /.card-footer-->
                <div class="card-footer">
                    Jakarta 23-11-2003

                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
