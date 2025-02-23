document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.checkbox-list input[type="checkbox"]');
    const products = document.querySelectorAll('.product-card');

    function filterProducts() {
        const selectedBrands = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.parentElement.textContent.trim());

        products.forEach(product => {
            const productTitle = product.querySelector('h3').textContent;
            if (selectedBrands.length === 0) {
                product.style.display = 'block';
            } else {
                const shouldShow = selectedBrands.some(brand => productTitle.includes(brand));
                product.style.display = shouldShow ? 'block' : 'none';
            }
        });
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });
});