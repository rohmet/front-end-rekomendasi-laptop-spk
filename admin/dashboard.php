<?php 
require '../templates/header.php'; 
?>

<div class="container">
    
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; border-bottom: 1px solid #000; padding-bottom: 20px;">
        <div>
            <span style="font-family: var(--font-sans); font-size: 0.8rem; letter-spacing: 2px; text-transform: uppercase; color: #888;">Admin Control</span>
            <h2 style="font-family: var(--font-serif); font-size: 2rem; margin: 5px 0;">Data Inventory.</h2>
            <p class="header-meta" style="margin: 0; color: #666;">
                Total Database: <b>12</b> units registered.
            </p>
        </div>
        <a href="create_laptop.php" class="btn-editorial" style="width: auto; padding: 12px 25px;">
            <i class="fas fa-plus"></i> Add New Unit
        </a>
    </div>

    <div class="editorial-alert" style="display:none; border-left-color: #28a745; color: #155724; background: #d4edda; margin-bottom: 30px;">
        <i class="fas fa-check-circle"></i> Data berhasil diperbarui.
    </div>

    <div class="editorial-table-container">
        <table class="editorial-table">
            <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th width="30%">Unit Information</th>
                    <th width="20%">Key Specs</th>
                    <th width="20%">Processor</th>
                    <th width="15%">Market Price</th>
                    <th width="10%" style="text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-family: monospace; color: #888;">01</td>
                    <td>
                        <span class="table-title">ASUS ROG Zephyrus G14</span>
                        <span class="table-subtitle">GA401IV</span>
                    </td>
                    <td>
                        <div style="font-size: 0.85rem; color: #555;">
                            <div><i class="fas fa-memory" style="width:15px;"></i> 16 GB RAM</div>
                            <div style="margin-top:4px;"><i class="fas fa-weight-hanging" style="width:15px;"></i> 1.7 Kg</div>
                        </div>
                    </td>
                    <td style="font-family: monospace; font-size: 0.85rem;">Ryzen 9 4900HS</td>
                    <td><span class="table-price">Rp 23.999.000</span></td>
                    <td style="text-align: right;">
                        <a href="edit_laptop.php" class="btn-icon" title="Edit Data"><i class="fas fa-pen"></i></a>
                        <button class="btn-icon delete" onclick="deleteRow(this)" title="Hapus Data" style="border:none; background:none; cursor:pointer;">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td style="font-family: monospace; color: #888;">02</td>
                    <td>
                        <span class="table-title">Lenovo Legion 5</span>
                        <span class="table-subtitle">15ARH05</span>
                    </td>
                    <td>
                        <div style="font-size: 0.85rem; color: #555;">
                            <div><i class="fas fa-memory" style="width:15px;"></i> 16 GB RAM</div>
                            <div style="margin-top:4px;"><i class="fas fa-weight-hanging" style="width:15px;"></i> 2.3 Kg</div>
                        </div>
                    </td>
                    <td style="font-family: monospace; font-size: 0.85rem;">Ryzen 7 4800H</td>
                    <td><span class="table-price">Rp 18.500.000</span></td>
                    <td style="text-align: right;">
                        <a href="edit_laptop.php" class="btn-icon" title="Edit Data"><i class="fas fa-pen"></i></a>
                        <button class="btn-icon delete" onclick="deleteRow(this)" title="Hapus Data" style="border:none; background:none; cursor:pointer;">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>

                 <tr>
                    <td style="font-family: monospace; color: #888;">03</td>
                    <td>
                        <span class="table-title">Acer Nitro 5</span>
                        <span class="table-subtitle">AN515-57</span>
                    </td>
                    <td>
                        <div style="font-size: 0.85rem; color: #555;">
                            <div><i class="fas fa-memory" style="width:15px;"></i> 8 GB RAM</div>
                            <div style="margin-top:4px;"><i class="fas fa-weight-hanging" style="width:15px;"></i> 2.2 Kg</div>
                        </div>
                    </td>
                    <td style="font-family: monospace; font-size: 0.85rem;">Intel Core i5-11400H</td>
                    <td><span class="table-price">Rp 12.000.000</span></td>
                    <td style="text-align: right;">
                        <a href="edit_laptop.php" class="btn-icon" title="Edit Data"><i class="fas fa-pen"></i></a>
                        <button class="btn-icon delete" onclick="deleteRow(this)" title="Hapus Data" style="border:none; background:none; cursor:pointer;">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pagination-container" style="margin-top: 30px; display: flex; justify-content: center; align-items: center; gap: 20px;">
        <span style="font-family: monospace; border: 1px solid #000; padding: 5px 15px;">PAGE 1 / 3</span>
        <a href="#" style="text-decoration: underline;">Next &raquo;</a>
    </div>

    <div style="height: 50px;"></div>
</div>

<script>
function deleteRow(btn) {
    if(confirm('Apakah Anda yakin ingin menghapus data ini secara permanen?')) {
        var row = btn.parentNode.parentNode;
        row.style.transition = 'all 0.5s';
        row.style.opacity = '0';
        setTimeout(function(){
            row.remove();
            alert('Data berhasil dihapus (Simulasi).');
        }, 500);
    }
}
</script>

<?php 
require '../templates/footer.php'; 
?>