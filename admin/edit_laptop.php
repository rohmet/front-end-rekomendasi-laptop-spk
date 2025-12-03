<?php require '../templates/header.php'; ?>

<div class="editorial-overlay" id="modal-overlay" style="display:flex; justify-content:center; align-items:center; min-height:80vh;">
    
    <div class="editorial-modal">
        <div class="modal-meta">
            <span>EDIT MODE</span>
            <span>ID: #1024</span>
        </div>

        <h2 class="modal-title">Edit Specs.</h2>
        <p class="modal-subtitle">
            Updating data for: <strong>ASUS ROG Zephyrus G14</strong>.
        </p>

        <form onsubmit="handleUpdate(event)">
            
            <div class="form-group">
                <label class="form-label" for="brand">Brand / Manufacturer</label>
                <input type="text" name="brand" id="brand" class="editorial-input" 
                       value="ASUS" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="model_name">Model Name</label>
                <input type="text" name="model_name" id="model_name" class="editorial-input" 
                       value="ROG Zephyrus G14" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="processor">Processor Unit</label>
                <input type="text" name="processor" id="processor" class="editorial-input" 
                       value="Ryzen 9 4900HS" required>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label" for="price">Price (IDR)</label>
                    <input type="number" name="price" id="price" class="editorial-input" 
                           value="23999000" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="ram_gb">RAM (GB)</label>
                    <input type="number" name="ram_gb" id="ram_gb" class="editorial-input" 
                           value="16" step="0.1" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="weight_kg">Weight (Kg)</label>
                    <input type="number" name="weight_kg" id="weight_kg" class="editorial-input" 
                           value="1.7" step="0.01" required>
                </div>
            </div>

            <div style="margin-top: 30px;">
                <button type="submit" class="btn-editorial">
                    Update Specification
                </button>
                
                <a href="dashboard.php" class="btn-text-cancel">
                    Discard Changes
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    function handleUpdate(e) {
        e.preventDefault();
        
        const btn = document.querySelector('.btn-editorial');
        btn.innerText = "Updating...";
        
        setTimeout(() => {
            alert("Perubahan Berhasil Disimpan! (Simulasi)");
            window.location.href = 'dashboard.php';
        }, 1000);
    }
</script>

<?php require '../templates/footer.php'; ?>