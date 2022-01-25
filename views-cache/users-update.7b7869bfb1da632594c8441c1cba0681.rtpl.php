<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0"><i class="nav-icon fas fa-users"></i> Usuários</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Página inicial</a></li>
            <li class="breadcrumb-item active">Editar Usuário</a></li>
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
              <h4 class="m-0">Editar Usuário</h4>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/admin/users/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="desperson">Nome</label>
                  <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome"
                    value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="deslogin">Login</label>
                  <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login"
                    value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="nrphone">Telefone</label>
                  <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone"
                    value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="form-group">
                  <label for="desemail">E-mail</label>
                  <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail"
                    value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="inadmin" value="1" {if="$user.inadmin == 1" }checked{if}> Acesso de
                    Administrador
                  </label>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success float-right"><i class="nav-icon fas fa-save"></i>
                  Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->