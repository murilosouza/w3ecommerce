<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0"><i class="fas fa-barcode"></i> Produtos</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Página inicial</a></li>
            <li class="breadcrumb-item active">Adicionar Produto</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="m-0">Adicionar Produto <span><a href="/admin/products" class="btn btn-default float-right"><i class="fas fa-arrow-left"></i> Tela anterior</a></span></h4>
            </div>
            <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/admin/products/create" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="descategory">Nome do produto</label>
              <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome do produto">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-outline-success float-right"><i class="nav-icon fas fa-save"></i> Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>