<!-- Tambahkan Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
    <h1 class="text-center">PENGURANGAN</h1>
    <div class="card">
        <div class="card-body">
            <?php echo form_open('hitung/pengurangan'); ?>
            <div class="input-group">
                <?php echo form_input('d1', '', ['class' => 'form-control', 'placeholder' => 'Angka Pertama']); ?>
                <div class="input-group-append">
                    <span class="input-group-text bg-light">-</span>
                </div>
                <?php echo form_input('d2', '', ['class' => 'form-control', 'placeholder' => 'Angka Kedua']); ?>
            </div>
            <br><br>
            <?php echo form_submit('submit', 'Kurangkan', ['class' => 'btn btn-primary btn-block']); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            Hasil: <strong><?php echo isset($hasil) ? $hasil : ''; ?></strong>
        </div>
    </div>
    <div class="text-center mt-3">
        <?php echo anchor('hitung', 'Menu Utama', ['class' => 'btn btn-secondary']); ?>
    </div>
</div>
