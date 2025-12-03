<?php include '../templates/header.php'; ?>

<section class="editorial-hero">
    <div class="container" style="padding-top: 0;">
        <h1 class="big-title">TECH<br>FINDER<span style="font-size:2rem; vertical-align:top;">TM</span></h1>
        <p class="hero-subtitle">
            "A modern algorithm designed to inform, filter, and recommend the best machines for your specific needs."
        </p>
    </div>
</section>

<div class="container">

    <form onsubmit="runAnalysis(event)">
        <div class="control-panel">
            <div class="panel-header">
                <span><i class="fas fa-terminal"></i> SYSTEM_PREFERENCES_CONFIG</span>
                <span>V.2.0</span>
            </div>
            
            <div class="panel-body">
                <div class="brutal-range">
                    <label style="font-family: var(--font-sans); font-weight: bold; display: flex; justify-content: space-between;">
                        <span>PRIORITAS HARGA</span>
                        <span id="text_harga">30%</span>
                    </label>
                    <input type="range" class="live-slider" oninput="updateSlider('text_harga', this.value)" min="0" max="100" value="30">
                </div>

                <div class="brutal-range">
                    <label style="font-family: var(--font-sans); font-weight: bold; display: flex; justify-content: space-between;">
                        <span>PRIORITAS RAM</span>
                        <span id="text_ram">40%</span>
                    </label>
                    <input type="range" class="live-slider" oninput="updateSlider('text_ram', this.value)" min="0" max="100" value="40">
                </div>

                <div class="brutal-range">
                    <label style="font-family: var(--font-sans); font-weight: bold; display: flex; justify-content: space-between;">
                        <span>PRIORITAS BERAT</span>
                        <span id="text_berat">30%</span>
                    </label>
                    <input type="range" class="live-slider" oninput="updateSlider('text_berat', this.value)" min="0" max="100" value="30">
                </div>
            </div>

            <div style="border-top: 1px solid #000; padding: 20px; text-align: right; background: #fafafa;">
                <button type="submit" id="btn-analyze" class="btn-brutal">
                    RUN ANALYSIS <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </form>

    <div id="result-section" style="display: none; margin-top: 50px; opacity: 0; transition: opacity 1s;">
        
        <div style="display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #000;">
            <h2 style="font-size: 2.5rem; margin: 0;">Analysis Results</h2>
            <span style="font-family: var(--font-sans);">[ FOUND 3 ENTRIES ]</span>
        </div>

        <div class="editorial-grid">
            
            <div class="window-card">
                <div class="window-header">
                    <div class="window-dots"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>
                    <span>NO. 001</span>
                </div>
                <div class="window-visual">
                    <i class="fas fa-laptop" style="font-size: 4rem; color: #ccc;"></i>
                    <div style="position: absolute; bottom: 10px; left: 10px; background: #000; color: #fff; padding: 5px 10px; font-family: var(--font-sans); font-size: 0.7rem; font-weight: bold;">
                        HIGHEST SCORE
                    </div>
                </div>
                <div>
                    <span class="meta-tag">EDITOR'S CHOICE | ASUS</span>
                    <h3 class="card-title"><span class="highlight-text">ROG Zephyrus G14</span></h3>
                    <p style="font-family: var(--font-serif); font-size: 0.95rem; color: #444; margin-bottom: 20px;">
                        Unit ini memiliki skor kecocokan <strong>0.9540</strong>. Pilihan tepat untuk budget Rp 23.999.000.
                    </p>
                </div>
                <div class="specs-list">
                    <span><i class="fas fa-memory"></i> 16 GB</span>
                    <span><i class="fas fa-hdd"></i> SSD</span>
                    <span><i class="fas fa-weight-hanging"></i> 1.7 Kg</span>
                </div>
            </div>

            <div class="window-card">
                <div class="window-header">
                    <div class="window-dots"><div class="dot"></div><div class="dot"></div></div>
                    <span>NO. 002</span>
                </div>
                <div class="window-visual">
                    <i class="fas fa-laptop" style="font-size: 4rem; color: #ccc;"></i>
                </div>
                <div>
                    <span class="meta-tag">RECOMMENDED | LENOVO</span>
                    <h3 class="card-title">Legion 5 Pro</h3>
                    <p style="font-family: var(--font-serif); font-size: 0.95rem; color: #444; margin-bottom: 20px;">
                        Unit ini memiliki skor kecocokan <strong>0.8820</strong>. Pilihan tepat untuk budget Rp 18.500.000.
                    </p>
                </div>
                <div class="specs-list">
                    <span><i class="fas fa-memory"></i> 16 GB</span>
                    <span><i class="fas fa-hdd"></i> SSD</span>
                    <span><i class="fas fa-weight-hanging"></i> 2.3 Kg</span>
                </div>
            </div>

             <div class="window-card">
                <div class="window-header">
                    <div class="window-dots"><div class="dot"></div></div>
                    <span>NO. 003</span>
                </div>
                <div class="window-visual">
                    <i class="fas fa-laptop" style="font-size: 4rem; color: #ccc;"></i>
                </div>
                <div>
                    <span class="meta-tag">GOOD VALUE | ACER</span>
                    <h3 class="card-title">Nitro 5</h3>
                    <p style="font-family: var(--font-serif); font-size: 0.95rem; color: #444; margin-bottom: 20px;">
                        Unit ini memiliki skor kecocokan <strong>0.7500</strong>. Pilihan tepat untuk budget Rp 12.000.000.
                    </p>
                </div>
                <div class="specs-list">
                    <span><i class="fas fa-memory"></i> 8 GB</span>
                    <span><i class="fas fa-hdd"></i> SSD</span>
                    <span><i class="fas fa-weight-hanging"></i> 2.2 Kg</span>
                </div>
            </div>

        </div>
    </div>

    <div style="height: 100px;"></div>
</div>

<script>
    function updateSlider(id, val) {
        document.getElementById(id).innerText = val + "%";
    }

    function runAnalysis(e) {
        e.preventDefault();
        
        const btn = document.getElementById('btn-analyze');
        const results = document.getElementById('result-section');
        const originalText = btn.innerHTML;

        btn.innerHTML = 'CALCULATING... <i class="fas fa-spinner fa-spin"></i>';
        btn.disabled = true;
        
        results.style.opacity = '0';
        results.style.display = 'none';

        setTimeout(() => {
            results.style.display = 'block';
            
            void results.offsetWidth; 
            results.style.opacity = '1';

            results.scrollIntoView({ behavior: 'smooth' });

            btn.innerHTML = originalText;
            btn.disabled = false;
        }, 1500);
    }
</script>

<?php include '../templates/footer.php'; ?>