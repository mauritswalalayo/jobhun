  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data User</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                
                <th>Nama</th>
                <th>Phone</th>
                <th>Sex</th>
                <th>Email</th>
                
              </tr>
              </thead>
              <tbody>

                @foreach ($namaku as $name)
              <tr>
                <td><?= $name ['nama']; ?></td>
                <td><?= $name ['phone']; ?></td>
                <td><?= $name ['sex']; ?></td>
                <td><?= $name ['email']; ?></td>

              </tr>
              @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
</div>
  </section>