<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0"><i class="fas fa-barcode"></i> Produto</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Página inicial</a></li>
            <li class="breadcrumb-item active">Editar Produto</a></li>
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
              <h4 class="m-0">Editar Produto <span><a href="/admin/products" class="btn btn-default float-right"><i
                      class="fas fa-arrow-left"></i> Tela anterior</a></span></h4>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/admin/products/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="descategory">Nome do produto</label>
                  <input type="text" class="form-control" id="desproduct" name="desproduct"
                    placeholder="Digite o nome do produto" value="<?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="vlprice">Preço</label>
                  <input type="number" class="form-control" id="vlprice" name="vlprice" step="0.01" placeholder="0.00"
                    value="<?php echo htmlspecialchars( $product["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="vlwidth">Largura</label>
                  <input type="number" class="form-control" id="vlwidth" name="vlwidth" step="0.01" placeholder="0.00"
                    value="<?php echo htmlspecialchars( $product["vlwidth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="vlheight">Altura</label>
                  <input type="number" class="form-control" id="vlheight" name="vlheight" step="0.01" placeholder="0.00"
                    value="<?php echo htmlspecialchars( $product["vlheight"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="vllength">Comprimento</label>
                  <input type="number" class="form-control" id="vllength" name="vllength" step="0.01" placeholder="0.00"
                    value="<?php echo htmlspecialchars( $product["vllength"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="vlweight">Peso</label>
                  <input type="number" class="form-control" id="vlweight" name="vlweight" step="0.01" placeholder="0.00"
                    value="<?php echo htmlspecialchars( $product["vlweight"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="desurl">URL</label>
                  <input type="text" class="form-control" id="desurl" name="desurl">
                </div>
                <div class="form-group">
                  <label for="file">Foto</label>
                  <input type="file" class="form-control" id="file" name="file">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-success float-right"><i class="nav-icon fas fa-save"></i>
                    Salvar</button>
                </div>
              </div>
            </form>
          </div>
        
            <div class="card card-widget">
              <div class="card-body">
                <img class="img-responsive" id="image-preview" src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Sem Foto">
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->