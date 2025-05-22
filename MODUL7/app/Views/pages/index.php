<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 py-3 bg-body rounded shadow-sm">
  <div class="d-flex justify-content-between border-bottom py-2">
    <h3 class="ph-2 mb-0">Data Buku</h3>
  </div>
  <div class="pt-3">
    <table class = "table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($buku as $key => $row) { ?>
          <tr>
            <td><?= $key+1; ?></td>
            <td><?= $row->judul; ?></td>
            <td><?= $row->pengarang; ?></td>
            <td><?= $row->penerbit; ?></td>
            <td><?= $row->tahun_terbit; ?></td>
            <td><?= $row->aksi; ?></td>
          </tr>
        <?php } ?>
    </table>
  </div>
</div>
<?= $this->endsection(); ?>