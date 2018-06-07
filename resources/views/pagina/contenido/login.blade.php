<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="login">
 <div class="login-box">
      <div class="login-logo">

        <h1 ><b>Acelera</b>Latam</h1>

      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Ingrese al sistema</p>

        <div id="notificacion_resul_faa"></div>

        <form action="login" method="post" class="msg">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          <div class="form-group has-feedback">

                <input type="rut" class="form-control" name="rut" placeholder="Rut completo sin puntos ni guion">
            <span class="fa fa-globe form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Contraseña">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <a href="/admin" class="btn btn-link">Admin Dashboard</a>

          <div class="row">

            <div class="col-xs-4">
              <button type="submit" class="btn btn-danger">Ingresar</button>
            </div><!-- /.col -->
          </div>
        </form>




      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="{{ route('register') }}">Registrarse</a>
      </div>
    </div>
  </div>
</div>
