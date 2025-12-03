<?php include '../templates/header.php'; ?>

<div class="container">
    <div style="border-bottom: 1px solid #000; margin-bottom: 40px; padding-bottom: 20px; display: flex; justify-content: space-between; align-items: flex-end;">
        <div>
            <span style="font-family: var(--font-sans); font-size: 0.8rem; letter-spacing: 2px; text-transform: uppercase; color: #888;">My Collection</span>
            <h1 style="font-family: var(--font-serif); font-size: 2.5rem; margin: 10px 0 0 0;">Wishlist.</h1>
        </div>
        <a href="recommendation.php" class="btn-editorial" style="width: auto; padding: 10px 20px; margin: 0;">
            &larr; Browse More
        </a>
    </div>

    <div class="editorial-grid" id="favorite-grid">
        
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots"><div class="dot"></div><div class="dot"></div></div>
                <span style="font-size: 0.7rem; font-family: monospace;">SAVED_ITEM</span>
            </div>

            <div class="window-visual">
                 <i class="fas fa-heart" style="font-size: 3rem; color: #000;"></i>
            </div>

            <div style="flex-grow: 1; display: flex; flex-direction: column;">
                <span class="meta-tag">APPLE</span>
                <h3 class="card-title">MacBook Pro M1</h3>
                
                <div class="specs-list" style="margin-top: auto; border-top: 1px solid #eee; padding-top: 15px; margin-bottom: 15px;">
                    <span><i class="fas fa-memory"></i> 8 GB</span>
                    <span class="table-price">Rp 19.000.000</span>
                </div>

                <button class="btn-remove-card" onclick="removeCard(this)" style="background:none; border:1px solid red; color:red; padding:10px; cursor:pointer; width:100%; text-align:center;">
                    <i class="fas fa-times"></i> Remove Item
                </button>
            </div>
        </div>

        <div class="window-card">
            <div class="window-header">
                <div class="window-dots"><div class="dot"></div><div class="dot"></div></div>
                <span style="font-size: 0.7rem; font-family: monospace;">SAVED_ITEM</span>
            </div>

            <div class="window-visual">
                 <i class="fas fa-heart" style="font-size: 3rem; color: #000;"></i>
            </div>

            <div style="flex-grow: 1; display: flex; flex-direction: column;">
                <span class="meta-tag">HP</span>
                <h3 class="card-title">Omen 15</h3>
                
                <div class="specs-list" style="margin-top: auto; border-top: 1px solid #eee; padding-top: 15px; margin-bottom: 15px;">
                    <span><i class="fas fa-memory"></i> 16 GB</span>
                    <span class="table-price">Rp 16.500.000</span>
                </div>

                <button class="btn-remove-card" onclick="removeCard(this)" style="background:none; border:1px solid red; color:red; padding:10px; cursor:pointer; width:100%; text-align:center;">
                    <i class="fas fa-times"></i> Remove Item
                </button>
            </div>
        </div>

        <div id="empty-msg" style="display:none; grid-column: 1 / -1; text-align: center; padding: 60px; border: 1px dashed #ccc; background: #fafafa;">
            <i class="far fa-folder-open" style="font-size: 3rem; color: #ccc; margin-bottom: 20px;"></i>
            <h3 style="font-family: var(--font-serif);">Your collection is empty.</h3>
            <p style="color: #888;">Start exploring and save your favorite machines here.</p>
            <a href="recommendation.php" style="text-decoration: underline; font-weight: bold; color: #000;">Go to Recommendation</a>
        </div>

    </div>
    
    <div style="height: 100px;"></div>
</div>

<script>
    function removeCard(btn) {
        if(confirm("Hapus laptop ini dari koleksi favorit Anda?")) {
            const card = btn.closest('.window-card');
            
            card.style.transition = "all 0.5s ease";
            card.style.opacity = "0";
            card.style.transform = "scale(0.9)";
            
            setTimeout(() => {
                card.remove();
                checkEmpty();
            }, 500);
        }
    }

    function checkEmpty() {
        const grid = document.getElementById('favorite-grid');
        const cards = grid.querySelectorAll('.window-card');
        const msg = document.getElementById('empty-msg');

        if(cards.length === 0) {
            msg.style.display = 'block';
        }
    }
</script>

<?php include '../templates/footer.php'; ?>