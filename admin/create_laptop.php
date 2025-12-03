<?php require '../templates/header.php'; ?>

<div class="editorial-overlay" id="modal-overlay" style="display:flex; justify-content:center; align-items:center; min-height:80vh;">
    
    <div class="editorial-modal">
        <div class="modal-meta">
            <span>ENTRY FORM</span>
            <span><?php echo date('d.m.Y'); ?></span>
        </div>

        <h2 class="modal-title">New Entry.</h2>
        <p class="modal-subtitle">Add a new machine to the database. Please ensure all specifications are accurate.</p>

        <form onsubmit="handleCreate(event)">
            
            <div class="form-group">
                <label class="form-label" for="brand">Brand / Manufacturer</label>
                <input type="text" name="brand" id="brand" class="editorial-input" placeholder="e.g. Apple, ASUS, Lenovo" required autofocus>
            </div>

            <div class="form-group">
                <label class="form-label" for="model_name">Model Name</label>
                <input type="text" name="model_name" id="model_name" class="editorial-input" placeholder="e.g. MacBook Air M2" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="processor">Processor Unit</label>
                <input type="text" name="processor" id="processor" class="editorial-input" placeholder="e.g. Intel Core i7 / M2 Chip" required>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label" for="price">Price (IDR)</label>
                    <input type="number" name="price" id="price" class="editorial-input" placeholder="0" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="ram_gb">RAM (GB)</label>
                    <input type="number" name="ram_gb" id="ram_gb" class="editorial-input" placeholder="0" step="0.1" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="weight_kg">Weight (Kg)</label>
                    <input type="number" name="weight_kg" id="weight_kg" class="editorial-input" placeholder="0.0" step="0.01" required>
                </div>
            </div>

            <div style="margin-top: 30px;">
                <button type="submit" class="btn-editorial">
                    Save Configuration
                </button>
                
                <a href="dashboard.php" class="btn-text-cancel">
                    Cancel & Return to Dashboard
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    function handleCreate(e) {
        e.preventDefault();
        const btn = document.querySelector('.btn-editorial');
        btn.innerText = "Saving...";
        
        setTimeout(() => {
            alert("Data Laptop Baru Berhasil Disimpan! (Simulasi)");
            window.location.href = 'dashboard.php';
        }, 1000);
    }
</script>

<?php require '../templates/footer.php'; ?>