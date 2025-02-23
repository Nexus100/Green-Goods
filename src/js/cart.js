document.addEventListener('DOMContentLoaded', function() {
    let cartCount = 0;
    const cartCounter = document.querySelector('.cart-counter');
    
    // Initialize counter with 0 and make it visible
    cartCounter.textContent = '0';
    cartCounter.style.display = 'flex';

    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const quantityInput = this.closest('.product-card').querySelector('input[type="number"]');
            const quantity = parseInt(quantityInput.value);
            
            cartCount += quantity;
            cartCounter.textContent = cartCount;
        });
    });
});